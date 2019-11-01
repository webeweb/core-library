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
 * Annee chgt effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeChgtEffectifTrait {

    /**
     * Annee chgt effectif.
     *
     * @var string
     */
    private $anneeChgtEffectif;

    /**
     * Get the annee chgt effectif.
     *
     * @return string Returns the annee chgt effectif.
     */
    public function getAnneeChgtEffectif() {
        return $this->anneeChgtEffectif;
    }

    /**
     * Set the annee chgt effectif.
     *
     * @param string $anneeChgtEffectif The annee chgt effectif.
     */
    public function setAnneeChgtEffectif($anneeChgtEffectif) {
        $this->anneeChgtEffectif = $anneeChgtEffectif;
        return $this;
    }
}
