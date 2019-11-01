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
 * Tranche cbal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCbalTrait {

    /**
     * Tranche cbal.
     *
     * @var float
     */
    private $trancheCbal;

    /**
     * Get the tranche cbal.
     *
     * @return float Returns the tranche cbal.
     */
    public function getTrancheCbal() {
        return $this->trancheCbal;
    }

    /**
     * Set the tranche cbal.
     *
     * @param float $trancheCbal The tranche cbal.
     */
    public function setTrancheCbal($trancheCbal) {
        $this->trancheCbal = $trancheCbal;
        return $this;
    }
}
