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
 * Cum jour trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumJourTravTrait {

    /**
     * Cum jour trav.
     *
     * @var float
     */
    private $cumJourTrav;

    /**
     * Get the cum jour trav.
     *
     * @return float Returns the cum jour trav.
     */
    public function getCumJourTrav() {
        return $this->cumJourTrav;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }
}
