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
 * Total sommes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotalSommesTrait {

    /**
     * Total sommes.
     *
     * @var float
     */
    private $totalSommes;

    /**
     * Get the total sommes.
     *
     * @return float Returns the total sommes.
     */
    public function getTotalSommes() {
        return $this->totalSommes;
    }

    /**
     * Set the total sommes.
     *
     * @param float $totalSommes The total sommes.
     */
    public function setTotalSommes($totalSommes) {
        $this->totalSommes = $totalSommes;
        return $this;
    }
}
