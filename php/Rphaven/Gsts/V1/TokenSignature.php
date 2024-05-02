<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/token_signatuure.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.TokenSignature</code>
 */
class TokenSignature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid key = 1 [json_name = "key"];</code>
     */
    protected $key = null;
    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Common\V1\Uid $key
     *     @type string $hash
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\TokenSignatuure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid key = 1 [json_name = "key"];</code>
     * @return \Rphaven\Common\V1\Uid|null
     */
    public function getKey()
    {
        return $this->key;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid key = 1 [json_name = "key"];</code>
     * @param \Rphaven\Common\V1\Uid $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Common\V1\Uid::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2 [json_name = "hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

}
