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
 * Mt h sup bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtHSupBonifTrait {

    /**
     * Mt h sup bonif.
     *
     * @var float
     */
    private $mtHSupBonif;

    /**
     * Get the mt h sup bonif.
     *
     * @return float Returns the mt h sup bonif.
     */
    public function getMtHSupBonif() {
        return $this->mtHSupBonif;
    }

    /**
     * Set the mt h sup bonif.
     *
     * @param float $mtHSupBonif The mt h sup bonif.
     */
    public function setMtHSupBonif($mtHSupBonif) {
        $this->mtHSupBonif = $mtHSupBonif;
        return $this;
    }
}
