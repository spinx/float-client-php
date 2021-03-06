<?php
/**
 * AccountsApi
 * PHP version 5
 *
 * @category Class
 * @package  Float\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Reference
 *
 * This API allows 3rd party integration of your Float data.
 *
 * OpenAPI spec version: 3.0.0-beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Float\Client\Api;

use \Float\Client\ApiClient;
use \Float\Client\ApiException;
use \Float\Client\Configuration;
use \Float\Client\ObjectSerializer;

/**
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  Float\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
{
    /**
     * API Client
     *
     * @var \Float\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Float\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Float\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Float\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Float\Client\ApiClient $apiClient set the API client
     *
     * @return AccountsApi
     */
    public function setApiClient(\Float\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAccounts
     *
     * List accounts
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Account[]
     */
    public function getAccounts()
    {
        list($response) = $this->getAccountsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAccountsWithHttpInfo
     *
     * List accounts
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Account[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/accounts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Float\Client\Model\Account[]',
                '/accounts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Account[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Account[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
