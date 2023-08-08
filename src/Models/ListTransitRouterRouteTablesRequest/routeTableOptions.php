<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablesRequest;

use AlibabaCloud\Tea\Model;

class routeTableOptions extends Model
{
    /**
     * @description Specifies whether to enable equal-cost multi-path (ECMP) routing. Valid values:
     *
     *   **disable**: disables ECMP routing If you disable ECMP routing, routes that are learned from different regions but have the same prefix and attributes select the transit router with the smallest region ID as the next hop. Region IDs are sorted in alphabetic order. The network latency and bandwidth consumption also vary based on the region. Proceed with caution.
     *   **enable**: enables ECMP routing. If you enable ECMP routing, routes that are learned from different regions but have the same prefix and attributes form an ECMP route. The network latency and bandwidth consumption also vary based on the region. Proceed with caution.
     *
     * @example disable
     *
     * @var string
     */
    public $multiRegionECMP;
    protected $_name = [
        'multiRegionECMP' => 'MultiRegionECMP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiRegionECMP) {
            $res['MultiRegionECMP'] = $this->multiRegionECMP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTableOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultiRegionECMP'])) {
            $model->multiRegionECMP = $map['MultiRegionECMP'];
        }

        return $model;
    }
}
