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
 * Ad bt civilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtCiviliteTrait {

    /**
     * Ad bt civilite.
     *
     * @var string
     */
    private $adBtCivilite;

    /**
     * Get the ad bt civilite.
     *
     * @return string Returns the ad bt civilite.
     */
    public function getAdBtCivilite() {
        return $this->adBtCivilite;
    }

    /**
     * Set the ad bt civilite.
     *
     * @param string $adBtCivilite The ad bt civilite.
     */
    public function setAdBtCivilite($adBtCivilite) {
        $this->adBtCivilite = $adBtCivilite;
        return $this;
    }
}
