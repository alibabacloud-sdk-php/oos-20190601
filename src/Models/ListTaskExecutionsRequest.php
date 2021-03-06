<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListTaskExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startDateBefore;

    /**
     * @var string
     */
    public $startDateAfter;

    /**
     * @var string
     */
    public $endDateBefore;

    /**
     * @var string
     */
    public $endDateAfter;

    /**
     * @var string
     */
    public $taskExecutionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $parentTaskExecutionId;

    /**
     * @var bool
     */
    public $includeChildTaskExecution;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'regionId'                  => 'RegionId',
        'executionId'               => 'ExecutionId',
        'status'                    => 'Status',
        'startDateBefore'           => 'StartDateBefore',
        'startDateAfter'            => 'StartDateAfter',
        'endDateBefore'             => 'EndDateBefore',
        'endDateAfter'              => 'EndDateAfter',
        'taskExecutionId'           => 'TaskExecutionId',
        'taskName'                  => 'TaskName',
        'taskAction'                => 'TaskAction',
        'parentTaskExecutionId'     => 'ParentTaskExecutionId',
        'includeChildTaskExecution' => 'IncludeChildTaskExecution',
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'sortField'                 => 'SortField',
        'sortOrder'                 => 'SortOrder',
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
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startDateBefore) {
            $res['StartDateBefore'] = $this->startDateBefore;
        }
        if (null !== $this->startDateAfter) {
            $res['StartDateAfter'] = $this->startDateAfter;
        }
        if (null !== $this->endDateBefore) {
            $res['EndDateBefore'] = $this->endDateBefore;
        }
        if (null !== $this->endDateAfter) {
            $res['EndDateAfter'] = $this->endDateAfter;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->parentTaskExecutionId) {
            $res['ParentTaskExecutionId'] = $this->parentTaskExecutionId;
        }
        if (null !== $this->includeChildTaskExecution) {
            $res['IncludeChildTaskExecution'] = $this->includeChildTaskExecution;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartDateBefore'])) {
            $model->startDateBefore = $map['StartDateBefore'];
        }
        if (isset($map['StartDateAfter'])) {
            $model->startDateAfter = $map['StartDateAfter'];
        }
        if (isset($map['EndDateBefore'])) {
            $model->endDateBefore = $map['EndDateBefore'];
        }
        if (isset($map['EndDateAfter'])) {
            $model->endDateAfter = $map['EndDateAfter'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['ParentTaskExecutionId'])) {
            $model->parentTaskExecutionId = $map['ParentTaskExecutionId'];
        }
        if (isset($map['IncludeChildTaskExecution'])) {
            $model->includeChildTaskExecution = $map['IncludeChildTaskExecution'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
