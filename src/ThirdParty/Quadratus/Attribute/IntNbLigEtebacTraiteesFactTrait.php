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
 * Nb lig etebac traitees fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLigEtebacTraiteesFactTrait {

    /**
     * Nb lig etebac traitees fact.
     *
     * @var int
     */
    private $nbLigEtebacTraiteesFact;

    /**
     * Get the nb lig etebac traitees fact.
     *
     * @return int Returns the nb lig etebac traitees fact.
     */
    public function getNbLigEtebacTraiteesFact() {
        return $this->nbLigEtebacTraiteesFact;
    }

    /**
     * Set the nb lig etebac traitees fact.
     *
     * @param int $nbLigEtebacTraiteesFact The nb lig etebac traitees fact.
     */
    public function setNbLigEtebacTraiteesFact($nbLigEtebacTraiteesFact) {
        $this->nbLigEtebacTraiteesFact = $nbLigEtebacTraiteesFact;
        return $this;
    }
}
