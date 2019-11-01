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
 * Indemn compens cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnCompensCpTrait {

    /**
     * Indemn compens cp.
     *
     * @var float
     */
    private $indemnCompensCp;

    /**
     * Get the indemn compens cp.
     *
     * @return float Returns the indemn compens cp.
     */
    public function getIndemnCompensCp() {
        return $this->indemnCompensCp;
    }

    /**
     * Set the indemn compens cp.
     *
     * @param float $indemnCompensCp The indemn compens cp.
     */
    public function setIndemnCompensCp($indemnCompensCp) {
        $this->indemnCompensCp = $indemnCompensCp;
        return $this;
    }
}
