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
 * Nb h chom part cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHChomPartCpTrait {

    /**
     * Nb h chom part cp.
     *
     * @var float
     */
    private $nbHChomPartCp;

    /**
     * Get the nb h chom part cp.
     *
     * @return float Returns the nb h chom part cp.
     */
    public function getNbHChomPartCp() {
        return $this->nbHChomPartCp;
    }

    /**
     * Set the nb h chom part cp.
     *
     * @param float $nbHChomPartCp The nb h chom part cp.
     */
    public function setNbHChomPartCp($nbHChomPartCp) {
        $this->nbHChomPartCp = $nbHChomPartCp;
        return $this;
    }
}
