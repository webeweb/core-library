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
 * Taux5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaux5Trait {

    /**
     * Taux5.
     *
     * @var float
     */
    private $taux5;

    /**
     * Get the taux5.
     *
     * @return float Returns the taux5.
     */
    public function getTaux5() {
        return $this->taux5;
    }

    /**
     * Set the taux5.
     *
     * @param float $taux5 The taux5.
     */
    public function setTaux5($taux5) {
        $this->taux5 = $taux5;
        return $this;
    }
}
