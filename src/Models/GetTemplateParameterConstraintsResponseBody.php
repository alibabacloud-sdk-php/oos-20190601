<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @description The constraints of the parameters.
     *
     * @example [
     * {
     * "Type": "String",
     * "AllowedValues": [
     * "ecs.n1.tiny",
     * "ecs.r8a.4xlarge",
     * "ecs.n2.xlarge",
     * "ecs.c7.2xlarge",
     * "ecs.c8i.4xlarge",
     * "ecs.g8i.48xlarge",
     * "ecs.c8a.4xlarge",
     * "ecs.i2.4xlarge",
     * "ecs.r8y.2xlarge"
     * ],
     * "AssociationParameterNames": [
     * "RegionId",
     * "zoneId"
     * ],
     * "ParameterKey": "instanceType"
     * },
     * {
     * "Type": "String",
     * "AllowedValues": [],
     * "AssociationParameterNames": [
     * "RegionId",
     * "zoneId",
     * "InstanceType"
     * ],
     * "ParameterKey": "systemDiskCategory"
     * }
     * ]
     *
     * @var mixed[]
     */
    public $parameterConstraints;

    /**
     * @description The request ID.
     *
     * @example CBEC8072-BEC2-478E-8EAE-E723BA79CF19
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterConstraints' => 'ParameterConstraints',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterConstraints) {
            $res['ParameterConstraints'] = $this->parameterConstraints;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateParameterConstraintsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterConstraints'])) {
            $model->parameterConstraints = $map['ParameterConstraints'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
