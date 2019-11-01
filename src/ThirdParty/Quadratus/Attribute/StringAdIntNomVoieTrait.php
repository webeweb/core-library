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
 * Ad int nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntNomVoieTrait {

    /**
     * Ad int nom voie.
     *
     * @var string
     */
    private $adIntNomVoie;

    /**
     * Get the ad int nom voie.
     *
     * @return string Returns the ad int nom voie.
     */
    public function getAdIntNomVoie() {
        return $this->adIntNomVoie;
    }

    /**
     * Set the ad int nom voie.
     *
     * @param string $adIntNomVoie The ad int nom voie.
     */
    public function setAdIntNomVoie($adIntNomVoie) {
        $this->adIntNomVoie = $adIntNomVoie;
        return $this;
    }
}
