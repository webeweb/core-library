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
 * Ad bt nom voie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtNomVoieTrait {

    /**
     * Ad bt nom voie.
     *
     * @var string
     */
    private $adBtNomVoie;

    /**
     * Get the ad bt nom voie.
     *
     * @return string Returns the ad bt nom voie.
     */
    public function getAdBtNomVoie() {
        return $this->adBtNomVoie;
    }

    /**
     * Set the ad bt nom voie.
     *
     * @param string $adBtNomVoie The ad bt nom voie.
     */
    public function setAdBtNomVoie($adBtNomVoie) {
        $this->adBtNomVoie = $adBtNomVoie;
        return $this;
    }
}
