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
 * Cpt fin suivi classe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse2Trait {

    /**
     * Cpt fin suivi classe2.
     *
     * @var string
     */
    private $cptFinSuiviClasse2;

    /**
     * Get the cpt fin suivi classe2.
     *
     * @return string Returns the cpt fin suivi classe2.
     */
    public function getCptFinSuiviClasse2() {
        return $this->cptFinSuiviClasse2;
    }

    /**
     * Set the cpt fin suivi classe2.
     *
     * @param string $cptFinSuiviClasse2 The cpt fin suivi classe2.
     */
    public function setCptFinSuiviClasse2($cptFinSuiviClasse2) {
        $this->cptFinSuiviClasse2 = $cptFinSuiviClasse2;
        return $this;
    }
}
