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
 * Creation client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationClientTrait {

    /**
     * Creation client.
     *
     * @var bool
     */
    private $creationClient;

    /**
     * Get the creation client.
     *
     * @return bool Returns the creation client.
     */
    public function getCreationClient() {
        return $this->creationClient;
    }

    /**
     * Set the creation client.
     *
     * @param bool $creationClient The creation client.
     */
    public function setCreationClient($creationClient) {
        $this->creationClient = $creationClient;
        return $this;
    }
}
