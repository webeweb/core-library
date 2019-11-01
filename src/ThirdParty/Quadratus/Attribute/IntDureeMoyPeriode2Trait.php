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
 * Duree moy periode2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDureeMoyPeriode2Trait {

    /**
     * Duree moy periode2.
     *
     * @var int
     */
    private $dureeMoyPeriode2;

    /**
     * Get the duree moy periode2.
     *
     * @return int Returns the duree moy periode2.
     */
    public function getDureeMoyPeriode2() {
        return $this->dureeMoyPeriode2;
    }

    /**
     * Set the duree moy periode2.
     *
     * @param int $dureeMoyPeriode2 The duree moy periode2.
     */
    public function setDureeMoyPeriode2($dureeMoyPeriode2) {
        $this->dureeMoyPeriode2 = $dureeMoyPeriode2;
        return $this;
    }
}
