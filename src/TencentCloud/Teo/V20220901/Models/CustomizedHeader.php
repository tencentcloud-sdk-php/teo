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
 * 负载均衡实例 HTTP/HTTPS 健康检查策略下可配置的自定义头部。
 *
 * @method string getKey() 获取自定义头部 Key。
 * @method void setKey(string $Key) 设置自定义头部 Key。
 * @method string getValue() 获取自定义头部 Value。
 * @method void setValue(string $Value) 设置自定义头部 Value。
 */
class CustomizedHeader extends AbstractModel
{
    /**
     * @var string 自定义头部 Key。
     */
    public $Key;

    /**
     * @var string 自定义头部 Value。
     */
    public $Value;

    /**
     * @param string $Key 自定义头部 Key。
     * @param string $Value 自定义头部 Value。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
