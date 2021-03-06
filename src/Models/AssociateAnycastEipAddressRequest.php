<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest\popLocations;
use AlibabaCloud\Tea\Model;

class AssociateAnycastEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $anycastId;

    /**
     * @description 关联模式，默认模式、普通模式Default/Normal
     *
     * @var string
     */
    public $associationMode;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @var string
     */
    public $bindInstanceType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @description 绑定时关联的pop location，如果是绑定的第一个实例，该参数会忽略，会下发到全部pop点
     *
     * @var popLocations[]
     */
    public $popLocations;

    /**
     * @description 私网ip地址
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'anycastId'            => 'AnycastId',
        'associationMode'      => 'AssociationMode',
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'popLocations'         => 'PopLocations',
        'privateIpAddress'     => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->popLocations) {
            $res['PopLocations'] = [];
            if (null !== $this->popLocations && \is_array($this->popLocations)) {
                $n = 0;
                foreach ($this->popLocations as $item) {
                    $res['PopLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateAnycastEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['PopLocations'])) {
            if (!empty($map['PopLocations'])) {
                $model->popLocations = [];
                $n                   = 0;
                foreach ($map['PopLocations'] as $item) {
                    $model->popLocations[$n++] = null !== $item ? popLocations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
