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
 * Nb j chom part cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJChomPartCpTrait {

    /**
     * Nb j chom part cp.
     *
     * @var float
     */
    private $nbJChomPartCp;

    /**
     * Get the nb j chom part cp.
     *
     * @return float Returns the nb j chom part cp.
     */
    public function getNbJChomPartCp() {
        return $this->nbJChomPartCp;
    }

    /**
     * Set the nb j chom part cp.
     *
     * @param float $nbJChomPartCp The nb j chom part cp.
     */
    public function setNbJChomPartCp($nbJChomPartCp) {
        $this->nbJChomPartCp = $nbJChomPartCp;
        return $this;
    }
}
