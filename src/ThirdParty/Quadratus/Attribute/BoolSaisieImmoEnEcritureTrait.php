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
 * Saisie immo en ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieImmoEnEcritureTrait {

    /**
     * Saisie immo en ecriture.
     *
     * @var bool
     */
    private $saisieImmoEnEcriture;

    /**
     * Get the saisie immo en ecriture.
     *
     * @return bool Returns the saisie immo en ecriture.
     */
    public function getSaisieImmoEnEcriture() {
        return $this->saisieImmoEnEcriture;
    }

    /**
     * Set the saisie immo en ecriture.
     *
     * @param bool $saisieImmoEnEcriture The saisie immo en ecriture.
     */
    public function setSaisieImmoEnEcriture($saisieImmoEnEcriture) {
        $this->saisieImmoEnEcriture = $saisieImmoEnEcriture;
        return $this;
    }
}
