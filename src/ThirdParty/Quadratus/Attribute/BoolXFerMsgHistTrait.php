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
 * X fer msg hist trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgHistTrait {

    /**
     * X fer msg hist.
     *
     * @var bool
     */
    private $xFerMsgHist;

    /**
     * Get the x fer msg hist.
     *
     * @return bool Returns the x fer msg hist.
     */
    public function getXFerMsgHist() {
        return $this->xFerMsgHist;
    }

    /**
     * Set the x fer msg hist.
     *
     * @param bool $xFerMsgHist The x fer msg hist.
     */
    public function setXFerMsgHist($xFerMsgHist) {
        $this->xFerMsgHist = $xFerMsgHist;
        return $this;
    }
}
