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
 * X fer msg hist del src trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgHistDelSrcTrait {

    /**
     * X fer msg hist del src.
     *
     * @var bool
     */
    private $xFerMsgHistDelSrc;

    /**
     * Get the x fer msg hist del src.
     *
     * @return bool Returns the x fer msg hist del src.
     */
    public function getXFerMsgHistDelSrc() {
        return $this->xFerMsgHistDelSrc;
    }

    /**
     * Set the x fer msg hist del src.
     *
     * @param bool $xFerMsgHistDelSrc The x fer msg hist del src.
     */
    public function setXFerMsgHistDelSrc($xFerMsgHistDelSrc) {
        $this->xFerMsgHistDelSrc = $xFerMsgHistDelSrc;
        return $this;
    }
}
