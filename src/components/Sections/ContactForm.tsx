/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import { useState } from 'react';
import Input from '../Input';
import { InputOnChangeProps } from '../../types';
import theme from '../../styles/theme';
import Button from '../Button';
import SocialGroup from '../elements/SocialGroup';

const initialState = {
  firstName: '',
  lastName: '',
  email: '',
  phoneNumber: '',
  subject: '',
  message: ''
};

export default function ContactForm() {
  const [state, setState] = useState(initialState);
  const [submitting, setSubmitting] = useState(false);

  const handleChange = ({ name, value }: InputOnChangeProps) => {
    setState({ ...state, [name!]: value });
  };

  const handleSubmit = () => {
    setSubmitting(true);
    setTimeout(() => {
      setSubmitting(false);
    }, 1500);
  };

  const submitDisabled = () => {
    for (const key in state) {
      if (state[key] === '') {
        return true;
      }
    }
    return false;
  };

  return (
    <div css={styles} className="container" id="contact-me">
      <div className="row">
        <div className="col-md-4">
          <div className="contact-detail">
            <h4 style={{fontSize: 24}}>Contact Me</h4>
            <p>
              If you have any questions for me or need to get my services, please email me using this form.
              <br />
              Always welcome to me.
              <br />
              <strong>Best Regards.</strong>
            </p>
            
            <div className='mt-5'>
              <div>
                <strong>Email Address: </strong>
                <a className='pl-2' href='mailto:yurii.herula@outlook.com'>yurii.herula@outlook.com</a>
              </div>
            </div>
            
            <div className='mt-auto'>
              <SocialGroup />
            </div>
          </div>
        </div>
        <div className="col-md-8">
          <h4 style={{fontSize: 24}}>Send me a message</h4>
          <div className="row">
            <div className="col-md-6">
              <Input name="firstName" value={state.firstName} onChange={handleChange} label="First Name" />
            </div>
            <div className="col-md-6">
              <Input name="lastName" value={state.lastName} onChange={handleChange} label="Last Name" />
            </div>
            <div className="col-md-6">
              <Input name="email" value={state.email} onChange={handleChange} label="Email" />
            </div>
            <div className="col-md-6">
              <Input name="phoneNumber" value={state.phoneNumber} onChange={handleChange} label="Phone Number" />
            </div>
            <div className="col-12">
              <Input name="subject" value={state.subject} onChange={handleChange} label="Subject" />
            </div>
            <div className="col-12">
              <Input name="message" value={state.message} onChange={handleChange} label="Message" multiline={true} />
            </div>
            <div className="col-12">
              <Button transparent={true} style={{ marginLeft: 'auto' }} submitting={submitting} onClick={handleSubmit} disabled={submitDisabled()}>
                Submit
              </Button>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

const styles = css`
  width: 96%;
  margin: 50px auto;
  background-color: #222222;
  border-radius: ${theme.styles.borderRadius};

  .contact-detail {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;

    ${theme.MOBILE_MEDIA_QUERY} {
      border-bottom: ${theme.styles.border};
      padding-bottom: 5px;
    }

    ${theme.MIN_MOBILE_MEDIA_QUERY} {
      border-right: ${theme.styles.border};
      padding: 0 5px;
    }
  }
`;
