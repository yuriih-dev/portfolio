/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import Slider from 'react-slick';
import { useScreen } from '../../utils/hooks';

export default function Logos() {
  const { width } = useScreen();

  const slidesToShow = Math.floor(width / 180);

  const settings = {
    dots: false,
    slidesToShow: slidesToShow || 1,
    rows: 1,
    autoplay: true,
    swipeToSlide: true
  };

  return (
    <div css={styles} className="container">
      <Slider {...settings}>
        <div className="carousel-item">
          <img src="https://logos-download.com/wp-content/uploads/2016/09/Laravel_logo_wordmark_logotype.png" alt="Laravel" />
        </div>
        <div className="carousel-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR98XgXjcVoNF10HDNuqn2o4j1mFvw0Jf8-Txyn3akuaDRBGvLImU41Jx4xT2D7Ec0polY&usqp=CAU" alt="Vue" />
        </div>
        <div className="carousel-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMv2Eab1OyFy0ClwkCmRnRXol-oxUtV7W-9YBLjS9t6zwot9O81eCTJlsuHgyTcwIi7vg&usqp=CAU" alt="React" />
        </div>
        <div className="carousel-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Node.js_logo_2015.svg/2560px-Node.js_logo_2015.svg.png" alt="Node" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/apollo.png" alt="Node" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/firebase.png" alt="Firebase" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/amazon.png" alt="Amazon Web Service" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/gcp.png" alt="Google Cloud Service" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/mongo.png" alt="MongoDB" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/android.png" alt="MongoDB" />
        </div>
        <div className="carousel-item">
          <img src="/images/logos/swift.png" alt="MongoDB" />
        </div>
      </Slider>
    </div>
  );
}

const styles = css`
  width: 96%;

  .carousel-item {
    padding: 10%;
    display: flex;
    justify-content: center;
    width: 100%;
    height: 100%;

    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      margin: auto;
    }
  }
`;
