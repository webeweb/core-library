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
 * Total salaire maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalSalaireMaladieTrait {

    /**
     * Total salaire maladie.
     *
     * @var float
     */
    private $totalSalaireMaladie;

    /**
     * Get the total salaire maladie.
     *
     * @return float Returns the total salaire maladie.
     */
    public function getTotalSalaireMaladie() {
        return $this->totalSalaireMaladie;
    }

    /**
     * Set the total salaire maladie.
     *
     * @param float $totalSalaireMaladie The total salaire maladie.
     */
    public function setTotalSalaireMaladie($totalSalaireMaladie) {
        $this->totalSalaireMaladie = $totalSalaireMaladie;
        return $this;
    }
}
