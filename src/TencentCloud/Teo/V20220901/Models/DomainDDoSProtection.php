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
 * 域名的独立 DDoS 防护信息。
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method string getSwitch() 获取域名的独立 DDoS 开关，取值为：
<li> on：已开启；</li>
<li> off：已关闭。</li>
 * @method void setSwitch(string $Switch) 设置域名的独立 DDoS 开关，取值为：
<li> on：已开启；</li>
<li> off：已关闭。</li>
 */
class DomainDDoSProtection extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var string 域名的独立 DDoS 开关，取值为：
<li> on：已开启；</li>
<li> off：已关闭。</li>
     */
    public $Switch;

    /**
     * @param string $Domain 域名。
     * @param string $Switch 域名的独立 DDoS 开关，取值为：
<li> on：已开启；</li>
<li> off：已关闭。</li>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
