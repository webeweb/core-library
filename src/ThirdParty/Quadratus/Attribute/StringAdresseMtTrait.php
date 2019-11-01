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
 * Adresse mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseMtTrait {

    /**
     * Adresse mt.
     *
     * @var string
     */
    private $adresseMt;

    /**
     * Get the adresse mt.
     *
     * @return string Returns the adresse mt.
     */
    public function getAdresseMt() {
        return $this->adresseMt;
    }

    /**
     * Set the adresse mt.
     *
     * @param string $adresseMt The adresse mt.
     */
    public function setAdresseMt($adresseMt) {
        $this->adresseMt = $adresseMt;
        return $this;
    }
}
