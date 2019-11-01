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
 * Contingent h sup rcit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatContingentHSupRcitTrait {

    /**
     * Contingent h sup rcit.
     *
     * @var float
     */
    private $contingentHSupRcit;

    /**
     * Get the contingent h sup rcit.
     *
     * @return float Returns the contingent h sup rcit.
     */
    public function getContingentHSupRcit() {
        return $this->contingentHSupRcit;
    }

    /**
     * Set the contingent h sup rcit.
     *
     * @param float $contingentHSupRcit The contingent h sup rcit.
     */
    public function setContingentHSupRcit($contingentHSupRcit) {
        $this->contingentHSupRcit = $contingentHSupRcit;
        return $this;
    }
}
