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
 * Contingent h sup repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatContingentHSupReposCompTrait {

    /**
     * Contingent h sup repos comp.
     *
     * @var float
     */
    private $contingentHSupReposComp;

    /**
     * Get the contingent h sup repos comp.
     *
     * @return float Returns the contingent h sup repos comp.
     */
    public function getContingentHSupReposComp() {
        return $this->contingentHSupReposComp;
    }

    /**
     * Set the contingent h sup repos comp.
     *
     * @param float $contingentHSupReposComp The contingent h sup repos comp.
     */
    public function setContingentHSupReposComp($contingentHSupReposComp) {
        $this->contingentHSupReposComp = $contingentHSupReposComp;
        return $this;
    }
}
