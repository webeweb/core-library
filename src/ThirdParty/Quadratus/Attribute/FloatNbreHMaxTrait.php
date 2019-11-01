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
 * Nbre h max trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxTrait {

    /**
     * Nbre h max.
     *
     * @var float
     */
    private $nbreHMax;

    /**
     * Get the nbre h max.
     *
     * @return float Returns the nbre h max.
     */
    public function getNbreHMax() {
        return $this->nbreHMax;
    }

    /**
     * Set the nbre h max.
     *
     * @param float $nbreHMax The nbre h max.
     */
    public function setNbreHMax($nbreHMax) {
        $this->nbreHMax = $nbreHMax;
        return $this;
    }
}
