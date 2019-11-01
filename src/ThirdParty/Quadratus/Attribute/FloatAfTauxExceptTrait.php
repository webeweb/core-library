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
 * Af taux except trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfTauxExceptTrait {

    /**
     * Af taux except.
     *
     * @var float
     */
    private $afTauxExcept;

    /**
     * Get the af taux except.
     *
     * @return float Returns the af taux except.
     */
    public function getAfTauxExcept() {
        return $this->afTauxExcept;
    }

    /**
     * Set the af taux except.
     *
     * @param float $afTauxExcept The af taux except.
     */
    public function setAfTauxExcept($afTauxExcept) {
        $this->afTauxExcept = $afTauxExcept;
        return $this;
    }
}
