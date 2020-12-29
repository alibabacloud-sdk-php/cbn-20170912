<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels;
use AlibabaCloud\Tea\Model;

class DescribeCenGeographicSpansResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var geographicSpanModels[]
     */
    public $geographicSpanModels;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'geographicSpanModels' => 'GeographicSpanModels',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->geographicSpanModels) {
            $res['GeographicSpanModels'] = [];
            if (null !== $this->geographicSpanModels && \is_array($this->geographicSpanModels)) {
                $n = 0;
                foreach ($this->geographicSpanModels as $item) {
                    $res['GeographicSpanModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenGeographicSpansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['GeographicSpanModels'])) {
            if (!empty($map['GeographicSpanModels'])) {
                $model->geographicSpanModels = [];
                $n                           = 0;
                foreach ($map['GeographicSpanModels'] as $item) {
                    $model->geographicSpanModels[$n++] = null !== $item ? geographicSpanModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
