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
 * DescribeIPRegion请求参数结构体
 *
 * @method array getIPs() 获取待查询的 IP 列表，支持 IPV4 和 IPV6，最大可查询 100 条。
 * @method void setIPs(array $IPs) 设置待查询的 IP 列表，支持 IPV4 和 IPV6，最大可查询 100 条。
 */
class DescribeIPRegionRequest extends AbstractModel
{
    /**
     * @var array 待查询的 IP 列表，支持 IPV4 和 IPV6，最大可查询 100 条。
     */
    public $IPs;

    /**
     * @param array $IPs 待查询的 IP 列表，支持 IPV4 和 IPV6，最大可查询 100 条。
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
        if (array_key_exists("IPs",$param) and $param["IPs"] !== null) {
            $this->IPs = $param["IPs"];
        }
    }
}
