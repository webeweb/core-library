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
 * Coeff degressif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoeffDegressifTrait {

    /**
     * Coeff degressif.
     *
     * @var float
     */
    private $coeffDegressif;

    /**
     * Get the coeff degressif.
     *
     * @return float Returns the coeff degressif.
     */
    public function getCoeffDegressif() {
        return $this->coeffDegressif;
    }

    /**
     * Set the coeff degressif.
     *
     * @param float $coeffDegressif The coeff degressif.
     */
    public function setCoeffDegressif($coeffDegressif) {
        $this->coeffDegressif = $coeffDegressif;
        return $this;
    }
}
