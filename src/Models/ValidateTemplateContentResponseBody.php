<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class ValidateTemplateContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $parameters;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $ramRole;
    protected $_name = [
        'parameters' => 'Parameters',
        'tasks'      => 'Tasks',
        'requestId'  => 'RequestId',
        'outputs'    => 'Outputs',
        'ramRole'    => 'RamRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }

        return $model;
    }
}
