/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import ReactMarkdown from 'react-markdown';
import remarkGfm from 'remark-gfm';
import SyntaxHighlighter from 'react-syntax-highlighter';
import useFileLoader from '../../utils/hooks/useFileContent';
import { darcula } from 'react-syntax-highlighter/dist/esm/styles/hljs';
import theme from '../../styles/theme';
import Logo from '../../components/Logo';
import DefaultLayout from '../../layouts/DefaultLayout';
import { menu } from '../../data/menu';
import { ArrowNextIcon } from '../../components/Icons';
import { useEffect, useState } from 'react';
import { Loading } from '../../components/elements';
import { useParams, useNavigate } from 'react-router-dom';

export interface ListItemType {
  title: string;
  url?: string;
  list?: ListItemType[];
}

function ListItem({ item, handleMenuItemClick, url }: { item: ListItemType; handleMenuItemClick: (url: string) => void; url: string }) {
  const [open, setOpen] = useState(false);
  const navigate = useNavigate();

  useEffect(() => {
    function checkOpen(_item: ListItemType): boolean {
      if (_item.url) {
        return _item.url === url;
      }
      if (_item.list) {
        for (const u of _item.list) {
          if (checkOpen(u)) {
            return checkOpen(u);
          }
        }
      }
      return false;
    }
    setOpen(checkOpen(item));
  }, [url, item]);

  const handleItemClick = () => {
    if (item.url) {
      navigate('/docs/' + encodeURIComponent(item.url));
    } else {
      setOpen((prevState) => !prevState);
    }
  };

  return (
    <div className="list-item">
      <div className="menu-item" onClick={handleItemClick} data-open={open} data-active={url === item.url}>
        {item.list ? <strong>{item.title}</strong> : <span>{item.title}</span>}
        {item.list && <ArrowNextIcon />}
      </div>
      <div className="menu-list" data-open={open}>
        {item.list?.map((t, i) => (
          <ListItem item={t} url={url} key={i.toString()} handleMenuItemClick={handleMenuItemClick} />
        ))}
      </div>
    </div>
  );
}

export default function DocsPage() {
  const [url, setUrl] = useState<string>('/docs/README.md');
  const { content, loading } = useFileLoader({ url });
  const params = useParams();

  useEffect(() => {
    if (params.url) {
      setUrl(decodeURIComponent(params.url));
    }
  }, [params]);

  const handleMenuItemClick = (url: string) => {
    setUrl(url);
  };

  return (
    <DefaultLayout header={false}>
      <div css={styles}>
        <div className="side-bar">
          <div className="flex-center py-2 position-sticky bg-white" style={{ zIndex: 1 }}>
            <Logo />
          </div>
          <div className="py-2">
            {menu.map((menuItem, index) => (
              <ListItem key={index.toString()} url={url} item={menuItem} handleMenuItemClick={handleMenuItemClick} />
            ))}
          </div>
        </div>
        <div className="content">
          <div className="container">
            <div className="doc-page">
              {loading ? (
                <Loading />
              ) : (
                <ReactMarkdown
                  children={content}
                  components={{
                    code({ node, inline, className, children, ...props }) {
                      const match = /language-(\w+)/.exec(className || '');
                      return !inline && match ? (
                        <SyntaxHighlighter children={String(children).replace(/\n$/, '')} language={match[1]} style={darcula} />
                      ) : (
                        <code className={className} {...props}>
                          {children}
                        </code>
                      );
                    }
                  }}
                  remarkPlugins={[remarkGfm]}
                />
              )}
            </div>
          </div>
        </div>
      </div>
    </DefaultLayout>
  );
}

const styles = css`
  .side-bar {
    position: fixed;
    left: 0;
    width: 320px;
    background-color: white;
    height: 100vh;
    top: 18px;
    border-right: ${theme.styles.border};
    overflow-y: auto;
    padding-bottom: 200px;

    &::-webkit-scrollbar {
      width: 1px;
    }

    &::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    &::-webkit-scrollbar-thumb {
      background: #888;
    }

    &::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .list-item {
      width: 100%;

      .menu-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-left: ${theme.spacing[1]}px;
        padding-left: ${theme.spacing[1]}px;
        margin-right: ${theme.spacing[1]}px;
        padding-right: ${theme.spacing[1]}px;
        border-radius: ${theme.styles.borderRadius};
        line-height: 40px;

        &:hover {
          color: ${theme.colors.primary};
          cursor: pointer;
          background-color: ${theme.colors.lightGray};

          .icon {
            fill: ${theme.colors.primary};
          }
        }

        .icon {
          width: 14px;
          height: 14px;
        }

        &[data-active='true'] {
          background-color: ${theme.colors.primaryLight};
          color: white;
        }

        &[data-open='true'] {
          .icon {
            transform: rotate(90deg);
          }
        }
      }

      .menu-list {
        padding-left: 20px;
        height: 0;
        overflow: hidden;

        &[data-open='true'] {
          height: 100%;
        }
      }
    }
  }

  .content {
    width: 100%;
    padding-left: 320px;

    .doc-page {
      padding-top: 20px;
      min-height: 80vh;
      width: 100%;
    }
  }
`;
