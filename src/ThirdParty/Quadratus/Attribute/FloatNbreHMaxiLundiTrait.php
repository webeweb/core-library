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
 * Nbre h maxi lundi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMaxiLundiTrait {

    /**
     * Nbre h maxi lundi.
     *
     * @var float
     */
    private $nbreHMaxiLundi;

    /**
     * Get the nbre h maxi lundi.
     *
     * @return float Returns the nbre h maxi lundi.
     */
    public function getNbreHMaxiLundi() {
        return $this->nbreHMaxiLundi;
    }

    /**
     * Set the nbre h maxi lundi.
     *
     * @param float $nbreHMaxiLundi The nbre h maxi lundi.
     */
    public function setNbreHMaxiLundi($nbreHMaxiLundi) {
        $this->nbreHMaxiLundi = $nbreHMaxiLundi;
        return $this;
    }
}
