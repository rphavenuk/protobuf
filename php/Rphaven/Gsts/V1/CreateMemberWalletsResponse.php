<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/create_member_wallets_response.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.CreateMemberWalletsResponse</code>
 */
class CreateMemberWalletsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     */
    protected $correlation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Common\V1\Correlation $correlation
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\CreateMemberWalletsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     * @return \Rphaven\Common\V1\Correlation|null
     */
    public function getCorrelation()
    {
        return $this->correlation;
    }

    public function hasCorrelation()
    {
        return isset($this->correlation);
    }

    public function clearCorrelation()
    {
        unset($this->correlation);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Correlation correlation = 1 [json_name = "correlation"];</code>
     * @param \Rphaven\Common\V1\Correlation $var
     * @return $this
     */
    public function setCorrelation($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Common\V1\Correlation::class);
        $this->correlation = $var;

        return $this;
    }

}

