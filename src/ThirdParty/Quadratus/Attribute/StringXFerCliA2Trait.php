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
 * X fer cli a2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliA2Trait {

    /**
     * X fer cli a2.
     *
     * @var string
     */
    private $xFerCliA2;

    /**
     * Get the x fer cli a2.
     *
     * @return string Returns the x fer cli a2.
     */
    public function getXFerCliA2() {
        return $this->xFerCliA2;
    }

    /**
     * Set the x fer cli a2.
     *
     * @param string $xFerCliA2 The x fer cli a2.
     */
    public function setXFerCliA2($xFerCliA2) {
        $this->xFerCliA2 = $xFerCliA2;
        return $this;
    }
}
