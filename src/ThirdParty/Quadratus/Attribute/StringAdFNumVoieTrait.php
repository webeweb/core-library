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
 * Ad f num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFNumVoieTrait {

    /**
     * Ad f num voie.
     *
     * @var string
     */
    private $adFNumVoie;

    /**
     * Get the ad f num voie.
     *
     * @return string Returns the ad f num voie.
     */
    public function getAdFNumVoie() {
        return $this->adFNumVoie;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string $adFNumVoie The ad f num voie.
     */
    public function setAdFNumVoie($adFNumVoie) {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }
}
