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
 * RateLimit规则
 *
 * @method integer getThreshold() 获取速率限制统计阈值，单位是次，取值范围0-4294967294。
 * @method void setThreshold(integer $Threshold) 设置速率限制统计阈值，单位是次，取值范围0-4294967294。
 * @method integer getPeriod() 获取速率限制统计时间，取值范围 10/20/30/40/50/60 单位是秒。
 * @method void setPeriod(integer $Period) 设置速率限制统计时间，取值范围 10/20/30/40/50/60 单位是秒。
 * @method string getRuleName() 获取规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method void setRuleName(string $RuleName) 设置规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method string getAction() 获取处置动作，取值有： <li>monitor：观察；</li> <li>drop：拦截；</li><li> redirect：重定向；</li><li> page：指定页面；</li><li>alg：JavaScript 挑战。</li>	
 * @method void setAction(string $Action) 设置处置动作，取值有： <li>monitor：观察；</li> <li>drop：拦截；</li><li> redirect：重定向；</li><li> page：指定页面；</li><li>alg：JavaScript 挑战。</li>	
 * @method integer getPunishTime() 获取惩罚时长，0-2天。
 * @method void setPunishTime(integer $PunishTime) 设置惩罚时长，0-2天。
 * @method string getPunishTimeUnit() 获取处罚时长单位，取值有：
<li>second：秒；</li>
<li>minutes：分钟；</li>
<li>hour：小时。</li>
 * @method void setPunishTimeUnit(string $PunishTimeUnit) 设置处罚时长单位，取值有：
<li>second：秒；</li>
<li>minutes：分钟；</li>
<li>hour：小时。</li>
 * @method string getRuleStatus() 获取规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认 on 生效。
 * @method void setRuleStatus(string $RuleStatus) 设置规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认 on 生效。
 * @method array getAclConditions() 获取规则详情。
 * @method void setAclConditions(array $AclConditions) 设置规则详情。
 * @method integer getRulePriority() 获取规则权重，取值范围0-100。
 * @method void setRulePriority(integer $RulePriority) 设置规则权重，取值范围0-100。
 * @method integer getRuleID() 获取规则 Id。仅出参使用。
 * @method void setRuleID(integer $RuleID) 设置规则 Id。仅出参使用。
 * @method array getFreqFields() 获取过滤词，取值有：
<li>sip：客户端 ip。</li>
默认为空字符串。
 * @method void setFreqFields(array $FreqFields) 设置过滤词，取值有：
<li>sip：客户端 ip。</li>
默认为空字符串。
 * @method string getUpdateTime() 获取更新时间。仅出参使用。修改时默认为当前时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。仅出参使用。修改时默认为当前时间。
 * @method array getFreqScope() 获取统计范围。取值有：
<li>source_to_eo：（响应）源站到  EdgeOne；</li>
<li>client_to_eo：（请求）客户端到  EdgeOne。</li>
默认为 source_to_eo。
 * @method void setFreqScope(array $FreqScope) 设置统计范围。取值有：
<li>source_to_eo：（响应）源站到  EdgeOne；</li>
<li>client_to_eo：（请求）客户端到  EdgeOne。</li>
默认为 source_to_eo。
 * @method string getName() 获取自定义返回页面的名称。Action 是 page 时必填，且不能为空。
 * @method void setName(string $Name) 设置自定义返回页面的名称。Action 是 page 时必填，且不能为空。
 * @method string getCustomResponseId() 获取自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Action 是 page 时必填，且不能为空。	
 * @method void setCustomResponseId(string $CustomResponseId) 设置自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Action 是 page 时必填，且不能为空。	
 * @method integer getResponseCode() 获取自定义返回页面的响应码。Action 是 page 时必填，且不能为空，取值: 100~600，不支持 3xx 响应码。默认值：567。
 * @method void setResponseCode(integer $ResponseCode) 设置自定义返回页面的响应码。Action 是 page 时必填，且不能为空，取值: 100~600，不支持 3xx 响应码。默认值：567。
 * @method string getRedirectUrl() 获取重定向时候的地址。Action 是 redirect 时必填，且不能为空。
 * @method void setRedirectUrl(string $RedirectUrl) 设置重定向时候的地址。Action 是 redirect 时必填，且不能为空。
 */
class RateLimitUserRule extends AbstractModel
{
    /**
     * @var integer 速率限制统计阈值，单位是次，取值范围0-4294967294。
     */
    public $Threshold;

