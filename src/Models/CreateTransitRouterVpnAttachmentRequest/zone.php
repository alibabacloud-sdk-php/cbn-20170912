<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterVpnAttachmentRequest;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description The zone ID of the read-only instance.
     *
     * You can call the [ListTransitRouterAvailableResource](~~261356~~) operation to query the most recent zone list.
     * @example ap-southeast-2a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
