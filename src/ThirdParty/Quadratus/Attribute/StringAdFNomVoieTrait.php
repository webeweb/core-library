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
 * Ad f nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFNomVoieTrait {

    /**
     * Ad f nom voie.
     *
     * @var string
     */
    private $adFNomVoie;

    /**
     * Get the ad f nom voie.
     *
     * @return string Returns the ad f nom voie.
     */
    public function getAdFNomVoie() {
        return $this->adFNomVoie;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string $adFNomVoie The ad f nom voie.
     */
    public function setAdFNomVoie($adFNomVoie) {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }
}
