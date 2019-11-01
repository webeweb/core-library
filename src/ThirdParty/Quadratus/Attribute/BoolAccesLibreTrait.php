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
 * Acces libre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesLibreTrait {

    /**
     * Acces libre.
     *
     * @var bool
     */
    private $accesLibre;

    /**
     * Get the acces libre.
     *
     * @return bool Returns the acces libre.
     */
    public function getAccesLibre() {
        return $this->accesLibre;
    }

    /**
     * Set the acces libre.
     *
     * @param bool $accesLibre The acces libre.
     */
    public function setAccesLibre($accesLibre) {
        $this->accesLibre = $accesLibre;
        return $this;
    }
}
