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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplicationProxyRule请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getProxyId() 获取代理ID
 * @method void setProxyId(string $ProxyId) 设置代理ID
 * @method string getProto() 获取协议，取值为TCP或者UDP
 * @method void setProto(string $Proto) 设置协议，取值为TCP或者UDP
 * @method array getPort() 获取端口，支持格式：
80：80端口
81-90：81至90端口
 * @method void setPort(array $Port) 设置端口，支持格式：
80：80端口
81-90：81至90端口
 * @method string getOriginType() 获取源站类型，取值：
custom：手动添加
origins：源站组
load_balancing：负载均衡
 * @method void setOriginType(string $OriginType) 设置源站类型，取值：
custom：手动添加
origins：源站组
load_balancing：负载均衡
 * @method array getOriginValue() 获取源站信息：
当OriginType=custom时，表示多个：
IP:端口
域名:端口
当OriginType=origins时，包含一个元素，表示源站组ID
当OriginType=load_balancing时，包含一个元素，表示负载均衡ID
 * @method void setOriginValue(array $OriginValue) 设置源站信息：
当OriginType=custom时，表示多个：
IP:端口
域名:端口
当OriginType=origins时，包含一个元素，表示源站组ID
当OriginType=load_balancing时，包含一个元素，表示负载均衡ID
 * @method string getForwardClientIp() 获取传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
 * @method void setForwardClientIp(string $ForwardClientIp) 设置传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
 * @method boolean getSessionPersist() 获取是否开启会话保持
 * @method void setSessionPersist(boolean $SessionPersist) 设置是否开启会话保持
 */
class CreateApplicationProxyRuleRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 代理ID
     */
    public $ProxyId;

    /**
     * @var string 协议，取值为TCP或者UDP
     */
    public $Proto;

    /**
     * @var array 端口，支持格式：
80：80端口
81-90：81至90端口
     */
    public $Port;

    /**
     * @var string 源站类型，取值：
custom：手动添加
origins：源站组
load_balancing：负载均衡
     */
    public $OriginType;

    /**
     * @var array 源站信息：
当OriginType=custom时，表示多个：
IP:端口
域名:端口
当OriginType=origins时，包含一个元素，表示源站组ID
当OriginType=load_balancing时，包含一个元素，表示负载均衡ID
     */
    public $OriginValue;

    /**
     * @var string 传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
     */
    public $ForwardClientIp;

    /**
     * @var boolean 是否开启会话保持
     */
    public $SessionPersist;

    /**
     * @param string $ZoneId 站点ID
     * @param string $ProxyId 代理ID
     * @param string $Proto 协议，取值为TCP或者UDP
     * @param array $Port 端口，支持格式：
80：80端口
81-90：81至90端口
     * @param string $OriginType 源站类型，取值：
custom：手动添加
origins：源站组
load_balancing：负载均衡
     * @param array $OriginValue 源站信息：
当OriginType=custom时，表示多个：
IP:端口
域名:端口
当OriginType=origins时，包含一个元素，表示源站组ID
当OriginType=load_balancing时，包含一个元素，表示负载均衡ID
     * @param string $ForwardClientIp 传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
     * @param boolean $SessionPersist 是否开启会话保持
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }
    }
}
