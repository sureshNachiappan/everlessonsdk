<?php
/**
 * GetProgramApi
 * PHP version 5
 *
 * @category Class
 * @package  Everlesson
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Everlesson\Api;

use \Everlesson\Configuration;
use \Everlesson\ApiClient;
use \Everlesson\ApiException;
use \Everlesson\ObjectSerializer;

/**
 * GetProgramApi Class Doc Comment
 *
 * @category Class
 * @package  Everlesson
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProgramApi
{

    /**
     * API Client
     * @var \Everlesson\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Everlesson\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.memberportal.io/v0');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Everlesson\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Everlesson\ApiClient $apiClient set the API client
     * @return GetProgramApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getProgram
     *
     * 
     *
     * @param string $token token (required)
     * @param int $membership_id membership id (required)
     * @return string[]
     * @throws \Everlesson\ApiException on non-2xx response
     */
    public function getProgram($token, $membership_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getProgramWithHttpInfo ($token, $membership_id);
        return $response; 
    }


    /**
     * getProgramWithHttpInfo
     *
     * 
     *
     * @param string $token token (required)
     * @param int $membership_id membership id (required)
     * @return Array of string[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Everlesson\ApiException on non-2xx response
     */
    public function getProgramWithHttpInfo($token, $membership_id)
    {
        
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling getProgram');
        }
        // verify the required parameter 'membership_id' is set
        if ($membership_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $membership_id when calling getProgram');
        }
  
        // parse inputs
        $resourcePath = "/getProgram";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/x-www-form-urlencoded'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($token !== null) {
            
            
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
            
        }// form params
        if ($membership_id !== null) {
            
            
            $formParams['membership_id'] = $this->apiClient->getSerializer()->toFormValue($membership_id);
            
        }
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, 'string[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Everlesson\ObjectSerializer::deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Everlesson\ObjectSerializer::deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
