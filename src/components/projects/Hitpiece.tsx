import React from 'react';
import AspectView from '../elements/AspectView';

import hitpieceImag from '../../assets/images/projects/hitpiece.png';

export default function Hitpiece() {
  return (
    <a className="project-item" href="https://hitpiece.com" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={hitpieceImag} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Hitpiece</h3>
        <p className="text-blue">NFT marketplace</p>
        <div className="description">
          Music NFT market place where artists can create NFTs with their music and users can buy the NFTs they likes, resale them in this plateform or other NFT market plateforms
          like Opensea.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Next.js</span>
          <span className="badge badge-green">Serverless</span>
          <span className="badge badge-green">Express</span>
          <span className="badge badge-green">AWS</span>
          <span className="badge badge-green">Hasura</span>
          <span className="badge badge-green">GraphQL</span>
          <span className="badge badge-green">PostgreSQL</span>
          <span className="badge badge-green">Web3.js</span>
        </div>
      </div>
    </a>
  );
}
