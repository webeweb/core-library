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
 * Major heures trav2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajorHeuresTrav2Trait {

    /**
     * Major heures trav2.
     *
     * @var float
     */
    private $majorHeuresTrav2;

    /**
     * Get the major heures trav2.
     *
     * @return float Returns the major heures trav2.
     */
    public function getMajorHeuresTrav2() {
        return $this->majorHeuresTrav2;
    }

    /**
     * Set the major heures trav2.
     *
     * @param float $majorHeuresTrav2 The major heures trav2.
     */
    public function setMajorHeuresTrav2($majorHeuresTrav2) {
        $this->majorHeuresTrav2 = $majorHeuresTrav2;
        return $this;
    }
}
