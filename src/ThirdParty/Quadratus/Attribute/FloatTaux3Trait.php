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
 * Taux3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaux3Trait {

    /**
     * Taux3.
     *
     * @var float
     */
    private $taux3;

    /**
     * Get the taux3.
     *
     * @return float Returns the taux3.
     */
    public function getTaux3() {
        return $this->taux3;
    }

    /**
     * Set the taux3.
     *
     * @param float $taux3 The taux3.
     */
    public function setTaux3($taux3) {
        $this->taux3 = $taux3;
        return $this;
    }
}
