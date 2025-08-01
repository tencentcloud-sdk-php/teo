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
 * 状态码缓存 TTL 配置参数。
 *
 * @method array getStatusCodeCacheParams() 获取状态码缓存 TTL 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCacheParams(array $StatusCodeCacheParams) 设置状态码缓存 TTL 。
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatusCodeCacheParameters extends AbstractModel
{
    /**
     * @var array 状态码缓存 TTL 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCacheParams;

    /**
     * @param array $StatusCodeCacheParams 状态码缓存 TTL 。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StatusCodeCacheParams",$param) and $param["StatusCodeCacheParams"] !== null) {
            $this->StatusCodeCacheParams = [];
            foreach ($param["StatusCodeCacheParams"] as $key => $value){
                $obj = new StatusCodeCacheParam();
                $obj->deserialize($value);
                array_push($this->StatusCodeCacheParams, $obj);
            }
        }
    }
}
