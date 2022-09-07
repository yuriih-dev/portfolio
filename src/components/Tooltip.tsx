import React, { HTMLAttributes, useEffect, useRef } from 'react';
import { renderToStaticMarkup } from 'react-dom/server';

interface Props extends HTMLAttributes<HTMLElement> {
  content?: string | JSX.Element | (() => JSX.Element);
}

export default function Tooltip({ content, children, ...rest }: Props) {
  const tooltipRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const element: HTMLDivElement = tooltipRef.current!;
    const appendToolTip = () => {
      const rect = element.getBoundingClientRect();
      const tooltipContainerId = '__tooltip-container';
      let toolTipContainer = document.getElementById(tooltipContainerId);
      if (toolTipContainer === null && content) {
        toolTipContainer = document.createElement('div');
        toolTipContainer.setAttribute('id', tooltipContainerId);
        toolTipContainer.style.cssText = `
        position: absolute;
        top: ${rect.bottom + 10}px;
        color: white;
        font-size: 14px;
        z-index: 10001;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 10px;
        background-color: #232E21;
        border-radius: 6px;
        height: 28px;
        box-shadow: 0 0 8px 4px #0000078;
        transform-origin: top center;
        transform: scale(0);
      `;

        const tail = document.createElement('div');

        tail.style.cssText = `
          position: absolute;
          top: -5px;
          z-index: -1;
          background-color: #232E21;
          border-radius: 2px;
          height: 18px;
          width: 18px;
          transform: rotate(45deg);
          border-radius: 2px;
        `;
        if (typeof content === 'string') {
          toolTipContainer.innerHTML = 'content';
        } else if (typeof content === 'function') {
          toolTipContainer.innerHTML = renderToStaticMarkup(content());
        } else {
          toolTipContainer.innerHTML = renderToStaticMarkup(content);
        }
        toolTipContainer.prepend(tail);
        document.body.appendChild(toolTipContainer);

        setTimeout(() => {
          if (toolTipContainer) {
            toolTipContainer.style.cssText =
              toolTipContainer.style.cssText +
              `
            left: ${rect.left + rect.width / 2 - toolTipContainer.clientWidth / 2}px;
            transform: scale(1);
            transition-delay: 500ms;
            transition: all 200ms ease-out;
          `;
          }
        }, 10);

        function removeTooltip() {
          toolTipContainer?.remove();
          element.removeEventListener('mouseleave', removeTooltip);
        }

        element.addEventListener('mouseleave', removeTooltip);
      }
    };

    element.addEventListener('mouseenter', appendToolTip);

    return () => {
      element.removeEventListener('mouseenter', appendToolTip);
    };
  }, []);

  return (
    <div ref={tooltipRef} {...rest}>
      {children}
    </div>
  );
}
