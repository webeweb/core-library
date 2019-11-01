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
 * Fct etat civil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctEtatCivilTrait {

    /**
     * Fct etat civil.
     *
     * @var bool
     */
    private $fctEtatCivil;

    /**
     * Get the fct etat civil.
     *
     * @return bool Returns the fct etat civil.
     */
    public function getFctEtatCivil() {
        return $this->fctEtatCivil;
    }

    /**
     * Set the fct etat civil.
     *
     * @param bool $fctEtatCivil The fct etat civil.
     */
    public function setFctEtatCivil($fctEtatCivil) {
        $this->fctEtatCivil = $fctEtatCivil;
        return $this;
    }
}
