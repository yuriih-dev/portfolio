/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import Slider from "react-slick";
import { useScreen } from "../../utils/hooks";
import Rating from "react-rating";
import StarIcon from "../Icons/StarIcon";

const testimonials = [
  {
    photo: '',
    name: '',
    title: '',
    description: '',
    review: 5,
  },
  {
    photo: '',
    name: '',
    title: '',
    description: '',
    review: 5,
  },
  {
    photo: '',
    name: '',
    title: '',
    description: '',
    review: 5,
  }
]

export default function Testimonials() {

  const { width } = useScreen();

  const slidesToShow = Math.floor(width / 800);

  const settings = {
    dots: false,
    slidesToShow: slidesToShow || 1,
    rows: 1,
    autoplay: true,
    swipeToSlide: true
  };

  return <div css={styles} className="container">
    <Slider {...settings}>
      {
        testimonials.map((item, index)=>(
          <div className="carousel-item">
            <img src={item.photo} alt={item.name} />
            <Rating
              initialRating={item.review}
              readonly={true}
              {...{
                fullSymbol: <StarIcon color="gold" />
              }}
            />
          </div>
        ))
      }
    </Slider>
  </div>;
}

const styles = css`
  width: 96%;
  margin: auto;
`;
