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
 * Duree trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeTravTrait {

    /**
     * Duree trav.
     *
     * @var float
     */
    private $dureeTrav;

    /**
     * Get the duree trav.
     *
     * @return float Returns the duree trav.
     */
    public function getDureeTrav() {
        return $this->dureeTrav;
    }

    /**
     * Set the duree trav.
     *
     * @param float $dureeTrav The duree trav.
     */
    public function setDureeTrav($dureeTrav) {
        $this->dureeTrav = $dureeTrav;
        return $this;
    }
}
