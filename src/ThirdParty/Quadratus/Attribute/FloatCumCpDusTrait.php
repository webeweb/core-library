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
 * Cum cp dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumCpDusTrait {

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }
}
