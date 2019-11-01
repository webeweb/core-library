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
 * Cum h bonifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHBonifieTrait {

    /**
     * Cum h bonifie.
     *
     * @var float
     */
    private $cumHBonifie;

    /**
     * Get the cum h bonifie.
     *
     * @return float Returns the cum h bonifie.
     */
    public function getCumHBonifie() {
        return $this->cumHBonifie;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float $cumHBonifie The cum h bonifie.
     */
    public function setCumHBonifie($cumHBonifie) {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }
}
