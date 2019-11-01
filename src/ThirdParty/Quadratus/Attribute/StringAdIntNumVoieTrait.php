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
 * Ad int num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntNumVoieTrait {

    /**
     * Ad int num voie.
     *
     * @var string
     */
    private $adIntNumVoie;

    /**
     * Get the ad int num voie.
     *
     * @return string Returns the ad int num voie.
     */
    public function getAdIntNumVoie() {
        return $this->adIntNumVoie;
    }

    /**
     * Set the ad int num voie.
     *
     * @param string $adIntNumVoie The ad int num voie.
     */
    public function setAdIntNumVoie($adIntNumVoie) {
        $this->adIntNumVoie = $adIntNumVoie;
        return $this;
    }
}
