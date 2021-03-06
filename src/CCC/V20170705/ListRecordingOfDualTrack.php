<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListRecordingOfDualTrack
 *
 * @method string getCallingNumber()
 * @method string getAgentId()
 * @method string getInstanceId()
 * @method string getCalledNumber()
 * @method string getPageSize()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getConnectId()
 * @method string getPageNumber()
 */
class ListRecordingOfDualTrack extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'ListRecordingOfDualTrack';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withCallingNumber() instead.
     *
     * @param string $callingNumber
     *
     * @return $this
     */
    public function setCallingNumber($callingNumber)
    {
        return $this->withCallingNumber($callingNumber);
    }

    /**
     * @param string $callingNumber
     *
     * @return $this
     */
    public function withCallingNumber($callingNumber)
    {
        $this->data['CallingNumber'] = $callingNumber;
        $this->options['query']['CallingNumber'] = $callingNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAgentId() instead.
     *
     * @param string $agentId
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        return $this->withAgentId($agentId);
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['AgentId'] = $agentId;

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
     * @deprecated deprecated since version 2.0, Use withCalledNumber() instead.
     *
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        return $this->withCalledNumber($calledNumber);
    }

    /**
     * @param string $calledNumber
     *
     * @return $this
     */
    public function withCalledNumber($calledNumber)
    {
        $this->data['CalledNumber'] = $calledNumber;
        $this->options['query']['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStopTime() instead.
     *
     * @param string $stopTime
     *
     * @return $this
     */
    public function setStopTime($stopTime)
    {
        return $this->withStopTime($stopTime);
    }

    /**
     * @param string $stopTime
     *
     * @return $this
     */
    public function withStopTime($stopTime)
    {
        $this->data['StopTime'] = $stopTime;
        $this->options['query']['StopTime'] = $stopTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConnectId() instead.
     *
     * @param string $connectId
     *
     * @return $this
     */
    public function setConnectId($connectId)
    {
        return $this->withConnectId($connectId);
    }

    /**
     * @param string $connectId
     *
     * @return $this
     */
    public function withConnectId($connectId)
    {
        $this->data['ConnectId'] = $connectId;
        $this->options['query']['ConnectId'] = $connectId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
