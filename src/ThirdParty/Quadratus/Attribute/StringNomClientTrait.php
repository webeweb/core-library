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
 * Nom client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomClientTrait {

    /**
     * Nom client.
     *
     * @var string
     */
    private $nomClient;

    /**
     * Get the nom client.
     *
     * @return string Returns the nom client.
     */
    public function getNomClient() {
        return $this->nomClient;
    }

    /**
     * Set the nom client.
     *
     * @param string $nomClient The nom client.
     */
    public function setNomClient($nomClient) {
        $this->nomClient = $nomClient;
        return $this;
    }
}
