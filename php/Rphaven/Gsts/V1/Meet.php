<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsts/v1/meet.proto

namespace Rphaven\Gsts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rphaven.gsts.v1.Meet</code>
 */
class Meet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     */
    protected $name = '';
    protected $meet;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type \Rphaven\Gsts\V1\Venue $venue
     *     @type \Rphaven\Gsts\V1\Virtual $virtual
     * }
     */
    public function __construct($data = NULL) {
        \Rphaven\Gsts\V1\GPBMetadata\Meet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>bytes id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Venue venue = 3 [json_name = "venue"];</code>
     * @return \Rphaven\Gsts\V1\Venue|null
     */
    public function getVenue()
    {
        return $this->readOneof(3);
    }

    public function hasVenue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Venue venue = 3 [json_name = "venue"];</code>
     * @param \Rphaven\Gsts\V1\Venue $var
     * @return $this
     */
    public function setVenue($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\Venue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Virtual virtual = 4 [json_name = "virtual"];</code>
     * @return \Rphaven\Gsts\V1\Virtual|null
     */
    public function getVirtual()
    {
        return $this->readOneof(4);
    }

    public function hasVirtual()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.rphaven.gsts.v1.Virtual virtual = 4 [json_name = "virtual"];</code>
     * @param \Rphaven\Gsts\V1\Virtual $var
     * @return $this
     */
    public function setVirtual($var)
    {
        GPBUtil::checkMessage($var, \Rphaven\Gsts\V1\Virtual::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMeet()
    {
        return $this->whichOneof("meet");
    }

}

