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
 * Regime matrimonial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegimeMatrimonialTrait {

    /**
     * Regime matrimonial.
     *
     * @var string
     */
    private $regimeMatrimonial;

    /**
     * Get the regime matrimonial.
     *
     * @return string Returns the regime matrimonial.
     */
    public function getRegimeMatrimonial() {
        return $this->regimeMatrimonial;
    }

    /**
     * Set the regime matrimonial.
     *
     * @param string $regimeMatrimonial The regime matrimonial.
     */
    public function setRegimeMatrimonial($regimeMatrimonial) {
        $this->regimeMatrimonial = $regimeMatrimonial;
        return $this;
    }
}
