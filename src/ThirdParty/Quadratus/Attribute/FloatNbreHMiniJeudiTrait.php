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
 * Nbre h mini jeudi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniJeudiTrait {

    /**
     * Nbre h mini jeudi.
     *
     * @var float
     */
    private $nbreHMiniJeudi;

    /**
     * Get the nbre h mini jeudi.
     *
     * @return float Returns the nbre h mini jeudi.
     */
    public function getNbreHMiniJeudi() {
        return $this->nbreHMiniJeudi;
    }

    /**
     * Set the nbre h mini jeudi.
     *
     * @param float $nbreHMiniJeudi The nbre h mini jeudi.
     */
    public function setNbreHMiniJeudi($nbreHMiniJeudi) {
        $this->nbreHMiniJeudi = $nbreHMiniJeudi;
        return $this;
    }
}
