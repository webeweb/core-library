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
 * Coef sur pv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCoefSurPvTrait {

    /**
     * Coef sur pv.
     *
     * @var float
     */
    private $coefSurPv;

    /**
     * Get the coef sur pv.
     *
     * @return float Returns the coef sur pv.
     */
    public function getCoefSurPv() {
        return $this->coefSurPv;
    }

    /**
     * Set the coef sur pv.
     *
     * @param float $coefSurPv The coef sur pv.
     */
    public function setCoefSurPv($coefSurPv) {
        $this->coefSurPv = $coefSurPv;
        return $this;
    }
}
