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
 * Ad duree tot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdDureeTotTrait {

    /**
     * Ad duree tot.
     *
     * @var string
     */
    private $adDureeTot;

    /**
     * Get the ad duree tot.
     *
     * @return string Returns the ad duree tot.
     */
    public function getAdDureeTot() {
        return $this->adDureeTot;
    }

    /**
     * Set the ad duree tot.
     *
     * @param string $adDureeTot The ad duree tot.
     */
    public function setAdDureeTot($adDureeTot) {
        $this->adDureeTot = $adDureeTot;
        return $this;
    }
}
