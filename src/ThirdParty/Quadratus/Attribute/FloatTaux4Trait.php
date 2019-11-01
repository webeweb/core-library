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
 * Taux4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaux4Trait {

    /**
     * Taux4.
     *
     * @var float
     */
    private $taux4;

    /**
     * Get the taux4.
     *
     * @return float Returns the taux4.
     */
    public function getTaux4() {
        return $this->taux4;
    }

    /**
     * Set the taux4.
     *
     * @param float $taux4 The taux4.
     */
    public function setTaux4($taux4) {
        $this->taux4 = $taux4;
        return $this;
    }
}
