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
 * Coeff convention trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCoeffConventionTrait {

    /**
     * Coeff convention.
     *
     * @var string
     */
    private $coeffConvention;

    /**
     * Get the coeff convention.
     *
     * @return string Returns the coeff convention.
     */
    public function getCoeffConvention() {
        return $this->coeffConvention;
    }

    /**
     * Set the coeff convention.
     *
     * @param string $coeffConvention The coeff convention.
     */
    public function setCoeffConvention($coeffConvention) {
        $this->coeffConvention = $coeffConvention;
        return $this;
    }
}
