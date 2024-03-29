<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;
use AlibabaCloud\Tea\Model;

class DescribeRouteServicesInCenResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 196C99CA-6997-5951-9721-AE89720DF856
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the cloud services.
     *
     * @var routeServiceEntries
     */
    public $routeServiceEntries;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'routeServiceEntries' => 'RouteServiceEntries',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeServiceEntries) {
            $res['RouteServiceEntries'] = null !== $this->routeServiceEntries ? $this->routeServiceEntries->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteServiceEntries'])) {
            $model->routeServiceEntries = routeServiceEntries::fromMap($map['RouteServiceEntries']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
