<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/member.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid id = 1 [json_name = "id"];</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>string username = 2 [json_name = "username"];</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string name = 3 [json_name = "name"];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rphaven\Common\V1\Uid $id
     *     @type string $username
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\Member::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid id = 1 [json_name = "id"];</code>
     * @return \Rphaven\Common\V1\Uid|null
     */
    public function getId()
    {
        return $this->id;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>.rphaven.common.v1.Uid id = 1 [json_name = "id"];</code>
     * @param \Rphaven\Common\V1\Uid $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Common\V1\Uid::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2 [json_name = "username"];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 2 [json_name = "username"];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 3 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

