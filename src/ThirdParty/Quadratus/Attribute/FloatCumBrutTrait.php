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
 * Cum brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBrutTrait {

    /**
     * Cum brut.
     *
     * @var float
     */
    private $cumBrut;

    /**
     * Get the cum brut.
     *
     * @return float Returns the cum brut.
     */
    public function getCumBrut() {
        return $this->cumBrut;
    }

    /**
     * Set the cum brut.
     *
     * @param float $cumBrut The cum brut.
     */
    public function setCumBrut($cumBrut) {
        $this->cumBrut = $cumBrut;
        return $this;
    }
}
