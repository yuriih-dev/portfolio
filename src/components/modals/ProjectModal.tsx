import React from 'react';
import { ModalProps, useModal } from '.';
import ArrowIcon from '../Icons/ArrowIcon';

const ProjectModal = ({ show, data }: ModalProps) => {
  const { closeModal } = useModal();

  if (!show) return null;

  return (
    <div className="h-screen w-screen max-w-[600px] p-4 md:p-10">
      <div className="custom-scroll-bar vertical relative flex h-full items-center justify-center overflow-auto bg-navy-dark p-16 md:p-20">
        <div className="flex w-full flex-col gap-20">
          <h3 className="text-4xl">/{data.title}</h3>
          <div className="flex flex-col gap-10">
            test
          </div>
          <div className="relative h-12 w-full border-2 border-secondary-dark p-2 pr-14">
            <input
              className="h-full w-full bg-transparent focus:outline-0"
              type="email"
              placeholder={data.inputPlaceholder}
            />
            <div className="absolute right-0 top-0 flex h-11 w-12 items-center justify-center bg-primary">
              <ArrowIcon />
            </div>
          </div>
        </div>
        <span
          onClick={() => closeModal()}
          className="custom-close-btn group absolute top-2 right-2 z-10 h-12 w-12 cursor-pointer rounded-full border-2 border-secondary-dark md:top-6 md:right-6"
        >
          Close
          <span className="absolute top-2/4 left-2/4 h-4 w-0.5 bg-secondary-dark group-hover:bg-primary" />
          <span className="absolute top-2/4 left-2/4 h-4 w-0.5 bg-secondary-dark group-hover:bg-primary" />
        </span>
      </div>
    </div>
  );
};

export default ProjectModal;
