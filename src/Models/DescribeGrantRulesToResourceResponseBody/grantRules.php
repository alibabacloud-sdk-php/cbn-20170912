<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceResponseBody;

use AlibabaCloud\Tea\Model;

class grantRules extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-44m0p68spvlrqq****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @example 1250123456123456
     *
     * @var int
     */
    public $cenOwnerId;

    /**
     * @description The timestamp when the permissions were granted. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-01-24T16:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The entity that pays the fees of the network instance. Valid values: Valid values:
     *
     *   **PayByCenOwner**: The fees of the connections and data forwarding on the transit router are paid by the Alibaba Cloud account to which the CEN instance belongs.
     *   **PayByResourceOwner**: The fees of the connections and data forwarding on the transit router are paid by the Alibaba Cloud account to which the network instance belongs.
     *
     * @example PayByCenOwner
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'cenId'      => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'createTime' => 'CreateTime',
        'orderType'  => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
