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
 * Jour limite depot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourLimiteDepotTrait {

    /**
     * Jour limite depot.
     *
     * @var string
     */
    private $jourLimiteDepot;

    /**
     * Get the jour limite depot.
     *
     * @return string Returns the jour limite depot.
     */
    public function getJourLimiteDepot() {
        return $this->jourLimiteDepot;
    }

    /**
     * Set the jour limite depot.
     *
     * @param string $jourLimiteDepot The jour limite depot.
     */
    public function setJourLimiteDepot($jourLimiteDepot) {
        $this->jourLimiteDepot = $jourLimiteDepot;
        return $this;
    }
}
