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
 * Ad f nom suite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFNomSuite3Trait {

    /**
     * Ad f nom suite3.
     *
     * @var string
     */
    private $adFNomSuite3;

    /**
     * Get the ad f nom suite3.
     *
     * @return string Returns the ad f nom suite3.
     */
    public function getAdFNomSuite3() {
        return $this->adFNomSuite3;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string $adFNomSuite3 The ad f nom suite3.
     */
    public function setAdFNomSuite3($adFNomSuite3) {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }
}
