<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosPoliciesResponseBody\trafficQosPolicies;

use AlibabaCloud\Tea\Model;

class trafficQosQueues extends Model
{
    /**
     * @description The differentiated services code point (DSCP) value used to match packets in the queue.
     *
     * @var int[]
     */
    public $dscps;

    /**
     * @description The description of the queue.
     *
     * @example desctest
     *
     * @var string
     */
    public $qosQueueDescription;

    /**
     * @description The ID of the queue.
     *
     * @example qos-queue-njcrmr9fiu1jii****
     *
     * @var string
     */
    public $qosQueueId;

    /**
     * @description The name of the queue.
     *
     * @example namtest
     *
     * @var string
     */
    public $qosQueueName;

    /**
     * @description The percentage of the inter-region bandwidth that can be used by the queue.
     *
     * @example 1
     *
     * @var int
     */
    public $remainBandwidthPercent;
    protected $_name = [
        'dscps'                  => 'Dscps',
        'qosQueueDescription'    => 'QosQueueDescription',
        'qosQueueId'             => 'QosQueueId',
        'qosQueueName'           => 'QosQueueName',
        'remainBandwidthPercent' => 'RemainBandwidthPercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dscps) {
            $res['Dscps'] = $this->dscps;
        }
        if (null !== $this->qosQueueDescription) {
            $res['QosQueueDescription'] = $this->qosQueueDescription;
        }
        if (null !== $this->qosQueueId) {
            $res['QosQueueId'] = $this->qosQueueId;
        }
        if (null !== $this->qosQueueName) {
            $res['QosQueueName'] = $this->qosQueueName;
        }
        if (null !== $this->remainBandwidthPercent) {
            $res['RemainBandwidthPercent'] = $this->remainBandwidthPercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficQosQueues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dscps'])) {
            if (!empty($map['Dscps'])) {
                $model->dscps = $map['Dscps'];
            }
        }
        if (isset($map['QosQueueDescription'])) {
            $model->qosQueueDescription = $map['QosQueueDescription'];
        }
        if (isset($map['QosQueueId'])) {
            $model->qosQueueId = $map['QosQueueId'];
        }
        if (isset($map['QosQueueName'])) {
            $model->qosQueueName = $map['QosQueueName'];
        }
        if (isset($map['RemainBandwidthPercent'])) {
            $model->remainBandwidthPercent = $map['RemainBandwidthPercent'];
        }

        return $model;
    }
}
