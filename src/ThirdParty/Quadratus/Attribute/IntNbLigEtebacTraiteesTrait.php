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
 * Nb lig etebac traitees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLigEtebacTraiteesTrait {

    /**
     * Nb lig etebac traitees.
     *
     * @var int
     */
    private $nbLigEtebacTraitees;

    /**
     * Get the nb lig etebac traitees.
     *
     * @return int Returns the nb lig etebac traitees.
     */
    public function getNbLigEtebacTraitees() {
        return $this->nbLigEtebacTraitees;
    }

    /**
     * Set the nb lig etebac traitees.
     *
     * @param int $nbLigEtebacTraitees The nb lig etebac traitees.
     */
    public function setNbLigEtebacTraitees($nbLigEtebacTraitees) {
        $this->nbLigEtebacTraitees = $nbLigEtebacTraitees;
        return $this;
    }
}
