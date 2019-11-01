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
 * Nb jour cp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourCpPrisTrait {

    /**
     * Nb jour cp pris.
     *
     * @var float
     */
    private $nbJourCpPris;

    /**
     * Get the nb jour cp pris.
     *
     * @return float Returns the nb jour cp pris.
     */
    public function getNbJourCpPris() {
        return $this->nbJourCpPris;
    }

    /**
     * Set the nb jour cp pris.
     *
     * @param float $nbJourCpPris The nb jour cp pris.
     */
    public function setNbJourCpPris($nbJourCpPris) {
        $this->nbJourCpPris = $nbJourCpPris;
        return $this;
    }
}
