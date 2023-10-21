<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\ipv6CidrBlocks;

use AlibabaCloud\Tea\Model;

class ipv6CidrBlock extends Model
{
    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example 2408:XXXX:0:6a::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The type of the IPv6 CIDR block of the VPC. Valid values:
     *
     *   BGP (default): Alibaba Cloud Border Gateway Protocol (BGP) IPv6
     *   ChinaMobile: China Mobile (single line)
     *   ChinaUnicom: China Unicom (single line)
     *   ChinaTelecom: China Telecom (single line)
     *
     * >  If you are on the whitelist of single-line bandwidth, you can set this parameter to ChinaTelecom, ChinaUnicom, or ChinaMobile.
     * @example BGP
     *
     * @var string
     */
    public $ipv6Isp;
    protected $_name = [
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6Isp'       => 'Ipv6Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6CidrBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }

        return $model;
    }
}
