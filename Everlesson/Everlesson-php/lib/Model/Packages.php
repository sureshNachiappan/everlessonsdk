<?php
/**
 * Packages
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
 * Packages Class Doc Comment
 *
 * @category    Class
 * @description Model for Packages
 * @package     Everlesson
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Packages implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'package_id' => 'string',
        'package_name' => 'string',
        'product_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'package_id' => 'package_id',
        'package_name' => 'package_name',
        'product_id' => 'product_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'package_id' => 'setPackageId',
        'package_name' => 'setPackageName',
        'product_id' => 'setProductId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'package_id' => 'getPackageId',
        'package_name' => 'getPackageName',
        'product_id' => 'getProductId'
    );
  
    
    /**
      * $package_id 
      * @var string
      */
    protected $package_id;
    
    /**
      * $package_name 
      * @var string
      */
    protected $package_name;
    
    /**
      * $product_id 
      * @var string
      */
    protected $product_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->package_id = $data["package_id"];
            $this->package_name = $data["package_name"];
            $this->product_id = $data["product_id"];
        }
    }
    
    /**
     * Gets package_id
     * @return string
     */
    public function getPackageId()
    {
        return $this->package_id;
    }
  
    /**
     * Sets package_id
     * @param string $package_id 
     * @return $this
     */
    public function setPackageId($package_id)
    {
        
        $this->package_id = $package_id;
        return $this;
    }
    
    /**
     * Gets package_name
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }
  
    /**
     * Sets package_name
     * @param string $package_name 
     * @return $this
     */
    public function setPackageName($package_name)
    {
        
        $this->package_name = $package_name;
        return $this;
    }
    
    /**
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }
  
    /**
     * Sets product_id
     * @param string $product_id 
     * @return $this
     */
    public function setProductId($product_id)
    {
        
        $this->product_id = $product_id;
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
