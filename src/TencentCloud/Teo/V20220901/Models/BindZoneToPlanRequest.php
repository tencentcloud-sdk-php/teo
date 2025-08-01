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
 * BindZoneToPlan请求参数结构体
 *
 * @method string getZoneId() 获取未绑定套餐的站点ID。
 * @method void setZoneId(string $ZoneId) 设置未绑定套餐的站点ID。
 * @method string getPlanId() 获取待绑定的目标套餐ID。
 * @method void setPlanId(string $PlanId) 设置待绑定的目标套餐ID。
 */
class BindZoneToPlanRequest extends AbstractModel
{
    /**
     * @var string 未绑定套餐的站点ID。
     */
    public $ZoneId;

    /**
     * @var string 待绑定的目标套餐ID。
     */
    public $PlanId;

    /**
     * @param string $ZoneId 未绑定套餐的站点ID。
     * @param string $PlanId 待绑定的目标套餐ID。
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

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }
    }
}
