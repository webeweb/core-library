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
 * Pas gestion indice bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasGestionIndiceBulTrait {

    /**
     * Pas gestion indice bul.
     *
     * @var bool
     */
    private $pasGestionIndiceBul;

    /**
     * Get the pas gestion indice bul.
     *
     * @return bool Returns the pas gestion indice bul.
     */
    public function getPasGestionIndiceBul() {
        return $this->pasGestionIndiceBul;
    }

    /**
     * Set the pas gestion indice bul.
     *
     * @param bool $pasGestionIndiceBul The pas gestion indice bul.
     */
    public function setPasGestionIndiceBul($pasGestionIndiceBul) {
        $this->pasGestionIndiceBul = $pasGestionIndiceBul;
        return $this;
    }
}
