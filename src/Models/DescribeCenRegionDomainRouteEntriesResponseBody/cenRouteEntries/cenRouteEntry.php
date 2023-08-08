<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\asPaths;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\communities;
use AlibabaCloud\Tea\Model;

class cenRouteEntry extends Model
{
    /**
     * @var asPaths
     */
    public $asPaths;

    /**
     * @description Queries the routes of a Cloud Enterprise Network (CEN) instance in a specified region.
     *
     * @var cenOutRouteMapRecords
     */
    public $cenOutRouteMapRecords;

    /**
     * @description The number of entries returned per page.
     *
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @var communities
     */
    public $communities;

    /**
     * @description The number of entries to return on each page. Default value: **10**. Valid values: **1** to **50**.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The priority of the route.
     *
     * > A smaller value indicates a higher priority.
     * @example vpc-bp1j8728mm6pweeod****
     *
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @description The type of the network instance specified as the next hop in the route.
     *
     * - **VPC**
     * - **VBR**
     * - **CCN**
     * - **local_service**: system route. No next hop is specified.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @description The type of the route. Valid values:
     *
     * - **CEN**: route that is advertised through CEN
     * - **Custom**: custom route
     * - **System**: system route
     * @example VPC
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The page number of the returned page.
     *
     * @example 50
     *
     * @var int
     */
    public $preference;

    /**
     * @description The AS paths of the routes.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the route map.
     *
     * @example Active
     *
     * @var string
     */
    public $toOtherRegionStatus;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example CEN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'asPaths'               => 'AsPaths',
        'cenOutRouteMapRecords' => 'CenOutRouteMapRecords',
        'cenRouteMapRecords'    => 'CenRouteMapRecords',
        'communities'           => 'Communities',
        'destinationCidrBlock'  => 'DestinationCidrBlock',
        'nextHopInstanceId'     => 'NextHopInstanceId',
        'nextHopRegionId'       => 'NextHopRegionId',
        'nextHopType'           => 'NextHopType',
        'preference'            => 'Preference',
        'status'                => 'Status',
        'toOtherRegionStatus'   => 'ToOtherRegionStatus',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toMap() : null;
        }
        if (null !== $this->cenOutRouteMapRecords) {
            $res['CenOutRouteMapRecords'] = null !== $this->cenOutRouteMapRecords ? $this->cenOutRouteMapRecords->toMap() : null;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toMap() : null;
        }
        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toMap() : null;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toOtherRegionStatus) {
            $res['ToOtherRegionStatus'] = $this->toOtherRegionStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPaths'])) {
            $model->asPaths = asPaths::fromMap($map['AsPaths']);
        }
        if (isset($map['CenOutRouteMapRecords'])) {
            $model->cenOutRouteMapRecords = cenOutRouteMapRecords::fromMap($map['CenOutRouteMapRecords']);
        }
        if (isset($map['CenRouteMapRecords'])) {
            $model->cenRouteMapRecords = cenRouteMapRecords::fromMap($map['CenRouteMapRecords']);
        }
        if (isset($map['Communities'])) {
            $model->communities = communities::fromMap($map['Communities']);
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToOtherRegionStatus'])) {
            $model->toOtherRegionStatus = $map['ToOtherRegionStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
