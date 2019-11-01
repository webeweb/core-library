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
 * Tranche bbna trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheBbnaTrait {

    /**
     * Tranche bbna.
     *
     * @var float
     */
    private $trancheBbna;

    /**
     * Get the tranche bbna.
     *
     * @return float Returns the tranche bbna.
     */
    public function getTrancheBbna() {
        return $this->trancheBbna;
    }

    /**
     * Set the tranche bbna.
     *
     * @param float $trancheBbna The tranche bbna.
     */
    public function setTrancheBbna($trancheBbna) {
        $this->trancheBbna = $trancheBbna;
        return $this;
    }
}
