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
 * Calcul coeff pa pv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculCoeffPaPvTrait {

    /**
     * Calcul coeff pa pv.
     *
     * @var bool
     */
    private $calculCoeffPaPv;

    /**
     * Get the calcul coeff pa pv.
     *
     * @return bool Returns the calcul coeff pa pv.
     */
    public function getCalculCoeffPaPv() {
        return $this->calculCoeffPaPv;
    }

    /**
     * Set the calcul coeff pa pv.
     *
     * @param bool $calculCoeffPaPv The calcul coeff pa pv.
     */
    public function setCalculCoeffPaPv($calculCoeffPaPv) {
        $this->calculCoeffPaPv = $calculCoeffPaPv;
        return $this;
    }
}
