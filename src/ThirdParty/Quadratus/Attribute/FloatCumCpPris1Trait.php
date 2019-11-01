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
 * Cum cp pris1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumCpPris1Trait {

    /**
     * Cum cp pris1.
     *
     * @var float
     */
    private $cumCpPris1;

    /**
     * Get the cum cp pris1.
     *
     * @return float Returns the cum cp pris1.
     */
    public function getCumCpPris1() {
        return $this->cumCpPris1;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float $cumCpPris1 The cum cp pris1.
     */
    public function setCumCpPris1($cumCpPris1) {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }
}
