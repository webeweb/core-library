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
 * Nb h absence cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAbsenceCpTrait {

    /**
     * Nb h absence cp.
     *
     * @var float
     */
    private $nbHAbsenceCp;

    /**
     * Get the nb h absence cp.
     *
     * @return float Returns the nb h absence cp.
     */
    public function getNbHAbsenceCp() {
        return $this->nbHAbsenceCp;
    }

    /**
     * Set the nb h absence cp.
     *
     * @param float $nbHAbsenceCp The nb h absence cp.
     */
    public function setNbHAbsenceCp($nbHAbsenceCp) {
        $this->nbHAbsenceCp = $nbHAbsenceCp;
        return $this;
    }
}
