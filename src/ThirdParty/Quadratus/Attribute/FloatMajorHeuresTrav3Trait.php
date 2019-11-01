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
 * Major heures trav3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMajorHeuresTrav3Trait {

    /**
     * Major heures trav3.
     *
     * @var float
     */
    private $majorHeuresTrav3;

    /**
     * Get the major heures trav3.
     *
     * @return float Returns the major heures trav3.
     */
    public function getMajorHeuresTrav3() {
        return $this->majorHeuresTrav3;
    }

    /**
     * Set the major heures trav3.
     *
     * @param float $majorHeuresTrav3 The major heures trav3.
     */
    public function setMajorHeuresTrav3($majorHeuresTrav3) {
        $this->majorHeuresTrav3 = $majorHeuresTrav3;
        return $this;
    }
}
