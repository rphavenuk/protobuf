<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/consume_wallet_tokens_service.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class ConsumeWalletTokensService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Gsts\V1\GPBMetadata\ConsumeWalletTokensRequest::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\ConsumeWalletTokensResponse::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xAE\x03\x0A3rphaven/gsts/v1/consume_wallet_tokens_service.proto\x12\x0Frphaven.gsts.v1\x1A4rphaven/gsts/v1/consume_wallet_tokens_response.proto2\x90\x01\x0A\x1AConsumeWalletTokensService\x12r\x0A\x13ConsumeWalletTokens\x12+.rphaven.gsts.v1.ConsumeWalletTokensRequest\x1A,.rphaven.gsts.v1.ConsumeWalletTokensResponse\"\x00B\x94\x01\x0A\x13com.rphaven.gsts.v1B\x1FConsumeWalletTokensServiceProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
