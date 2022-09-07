import React, { Fragment, useEffect, useState } from 'react';
import { getProducts } from '../../api';
import { Product, ProductItem } from '../../components/ProductItem';
import { Pagination } from '../../components/Pagination';
import DefaultLayout from '../../layouts/DefaultLayout';
import LoadingIcon from '../../components/Icons/LoadingIcon';
import Banner from '../../components/Sections/Banner';

const LIMIT_PER_PAGE: number = 9;

export default function RecipesPage() {
  const [loading, setLoading] = useState(false);
  const [products, setProducts] = useState<Array<Product>>([]);
  const [currentPage, setCurrentPage] = useState<number>(1);

  useEffect(() => {
    setLoading(true);
    getProducts().then((res: { success: boolean; products: Array<Product> }) => {
      if (res.success) {
        setProducts(res.products);
      }
      setLoading(false);
    });
  }, []);

  const getPaginatedData = (): Array<Product> => {
    const startIndex = currentPage * LIMIT_PER_PAGE - LIMIT_PER_PAGE;
    const endIndex = startIndex + LIMIT_PER_PAGE;
    return products.slice(startIndex, endIndex);
  };

  const handlePaginate = (page: number): void => {
    setCurrentPage(page);
  };

  return (
    <DefaultLayout>
      <Banner title="Product List" />
      <div className="container">
        <div className={'flex-center flex-column'}>
          {loading ? (
            <LoadingIcon />
          ) : (
            <Fragment>
              <div className="row">
                {getPaginatedData().map((product: Product, index) => (
                  <div className="col-lx-4 col-lg-6" key={index.toString()}>
                    <ProductItem product={product} />
                  </div>
                ))}
              </div>
              <Pagination onPaginate={handlePaginate} totalPage={Math.ceil(products.length / LIMIT_PER_PAGE)} />
            </Fragment>
          )}
        </div>
      </div>
    </DefaultLayout>
  );
}
