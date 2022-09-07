/** @jsx jsx */
import { jsx } from '@emotion/react';
import { useState } from 'react';
import ResizableRect from 'react-resizable-rotatable-draggable';

export default function Resizer() {
  const [state, setState] = useState({
    width: 300,
    height: 300,
    top: 200,
    left: 200,
    rotateAngle: 0
  });

  const handleResize = (style) => {
    // type is a string and it shows which resize-handler you clicked
    // e.g. if you clicked top-right handler, then type is 'tr'
    let { top, left, width, height } = style;
    top = Math.round(top);
    left = Math.round(left);
    width = Math.round(width);
    height = Math.round(height);
    setState({
      ...state,
      top,
      left,
      width,
      height
    });
  };

  const handleRotate = (rotateAngle) => {
    setState({
      ...state,
      rotateAngle
    });
  };

  const handleDrag = (deltaX, deltaY) => {
    setState({
      ...state,
      left: state.left + deltaX,
      top: state.top + deltaY
    });
  };

  const { width, top, left, height, rotateAngle } = state;
  return (
    <div className="App">
      <ResizableRect
        left={left}
        top={top}
        width={width}
        height={height}
        rotateAngle={rotateAngle}
        // aspectRatio={false}
        // minWidth={10}
        // minHeight={10}
        zoomable="n, w, s, e, nw, ne, se, sw"
        // rotatable={true}
        // onRotateStart={this.handleRotateStart}
        onRotate={handleRotate}
        // onRotateEnd={this.handleRotateEnd}
        // onResizeStart={this.handleResizeStart}
        onResize={handleResize}
        // onResizeEnd={this.handleUp}
        // onDragStart={this.handleDragStart}
        onDrag={handleDrag}
        // onDragEnd={this.handleDragEnd}
      />
    </div>
  );
}
