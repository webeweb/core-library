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
 * Type client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeClientTrait {

    /**
     * Type client.
     *
     * @var string
     */
    private $typeClient;

    /**
     * Get the type client.
     *
     * @return string Returns the type client.
     */
    public function getTypeClient() {
        return $this->typeClient;
    }

    /**
     * Set the type client.
     *
     * @param string $typeClient The type client.
     */
    public function setTypeClient($typeClient) {
        $this->typeClient = $typeClient;
        return $this;
    }
}
