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
 * Duree moy periode1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDureeMoyPeriode1Trait {

    /**
     * Duree moy periode1.
     *
     * @var int
     */
    private $dureeMoyPeriode1;

    /**
     * Get the duree moy periode1.
     *
     * @return int Returns the duree moy periode1.
     */
    public function getDureeMoyPeriode1() {
        return $this->dureeMoyPeriode1;
    }

    /**
     * Set the duree moy periode1.
     *
     * @param int $dureeMoyPeriode1 The duree moy periode1.
     */
    public function setDureeMoyPeriode1($dureeMoyPeriode1) {
        $this->dureeMoyPeriode1 = $dureeMoyPeriode1;
        return $this;
    }
}
