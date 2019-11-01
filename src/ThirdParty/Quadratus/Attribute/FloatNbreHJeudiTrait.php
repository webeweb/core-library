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
 * Nbre h jeudi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHJeudiTrait {

    /**
     * Nbre h jeudi.
     *
     * @var float
     */
    private $nbreHJeudi;

    /**
     * Get the nbre h jeudi.
     *
     * @return float Returns the nbre h jeudi.
     */
    public function getNbreHJeudi() {
        return $this->nbreHJeudi;
    }

    /**
     * Set the nbre h jeudi.
     *
     * @param float $nbreHJeudi The nbre h jeudi.
     */
    public function setNbreHJeudi($nbreHJeudi) {
        $this->nbreHJeudi = $nbreHJeudi;
        return $this;
    }
}
