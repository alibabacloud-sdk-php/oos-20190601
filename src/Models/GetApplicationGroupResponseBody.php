<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupResponseBody\applicationGroup;
use AlibabaCloud\Tea\Model;

class GetApplicationGroupResponseBody extends Model
{
    /**
     * @var applicationGroup
     */
    public $applicationGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationGroup' => 'ApplicationGroup',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationGroup) {
            $res['ApplicationGroup'] = null !== $this->applicationGroup ? $this->applicationGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationGroup'])) {
            $model->applicationGroup = applicationGroup::fromMap($map['ApplicationGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
