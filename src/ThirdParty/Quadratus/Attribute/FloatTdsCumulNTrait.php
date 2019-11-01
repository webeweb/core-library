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
 * Tds cumul n trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsCumulNTrait {

    /**
     * Tds cumul n.
     *
     * @var float
     */
    private $tdsCumulN;

    /**
     * Get the tds cumul n.
     *
     * @return float Returns the tds cumul n.
     */
    public function getTdsCumulN() {
        return $this->tdsCumulN;
    }

    /**
     * Set the tds cumul n.
     *
     * @param float $tdsCumulN The tds cumul n.
     */
    public function setTdsCumulN($tdsCumulN) {
        $this->tdsCumulN = $tdsCumulN;
        return $this;
    }
}
