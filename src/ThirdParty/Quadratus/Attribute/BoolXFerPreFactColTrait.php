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
 * X fer pre fact col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerPreFactColTrait {

    /**
     * X fer pre fact col.
     *
     * @var bool
     */
    private $xFerPreFactCol;

    /**
     * Get the x fer pre fact col.
     *
     * @return bool Returns the x fer pre fact col.
     */
    public function getXFerPreFactCol() {
        return $this->xFerPreFactCol;
    }

    /**
     * Set the x fer pre fact col.
     *
     * @param bool $xFerPreFactCol The x fer pre fact col.
     */
    public function setXFerPreFactCol($xFerPreFactCol) {
        $this->xFerPreFactCol = $xFerPreFactCol;
        return $this;
    }
}
