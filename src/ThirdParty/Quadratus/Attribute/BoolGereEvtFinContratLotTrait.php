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
 * Gere evt fin contrat lot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGereEvtFinContratLotTrait {

    /**
     * Gere evt fin contrat lot.
     *
     * @var bool
     */
    private $gereEvtFinContratLot;

    /**
     * Get the gere evt fin contrat lot.
     *
     * @return bool Returns the gere evt fin contrat lot.
     */
    public function getGereEvtFinContratLot() {
        return $this->gereEvtFinContratLot;
    }

    /**
     * Set the gere evt fin contrat lot.
     *
     * @param bool $gereEvtFinContratLot The gere evt fin contrat lot.
     */
    public function setGereEvtFinContratLot($gereEvtFinContratLot) {
        $this->gereEvtFinContratLot = $gereEvtFinContratLot;
        return $this;
    }
}
