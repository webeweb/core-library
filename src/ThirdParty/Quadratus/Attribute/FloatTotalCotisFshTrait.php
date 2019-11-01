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
 * Total cotis fsh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalCotisFshTrait {

    /**
     * Total cotis fsh.
     *
     * @var float
     */
    private $totalCotisFsh;

    /**
     * Get the total cotis fsh.
     *
     * @return float Returns the total cotis fsh.
     */
    public function getTotalCotisFsh() {
        return $this->totalCotisFsh;
    }

    /**
     * Set the total cotis fsh.
     *
     * @param float $totalCotisFsh The total cotis fsh.
     */
    public function setTotalCotisFsh($totalCotisFsh) {
        $this->totalCotisFsh = $totalCotisFsh;
        return $this;
    }
}
