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
 * Coeff fillon moins20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCoeffFillonMoins20Trait {

    /**
     * Coeff fillon moins20.
     *
     * @var bool
     */
    private $coeffFillonMoins20;

    /**
     * Get the coeff fillon moins20.
     *
     * @return bool Returns the coeff fillon moins20.
     */
    public function getCoeffFillonMoins20() {
        return $this->coeffFillonMoins20;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool $coeffFillonMoins20 The coeff fillon moins20.
     */
    public function setCoeffFillonMoins20($coeffFillonMoins20) {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }
}
