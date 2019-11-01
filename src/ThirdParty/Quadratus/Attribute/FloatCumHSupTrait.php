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
 * Cum h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHSupTrait {

    /**
     * Cum h sup.
     *
     * @var float
     */
    private $cumHSup;

    /**
     * Get the cum h sup.
     *
     * @return float Returns the cum h sup.
     */
    public function getCumHSup() {
        return $this->cumHSup;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }
}
