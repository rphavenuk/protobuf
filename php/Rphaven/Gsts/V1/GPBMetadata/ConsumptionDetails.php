<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/consumption_details.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class ConsumptionDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Gsts\V1\GPBMetadata\Meet::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Member::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Wallet::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xB9\x03\x0A)rphaven/gsts/v1/consumption_details.proto\x12\x0Frphaven.gsts.v1\x1A\x1Crphaven/gsts/v1/member.proto\x1A\x1Crphaven/gsts/v1/wallet.proto\"\xA7\x01\x0A\x12ConsumptionDetails\x12/\x0A\x06wallet\x18\x01 \x01(\x0B2\x17.rphaven.gsts.v1.WalletR\x06wallet\x125\x0A\x09volunteer\x18\x02 \x01(\x0B2\x17.rphaven.gsts.v1.MemberR\x09volunteer\x12)\x0A\x04meet\x18\x03 \x01(\x0B2\x15.rphaven.gsts.v1.MeetR\x04meetB\x8C\x01\x0A\x13com.rphaven.gsts.v1B\x17ConsumptionDetailsProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

