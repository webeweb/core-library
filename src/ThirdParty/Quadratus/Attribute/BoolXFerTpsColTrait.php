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
 * X fer tps col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTpsColTrait {

    /**
     * X fer tps col.
     *
     * @var bool
     */
    private $xFerTpsCol;

    /**
     * Get the x fer tps col.
     *
     * @return bool Returns the x fer tps col.
     */
    public function getXFerTpsCol() {
        return $this->xFerTpsCol;
    }

    /**
     * Set the x fer tps col.
     *
     * @param bool $xFerTpsCol The x fer tps col.
     */
    public function setXFerTpsCol($xFerTpsCol) {
        $this->xFerTpsCol = $xFerTpsCol;
        return $this;
    }
}
