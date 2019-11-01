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
 * Major heures trav1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajorHeuresTrav1Trait {

    /**
     * Major heures trav1.
     *
     * @var float
     */
    private $majorHeuresTrav1;

    /**
     * Get the major heures trav1.
     *
     * @return float Returns the major heures trav1.
     */
    public function getMajorHeuresTrav1() {
        return $this->majorHeuresTrav1;
    }

    /**
     * Set the major heures trav1.
     *
     * @param float $majorHeuresTrav1 The major heures trav1.
     */
    public function setMajorHeuresTrav1($majorHeuresTrav1) {
        $this->majorHeuresTrav1 = $majorHeuresTrav1;
        return $this;
    }
}
