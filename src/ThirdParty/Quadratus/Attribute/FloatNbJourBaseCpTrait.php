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
 * Nb jour base cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourBaseCpTrait {

    /**
     * Nb jour base cp.
     *
     * @var float
     */
    private $nbJourBaseCp;

    /**
     * Get the nb jour base cp.
     *
     * @return float Returns the nb jour base cp.
     */
    public function getNbJourBaseCp() {
        return $this->nbJourBaseCp;
    }

    /**
     * Set the nb jour base cp.
     *
     * @param float $nbJourBaseCp The nb jour base cp.
     */
    public function setNbJourBaseCp($nbJourBaseCp) {
        $this->nbJourBaseCp = $nbJourBaseCp;
        return $this;
    }
}
