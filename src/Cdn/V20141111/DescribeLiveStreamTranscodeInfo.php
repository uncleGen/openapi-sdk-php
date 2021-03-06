<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLiveStreamTranscodeInfo
 *
 * @method string getSecurityToken()
 * @method string getOwnerId()
 * @method string getDomainTranscodeName()
 */
class DescribeLiveStreamTranscodeInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeLiveStreamTranscodeInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainTranscodeName() instead.
     *
     * @param string $domainTranscodeName
     *
     * @return $this
     */
    public function setDomainTranscodeName($domainTranscodeName)
    {
        return $this->withDomainTranscodeName($domainTranscodeName);
    }

    /**
     * @param string $domainTranscodeName
     *
     * @return $this
     */
    public function withDomainTranscodeName($domainTranscodeName)
    {
        $this->data['DomainTranscodeName'] = $domainTranscodeName;
        $this->options['query']['DomainTranscodeName'] = $domainTranscodeName;

        return $this;
    }
}
