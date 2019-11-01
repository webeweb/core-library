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
 * X fer type societes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTypeSocietesTrait {

    /**
     * X fer type societes.
     *
     * @var bool
     */
    private $xFerTypeSocietes;

    /**
     * Get the x fer type societes.
     *
     * @return bool Returns the x fer type societes.
     */
    public function getXFerTypeSocietes() {
        return $this->xFerTypeSocietes;
    }

    /**
     * Set the x fer type societes.
     *
     * @param bool $xFerTypeSocietes The x fer type societes.
     */
    public function setXFerTypeSocietes($xFerTypeSocietes) {
        $this->xFerTypeSocietes = $xFerTypeSocietes;
        return $this;
    }
}
