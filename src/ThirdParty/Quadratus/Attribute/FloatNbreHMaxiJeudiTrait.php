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
 * Nbre h maxi jeudi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiJeudiTrait {

    /**
     * Nbre h maxi jeudi.
     *
     * @var float
     */
    private $nbreHMaxiJeudi;

    /**
     * Get the nbre h maxi jeudi.
     *
     * @return float Returns the nbre h maxi jeudi.
     */
    public function getNbreHMaxiJeudi() {
        return $this->nbreHMaxiJeudi;
    }

    /**
     * Set the nbre h maxi jeudi.
     *
     * @param float $nbreHMaxiJeudi The nbre h maxi jeudi.
     */
    public function setNbreHMaxiJeudi($nbreHMaxiJeudi) {
        $this->nbreHMaxiJeudi = $nbreHMaxiJeudi;
        return $this;
    }
}
