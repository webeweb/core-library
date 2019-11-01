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
 * Tp montt depot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTpMonttDepotTrait {

    /**
     * Tp montt depot.
     *
     * @var float
     */
    private $tpMonttDepot;

    /**
     * Get the tp montt depot.
     *
     * @return float Returns the tp montt depot.
     */
    public function getTpMonttDepot() {
        return $this->tpMonttDepot;
    }

    /**
     * Set the tp montt depot.
     *
     * @param float $tpMonttDepot The tp montt depot.
     */
    public function setTpMonttDepot($tpMonttDepot) {
        $this->tpMonttDepot = $tpMonttDepot;
        return $this;
    }
}
