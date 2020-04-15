<?php
/**
 * TOP API: cainiao.global.handover.commit request
 * 
 * @author auto create
 * @since 1.0, 2020.03.17
 */
class CainiaoGlobalHandoverCommitRequest
{
	/** 
	 * ISV名称，ISV：ISV-ISV英文或拼音名称、商家ERP：SELLER-商家英文或拼音名称
	 **/
	private $client;
	
	/** 
	 * 交接单id
	 **/
	private $handoverOrderId;
	
	/** 
	 * 多语言
	 **/
	private $locale;
	
	/** 
	 * 要创建交接单的小包编码集合，数量上限200
	 **/
	private $orderCodeList;
	
	/** 
	 * 揽收信息，默认为关联小包的揽收信息
	 **/
	private $pickupInfo;
	
	/** 
	 * 大包备注
	 **/
	private $remark;
	
	/** 
	 * 退件信息，默认为关联小包的退件信息
	 **/
	private $returnInfo;
	
	/** 
	 * 交接单类型：cainiao_pickup(菜鸟揽收)、self_post(自寄)
	 **/
	private $type;
	
	/** 
	 * 用户信息
	 **/
	private $userInfo;
	
	/** 
	 * 大包重量
	 **/
	private $weight;
	
	/** 
	 * 重量单位，克:g, 千克:kg，默认g
	 **/
	private $weightUnit;
	
	private $apiParas = array();
	
	public function setClient($client)
	{
		$this->client = $client;
		$this->apiParas["client"] = $client;
	}

	public function getClient()
	{
		return $this->client;
	}

	public function setHandoverOrderId($handoverOrderId)
	{
		$this->handoverOrderId = $handoverOrderId;
		$this->apiParas["handover_order_id"] = $handoverOrderId;
	}

	public function getHandoverOrderId()
	{
		return $this->handoverOrderId;
	}

	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function setOrderCodeList($orderCodeList)
	{
		$this->orderCodeList = $orderCodeList;
		$this->apiParas["order_code_list"] = $orderCodeList;
	}

	public function getOrderCodeList()
	{
		return $this->orderCodeList;
	}

	public function setPickupInfo($pickupInfo)
	{
		$this->pickupInfo = $pickupInfo;
		$this->apiParas["pickup_info"] = $pickupInfo;
	}

	public function getPickupInfo()
	{
		return $this->pickupInfo;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setReturnInfo($returnInfo)
	{
		$this->returnInfo = $returnInfo;
		$this->apiParas["return_info"] = $returnInfo;
	}

	public function getReturnInfo()
	{
		return $this->returnInfo;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setUserInfo($userInfo)
	{
		$this->userInfo = $userInfo;
		$this->apiParas["user_info"] = $userInfo;
	}

	public function getUserInfo()
	{
		return $this->userInfo;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWeightUnit($weightUnit)
	{
		$this->weightUnit = $weightUnit;
		$this->apiParas["weight_unit"] = $weightUnit;
	}

	public function getWeightUnit()
	{
		return $this->weightUnit;
	}

	public function getApiMethodName()
	{
		return "cainiao.global.handover.commit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->client,"client");
		RequestCheckUtil::checkNotNull($this->orderCodeList,"orderCodeList");
		RequestCheckUtil::checkMaxListSize($this->orderCodeList,200,"orderCodeList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
