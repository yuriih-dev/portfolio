import React from 'react';
import Loading from 'components/Loading';
import loadable from 'utils/loadable';


export const HomePage = loadable(()=>import('pages/Home'),{
    fallback: <Loading/>
})
