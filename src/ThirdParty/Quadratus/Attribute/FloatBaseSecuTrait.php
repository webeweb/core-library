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
 * Base secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseSecuTrait {

    /**
     * Base secu.
     *
     * @var float
     */
    private $baseSecu;

    /**
     * Get the base secu.
     *
     * @return float Returns the base secu.
     */
    public function getBaseSecu() {
        return $this->baseSecu;
    }

    /**
     * Set the base secu.
     *
     * @param float $baseSecu The base secu.
     */
    public function setBaseSecu($baseSecu) {
        $this->baseSecu = $baseSecu;
        return $this;
    }
}
