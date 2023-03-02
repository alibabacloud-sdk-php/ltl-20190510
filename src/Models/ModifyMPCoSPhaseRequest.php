<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class ModifyMPCoSPhaseRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 196487512811****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'bizChainId' => 'BizChainId',
        'name'       => 'Name',
        'phaseId'    => 'PhaseId',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMPCoSPhaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
