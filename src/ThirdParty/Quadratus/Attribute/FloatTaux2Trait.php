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
 * Taux2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaux2Trait {

    /**
     * Taux2.
     *
     * @var float
     */
    private $taux2;

    /**
     * Get the taux2.
     *
     * @return float Returns the taux2.
     */
    public function getTaux2() {
        return $this->taux2;
    }

    /**
     * Set the taux2.
     *
     * @param float $taux2 The taux2.
     */
    public function setTaux2($taux2) {
        $this->taux2 = $taux2;
        return $this;
    }
}
