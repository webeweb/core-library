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
 * Total salaire fsh trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalSalaireFshTrait {

    /**
     * Total salaire fsh.
     *
     * @var float
     */
    private $totalSalaireFsh;

    /**
     * Get the total salaire fsh.
     *
     * @return float Returns the total salaire fsh.
     */
    public function getTotalSalaireFsh() {
        return $this->totalSalaireFsh;
    }

    /**
     * Set the total salaire fsh.
     *
     * @param float $totalSalaireFsh The total salaire fsh.
     */
    public function setTotalSalaireFsh($totalSalaireFsh) {
        $this->totalSalaireFsh = $totalSalaireFsh;
        return $this;
    }
}
