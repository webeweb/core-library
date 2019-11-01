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
 * Frais sante am trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFraisSanteAmTrait {

    /**
     * Frais sante am.
     *
     * @var bool
     */
    private $fraisSanteAm;

    /**
     * Get the frais sante am.
     *
     * @return bool Returns the frais sante am.
     */
    public function getFraisSanteAm() {
        return $this->fraisSanteAm;
    }

    /**
     * Set the frais sante am.
     *
     * @param bool $fraisSanteAm The frais sante am.
     */
    public function setFraisSanteAm($fraisSanteAm) {
        $this->fraisSanteAm = $fraisSanteAm;
        return $this;
    }
}
