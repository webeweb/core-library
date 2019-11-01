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
 * Nb jour cp sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourCpSupTrait {

    /**
     * Nb jour cp sup.
     *
     * @var float
     */
    private $nbJourCpSup;

    /**
     * Get the nb jour cp sup.
     *
     * @return float Returns the nb jour cp sup.
     */
    public function getNbJourCpSup() {
        return $this->nbJourCpSup;
    }

    /**
     * Set the nb jour cp sup.
     *
     * @param float $nbJourCpSup The nb jour cp sup.
     */
    public function setNbJourCpSup($nbJourCpSup) {
        $this->nbJourCpSup = $nbJourCpSup;
        return $this;
    }
}
