<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class StartExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $loopMode;

    /**
     * @var string
     */
    public $parentExecutionId;

    /**
     * @var string
     */
    public $safetyCheck;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateContent;
    protected $_name = [
        'regionId'          => 'RegionId',
        'templateName'      => 'TemplateName',
        'templateVersion'   => 'TemplateVersion',
        'mode'              => 'Mode',
        'loopMode'          => 'LoopMode',
        'parentExecutionId' => 'ParentExecutionId',
        'safetyCheck'       => 'SafetyCheck',
        'parameters'        => 'Parameters',
        'clientToken'       => 'ClientToken',
        'tags'              => 'Tags',
        'description'       => 'Description',
        'templateContent'   => 'TemplateContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->loopMode) {
            $res['LoopMode'] = $this->loopMode;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->safetyCheck) {
            $res['SafetyCheck'] = $this->safetyCheck;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['LoopMode'])) {
            $model->loopMode = $map['LoopMode'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['SafetyCheck'])) {
            $model->safetyCheck = $map['SafetyCheck'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        return $model;
    }
}
