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
 * Cum smic m trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumSmicMTrait {

    /**
     * Cum smic m.
     *
     * @var float
     */
    private $cumSmicM;

    /**
     * Get the cum smic m.
     *
     * @return float Returns the cum smic m.
     */
    public function getCumSmicM() {
        return $this->cumSmicM;
    }

    /**
     * Set the cum smic m.
     *
     * @param float $cumSmicM The cum smic m.
     */
    public function setCumSmicM($cumSmicM) {
        $this->cumSmicM = $cumSmicM;
        return $this;
    }
}
