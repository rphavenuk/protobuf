<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: rphaven/gsts/v1/create_member_wallets_service.proto

namespace Rphaven\Gsts\V1;

use Spiral\RoadRunner\GRPC;

interface CreateMemberWalletsServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "rphaven.gsts.v1.CreateMemberWalletsService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param CreateMemberWalletsRequest $in
    * @return CreateMemberWalletsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function CreateMemberWallets(GRPC\ContextInterface $ctx, CreateMemberWalletsRequest $in): CreateMemberWalletsResponse;
}
