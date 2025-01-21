<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 回源请求参数 Cookie 配置。
 *
 * @method string getSwitch() 获取回源请求参数 Cookie 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置回源请求参数 Cookie 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getAction() 获取回源请求参数 Cookie 模式。当 Switch 为 on 时，该参数必填。取值有：
<li>full：表示全部保留；</li>
<li>ignore：表示全部忽略；</li>
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>
 * @method void setAction(string $Action) 设置回源请求参数 Cookie 模式。当 Switch 为 on 时，该参数必填。取值有：
<li>full：表示全部保留；</li>
<li>ignore：表示全部忽略；</li>
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>
 * @method array getValues() 获取指定参数值。仅当查询字符串模式 Action 为 includeCustom 或者 excludeCustom 时该参数生效，用于指定需要保留或者忽略的参数。最大支持 10 个参数。
 * @method void setValues(array $Values) 设置指定参数值。仅当查询字符串模式 Action 为 includeCustom 或者 excludeCustom 时该参数生效，用于指定需要保留或者忽略的参数。最大支持 10 个参数。
 */
class UpstreamRequestCookie extends AbstractModel
{
    /**
     * @var string 回源请求参数 Cookie 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 回源请求参数 Cookie 模式。当 Switch 为 on 时，该参数必填。取值有：
<li>full：表示全部保留；</li>
<li>ignore：表示全部忽略；</li>
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>
     */
    public $Action;

    /**
     * @var array 指定参数值。仅当查询字符串模式 Action 为 includeCustom 或者 excludeCustom 时该参数生效，用于指定需要保留或者忽略的参数。最大支持 10 个参数。
     */
    public $Values;

    /**
     * @param string $Switch 回源请求参数 Cookie 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $Action 回源请求参数 Cookie 模式。当 Switch 为 on 时，该参数必填。取值有：
<li>full：表示全部保留；</li>
<li>ignore：表示全部忽略；</li>
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>
     * @param array $Values 指定参数值。仅当查询字符串模式 Action 为 includeCustom 或者 excludeCustom 时该参数生效，用于指定需要保留或者忽略的参数。最大支持 10 个参数。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
