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
 * Espace client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEspaceClientTrait {

    /**
     * Espace client.
     *
     * @var bool
     */
    private $espaceClient;

    /**
     * Get the espace client.
     *
     * @return bool Returns the espace client.
     */
    public function getEspaceClient() {
        return $this->espaceClient;
    }

    /**
     * Set the espace client.
     *
     * @param bool $espaceClient The espace client.
     */
    public function setEspaceClient($espaceClient) {
        $this->espaceClient = $espaceClient;
        return $this;
    }
}
