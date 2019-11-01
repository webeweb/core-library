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
 * Taux1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTaux1Trait {

    /**
     * Taux1.
     *
     * @var float
     */
    private $taux1;

    /**
     * Get the taux1.
     *
     * @return float Returns the taux1.
     */
    public function getTaux1() {
        return $this->taux1;
    }

    /**
     * Set the taux1.
     *
     * @param float $taux1 The taux1.
     */
    public function setTaux1($taux1) {
        $this->taux1 = $taux1;
        return $this;
    }
}
