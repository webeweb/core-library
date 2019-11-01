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
 * Ad bt nom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtNomTrait {

    /**
     * Ad bt nom.
     *
     * @var string
     */
    private $adBtNom;

    /**
     * Get the ad bt nom.
     *
     * @return string Returns the ad bt nom.
     */
    public function getAdBtNom() {
        return $this->adBtNom;
    }

    /**
     * Set the ad bt nom.
     *
     * @param string $adBtNom The ad bt nom.
     */
    public function setAdBtNom($adBtNom) {
        $this->adBtNom = $adBtNom;
        return $this;
    }
}
