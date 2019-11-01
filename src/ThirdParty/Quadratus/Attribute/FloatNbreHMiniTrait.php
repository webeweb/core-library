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
 * Nbre h mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniTrait {

    /**
     * Nbre h mini.
     *
     * @var float
     */
    private $nbreHMini;

    /**
     * Get the nbre h mini.
     *
     * @return float Returns the nbre h mini.
     */
    public function getNbreHMini() {
        return $this->nbreHMini;
    }

    /**
     * Set the nbre h mini.
     *
     * @param float $nbreHMini The nbre h mini.
     */
    public function setNbreHMini($nbreHMini) {
        $this->nbreHMini = $nbreHMini;
        return $this;
    }
}
