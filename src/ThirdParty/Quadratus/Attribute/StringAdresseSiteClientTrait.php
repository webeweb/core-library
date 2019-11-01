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
 * Adresse site client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseSiteClientTrait {

    /**
     * Adresse site client.
     *
     * @var string
     */
    private $adresseSiteClient;

    /**
     * Get the adresse site client.
     *
     * @return string Returns the adresse site client.
     */
    public function getAdresseSiteClient() {
        return $this->adresseSiteClient;
    }

    /**
     * Set the adresse site client.
     *
     * @param string $adresseSiteClient The adresse site client.
     */
    public function setAdresseSiteClient($adresseSiteClient) {
        $this->adresseSiteClient = $adresseSiteClient;
        return $this;
    }
}
