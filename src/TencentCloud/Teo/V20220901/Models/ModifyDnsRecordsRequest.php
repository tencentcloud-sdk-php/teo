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
 * ModifyDnsRecords请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID 。
 * @method void setZoneId(string $ZoneId) 设置站点 ID 。
 * @method array getDnsRecords() 获取DNS 记录修改数据列表，一次最多修改100条。
 * @method void setDnsRecords(array $DnsRecords) 设置DNS 记录修改数据列表，一次最多修改100条。
 */
class ModifyDnsRecordsRequest extends AbstractModel
{
    /**
     * @var string 站点 ID 。
     */
    public $ZoneId;

    /**
     * @var array DNS 记录修改数据列表，一次最多修改100条。
     */
    public $DnsRecords;

    /**
     * @param string $ZoneId 站点 ID 。
     * @param array $DnsRecords DNS 记录修改数据列表，一次最多修改100条。
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

        if (array_key_exists("DnsRecords",$param) and $param["DnsRecords"] !== null) {
            $this->DnsRecords = [];
            foreach ($param["DnsRecords"] as $key => $value){
                $obj = new DnsRecord();
                $obj->deserialize($value);
                array_push($this->DnsRecords, $obj);
            }
        }
    }
}
