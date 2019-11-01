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
 * Adresse msa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseMsaTrait {

    /**
     * Adresse msa.
     *
     * @var string
     */
    private $adresseMsa;

    /**
     * Get the adresse msa.
     *
     * @return string Returns the adresse msa.
     */
    public function getAdresseMsa() {
        return $this->adresseMsa;
    }

    /**
     * Set the adresse msa.
     *
     * @param string $adresseMsa The adresse msa.
     */
    public function setAdresseMsa($adresseMsa) {
        $this->adresseMsa = $adresseMsa;
        return $this;
    }
}
