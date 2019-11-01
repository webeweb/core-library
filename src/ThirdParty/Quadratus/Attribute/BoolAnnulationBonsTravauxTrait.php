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
 * Annulation bons travaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationBonsTravauxTrait {

    /**
     * Annulation bons travaux.
     *
     * @var bool
     */
    private $annulationBonsTravaux;

    /**
     * Get the annulation bons travaux.
     *
     * @return bool Returns the annulation bons travaux.
     */
    public function getAnnulationBonsTravaux() {
        return $this->annulationBonsTravaux;
    }

    /**
     * Set the annulation bons travaux.
     *
     * @param bool $annulationBonsTravaux The annulation bons travaux.
     */
    public function setAnnulationBonsTravaux($annulationBonsTravaux) {
        $this->annulationBonsTravaux = $annulationBonsTravaux;
        return $this;
    }
}
