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
 * Prochain code client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProchainCodeClientTrait {

    /**
     * Prochain code client.
     *
     * @var string
     */
    private $prochainCodeClient;

    /**
     * Get the prochain code client.
     *
     * @return string Returns the prochain code client.
     */
    public function getProchainCodeClient() {
        return $this->prochainCodeClient;
    }

    /**
     * Set the prochain code client.
     *
     * @param string $prochainCodeClient The prochain code client.
     */
    public function setProchainCodeClient($prochainCodeClient) {
        $this->prochainCodeClient = $prochainCodeClient;
        return $this;
    }
}
