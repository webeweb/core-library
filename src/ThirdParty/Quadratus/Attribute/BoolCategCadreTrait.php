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
 * Categ cadre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCategCadreTrait {

    /**
     * Categ cadre.
     *
     * @var bool
     */
    private $categCadre;

    /**
     * Get the categ cadre.
     *
     * @return bool Returns the categ cadre.
     */
    public function getCategCadre() {
        return $this->categCadre;
    }

    /**
     * Set the categ cadre.
     *
     * @param bool $categCadre The categ cadre.
     */
    public function setCategCadre($categCadre) {
        $this->categCadre = $categCadre;
        return $this;
    }
}
