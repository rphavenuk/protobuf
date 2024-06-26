<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/common/v1/uid.proto

namespace Rphaven\Common\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>rphaven.common.v1.UidType</code>
 */
class UidType
{
    /**
     * Generated from protobuf enum <code>UID_TYPE_UUID = 0;</code>
     */
    const UID_TYPE_UUID = 0;
    /**
     * Generated from protobuf enum <code>UID_TYPE_ULID = 1;</code>
     */
    const UID_TYPE_ULID = 1;

    private static $valueToName = [
        self::UID_TYPE_UUID => 'UID_TYPE_UUID',
        self::UID_TYPE_ULID => 'UID_TYPE_ULID',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

