<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RenewInstance
 *
 * @method string getPeriod()
 * @method string getPeriodUnit()
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getClientToken()
 */
class RenewInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'hsm';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'RenewInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'hsm';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPeriodUnit() instead.
     *
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        return $this->withPeriodUnit($periodUnit);
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function withPeriodUnit($periodUnit)
    {
        $this->data['PeriodUnit'] = $periodUnit;
        $this->options['query']['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }
}
