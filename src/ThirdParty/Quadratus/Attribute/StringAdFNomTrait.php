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
 * Ad f nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFNomTrait {

    /**
     * Ad f nom.
     *
     * @var string
     */
    private $adFNom;

    /**
     * Get the ad f nom.
     *
     * @return string Returns the ad f nom.
     */
    public function getAdFNom() {
        return $this->adFNom;
    }

    /**
     * Set the ad f nom.
     *
     * @param string $adFNom The ad f nom.
     */
    public function setAdFNom($adFNom) {
        $this->adFNom = $adFNom;
        return $this;
    }
}
