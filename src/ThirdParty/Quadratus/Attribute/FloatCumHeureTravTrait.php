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
 * Cum heure trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHeureTravTrait {

    /**
     * Cum heure trav.
     *
     * @var float
     */
    private $cumHeureTrav;

    /**
     * Get the cum heure trav.
     *
     * @return float Returns the cum heure trav.
     */
    public function getCumHeureTrav() {
        return $this->cumHeureTrav;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }
}
