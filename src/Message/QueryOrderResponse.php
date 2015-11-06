<?php

namespace Omnipay\WechatPay\Message;

class QueryOrderResponse extends BaseAbstractResponse{

    public function isSubscribe(){

        $is_subscribe = $this->getParameter( 'is_subscribe' );

        if ( is_null( $is_subscribe ) ){

            return null;
        }

        return $this->getParameter( 'is_subscribe' ) == 'Y';
    }

    public function getOpenId(){

        return $this->getParameter( 'openid' );
    }

    public function getDeviceInfo(){

        return $this->getParameter( 'device_info' );
    }

    public function getTransactionId(){

        return $this->getTransactionId( 'transaction_id' );
    }

    public function getOutTradeNo(){

        return $this->getParameter( 'out_trade_no' );
    }

    public function setAttach( $value ){

        return $this->setParameter( 'attach', $value );
    }

    public function getAttach(){

        return $this->getParameter( 'attach' );
    }

    public function getOutRefundNo(){

        return $this->getParameter( 'out_refund_no' );
    }

    public function getRefundId(){

        return $this->getParameter( 'refund_id' );
    }

    public function getRefundChannel(){

        return $this->setParameter( 'refund_channel' );
    }

    public function getRefundFee(){

        return $this->getParameter( 'refund_fee' );
    }

    public function getTotalFee(){

        return $this->getParameter( 'total_fee' );
    }

    public function getFeeType(){

        return $this->getParameter();
    }

    public function getCashFee(){

        return $this->getParameter( 'cash_fee' );
    }

    public function getCashFeeType(){

        return $this->getParameter( 'cash_fee_type' );
    }

    public function getCouponFee(){

        return $this->getParameter( 'coupon_fee' );
    }

    public function getCouponCount(){

        return $this->getParameter( 'coupon_count' );
    }

    public function getCouponBatchId( $n ){

        return $this->getParameter( 'coupon_batch_id'.'_'.$n );
    }

    public function getCouponId( $n ){

        return $this->getParameter( 'coupon_id'.'_'.$n );
    }

    public function getCouponFee( $n ){

        return $this->getParameter( 'coupon_fee'.'_'.$n );
    }

    public function getTimeEnd(){

        return $this->getParameter( 'time_end' );
    }

    public function getTradeStateDesc(){

        return $this->getParameter( 'trade_state_desc' );
    }
}