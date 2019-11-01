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
 * Ad duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdDureeTrait {

    /**
     * Ad duree.
     *
     * @var float
     */
    private $adDuree;

    /**
     * Get the ad duree.
     *
     * @return float Returns the ad duree.
     */
    public function getAdDuree() {
        return $this->adDuree;
    }

    /**
     * Set the ad duree.
     *
     * @param float $adDuree The ad duree.
     */
    public function setAdDuree($adDuree) {
        $this->adDuree = $adDuree;
        return $this;
    }
}
