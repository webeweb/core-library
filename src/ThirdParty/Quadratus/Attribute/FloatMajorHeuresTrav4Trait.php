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
 * Major heures trav4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajorHeuresTrav4Trait {

    /**
     * Major heures trav4.
     *
     * @var float
     */
    private $majorHeuresTrav4;

    /**
     * Get the major heures trav4.
     *
     * @return float Returns the major heures trav4.
     */
    public function getMajorHeuresTrav4() {
        return $this->majorHeuresTrav4;
    }

    /**
     * Set the major heures trav4.
     *
     * @param float $majorHeuresTrav4 The major heures trav4.
     */
    public function setMajorHeuresTrav4($majorHeuresTrav4) {
        $this->majorHeuresTrav4 = $majorHeuresTrav4;
        return $this;
    }
}
