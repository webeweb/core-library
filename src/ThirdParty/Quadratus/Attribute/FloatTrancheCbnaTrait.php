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
 * Tranche cbna trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCbnaTrait {

    /**
     * Tranche cbna.
     *
     * @var float
     */
    private $trancheCbna;

    /**
     * Get the tranche cbna.
     *
     * @return float Returns the tranche cbna.
     */
    public function getTrancheCbna() {
        return $this->trancheCbna;
    }

    /**
     * Set the tranche cbna.
     *
     * @param float $trancheCbna The tranche cbna.
     */
    public function setTrancheCbna($trancheCbna) {
        $this->trancheCbna = $trancheCbna;
        return $this;
    }
}
