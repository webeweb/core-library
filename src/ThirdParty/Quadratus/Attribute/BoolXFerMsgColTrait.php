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
 * X fer msg col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgColTrait {

    /**
     * X fer msg col.
     *
     * @var bool
     */
    private $xFerMsgCol;

    /**
     * Get the x fer msg col.
     *
     * @return bool Returns the x fer msg col.
     */
    public function getXFerMsgCol() {
        return $this->xFerMsgCol;
    }

    /**
     * Set the x fer msg col.
     *
     * @param bool $xFerMsgCol The x fer msg col.
     */
    public function setXFerMsgCol($xFerMsgCol) {
        $this->xFerMsgCol = $xFerMsgCol;
        return $this;
    }
}
