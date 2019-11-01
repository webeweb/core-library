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
 * Fct modif etat civil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifEtatCivilTrait {

    /**
     * Fct modif etat civil.
     *
     * @var bool
     */
    private $fctModifEtatCivil;

    /**
     * Get the fct modif etat civil.
     *
     * @return bool Returns the fct modif etat civil.
     */
    public function getFctModifEtatCivil() {
        return $this->fctModifEtatCivil;
    }

    /**
     * Set the fct modif etat civil.
     *
     * @param bool $fctModifEtatCivil The fct modif etat civil.
     */
    public function setFctModifEtatCivil($fctModifEtatCivil) {
        $this->fctModifEtatCivil = $fctModifEtatCivil;
        return $this;
    }
}
