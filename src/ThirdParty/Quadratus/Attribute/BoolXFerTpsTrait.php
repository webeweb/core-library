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
 * X fer tps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTpsTrait {

    /**
     * X fer tps.
     *
     * @var bool
     */
    private $xFerTps;

    /**
     * Get the x fer tps.
     *
     * @return bool Returns the x fer tps.
     */
    public function getXFerTps() {
        return $this->xFerTps;
    }

    /**
     * Set the x fer tps.
     *
     * @param bool $xFerTps The x fer tps.
     */
    public function setXFerTps($xFerTps) {
        $this->xFerTps = $xFerTps;
        return $this;
    }
}
