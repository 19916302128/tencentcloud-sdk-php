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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDefaultStorageRegion请求参数结构体
 *
 * @method string getStorageRegion() 获取默认的存储地域，必须是已经开通的地域」，建议改成「默认的存储地域，必须是已经开通的地域（通过 DescribeStorageRegions 接口查询）。
 * @method void setStorageRegion(string $StorageRegion) 设置默认的存储地域，必须是已经开通的地域」，建议改成「默认的存储地域，必须是已经开通的地域（通过 DescribeStorageRegions 接口查询）。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class ModifyDefaultStorageRegionRequest extends AbstractModel
{
    /**
     * @var string 默认的存储地域，必须是已经开通的地域」，建议改成「默认的存储地域，必须是已经开通的地域（通过 DescribeStorageRegions 接口查询）。
     */
    public $StorageRegion;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $StorageRegion 默认的存储地域，必须是已经开通的地域」，建议改成「默认的存储地域，必须是已经开通的地域（通过 DescribeStorageRegions 接口查询）。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}