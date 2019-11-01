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
 * Total plaf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalPlafTrait {

    /**
     * Total plaf.
     *
     * @var float
     */
    private $totalPlaf;

    /**
     * Get the total plaf.
     *
     * @return float Returns the total plaf.
     */
    public function getTotalPlaf() {
        return $this->totalPlaf;
    }

    /**
     * Set the total plaf.
     *
     * @param float $totalPlaf The total plaf.
     */
    public function setTotalPlaf($totalPlaf) {
        $this->totalPlaf = $totalPlaf;
        return $this;
    }
}
