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
 * Abattement max trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAbattementMaxTrait {

    /**
     * Abattement max.
     *
     * @var float
     */
    private $abattementMax;

    /**
     * Get the abattement max.
     *
     * @return float Returns the abattement max.
     */
    public function getAbattementMax() {
        return $this->abattementMax;
    }

    /**
     * Set the abattement max.
     *
     * @param float $abattementMax The abattement max.
     */
    public function setAbattementMax($abattementMax) {
        $this->abattementMax = $abattementMax;
        return $this;
    }
}
