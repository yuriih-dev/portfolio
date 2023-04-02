import React, { useState } from 'react';
import { createContext, ReactNode, useContext } from 'react';
import Modals from './Modals';

export enum ModalTypes {
  REGISTER = 'modal_project', 
}

export type ModalPosition = 'right' | 'center';

export interface ModalData {
  [key: string]: any;
}

export interface ModalProps {
  show: boolean;
  data: ModalData;
}

interface Context {
  type: ModalTypes | null;
  data: ModalData | null;
  bgBlur: boolean;
  position: ModalPosition;
  openModal: (
    type: ModalTypes,
    data?: ModalData,
    bgBlur?: boolean,
    position?: ModalPosition
  ) => void;
  closeModal: () => void;
}

const ModalContext = createContext<Context>({
  type: null,
  data: null,
  bgBlur: true,
  position: 'right',
  openModal: () => console.log('open modal'),
  closeModal: () => console.log('close modal'),
});

export const useModal = () => useContext(ModalContext);

const ModalProvider = ({ children }: { children: ReactNode }) => {
  const [type, setType] = useState<ModalTypes | null>(null);
  const [data, setData] = useState<ModalData | null>(null);
  const [bgBlur, setBgBlur] = useState<boolean>(true);
  const [position, setPosition] = useState<ModalPosition>('right');

  const openModal = (
    type: ModalTypes,
    data?: ModalData,
    bgBlur: boolean = true,
    position: ModalPosition = 'right'
  ) => {
    setType(type);
    if (data) {
      setData(data);
    }
    setBgBlur(bgBlur);
    setPosition(position);
  };

  const closeModal = () => {
    setType(null);
    setData(null);
    setBgBlur(true);
  };

  return (
    <ModalContext.Provider
      value={{ type, data, bgBlur, position, openModal, closeModal }}
    >
      {children}
      <Modals />
    </ModalContext.Provider>
  );
};

export default ModalProvider;
