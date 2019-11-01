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
 * Nb lig etebac traitees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLigEtebacTraiteesADeduireTrait {

    /**
     * Nb lig etebac traitees a deduire.
     *
     * @var int
     */
    private $nbLigEtebacTraiteesADeduire;

    /**
     * Get the nb lig etebac traitees a deduire.
     *
     * @return int Returns the nb lig etebac traitees a deduire.
     */
    public function getNbLigEtebacTraiteesADeduire() {
        return $this->nbLigEtebacTraiteesADeduire;
    }

    /**
     * Set the nb lig etebac traitees a deduire.
     *
     * @param int $nbLigEtebacTraiteesADeduire The nb lig etebac traitees a deduire.
     */
    public function setNbLigEtebacTraiteesADeduire($nbLigEtebacTraiteesADeduire) {
        $this->nbLigEtebacTraiteesADeduire = $nbLigEtebacTraiteesADeduire;
        return $this;
    }
}
