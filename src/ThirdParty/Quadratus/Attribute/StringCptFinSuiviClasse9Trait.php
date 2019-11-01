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
 * Cpt fin suivi classe9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse9Trait {

    /**
     * Cpt fin suivi classe9.
     *
     * @var string
     */
    private $cptFinSuiviClasse9;

    /**
     * Get the cpt fin suivi classe9.
     *
     * @return string Returns the cpt fin suivi classe9.
     */
    public function getCptFinSuiviClasse9() {
        return $this->cptFinSuiviClasse9;
    }

    /**
     * Set the cpt fin suivi classe9.
     *
     * @param string $cptFinSuiviClasse9 The cpt fin suivi classe9.
     */
    public function setCptFinSuiviClasse9($cptFinSuiviClasse9) {
        $this->cptFinSuiviClasse9 = $cptFinSuiviClasse9;
        return $this;
    }
}
