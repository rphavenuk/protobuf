<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/list_tokens_request.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class ListTokensRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Common\V1\GPBMetadata\Correlation::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\Wallet::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xFB\x02\x0A)rphaven/gsts/v1/list_tokens_request.proto\x12\x0Frphaven.gsts.v1\x1A\x1Crphaven/gsts/v1/wallet.proto\"\x88\x01\x0A\x11ListTokensRequest\x12@\x0A\x0Bcorrelation\x18\x01 \x01(\x0B2\x1E.rphaven.common.v1.CorrelationR\x0Bcorrelation\x121\x0A\x07wallets\x18\x02 \x03(\x0B2\x17.rphaven.gsts.v1.WalletR\x07walletsB\x8B\x01\x0A\x13com.rphaven.gsts.v1B\x16ListTokensRequestProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

