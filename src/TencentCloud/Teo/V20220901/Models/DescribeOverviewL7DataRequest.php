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
 * DescribeOverviewL7Data请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method array getMetricNames() 获取查询的指标，取值有：
<li>l7Flow_outFlux: Edegone响应流量；</li>
<li>l7Flow_inFlux: Edgeone请求流量；</li>
<li>l7Flow_outBandwidth: Edegone响应带宽；</li>
<li>l7Flow_inBandwidth: Edegone请求带宽；</li>
<li>l7Flow_hit_outFlux: 缓存命中流量；</li>
<li>l7Flow_request: 访问请求数；</li>
<li>l7Flow_flux: 访问请求上行+下行流量；</li>
<li>l7Flow_bandwidth：访问请求上行+下行带宽。</li>
 * @method void setMetricNames(array $MetricNames) 设置查询的指标，取值有：
<li>l7Flow_outFlux: Edegone响应流量；</li>
<li>l7Flow_inFlux: Edgeone请求流量；</li>
<li>l7Flow_outBandwidth: Edegone响应带宽；</li>
<li>l7Flow_inBandwidth: Edegone请求带宽；</li>
<li>l7Flow_hit_outFlux: 缓存命中流量；</li>
<li>l7Flow_request: 访问请求数；</li>
<li>l7Flow_flux: 访问请求上行+下行流量；</li>
<li>l7Flow_bandwidth：访问请求上行+下行带宽。</li>
 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。
 * @method array getDomains() 获取查询的域名集合，此参数已经废弃。
 * @method void setDomains(array $Domains) 设置查询的域名集合，此参数已经废弃。
 * @method string getProtocol() 获取查询的协议类型，取值有：
<li>http: http协议；</li>
<li>https: https协议；</li>
<li>http2: http2协议；</li>
<li>all:  所有协议。</li>不填默认为all，此参数暂未生效。
 * @method void setProtocol(string $Protocol) 设置查询的协议类型，取值有：
<li>http: http协议；</li>
<li>https: https协议；</li>
<li>http2: http2协议；</li>
<li>all:  所有协议。</li>不填默认为all，此参数暂未生效。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method array getFilters() 获取过滤条件，详细的过滤条件Key值如下：
<li>socket<br>   按照【<strong>HTTP协议类型</strong>】进行过滤。<br>   对应的Value可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS协议；<br>   QUIC：QUIC协议。</li>
<li>domain<br>   按照【<strong>域名</strong>】进行过滤。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件Key值如下：
<li>socket<br>   按照【<strong>HTTP协议类型</strong>】进行过滤。<br>   对应的Value可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS协议；<br>   QUIC：QUIC协议。</li>
<li>domain<br>   按照【<strong>域名</strong>】进行过滤。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 */
class DescribeOverviewL7DataRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var array 查询的指标，取值有：
<li>l7Flow_outFlux: Edegone响应流量；</li>
<li>l7Flow_inFlux: Edgeone请求流量；</li>
<li>l7Flow_outBandwidth: Edegone响应带宽；</li>
<li>l7Flow_inBandwidth: Edegone请求带宽；</li>
<li>l7Flow_hit_outFlux: 缓存命中流量；</li>
<li>l7Flow_request: 访问请求数；</li>
<li>l7Flow_flux: 访问请求上行+下行流量；</li>
<li>l7Flow_bandwidth：访问请求上行+下行带宽。</li>
     */
    public $MetricNames;

    /**
     * @var array 站点 ID 集合，此参数必填。
     */
    public $ZoneIds;

    /**
     * @var array 查询的域名集合，此参数已经废弃。
     */
    public $Domains;

    /**
     * @var string 查询的协议类型，取值有：
<li>http: http协议；</li>
<li>https: https协议；</li>
<li>http2: http2协议；</li>
<li>all:  所有协议。</li>不填默认为all，此参数暂未生效。
     */
    public $Protocol;

    /**
     * @var string 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件Key值如下：
<li>socket<br>   按照【<strong>HTTP协议类型</strong>】进行过滤。<br>   对应的Value可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS协议；<br>   QUIC：QUIC协议。</li>
<li>domain<br>   按照【<strong>域名</strong>】进行过滤。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。</li>
     */
    public $Filters;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param array $MetricNames 查询的指标，取值有：
<li>l7Flow_outFlux: Edegone响应流量；</li>
<li>l7Flow_inFlux: Edgeone请求流量；</li>
<li>l7Flow_outBandwidth: Edegone响应带宽；</li>
<li>l7Flow_inBandwidth: Edegone请求带宽；</li>
<li>l7Flow_hit_outFlux: 缓存命中流量；</li>
<li>l7Flow_request: 访问请求数；</li>
<li>l7Flow_flux: 访问请求上行+下行流量；</li>
<li>l7Flow_bandwidth：访问请求上行+下行带宽。</li>
     * @param array $ZoneIds 站点 ID 集合，此参数必填。
     * @param array $Domains 查询的域名集合，此参数已经废弃。
     * @param string $Protocol 查询的协议类型，取值有：
<li>http: http协议；</li>
<li>https: https协议；</li>
<li>http2: http2协议；</li>
<li>all:  所有协议。</li>不填默认为all，此参数暂未生效。
     * @param string $Interval 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     * @param array $Filters 过滤条件，详细的过滤条件Key值如下：
<li>socket<br>   按照【<strong>HTTP协议类型</strong>】进行过滤。<br>   对应的Value可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS协议；<br>   QUIC：QUIC协议。</li>
<li>domain<br>   按照【<strong>域名</strong>】进行过滤。</li>
<li>tagKey<br>   按照【<strong>标签Key</strong>】进行过滤。</li>
<li>tagValue<br>   按照【<strong>标签Value</strong>】进行过滤。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
