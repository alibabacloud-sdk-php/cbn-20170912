<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationChildInstanceTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationCidrBlocks;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationInstanceIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\destinationRouteTableIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\matchAsns;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\matchCommunitySet;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\operateCommunitySet;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\prependAsPath;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\routeTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceChildInstanceTypes;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceInstanceIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceRegionIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap\sourceRouteTableIds;
use AlibabaCloud\Tea\Model;

class routeMap extends Model
{
    /**
     * @description The IDs of the source route tables to which the routes belong.
     *
     * @example Include
     *
     * @var string
     */
    public $asPathMatchMode;

    /**
     * @description The number of entries returned.
     *
     * @example cen-wx12mmlt17ld82****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The number of entries returned per page.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $cenRegionId;

    /**
     * @description The action performed on a route that meets the match conditions.
     *
     *   **Permit**: the route is permitted.
     *   **Deny**: the route is denied.
     *
     * @example Include
     *
     * @var string
     */
    public $cidrMatchMode;

    /**
     * @description The direction in which the routing policy is applied. Valid values:
     *
     *   **RegionIn**: Routes are advertised to the gateways in the regions that are connected by the CEN instance.
     *
     * For example, routes are advertised from network instances deployed in the current region or other regions to the gateway deployed in the current region.
     *
     *   **RegionOut**: Routes are advertised from the gateways in the regions that are connected by the CEN instance.
     *
     * For example, routes are advertised from the gateway deployed in the current region to network instances deployed in the current region, or to gateways deployed in other regions.
     * @example Include
     *
     * @var string
     */
    public $communityMatchMode;

    /**
     * @description The information about the routing policy.
     *
     * @example Additive
     *
     * @var string
     */
    public $communityOperateMode;

    /**
     * @description The AS paths based on which the routes are compared.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @var destinationChildInstanceTypes
     */
    public $destinationChildInstanceTypes;

    /**
     * @description The number of the returned page.
     *
     * @var destinationCidrBlocks
     */
    public $destinationCidrBlocks;

    /**
     * @var destinationInstanceIds
     */
    public $destinationInstanceIds;

    /**
     * @description The description of the routing policy.
     *
     * @example false
     *
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @description The types of source network instance to which the routes belong.
     *
     *   **VPC**: virtual private cloud (VPC)
     *   **VBR**: virtual border router (VBR)
     *   **CCN**: Cloud Connect Network (CCN) instance
     *   **VPN**: IPsec-VPN connection
     *
     * @var destinationRouteTableIds
     */
    public $destinationRouteTableIds;

    /**
     * @description The ID of the region where the routing policy is applied.
     *
     * You can call the [DescribeChildInstanceRegions](~~132080~~) operation to query the most recent region list.
     * @example Deny
     *
     * @var string
     */
    public $mapResult;

    /**
     * @description The IDs of the source network instances to which the routes belong.
     *
     * @example IPv4
     *
     * @var string
     */
    public $matchAddressType;

    /**
     * @var matchAsns
     */
    public $matchAsns;

    /**
     * @var matchCommunitySet
     */
    public $matchCommunitySet;

    /**
     * @description The match method that is used to match routes based on the prefix. Valid values:
     *
     *   **Include**: fuzzy match. A route is a match if the route prefix is included in the match conditions.
     *
     * For example, if you set the match condition to 10.10.0.0/16 and fuzzy match is enabled, the route whose prefix is 10.10.1.0/24 is a match.
     *
     *   **Complete**: exact match. A route is a match only if the route prefix is the same as the prefix specified in the match condition.
     *
     * For example, if you set the match condition to 10.10.0.0/16 and exact match is enabled, a route is a match only if the prefix is 10.10.0.0/16.
     * @example 33
     *
     * @var int
     */
    public $nextPriority;

    /**
     * @var operateCommunitySet
     */
    public $operateCommunitySet;

    /**
     * @description The prefixes of the routes.
     *
     * @example 20
     *
     * @var int
     */
    public $preference;

    /**
     * @var prependAsPath
     */
    public $prependAsPath;

    /**
     * @description The ID of the region where the routing policy is applied.
     *
     * @example 5000
     *
     * @var int
     */
    public $priority;

    /**
     * @description The type of IP address to be matched against the match condition. Valid values:
     *
     *   **IPv4**: IPv4 addresses
     *   **IPv6**: IPv6 addresses
     *   If no value is returned, both IPv4 and IPv6 addresses are matched against the match condition.
     *
     * @example cenrmap-y40mxdvf7joc12****
     *
     * @var string
     */
    public $routeMapId;

    /**
     * @var routeTypes
     */
    public $routeTypes;

    /**
     * @description The community set based on which the routes are compared.
     *
     * @var sourceChildInstanceTypes
     */
    public $sourceChildInstanceTypes;

