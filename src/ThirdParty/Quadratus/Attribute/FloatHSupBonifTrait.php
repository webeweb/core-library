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
 * H sup bonif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHSupBonifTrait {

    /**
     * H sup bonif.
     *
     * @var float
     */
    private $hSupBonif;

    /**
     * Get the h sup bonif.
     *
     * @return float Returns the h sup bonif.
     */
    public function getHSupBonif() {
        return $this->hSupBonif;
    }

    /**
     * Set the h sup bonif.
     *
     * @param float $hSupBonif The h sup bonif.
     */
    public function setHSupBonif($hSupBonif) {
        $this->hSupBonif = $hSupBonif;
        return $this;
    }
}
