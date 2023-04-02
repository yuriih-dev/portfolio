import React from 'react'
import { Transition } from '@headlessui/react';
import { ModalTypes, useModal } from '.';
import ProjectModal from './ProjectModal';
import classNames from 'classnames'; 

const Modals = () => {
  const { type, data, bgBlur, position, closeModal } = useModal();

  return (
    <Transition
      appear={true}
      show={type !== null}
      enter={classNames(
        'ease-in-out duration-500 transform',
        position === 'center' ? 'transition-opacity' : 'transition'
      )}
      enterFrom={position === 'center' ? 'opacity-0' : 'translate-x-full'}
      enterTo={position === 'center' ? 'opacity-100' : 'translate-x-0'}
      leave={classNames(
        'ease-in-out duration-500 transform',
        position === 'center' ? 'transition-opacity' : 'transition'
      )}
      leaveFrom={position === 'center' ? 'opacity-100' : 'translate-x-0'}
      leaveTo={position === 'center' ? 'opacity-0' : 'translate-x-full'}
      className={classNames(
        'fixed top-0 left-0 z-50 flex h-full w-full items-center justify-end',
        { 'justify-center': position === 'center' },
        { 'pointer-events-none': type === null }
      )}
    >
      {data?.containerBg ? (
        <div
          style={{
            ['--container-bg' as any]: `url(${data?.containerBg})`,
          }}
          className="absolute left-0 top-0 h-full w-full bg-navy-semi bg-[image:var(--container-bg)] bg-cover bg-center bg-no-repeat"
          onClick={closeModal}
        >
          <div className="h-full w-full bg-navy-semi opacity-50" />
        </div>
      ) : (
        <div
          className={classNames('absolute left-0 top-0 h-full w-full', {
            'backdrop-blur-lg transition-colors': bgBlur,
          })}
          onClick={closeModal}
        />
      )}
      <div className="relative z-10">
        <ProjectModal show={type === ModalTypes.REGISTER} data={data ?? {}} /> 
      </div>
    </Transition>
  );
};

export default Modals;
