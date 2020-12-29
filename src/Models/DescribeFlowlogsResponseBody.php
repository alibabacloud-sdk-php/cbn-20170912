<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponseBody\flowLogs;
use AlibabaCloud\Tea\Model;

class DescribeFlowlogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var flowLogs[]
     */
    public $flowLogs;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'flowLogs'   => 'FlowLogs',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->flowLogs) {
            $res['FlowLogs'] = [];
            if (null !== $this->flowLogs && \is_array($this->flowLogs)) {
                $n = 0;
                foreach ($this->flowLogs as $item) {
                    $res['FlowLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowlogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FlowLogs'])) {
            if (!empty($map['FlowLogs'])) {
                $model->flowLogs = [];
                $n               = 0;
                foreach ($map['FlowLogs'] as $item) {
                    $model->flowLogs[$n++] = null !== $item ? flowLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
