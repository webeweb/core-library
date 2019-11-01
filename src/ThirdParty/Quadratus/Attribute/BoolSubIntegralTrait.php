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
 * Sub integral trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSubIntegralTrait {

    /**
     * Sub integral.
     *
     * @var bool
     */
    private $subIntegral;

    /**
     * Get the sub integral.
     *
     * @return bool Returns the sub integral.
     */
    public function getSubIntegral() {
        return $this->subIntegral;
    }

    /**
     * Set the sub integral.
     *
     * @param bool $subIntegral The sub integral.
     */
    public function setSubIntegral($subIntegral) {
        $this->subIntegral = $subIntegral;
        return $this;
    }
}
