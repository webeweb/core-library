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
 * Integral trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntegralTrait {

    /**
     * Integral.
     *
     * @var bool
     */
    private $integral;

    /**
     * Get the integral.
     *
     * @return bool Returns the integral.
     */
    public function getIntegral() {
        return $this->integral;
    }

    /**
     * Set the integral.
     *
     * @param bool $integral The integral.
     */
    public function setIntegral($integral) {
        $this->integral = $integral;
        return $this;
    }
}
