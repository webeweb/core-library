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
 * Ad bt code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtCodePostalTrait {

    /**
     * Ad bt code postal.
     *
     * @var string
     */
    private $adBtCodePostal;

    /**
     * Get the ad bt code postal.
     *
     * @return string Returns the ad bt code postal.
     */
    public function getAdBtCodePostal() {
        return $this->adBtCodePostal;
    }

    /**
     * Set the ad bt code postal.
     *
     * @param string $adBtCodePostal The ad bt code postal.
     */
    public function setAdBtCodePostal($adBtCodePostal) {
        $this->adBtCodePostal = $adBtCodePostal;
        return $this;
    }
}
