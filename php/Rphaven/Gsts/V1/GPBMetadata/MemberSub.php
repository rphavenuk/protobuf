<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsts/v1/member_sub.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class MemberSub
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Meet::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Token::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xDD\x08\x0A\x18gsts/v1/member_sub.proto\x12\x0Frphaven.gsts.v1\x1A\x12gsts/v1/meet.proto\x1A\x13gsts/v1/token.proto\"\xD7\x01\x0A\x12ConsumeMemberToken\x12/\x0A\x06member\x18\x01 \x01(\x0B2\x17.rphaven.gsts.v1.MemberR\x06member\x125\x0A\x09volunteer\x18\x02 \x01(\x0B2\x17.rphaven.gsts.v1.MemberR\x09volunteer\x12)\x0A\x04meet\x18\x03 \x01(\x0B2\x15.rphaven.gsts.v1.MeetR\x04meet\x12.\x0A\x06tokens\x18\x04 \x03(\x0B2\x16.rphaven.gsts.v1.TokenR\x06tokens\"\x95\x01\x0A\x10TokenConsumption\x12;\x0A\x07success\x18\x01 \x01(\x0B2\x1F.rphaven.gsts.v1.TokensConsumedH\x00R\x07success\x12:\x0A\x05error\x18\x02 \x01(\x0B2\".rphaven.gsts.v1.TokensNotConsumedH\x00R\x05errorB\x08\x0A\x06result\"U\x0A\x0ETokensConsumed\x12C\x0A\x0Btransaction\x18\x01 \x01(\x0B2!.rphaven.gsts.v1.TokenTransactionR\x0Btransaction\"\x8B\x02\x0A\x10TokenTransaction\x12%\x0A\x0Etransaction_id\x18\x01 \x01(\x0CR\x0DtransactionId\x128\x0A\x09timestamp\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampR\x09timestamp\x12/\x0A\x06member\x18\x03 \x01(\x0B2\x17.rphaven.gsts.v1.MemberR\x06member\x125\x0A\x09volunteer\x18\x04 \x01(\x0B2\x17.rphaven.gsts.v1.MemberR\x09volunteer\x12.\x0A\x06tokens\x18\x05 \x03(\x0B2\x16.rphaven.gsts.v1.TokenR\x06tokens\"X\x0A\x11TokensNotConsumed\x12C\x0A\x0Btransaction\x18\x01 \x01(\x0B2!.rphaven.gsts.v1.TokenTransactionR\x0Btransaction\"H\x0A\x06Member\x12\x0E\x0A\x02id\x18\x01 \x01(\x0CR\x02id\x12\x1A\x0A\x08username\x18\x02 \x01(\x09R\x08username\x12\x12\x0A\x04name\x18\x03 \x01(\x09R\x04nameB\x83\x01\x0A\x13com.rphaven.gsts.v1B\x0EMemberSubProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

