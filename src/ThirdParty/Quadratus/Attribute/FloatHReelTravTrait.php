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
 * H reel trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHReelTravTrait {

    /**
     * H reel trav.
     *
     * @var float
     */
    private $hReelTrav;

    /**
     * Get the h reel trav.
     *
     * @return float Returns the h reel trav.
     */
    public function getHReelTrav() {
        return $this->hReelTrav;
    }

    /**
     * Set the h reel trav.
     *
     * @param float $hReelTrav The h reel trav.
     */
    public function setHReelTrav($hReelTrav) {
        $this->hReelTrav = $hReelTrav;
        return $this;
    }
}
