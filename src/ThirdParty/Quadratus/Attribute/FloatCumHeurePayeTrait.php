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
 * Cum heure paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHeurePayeTrait {

    /**
     * Cum heure paye.
     *
     * @var float
     */
    private $cumHeurePaye;

    /**
     * Get the cum heure paye.
     *
     * @return float Returns the cum heure paye.
     */
    public function getCumHeurePaye() {
        return $this->cumHeurePaye;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }
}
