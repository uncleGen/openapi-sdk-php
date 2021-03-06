<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySignature
 *
 * @method string getSecurityToken()
 * @method string getSignatureName()
 * @method string getSignatureKey()
 * @method string getSignatureId()
 * @method string getSignatureSecret()
 */
class ModifySignature extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'ModifySignature';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

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
     * @param string $signatureName
     *
     * @return $this
     */
    public function withSignatureName($signatureName)
    {
        $this->data['SignatureName'] = $signatureName;
        $this->options['query']['SignatureName'] = $signatureName;

        return $this;
    }

    /**
     * @param string $signatureKey
     *
     * @return $this
     */
    public function withSignatureKey($signatureKey)
    {
        $this->data['SignatureKey'] = $signatureKey;
        $this->options['query']['SignatureKey'] = $signatureKey;

        return $this;
    }

    /**
     * @param string $signatureId
     *
     * @return $this
     */
    public function withSignatureId($signatureId)
    {
        $this->data['SignatureId'] = $signatureId;
        $this->options['query']['SignatureId'] = $signatureId;

        return $this;
    }

    /**
     * @param string $signatureSecret
     *
     * @return $this
     */
    public function withSignatureSecret($signatureSecret)
    {
        $this->data['SignatureSecret'] = $signatureSecret;
        $this->options['query']['SignatureSecret'] = $signatureSecret;

        return $this;
    }
}
