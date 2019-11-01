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
 * X fer col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerColTrait {

    /**
     * X fer col.
     *
     * @var bool
     */
    private $xFerCol;

    /**
     * Get the x fer col.
     *
     * @return bool Returns the x fer col.
     */
    public function getXFerCol() {
        return $this->xFerCol;
    }

    /**
     * Set the x fer col.
     *
     * @param bool $xFerCol The x fer col.
     */
    public function setXFerCol($xFerCol) {
        $this->xFerCol = $xFerCol;
        return $this;
    }
}
