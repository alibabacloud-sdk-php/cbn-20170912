<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenAttachedChildInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $childInstanceType;

    /**
     * @var string
     */
    public $childInstanceRegionId;
    protected $_name = [
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'cenId'                 => 'CenId',
        'childInstanceType'     => 'ChildInstanceType',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenAttachedChildInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }

        return $model;
    }
}
