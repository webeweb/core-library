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
 * Contingent h sup rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatContingentHSupRcTrait {

    /**
     * Contingent h sup rc.
     *
     * @var float
     */
    private $contingentHSupRc;

    /**
     * Get the contingent h sup rc.
     *
     * @return float Returns the contingent h sup rc.
     */
    public function getContingentHSupRc() {
        return $this->contingentHSupRc;
    }

    /**
     * Set the contingent h sup rc.
     *
     * @param float $contingentHSupRc The contingent h sup rc.
     */
    public function setContingentHSupRc($contingentHSupRc) {
        $this->contingentHSupRc = $contingentHSupRc;
        return $this;
    }
}
