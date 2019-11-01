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
 * Total cotis maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalCotisMaladieTrait {

    /**
     * Total cotis maladie.
     *
     * @var float
     */
    private $totalCotisMaladie;

    /**
     * Get the total cotis maladie.
     *
     * @return float Returns the total cotis maladie.
     */
    public function getTotalCotisMaladie() {
        return $this->totalCotisMaladie;
    }

    /**
     * Set the total cotis maladie.
     *
     * @param float $totalCotisMaladie The total cotis maladie.
     */
    public function setTotalCotisMaladie($totalCotisMaladie) {
        $this->totalCotisMaladie = $totalCotisMaladie;
        return $this;
    }
}
