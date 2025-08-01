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
 * 安全策略模板的绑定关系。
 *
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method array getTemplateScope() 获取模板绑定状态。
 * @method void setTemplateScope(array $TemplateScope) 设置模板绑定状态。
 */
class SecurityTemplateBinding extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var array 模板绑定状态。
     */
    public $TemplateScope;

    /**
     * @param string $TemplateId 模板ID
     * @param array $TemplateScope 模板绑定状态。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateScope",$param) and $param["TemplateScope"] !== null) {
            $this->TemplateScope = [];
            foreach ($param["TemplateScope"] as $key => $value){
                $obj = new TemplateScope();
                $obj->deserialize($value);
                array_push($this->TemplateScope, $obj);
            }
        }
    }
}
