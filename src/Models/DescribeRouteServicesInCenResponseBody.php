<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;
use AlibabaCloud\Tea\Model;

class DescribeRouteServicesInCenResponseBody extends Model
{
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
     * @var int
     */
    public $totalCount;

    /**
     * @var routeServiceEntries
     */
    public $routeServiceEntries;
    protected $_name = [
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'totalCount'          => 'TotalCount',
        'routeServiceEntries' => 'RouteServiceEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->routeServiceEntries) {
            $res['RouteServiceEntries'] = null !== $this->routeServiceEntries ? $this->routeServiceEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteServicesInCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RouteServiceEntries'])) {
            $model->routeServiceEntries = routeServiceEntries::fromMap($map['RouteServiceEntries']);
        }

        return $model;
    }
}
