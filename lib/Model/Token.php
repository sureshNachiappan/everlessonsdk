<?php
/**
 * Token
 *
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

namespace Everlesson\Model;

use \ArrayAccess;
/**
 * Token Class Doc Comment
 *
 * @category    Class
 * @description Model for Token
 * @package     Everlesson
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Token implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'code' => 'int',
        'message' => 'string',
        'status' => 'string',
        'token' => 'string',
        'type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'code' => 'code',
        'message' => 'message',
        'status' => 'status',
        'token' => 'token',
        'type' => 'type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'code' => 'setCode',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'token' => 'setToken',
        'type' => 'setType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'code' => 'getCode',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'token' => 'getToken',
        'type' => 'getType'
    );
  
    
    /**
      * $code 
      * @var int
      */
    protected $code;
    
    /**
      * $message 
      * @var string
      */
    protected $message;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    
    /**
      * $token 
      * @var string
      */
    protected $token;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->code = $data["code"];
            $this->message = $data["message"];
            $this->status = $data["status"];
            $this->token = $data["token"];
            $this->type = $data["type"];
        }
    }
    
    /**
     * Gets code
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param int $code 
     * @return $this
     */
    public function setCode($code)
    {
        
        $this->code = $code;
        return $this;
    }
    
    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
  
    /**
     * Sets message
     * @param string $message 
     * @return $this
     */
    public function setMessage($message)
    {
        
        $this->message = $message;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
  
    /**
     * Sets token
     * @param string $token 
     * @return $this
     */
    public function setToken($token)
    {
        
        $this->token = $token;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Everlesson\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Everlesson\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
