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
 * Tranche c plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheCPlafTrait {

    /**
     * Tranche c plaf.
     *
     * @var float
     */
    private $trancheCPlaf;

    /**
     * Get the tranche c plaf.
     *
     * @return float Returns the tranche c plaf.
     */
    public function getTrancheCPlaf() {
        return $this->trancheCPlaf;
    }

    /**
     * Set the tranche c plaf.
     *
     * @param float $trancheCPlaf The tranche c plaf.
     */
    public function setTrancheCPlaf($trancheCPlaf) {
        $this->trancheCPlaf = $trancheCPlaf;
        return $this;
    }
}
