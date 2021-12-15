## Code Samples

#### Tap Payment

```typescript
import React, {Component} from "react";
import {GoSellElements} from "@tap-payments/gosell";
import {Button} from 'reactstrap'

class GoSellDemo extends Component {

    constructor(props) {
        super(props);
        this.state = {}
        this.callbackFunc = this.callbackFunc.bind(this)
    }

    callbackFunc(response) {
        if (response) {
            window.tokenId = response.id
            window.first_name = response.card.name.split(' ')[0]
            console.log("responseresponse", response)
            if (window.ReactNativeWebView) {
                window.ReactNativeWebView.postMessage(response)
            }
            // this.setState({ card: response })
        }

    }

    componentWillMount() {
        // setTimeout(() => {
        //     // GoSell.showResult()
        //     GoSell.openPaymentPage()
        // }, 1000);

    }

    render() {
        let {direction} = this.props
        return (
            <div className="App" style={{padding: '16px 0'}}>
                <div>
                    <GoSellElements
                        gateway={{
                            publicKey: "pk_test_BhaCTvHLfzWpw5186VGY7oIM",
                            language: "en",
                            supportedCurrencies: "all",
                            supportedPaymentMethods: "all",
                            notifications: 'msg',
                            saveCardOption: true,
                            callback: this.callbackFunc,
                            labels: {
                                cardNumber: "Card Number",
                                expirationDate: "MM/YY",
                                cvv: "CVV",
                                cardHolder: "Name on Card",
                                actionButton: "Pay"
                            },
                            style: {
                                base: {
                                    color: '#535353',
                                    lineHeight: '18px',
                                    fontFamily: 'sans-serif',
                                    fontSmoothing: 'antialiased',
                                    fontSize: '16px',
                                    margin: '8px',
                                    '::placeholder': {
                                        color: 'rgba(0, 0, 0, 0.26)',
                                        fontSize: '15px'
                                    }
                                },
                                invalid: {
                                    color: 'red',
                                    iconColor: '#fa755a '
                                }
                            }
                        }}
                    />

                    <p id="msg"></p>
                </div>


                <div className='cartDetail' style={{display: 'flex', justifyContent: 'center'}}>
                    <div className='actionBtn'>
                        <Button className='placeOrderBtn' onClick={() => GoSellElements.submit()}>
                            'Add Card'
                        </Button>
                    </div>

                </div>
            </div>
        );
    }
}

export default GoSellDemo;
```