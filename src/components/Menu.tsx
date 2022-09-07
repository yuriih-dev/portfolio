/** @jsx jsx */
import { jsx } from '@emotion/react';
import theme from '../styles/theme';

import { ArrowBackIcon, ArrowDownIcon, ArrowNextIcon, CheckmarkIcon } from './Icons';
import { Fragment, MouseEvent, useEffect, useState } from 'react';

import DropDown from './DropDown';
import { Link, useLocation } from 'react-router-dom';
import { css } from '@emotion/react';
import { useScreen } from '../utils/hooks';
import { useNavigate } from 'react-router-dom';

interface MenuItemType {
  name: string
  path?: string
  icon?: JSX.Element
  list?: MenuItemType[]
  shallow?: boolean
  show?: boolean
}

interface MenuItemProps extends MenuItemType {
  activeMenu?: string;
  menuClick: (name: string | undefined) => void;
}

interface MenuLinkProps {
  link: MenuItemType;
  onClick?: (link?: MenuItemType) => void;
}

export const MenuLink = ({ link, onClick }: MenuLinkProps) => {
  const { isMobile, isDesktop } = useScreen();
  const [isActivePath, setIsActivePath] = useState<boolean>(false);
  const router = useLocation();

  useEffect(() => {
    setIsActivePath(router.pathname === link.path);
  }, [link.path, router.pathname]);

  const handleClick = (e: MouseEvent) => {
    if (typeof onClick === 'function') {
      e.stopPropagation();
      e.preventDefault();
      onClick(link);
    }
  };

  return (
    <Link to={link.path || '/'}>
      <li css={styles.menuLink} onClick={handleClick}>
        {link.icon}
        <span className="menu-item-title">{link.name}</span>
        <div hidden={isDesktop} className="next-icon-wrap">
          <ArrowNextIcon />
        </div>
        {isActivePath && (
          <div hidden={isMobile} className="checkmark-icon-wrap">
            <CheckmarkIcon />
          </div>
        )}
      </li>
    </Link>
  );
};

export const MenuItemList = ({ list }: { list: MenuItemType[] }) => {
  return (
    <Fragment>
      {list.map((menuItem, index) => (
        <MenuLink link={menuItem} key={index.toString()} />
      ))}
    </Fragment>
  );
};

export const MenuItem = ({ name, icon, path, list, activeMenu, menuClick, show = true }: MenuItemProps) => {
  const { isDesktop } = useScreen();
  const navigate = useNavigate();

  const toggleMenu = () => {
    if (path) {
      navigate(path);
    } else {
      if (activeMenu) {
        removeActiveMenu();
      } else {
        setActiveMenu();
      }
    }
  };

  const setActiveMenu = () => {
    menuClick(name);
  };

  const removeActiveMenu = () => {
    menuClick(undefined);
  };

  if(!show){
    return null
  }

  if (list) {
    return (
      <DropDown
        css={styles.menuItem}
        align="right"
        header={(open) => {
          return (
            <div onClick={toggleMenu} className="flex-center">
              <span className="menu-title">{name}</span>
              <div data-open={open} className="next-icon-wrap header">
                <ArrowDownIcon />
              </div>
            </div>
          );
        }}
        list={
          <Fragment>
            <div className="menu-title-wrap" hidden={isDesktop} onClick={removeActiveMenu}>
              <div className="icon-back-wrap">
                <ArrowBackIcon />
              </div>
              {icon}
              <span className="menu-title">{name}</span>
            </div>
            <div className="py-1">
              <MenuItemList list={list} />
            </div>
          </Fragment>
        }
      />
    );
  }

  return (
    <div onClick={toggleMenu} className="flex-center">
      <span className="menu-title" style={{ cursor: 'pointer' }}>
        {name}
      </span>
    </div>
  );
};

interface MenuProps {
  menu: Array<MenuItemType>;
  activeMenu?: string;
  menuClick: (name: string | undefined) => void;
}

export const Menu = ({ menu = [], activeMenu, menuClick }: MenuProps) => {
  return (
    <Fragment>
      {menu.map((item, index) => (
        <MenuItem {...item} key={index.toString()} activeMenu={activeMenu} menuClick={menuClick} />
      ))}
    </Fragment>
  );
};
export default Menu;

const styles = {
  menuItem: css`
    .menu-title-wrap {
      ${theme.MOBILE_MEDIA_QUERY} {
        display: flex;
        width: 100%;
        padding: 5px 8%;
        align-items: center;
        position: relative;
        z-index: 3;

        .icon {
          color: white;
          stroke: white;
          fill: white;
        }
      }

      .menu-title {
        color: black;
        font-weight: 400;
        align-items: center;
        cursor: pointer;

        &:hover {
          color: rgba(0, 0, 0, 0.4);
        }

        ${theme.MOBILE_MEDIA_QUERY} {
          margin-left: 10px;
          color: white;
          line-height: 40px;
        }
      }
    }

    .next-icon-wrap {
      margin-left: auto;

      ${theme.MOBILE_MEDIA_QUERY} {
        &.header {
          transform: rotate(-90deg);
        }

        .icon {
          stroke: ${theme.colors.primaryLight};
          color: ${theme.colors.primaryLight};
          fill: ${theme.colors.primaryLight};
        }
      }

      ${theme.MIN_MOBILE_MEDIA_QUERY} {
        margin-left: 5px;
        transform: rotate(0deg);
        transition: transform 0.3s ${theme.styles.transitionEasing};

        &[data-open='true'] {
          transform: rotate(180deg);
          transition: transform 0.3s ${theme.styles.transitionEasing};
        }
      }
    }

    .menu-title-wrap {
      margin-bottom: 10px;

      .icon,
      .menu-title {
        color: ${theme.colors.yellow} !important;
        stroke: ${theme.colors.yellow};
        fill: ${theme.colors.yellow};
        font-weight: bold;
        cursor: pointer;
      }

      .icon-back-wrap {
        margin-right: 10px;

        .icon {
          width: 13px;
          height: 12px;
          stroke: ${theme.colors.primaryLight};
          color: ${theme.colors.primaryLight};
          fill: ${theme.colors.primaryLight};
        }
      }
    }
  `,
  menuLink: css`
    list-style: none;
    line-height: 25px;
    text-align: left;
    color: black;
    padding-left: 20px;
    display: flex;
    align-items: center;

    &:hover {
      background-color: #f7f6f3;
    }

    ${theme.MOBILE_MEDIA_QUERY} {
      display: flex;
      align-items: center;
      padding: 8px 8%;
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 14px;
        height: 14px;
      }
    }

    .menu-item-title {
      padding-left: 8px;
    }

    .checkmark-icon-wrap {
      background: ${theme.colors.primary};
      width: 18px;
      height: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 100px;
      transform: translateY(-50%);
      margin-right: 12px;
      margin-left: auto;
      margin-top: 20px;
    }
  `,
  dropdownHeader: css`
    ${theme.MOBILE_MEDIA_QUERY} {
      height: 44px;
      border-radius: 0;
    }
  `
};
