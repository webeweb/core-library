<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Type code client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCodeClientTrait {

    /**
     * Type code client.
     *
     * @var string
     */
    private $typeCodeClient;

    /**
     * Get the type code client.
     *
     * @return string Returns the type code client.
     */
    public function getTypeCodeClient() {
        return $this->typeCodeClient;
    }

    /**
     * Set the type code client.
     *
     * @param string $typeCodeClient The type code client.
     */
    public function setTypeCodeClient($typeCodeClient) {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }
}
