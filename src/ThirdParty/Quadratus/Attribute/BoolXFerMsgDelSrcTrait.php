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
 * X fer msg del src trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgDelSrcTrait {

    /**
     * X fer msg del src.
     *
     * @var bool
     */
    private $xFerMsgDelSrc;

    /**
     * Get the x fer msg del src.
     *
     * @return bool Returns the x fer msg del src.
     */
    public function getXFerMsgDelSrc() {
        return $this->xFerMsgDelSrc;
    }

    /**
     * Set the x fer msg del src.
     *
     * @param bool $xFerMsgDelSrc The x fer msg del src.
     */
    public function setXFerMsgDelSrc($xFerMsgDelSrc) {
        $this->xFerMsgDelSrc = $xFerMsgDelSrc;
        return $this;
    }
}