    /**
     * @var integer 速率限制统计时间，取值范围 10/20/30/40/50/60 单位是秒。
     */
    public $Period;

    /**
     * @var string 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     */
    public $RuleName;

    /**
     * @var string 处置动作，取值有： <li>monitor：观察；</li> <li>drop：拦截；</li><li> redirect：重定向；</li><li> page：指定页面；</li><li>alg：JavaScript 挑战。</li>	
     */
    public $Action;

    /**
     * @var integer 惩罚时长，0-2天。
     */
    public $PunishTime;

    /**
     * @var string 处罚时长单位，取值有：
<li>second：秒；</li>
<li>minutes：分钟；</li>
<li>hour：小时。</li>
     */
    public $PunishTimeUnit;

    /**
     * @var string 规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认 on 生效。
     */
    public $RuleStatus;

    /**
     * @var array 规则详情。
     */
    public $AclConditions;

    /**
     * @var integer 规则权重，取值范围0-100。
     */
    public $RulePriority;

    /**
     * @var integer 规则 Id。仅出参使用。
     */
    public $RuleID;

    /**
     * @var array 过滤词，取值有：
<li>sip：客户端 ip。</li>
默认为空字符串。
     */
    public $FreqFields;

    /**
     * @var string 更新时间。仅出参使用。修改时默认为当前时间。
     */
    public $UpdateTime;

    /**
     * @var array 统计范围。取值有：
<li>source_to_eo：（响应）源站到  EdgeOne；</li>
<li>client_to_eo：（请求）客户端到  EdgeOne。</li>
默认为 source_to_eo。
     */
    public $FreqScope;

    /**
     * @var string 自定义返回页面的名称。Action 是 page 时必填，且不能为空。
     */
    public $Name;

    /**
     * @var string 自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Action 是 page 时必填，且不能为空。	
     */
    public $CustomResponseId;

    /**
     * @var integer 自定义返回页面的响应码。Action 是 page 时必填，且不能为空，取值: 100~600，不支持 3xx 响应码。默认值：567。
     */
    public $ResponseCode;

    /**
     * @var string 重定向时候的地址。Action 是 redirect 时必填，且不能为空。
     */
    public $RedirectUrl;

    /**
     * @param integer $Threshold 速率限制统计阈值，单位是次，取值范围0-4294967294。
     * @param integer $Period 速率限制统计时间，取值范围 10/20/30/40/50/60 单位是秒。
     * @param string $RuleName 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     * @param string $Action 处置动作，取值有： <li>monitor：观察；</li> <li>drop：拦截；</li><li> redirect：重定向；</li><li> page：指定页面；</li><li>alg：JavaScript 挑战。</li>	
     * @param integer $PunishTime 惩罚时长，0-2天。
     * @param string $PunishTimeUnit 处罚时长单位，取值有：
<li>second：秒；</li>
<li>minutes：分钟；</li>
<li>hour：小时。</li>
     * @param string $RuleStatus 规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认 on 生效。
     * @param array $AclConditions 规则详情。
     * @param integer $RulePriority 规则权重，取值范围0-100。
     * @param integer $RuleID 规则 Id。仅出参使用。
     * @param array $FreqFields 过滤词，取值有：
<li>sip：客户端 ip。</li>
默认为空字符串。
     * @param string $UpdateTime 更新时间。仅出参使用。修改时默认为当前时间。
     * @param array $FreqScope 统计范围。取值有：
<li>source_to_eo：（响应）源站到  EdgeOne；</li>
<li>client_to_eo：（请求）客户端到  EdgeOne。</li>
默认为 source_to_eo。
     * @param string $Name 自定义返回页面的名称。Action 是 page 时必填，且不能为空。
     * @param string $CustomResponseId 自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Action 是 page 时必填，且不能为空。	
     * @param integer $ResponseCode 自定义返回页面的响应码。Action 是 page 时必填，且不能为空，取值: 100~600，不支持 3xx 响应码。默认值：567。
     * @param string $RedirectUrl 重定向时候的地址。Action 是 redirect 时必填，且不能为空。
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FreqScope",$param) and $param["FreqScope"] !== null) {
            $this->FreqScope = $param["FreqScope"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CustomResponseId",$param) and $param["CustomResponseId"] !== null) {
            $this->CustomResponseId = $param["CustomResponseId"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
