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
 * Cum ant h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumAntHSupTrait {

    /**
     * Cum ant h sup.
     *
     * @var float
     */
    private $cumAntHSup;

    /**
     * Get the cum ant h sup.
     *
     * @return float Returns the cum ant h sup.
     */
    public function getCumAntHSup() {
        return $this->cumAntHSup;
    }

    /**
     * Set the cum ant h sup.
     *
     * @param float $cumAntHSup The cum ant h sup.
     */
    public function setCumAntHSup($cumAntHSup) {
        $this->cumAntHSup = $cumAntHSup;
        return $this;
    }
}