    /**
     * @description The direction in which the routing policy is applied.
     *
     * @var sourceInstanceIds
     */
    public $sourceInstanceIds;

    /**
     * @description The ID of the routing policy.
     *
     * @example false
     *
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @description The status of the routing policy. Valid values:
     *
     *   **Creating**: The routing policy is being created.
     *   **Active**: The routing policy is available.
     *   **Deleting**: The routing policy is being deleted.
     *
     * @var sourceRegionIds
     */
    public $sourceRegionIds;

    /**
     * @description Queries the routing policies of a Cloud Enterprise Network (CEN) instance.
     *
     * @var sourceRouteTableIds
     */
    public $sourceRouteTableIds;

    /**
     * @description The new priority of the route.
     *
     * This parameter indicates the action to be performed when a route meets the match condition.
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The action that is performed on the community of the route.
     *
     *   **Additive**: adds the community to the route.
     *   **Replace**: replaces the original community of the route.
     *
     * This parameter indicates the action to be performed when a route meets the match condition.
     * @example vtb-gw8nx3515m1mbd1z1****
     *
     * @var string
     */
    public $transitRouterRouteTableId;

    /**
     * @description The ID of the routing policy.
     *
     * @example RegionOut
     *
     * @var string
     */
    public $transmitDirection;
    protected $_name = [
        'asPathMatchMode'                    => 'AsPathMatchMode',
        'cenId'                              => 'CenId',
        'cenRegionId'                        => 'CenRegionId',
        'cidrMatchMode'                      => 'CidrMatchMode',
        'communityMatchMode'                 => 'CommunityMatchMode',
        'communityOperateMode'               => 'CommunityOperateMode',
        'description'                        => 'Description',
        'destinationChildInstanceTypes'      => 'DestinationChildInstanceTypes',
        'destinationCidrBlocks'              => 'DestinationCidrBlocks',
        'destinationInstanceIds'             => 'DestinationInstanceIds',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'destinationRouteTableIds'           => 'DestinationRouteTableIds',
        'mapResult'                          => 'MapResult',
        'matchAddressType'                   => 'MatchAddressType',
        'matchAsns'                          => 'MatchAsns',
        'matchCommunitySet'                  => 'MatchCommunitySet',
        'nextPriority'                       => 'NextPriority',
        'operateCommunitySet'                => 'OperateCommunitySet',
        'preference'                         => 'Preference',
        'prependAsPath'                      => 'PrependAsPath',
        'priority'                           => 'Priority',
        'routeMapId'                         => 'RouteMapId',
        'routeTypes'                         => 'RouteTypes',
        'sourceChildInstanceTypes'           => 'SourceChildInstanceTypes',
        'sourceInstanceIds'                  => 'SourceInstanceIds',
        'sourceInstanceIdsReverseMatch'      => 'SourceInstanceIdsReverseMatch',
        'sourceRegionIds'                    => 'SourceRegionIds',
        'sourceRouteTableIds'                => 'SourceRouteTableIds',
        'status'                             => 'Status',
        'transitRouterRouteTableId'          => 'TransitRouterRouteTableId',
        'transmitDirection'                  => 'TransmitDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPathMatchMode) {
            $res['AsPathMatchMode'] = $this->asPathMatchMode;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenRegionId) {
            $res['CenRegionId'] = $this->cenRegionId;
        }
        if (null !== $this->cidrMatchMode) {
            $res['CidrMatchMode'] = $this->cidrMatchMode;
        }
        if (null !== $this->communityMatchMode) {
            $res['CommunityMatchMode'] = $this->communityMatchMode;
        }
        if (null !== $this->communityOperateMode) {
            $res['CommunityOperateMode'] = $this->communityOperateMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationChildInstanceTypes) {
            $res['DestinationChildInstanceTypes'] = null !== $this->destinationChildInstanceTypes ? $this->destinationChildInstanceTypes->toMap() : null;
        }
        if (null !== $this->destinationCidrBlocks) {
            $res['DestinationCidrBlocks'] = null !== $this->destinationCidrBlocks ? $this->destinationCidrBlocks->toMap() : null;
        }
        if (null !== $this->destinationInstanceIds) {
            $res['DestinationInstanceIds'] = null !== $this->destinationInstanceIds ? $this->destinationInstanceIds->toMap() : null;
        }
        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }
        if (null !== $this->destinationRouteTableIds) {
            $res['DestinationRouteTableIds'] = null !== $this->destinationRouteTableIds ? $this->destinationRouteTableIds->toMap() : null;
        }
        if (null !== $this->mapResult) {
            $res['MapResult'] = $this->mapResult;
        }
        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }
        if (null !== $this->matchAsns) {
            $res['MatchAsns'] = null !== $this->matchAsns ? $this->matchAsns->toMap() : null;
        }
        if (null !== $this->matchCommunitySet) {
            $res['MatchCommunitySet'] = null !== $this->matchCommunitySet ? $this->matchCommunitySet->toMap() : null;
        }
        if (null !== $this->nextPriority) {
            $res['NextPriority'] = $this->nextPriority;
        }
        if (null !== $this->operateCommunitySet) {
            $res['OperateCommunitySet'] = null !== $this->operateCommunitySet ? $this->operateCommunitySet->toMap() : null;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->prependAsPath) {
            $res['PrependAsPath'] = null !== $this->prependAsPath ? $this->prependAsPath->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->routeTypes) {
            $res['RouteTypes'] = null !== $this->routeTypes ? $this->routeTypes->toMap() : null;
        }
        if (null !== $this->sourceChildInstanceTypes) {
            $res['SourceChildInstanceTypes'] = null !== $this->sourceChildInstanceTypes ? $this->sourceChildInstanceTypes->toMap() : null;
        }
        if (null !== $this->sourceInstanceIds) {
            $res['SourceInstanceIds'] = null !== $this->sourceInstanceIds ? $this->sourceInstanceIds->toMap() : null;
        }
        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }
        if (null !== $this->sourceRegionIds) {
            $res['SourceRegionIds'] = null !== $this->sourceRegionIds ? $this->sourceRegionIds->toMap() : null;
        }
        if (null !== $this->sourceRouteTableIds) {
            $res['SourceRouteTableIds'] = null !== $this->sourceRouteTableIds ? $this->sourceRouteTableIds->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }
        if (null !== $this->transmitDirection) {
            $res['TransmitDirection'] = $this->transmitDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPathMatchMode'])) {
            $model->asPathMatchMode = $map['AsPathMatchMode'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenRegionId'])) {
            $model->cenRegionId = $map['CenRegionId'];
        }
        if (isset($map['CidrMatchMode'])) {
            $model->cidrMatchMode = $map['CidrMatchMode'];
        }
        if (isset($map['CommunityMatchMode'])) {
            $model->communityMatchMode = $map['CommunityMatchMode'];
        }
        if (isset($map['CommunityOperateMode'])) {
            $model->communityOperateMode = $map['CommunityOperateMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationChildInstanceTypes'])) {
            $model->destinationChildInstanceTypes = destinationChildInstanceTypes::fromMap($map['DestinationChildInstanceTypes']);
        }
        if (isset($map['DestinationCidrBlocks'])) {
            $model->destinationCidrBlocks = destinationCidrBlocks::fromMap($map['DestinationCidrBlocks']);
        }
        if (isset($map['DestinationInstanceIds'])) {
            $model->destinationInstanceIds = destinationInstanceIds::fromMap($map['DestinationInstanceIds']);
        }
        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }
        if (isset($map['DestinationRouteTableIds'])) {
            $model->destinationRouteTableIds = destinationRouteTableIds::fromMap($map['DestinationRouteTableIds']);
        }
        if (isset($map['MapResult'])) {
            $model->mapResult = $map['MapResult'];
        }
        if (isset($map['MatchAddressType'])) {
            $model->matchAddressType = $map['MatchAddressType'];
        }
        if (isset($map['MatchAsns'])) {
            $model->matchAsns = matchAsns::fromMap($map['MatchAsns']);
        }
        if (isset($map['MatchCommunitySet'])) {
            $model->matchCommunitySet = matchCommunitySet::fromMap($map['MatchCommunitySet']);
        }
        if (isset($map['NextPriority'])) {
            $model->nextPriority = $map['NextPriority'];
        }
        if (isset($map['OperateCommunitySet'])) {
            $model->operateCommunitySet = operateCommunitySet::fromMap($map['OperateCommunitySet']);
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['PrependAsPath'])) {
            $model->prependAsPath = prependAsPath::fromMap($map['PrependAsPath']);
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['RouteTypes'])) {
            $model->routeTypes = routeTypes::fromMap($map['RouteTypes']);
        }
        if (isset($map['SourceChildInstanceTypes'])) {
            $model->sourceChildInstanceTypes = sourceChildInstanceTypes::fromMap($map['SourceChildInstanceTypes']);
        }
        if (isset($map['SourceInstanceIds'])) {
            $model->sourceInstanceIds = sourceInstanceIds::fromMap($map['SourceInstanceIds']);
        }
        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }
        if (isset($map['SourceRegionIds'])) {
            $model->sourceRegionIds = sourceRegionIds::fromMap($map['SourceRegionIds']);
        }
        if (isset($map['SourceRouteTableIds'])) {
            $model->sourceRouteTableIds = sourceRouteTableIds::fromMap($map['SourceRouteTableIds']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }
        if (isset($map['TransmitDirection'])) {
            $model->transmitDirection = $map['TransmitDirection'];
        }

        return $model;
    }
}
