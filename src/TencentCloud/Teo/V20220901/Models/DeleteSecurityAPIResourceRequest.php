<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecurityAPIResource请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。	
 * @method void setZoneId(string $ZoneId) 设置站点 ID。	
 * @method array getAPIResourceIds() 获取需要删除的 API 资源 ID 列表。
 * @method void setAPIResourceIds(array $APIResourceIds) 设置需要删除的 API 资源 ID 列表。
 */
class DeleteSecurityAPIResourceRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。	
     */
    public $ZoneId;

    /**
     * @var array 需要删除的 API 资源 ID 列表。
     */
    public $APIResourceIds;

    /**
     * @param string $ZoneId 站点 ID。	
     * @param array $APIResourceIds 需要删除的 API 资源 ID 列表。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("APIResourceIds",$param) and $param["APIResourceIds"] !== null) {
            $this->APIResourceIds = $param["APIResourceIds"];
        }
    }
}
