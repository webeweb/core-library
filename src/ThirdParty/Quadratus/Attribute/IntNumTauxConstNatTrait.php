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
 * Num taux const nat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumTauxConstNatTrait {

    /**
     * Num taux const nat.
     *
     * @var int
     */
    private $numTauxConstNat;

    /**
     * Get the num taux const nat.
     *
     * @return int Returns the num taux const nat.
     */
    public function getNumTauxConstNat() {
        return $this->numTauxConstNat;
    }

    /**
     * Set the num taux const nat.
     *
     * @param int $numTauxConstNat The num taux const nat.
     */
    public function setNumTauxConstNat($numTauxConstNat) {
        $this->numTauxConstNat = $numTauxConstNat;
        return $this;
    }
}
