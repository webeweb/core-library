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
 * Annulation affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationAffaireTrait {

    /**
     * Annulation affaire.
     *
     * @var bool
     */
    private $annulationAffaire;

    /**
     * Get the annulation affaire.
     *
     * @return bool Returns the annulation affaire.
     */
    public function getAnnulationAffaire() {
        return $this->annulationAffaire;
    }

    /**
     * Set the annulation affaire.
     *
     * @param bool $annulationAffaire The annulation affaire.
     */
    public function setAnnulationAffaire($annulationAffaire) {
        $this->annulationAffaire = $annulationAffaire;
        return $this;
    }
}
