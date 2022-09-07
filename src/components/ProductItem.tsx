import React from 'react';

export interface Product {
  title: string;
  images: Array<string>;
  description: String;
  price: number;
  tags: Array<string>;
}

export const ProductItem = (props: { product: Product }) => {
  const { product } = props;
  return (
    <div className="card bg-white">
      <img className="w-100" src={product.images[0]} alt="Size 720x400" />
      <div>
        <div className={'flex-wrap'}>
          {product.tags.map((tag, index) => {
            return (
              <span className="badge badge-green" key={index.toString()}>
                {tag}
              </span>
            );
          })}
        </div>
        <h6>{product.title}</h6>
        <h5 className={'text-red'}>${product.price}</h5>
        <p className="leading-relaxed text-base overflow-ellipsis overflow-hidden truncate-3-lines ">{product.description}</p>
      </div>
    </div>
  );
};
