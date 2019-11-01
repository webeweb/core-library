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
 * Annulation tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationTarifTrait {

    /**
     * Annulation tarif.
     *
     * @var bool
     */
    private $annulationTarif;

    /**
     * Get the annulation tarif.
     *
     * @return bool Returns the annulation tarif.
     */
    public function getAnnulationTarif() {
        return $this->annulationTarif;
    }

    /**
     * Set the annulation tarif.
     *
     * @param bool $annulationTarif The annulation tarif.
     */
    public function setAnnulationTarif($annulationTarif) {
        $this->annulationTarif = $annulationTarif;
        return $this;
    }
}
