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
 * X fer cli a1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliA1Trait {

    /**
     * X fer cli a1.
     *
     * @var string
     */
    private $xFerCliA1;

    /**
     * Get the x fer cli a1.
     *
     * @return string Returns the x fer cli a1.
     */
    public function getXFerCliA1() {
        return $this->xFerCliA1;
    }

    /**
     * Set the x fer cli a1.
     *
     * @param string $xFerCliA1 The x fer cli a1.
     */
    public function setXFerCliA1($xFerCliA1) {
        $this->xFerCliA1 = $xFerCliA1;
        return $this;
    }
}
