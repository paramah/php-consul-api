<?php namespace DCarbone\PHPConsulAPI\Catalog;

/*
   Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\AbstractModel;

/**
 * Class CatalogDeregistration
 * @package DCarbone\PHPConsulAPI\Catalog
 */
class CatalogDeregistration extends AbstractModel {
    /** @var string */
    public $Node = '';
    /** @var string */
    public $Address = '';
    /** @var string */
    public $Datacenter = '';
    /** @var string */
    public $ServiceID = '';
    /** @var string */
    public $CheckID = '';

    /**
     * @return string
     */
    public function getNode(): string {
        return $this->Node;
    }

    /**
     * @param string $node
     * @return \DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration
     */
    public function setNode(string $node): CatalogDeregistration {
        $this->Node = $node;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string {
        return $this->Address;
    }

    /**
     * @param string $address
     * @return \DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration
     */
    public function setAddress(string $address): CatalogDeregistration {
        $this->Address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatacenter(): string {
        return $this->Datacenter;
    }

    /**
     * @param string $datacenter
     * @return \DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration
     */
    public function setDatacenter(string $datacenter): CatalogDeregistration {
        $this->Datacenter = $datacenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceID(): string {
        return $this->ServiceID;
    }

    /**
     * @param string $serviceID
     * @return \DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration
     */
    public function setServiceID(string $serviceID): CatalogDeregistration {
        $this->ServiceID = $serviceID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckID(): string {
        return $this->CheckID;
    }

    /**
     * @param string $checkID
     * @return \DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration
     */
    public function setCheckID(string $checkID): CatalogDeregistration {
        $this->CheckID = $checkID;
        return $this;
    }
}