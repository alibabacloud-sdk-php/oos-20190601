<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListGitRepositoryContentsRequest extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $path;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoFullName;

    /**
     * @var int
     */
    public $repoId;
    protected $_name = [
        'branch'       => 'Branch',
        'clientToken'  => 'ClientToken',
        'contentType'  => 'ContentType',
        'orgId'        => 'OrgId',
        'owner'        => 'Owner',
        'path'         => 'Path',
        'platform'     => 'Platform',
        'regionId'     => 'RegionId',
        'repoFullName' => 'RepoFullName',
        'repoId'       => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoFullName) {
            $res['RepoFullName'] = $this->repoFullName;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGitRepositoryContentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoFullName'])) {
            $model->repoFullName = $map['RepoFullName'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}