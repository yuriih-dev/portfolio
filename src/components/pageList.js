import React from 'react';
import Loading from 'components/Loading';
import loadable from 'utils/loadable';


export const HomePage = loadable(()=>import('pages/Home'),{
    fallback: <Loading/>
})

export const AboutUsPage = loadable(()=>import('pages/AboutUs'),{
    fallback: <Loading/>
})

export const VideDetailPage = loadable(()=>import('pages/VideoDetail'),{
    fallback: <Loading/>
})
