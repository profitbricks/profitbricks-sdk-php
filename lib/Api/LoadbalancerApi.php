<?php
/**
 * LoadBalancerApi
 * PHP version 5
 *
 * @category Class
 * @package  ProfitBricks\Client

 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 
 */
/**
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


namespace ProfitBricks\Client\Api;

use \ProfitBricks\Client\Configuration;
use \ProfitBricks\Client\ApiClient;
use \ProfitBricks\Client\ApiException;
use \ProfitBricks\Client\ObjectSerializer;

/**
 * LoadBalancerApi Class Doc Comment
 *
 * @category Class
 * @package  ProfitBricks\Client
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class LoadBalancerApi
{

    /**
     * API Client
     * @var \ProfitBricks\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     * @param \ProfitBricks\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     * @return \ProfitBricks\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     * @param \ProfitBricks\Client\ApiClient $apiClient set the API client
     * @return LoadBalancerApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }


    /**
     * create
     *
     * Create a Lan
     *
     * @param string $datacenter_id  (required)
     * @param \ProfitBricks\Client\Model\Loadbalancer $loadbalancer Loadbalancer to be created (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return \ProfitBricks\Client\Model\Loadbalancer
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function create($datacenter_id, $loadbalancer, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createWithHttpInfo ($datacenter_id, $loadbalancer, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * createWithHttpInfo
     *
     * Create a Lan
     *
     * @param string $datacenter_id  (required)
     * @param \ProfitBricks\Client\Model\Loadbalancer $loadbalancer Loadbalancer to be created (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of \ProfitBricks\Client\Model\Loadbalancer, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function createWithHttpInfo($datacenter_id, $loadbalancer, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling create');
        }
        // verify the required parameter 'loadbalancer' is set
        if ($loadbalancer === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer when calling create');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // body params
        $_tempBody = null;
        if (isset($loadbalancer)) {
            $_tempBody = $loadbalancer;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\ProfitBricks\Client\Model\Loadbalancer'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, '\ProfitBricks\Client\Model\Loadbalancer', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 202:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Loadbalancer', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

    /**
     * delete
     *
     * Delete a Loadbalancer.
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return object
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function delete($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteWithHttpInfo ($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * deleteWithHttpInfo
     *
     * Delete a Loadbalancer.
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function deleteWithHttpInfo($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling delete');
        }
        // verify the required parameter 'loadbalancer_id' is set
        if ($loadbalancer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer_id when calling delete');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers/{loadbalancerId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('*/*'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }// path params

        if ($loadbalancer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loadbalancerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loadbalancer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);




        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams, 'object'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 202:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

    /**
     * findAll
     *
     * List Load Balancers
     *
     * @param string $datacenter_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return \ProfitBricks\Client\Model\Loadbalancers
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function findAll($datacenter_id, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->findAllWithHttpInfo ($datacenter_id, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * findAllWithHttpInfo
     *
     * List Load Balancers
     *
     * @param string $datacenter_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of \ProfitBricks\Client\Model\Loadbalancers, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function findAllWithHttpInfo($datacenter_id, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling findAll');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/vnd.profitbricks.collection+json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('*/*'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);




        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\ProfitBricks\Client\Model\Loadbalancers'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, '\ProfitBricks\Client\Model\Loadbalancers', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Loadbalancers', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

    /**
     * findById
     *
     * Retrieve a loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return \ProfitBricks\Client\Model\Loadbalancer
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function findById($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->findByIdWithHttpInfo ($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * findByIdWithHttpInfo
     *
     * Retrieve a loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of \ProfitBricks\Client\Model\Loadbalancer, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function findByIdWithHttpInfo($datacenter_id, $loadbalancer_id, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling findById');
        }
        // verify the required parameter 'loadbalancer_id' is set
        if ($loadbalancer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer_id when calling findById');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers/{loadbalancerId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('*/*'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }// path params

        if ($loadbalancer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loadbalancerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loadbalancer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);




        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\ProfitBricks\Client\Model\Loadbalancer'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, '\ProfitBricks\Client\Model\Loadbalancer', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Loadbalancer', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

    /**
     * partialUpdate
     *
     * Partially modify a Loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param \ProfitBricks\Client\Model\LoadbalancerProperties $loadbalancer Modified Loadbalancer (required)
     * @param object $body  (optional)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return \ProfitBricks\Client\Model\Loadbalancer
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function partialUpdate($datacenter_id, $loadbalancer_id, $loadbalancer, $body = null, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->partialUpdateWithHttpInfo ($datacenter_id, $loadbalancer_id, $loadbalancer, $body, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * partialUpdateWithHttpInfo
     *
     * Partially modify a Loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param \ProfitBricks\Client\Model\LoadbalancerProperties $loadbalancer Modified Loadbalancer (required)
     * @param object $body  (optional)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of \ProfitBricks\Client\Model\Loadbalancer, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function partialUpdateWithHttpInfo($datacenter_id, $loadbalancer_id, $loadbalancer, $body = null, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling partialUpdate');
        }
        // verify the required parameter 'loadbalancer_id' is set
        if ($loadbalancer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer_id when calling partialUpdate');
        }
        // verify the required parameter 'loadbalancer' is set
        if ($loadbalancer === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer when calling partialUpdate');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers/{loadbalancerId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }// path params

        if ($loadbalancer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loadbalancerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loadbalancer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }// body params
        $_tempBody = null;
        if (isset($loadbalancer)) {
            $_tempBody = $loadbalancer;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PATCH',
                $queryParams, $httpBody,
                $headerParams, '\ProfitBricks\Client\Model\Loadbalancer'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, '\ProfitBricks\Client\Model\Loadbalancer', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 202:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Loadbalancer', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

    /**
     * update
     *
     * Modify a Loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param \ProfitBricks\Client\Model\Loadbalancer $loadbalancer Modified Loadbalancer (required)
     * @param object $body  (optional)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return \ProfitBricks\Client\Model\Loadbalancer
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function update($datacenter_id, $loadbalancer_id, $loadbalancer, $body = null, $pretty_print_query_parameter = null, $depth = null)
    {
        list($response, $statusCode, $httpHeader) = $this->updateWithHttpInfo ($datacenter_id, $loadbalancer_id, $loadbalancer, $body, $pretty_print_query_parameter, $depth);
        return $response;
    }


    /**
     * updateWithHttpInfo
     *
     * Modify a Loadbalancer
     *
     * @param string $datacenter_id  (required)
     * @param map[string,string] $loadbalancer_id  (required)
     * @param \ProfitBricks\Client\Model\Loadbalancer $loadbalancer Modified Loadbalancer (required)
     * @param object $body  (optional)
     * @param bool $pretty_print_query_parameter Controls whether response is pretty-printed (with indentation and new lines) (optional, default to true)
     * @param int $depth Controls the details depth of response objects. \nEg. GET /datacenters/[ID]\n\t- depth=0: only direct properties are included. Children (servers etc.) are not included\n\t- depth=1: direct properties and children references are included\n\t- depth=2: direct properties and children properties are included\n\t- depth=3: direct properties and children properties and children&#39;s children are included\n\t- depth=... and so on (optional, default to 0)
     * @return Array of \ProfitBricks\Client\Model\Loadbalancer, HTTP status code, HTTP response headers (array of strings)
     * @throws \ProfitBricks\Client\ApiException on non-2xx response
     */
    public function updateWithHttpInfo($datacenter_id, $loadbalancer_id, $loadbalancer, $body = null, $pretty_print_query_parameter = null, $depth = null)
    {

        // verify the required parameter 'datacenter_id' is set
        if ($datacenter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $datacenter_id when calling update');
        }
        // verify the required parameter 'loadbalancer_id' is set
        if ($loadbalancer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer_id when calling update');
        }
        // verify the required parameter 'loadbalancer' is set
        if ($loadbalancer === null) {
            throw new \InvalidArgumentException('Missing the required parameter $loadbalancer when calling update');
        }

        // parse inputs
        $resourcePath = "/datacenters/{datacenterId}/loadbalancers/{loadbalancerId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));

        // query params

        if ($pretty_print_query_parameter !== null) {
            $queryParams['Pretty print query parameter'] = $this->apiClient->getSerializer()->toQueryValue($pretty_print_query_parameter);
        }// query params

        if ($depth !== null) {
            $queryParams['depth'] = $this->apiClient->getSerializer()->toQueryValue($depth);
        }

        // path params

        if ($datacenter_id !== null) {
            $resourcePath = str_replace(
                "{" . "datacenterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($datacenter_id),
                $resourcePath
            );
        }// path params

        if ($loadbalancer_id !== null) {
            $resourcePath = str_replace(
                "{" . "loadbalancerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($loadbalancer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }// body params
        $_tempBody = null;
        if (isset($loadbalancer)) {
            $_tempBody = $loadbalancer;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\ProfitBricks\Client\Model\Loadbalancer'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ProfitBricks\Client\ObjectSerializer::deserialize($response, '\ProfitBricks\Client\Model\Loadbalancer', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 202:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Loadbalancer', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \ProfitBricks\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\ProfitBricks\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }

            throw $e;
        }
    }

}
