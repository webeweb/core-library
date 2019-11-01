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
 * Trsp cent px trs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrspCentPxTrsTrait {

    /**
     * Trsp cent px trs.
     *
     * @var float
     */
    private $trspCentPxTrs;

    /**
     * Get the trsp cent px trs.
     *
     * @return float Returns the trsp cent px trs.
     */
    public function getTrspCentPxTrs() {
        return $this->trspCentPxTrs;
    }

    /**
     * Set the trsp cent px trs.
     *
     * @param float $trspCentPxTrs The trsp cent px trs.
     */
    public function setTrspCentPxTrs($trspCentPxTrs) {
        $this->trspCentPxTrs = $trspCentPxTrs;
        return $this;
    }
}
