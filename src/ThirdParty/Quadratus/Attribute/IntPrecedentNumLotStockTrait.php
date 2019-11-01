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
 * Precedent num lot stock trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrecedentNumLotStockTrait {

    /**
     * Precedent num lot stock.
     *
     * @var int
     */
    private $precedentNumLotStock;

    /**
     * Get the precedent num lot stock.
     *
     * @return int Returns the precedent num lot stock.
     */
    public function getPrecedentNumLotStock() {
        return $this->precedentNumLotStock;
    }

    /**
     * Set the precedent num lot stock.
     *
     * @param int $precedentNumLotStock The precedent num lot stock.
     */
    public function setPrecedentNumLotStock($precedentNumLotStock) {
        $this->precedentNumLotStock = $precedentNumLotStock;
        return $this;
    }
}
