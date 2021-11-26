<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastServerRegionsResponseBody\anycastServerRegionList;
use AlibabaCloud\Tea\Model;

class DescribeAnycastServerRegionsResponseBody extends Model
{
    /**
     * @var anycastServerRegionList[]
     */
    public $anycastServerRegionList;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'anycastServerRegionList' => 'AnycastServerRegionList',
        'count'                   => 'Count',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastServerRegionList) {
            $res['AnycastServerRegionList'] = [];
            if (null !== $this->anycastServerRegionList && \is_array($this->anycastServerRegionList)) {
                $n = 0;
                foreach ($this->anycastServerRegionList as $item) {
                    $res['AnycastServerRegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastServerRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastServerRegionList'])) {
            if (!empty($map['AnycastServerRegionList'])) {
                $model->anycastServerRegionList = [];
                $n                              = 0;
                foreach ($map['AnycastServerRegionList'] as $item) {
                    $model->anycastServerRegionList[$n++] = null !== $item ? anycastServerRegionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
