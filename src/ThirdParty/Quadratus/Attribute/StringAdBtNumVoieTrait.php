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
 * Ad bt num voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtNumVoieTrait {

    /**
     * Ad bt num voie.
     *
     * @var string
     */
    private $adBtNumVoie;

    /**
     * Get the ad bt num voie.
     *
     * @return string Returns the ad bt num voie.
     */
    public function getAdBtNumVoie() {
        return $this->adBtNumVoie;
    }

    /**
     * Set the ad bt num voie.
     *
     * @param string $adBtNumVoie The ad bt num voie.
     */
    public function setAdBtNumVoie($adBtNumVoie) {
        $this->adBtNumVoie = $adBtNumVoie;
        return $this;
    }
}
