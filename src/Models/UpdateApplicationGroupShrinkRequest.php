<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newName;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $parametersShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'name' => 'Name',
        'newName' => 'NewName',
        'operationName' => 'OperationName',
        'parametersShrink' => 'Parameters',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
        }

        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }

        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
