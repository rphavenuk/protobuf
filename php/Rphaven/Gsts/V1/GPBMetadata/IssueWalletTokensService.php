<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rphaven/gsts/v1/issue_wallet_tokens_service.proto

namespace Rphaven\Gsts\V1\GPBMetadata;

class IssueWalletTokensService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Rphaven\Gsts\V1\GPBMetadata\IssueWalletTokensRequest::initOnce();
        \Rphaven\Gsts\V1\GPBMetadata\IssueWalletTokensResponse::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA0\x03\x0A1rphaven/gsts/v1/issue_wallet_tokens_service.proto\x12\x0Frphaven.gsts.v1\x1A2rphaven/gsts/v1/issue_wallet_tokens_response.proto2\x88\x01\x0A\x18IssueWalletTokensService\x12l\x0A\x11IssueWalletTokens\x12).rphaven.gsts.v1.IssueWalletTokensRequest\x1A*.rphaven.gsts.v1.IssueWalletTokensResponse\"\x00B\x92\x01\x0A\x13com.rphaven.gsts.v1B\x1DIssueWalletTokensServiceProtoP\x01\xA2\x02\x03RGX\xAA\x02\x0FRphaven.Gsts.V1\xCA\x02\x0FRphaven\\Gsts\\V1\xE2\x02\x1BRphaven\\Gsts\\V1\\GPBMetadata\xEA\x02\x11Rphaven::Gsts::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

