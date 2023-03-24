/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import DefaultLayout from '../layouts/DefaultLayout';
import Hero from '../components/Sections/Hero';
import Projects from '../components/projects';
import Skills from '../components/Sections/Skills';
import AboutMe from '../components/Sections/AboutMe';
import ContactForm from 'src/components/Sections/ContactForm';

export const HomePage = () => {
  return (
    <DefaultLayout>
      <div css={styles}>
        <Hero />
        <Projects />
        <AboutMe />
        <Skills />
        <ContactForm />
      </div>
    </DefaultLayout>
  );
};

export default HomePage;

const styles = css`
  .hero {
    width: 100%;
    position: relative;
  }
`;
