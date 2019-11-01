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
 * Ad int nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntNomTrait {

    /**
     * Ad int nom.
     *
     * @var string
     */
    private $adIntNom;

    /**
     * Get the ad int nom.
     *
     * @return string Returns the ad int nom.
     */
    public function getAdIntNom() {
        return $this->adIntNom;
    }

    /**
     * Set the ad int nom.
     *
     * @param string $adIntNom The ad int nom.
     */
    public function setAdIntNom($adIntNom) {
        $this->adIntNom = $adIntNom;
        return $this;
    }
}
