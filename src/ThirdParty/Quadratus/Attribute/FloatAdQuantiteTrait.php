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
 * Ad quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAdQuantiteTrait {

    /**
     * Ad quantite.
     *
     * @var float
     */
    private $adQuantite;

    /**
     * Get the ad quantite.
     *
     * @return float Returns the ad quantite.
     */
    public function getAdQuantite() {
        return $this->adQuantite;
    }

    /**
     * Set the ad quantite.
     *
     * @param float $adQuantite The ad quantite.
     */
    public function setAdQuantite($adQuantite) {
        $this->adQuantite = $adQuantite;
        return $this;
    }
}
