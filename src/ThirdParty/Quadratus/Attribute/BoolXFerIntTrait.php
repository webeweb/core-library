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
 * X fer int trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerIntTrait {

    /**
     * X fer int.
     *
     * @var bool
     */
    private $xFerInt;

    /**
     * Get the x fer int.
     *
     * @return bool Returns the x fer int.
     */
    public function getXFerInt() {
        return $this->xFerInt;
    }

    /**
     * Set the x fer int.
     *
     * @param bool $xFerInt The x fer int.
     */
    public function setXFerInt($xFerInt) {
        $this->xFerInt = $xFerInt;
        return $this;
    }
}
