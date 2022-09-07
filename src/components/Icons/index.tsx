import { SerializedStyles, css } from '@emotion/react';

import React from 'react';
import SVGIcon from '../SVGIcon';

interface Props {
  extraCss?: SerializedStyles | SerializedStyles[];
}
export * from './LoadingIcon';
export function AddCircleOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#add-circle-outline"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function AddIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#add"
      className="icon"
      extraCss={[
        css`
          width: 14px;
          height: 14px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function AddOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#add-outline"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function AppleIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#apple"
      className="icon"
      extraCss={[
        css`
          width: 9px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowBackIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-back"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowBackOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-back-outline"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowDownIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-down"
      className="icon"
      extraCss={[
        css`
          width: 14px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowDownOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-down-outline"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowNextIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-next"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ArrowRightIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#arrow-right"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CancelIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#cancel"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CancelOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#cancel-outline"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CheckmarkIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#checkmark"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 8px;
          fill: white;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CheckmarkOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#checkmark-outline"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 12px;
          fill: white;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CheckCircleOutline({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#check-circle-outline"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
          fill: white;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CloseIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#close"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function CopyIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#copy"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function DeleteIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#delete"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function DollarIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#dollar"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function DownloadIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#download"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 13px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function EditIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#edit"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function EraseIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#erase"
      className="icon"
      extraCss={[
        css`
          width: 9px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ExpandIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#expand"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function FacebookIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#facebook"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function FavoriteIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#favorite"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function FavoriteFilledIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#favorite-filled"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function FiltersIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#filters"
      className="icon"
      extraCss={[
        css`
          width: 14px;
          height: 13px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function GoogleIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#google"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function GraphIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#graph"
      className="icon"
      extraCss={[
        css`
          width: 12px;
          height: 12px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function HamburgerIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#hamburger"
      className="icon"
      extraCss={[
        css`
          width: 20px;
          height: 12px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function HelpIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#help"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function InfoIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#info"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function LinkIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#link"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 11px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MailIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#mail"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 13px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MailOutlinedIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#mail-outlined"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MiceIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#mic"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MinimizeIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#minimize"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MinusIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#minus"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MinusOutlineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#minus-outline"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function MovingIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#moving"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function PauseIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#pause"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function PlayIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#play"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
          padding-left: 2px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function PlusIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#plus"
      className="icon"
      extraCss={[
        css`
          width: 11px;
          height: 11px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ProfileIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#profile"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function RecordIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#record"
      className="icon"
      extraCss={[
        css`
          width: 13px;
          height: 20px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function RedoIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#redo"
      className="icon"
      extraCss={[
        css`
          width: 15px;
          height: 14px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function RefineIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#refine"
      className="icon"
      extraCss={[
        css`
          width: 9px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function RefreshIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#refresh"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function RemixIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#remix"
      className="icon"
      extraCss={[
        css`
          width: 8px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ReportOutlinedIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#report-outlined"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function SearchIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#search"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function SoundsIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#sounds"
      className="icon"
      extraCss={[
        css`
          width: 13px;
          height: 13px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function SpinIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#spin"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
          animation: spin 1s linear infinite;

          @keyframes spin {
            from {
              transform: rotate(0deg);
            }
            to {
              transform: rotate(360deg);
            }
          }
        `
      ].concat(extraCss!)}
    />
  );
}

export function StopIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#stop"
      className="icon"
      extraCss={[
        css`
          width: 10px;
          height: 10px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function TimeIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#time"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function TimesIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#close"
      className="icon"
      extraCss={[
        css`
          width: 18px;
          height: 18px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function ThumbsUpIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#thumbsup"
      className="icon"
      extraCss={[
        css`
          width: 14px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function VideoIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#video"
      className="icon"
      extraCss={[
        css`
          width: 13px;
          height: 9px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function VideoStrikeIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#video-strike"
      className="icon"
      extraCss={[
        css`
          width: 12px;
          height: 11px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function VoicesIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#voices"
      className="icon"
      extraCss={[
        css`
          width: 14px;
          height: 15px;
        `
      ].concat(extraCss!)}
    />
  );
}

export function VolumeIcon({ extraCss }: Props) {
  return (
    <SVGIcon
      icon="#volume"
      className="icon"
      extraCss={[
        css`
          width: 16px;
          height: 16px;
        `
      ].concat(extraCss!)}
    />
  );
}
