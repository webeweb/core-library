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
 * Gestion td sou dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionTdSouDadsuTrait {

    /**
     * Gestion td sou dadsu.
     *
     * @var bool
     */
    private $gestionTdSouDadsu;

    /**
     * Get the gestion td sou dadsu.
     *
     * @return bool Returns the gestion td sou dadsu.
     */
    public function getGestionTdSouDadsu() {
        return $this->gestionTdSouDadsu;
    }

    /**
     * Set the gestion td sou dadsu.
     *
     * @param bool $gestionTdSouDadsu The gestion td sou dadsu.
     */
    public function setGestionTdSouDadsu($gestionTdSouDadsu) {
        $this->gestionTdSouDadsu = $gestionTdSouDadsu;
        return $this;
    }
}
