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
 * Base gmp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseGmpTrait {

    /**
     * Base gmp.
     *
     * @var float
     */
    private $baseGmp;

    /**
     * Get the base gmp.
     *
     * @return float Returns the base gmp.
     */
    public function getBaseGmp() {
        return $this->baseGmp;
    }

    /**
     * Set the base gmp.
     *
     * @param float $baseGmp The base gmp.
     */
    public function setBaseGmp($baseGmp) {
        $this->baseGmp = $baseGmp;
        return $this;
    }
}
