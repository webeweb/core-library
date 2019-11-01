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
 * Adresse bt saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdresseBtSaisieTrait {

    /**
     * Adresse bt saisie.
     *
     * @var bool
     */
    private $adresseBtSaisie;

    /**
     * Get the adresse bt saisie.
     *
     * @return bool Returns the adresse bt saisie.
     */
    public function getAdresseBtSaisie() {
        return $this->adresseBtSaisie;
    }

    /**
     * Set the adresse bt saisie.
     *
     * @param bool $adresseBtSaisie The adresse bt saisie.
     */
    public function setAdresseBtSaisie($adresseBtSaisie) {
        $this->adresseBtSaisie = $adresseBtSaisie;
        return $this;
    }
}
