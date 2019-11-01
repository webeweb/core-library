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
 * Cpt fin suivi classe1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse1Trait {

    /**
     * Cpt fin suivi classe1.
     *
     * @var string
     */
    private $cptFinSuiviClasse1;

    /**
     * Get the cpt fin suivi classe1.
     *
     * @return string Returns the cpt fin suivi classe1.
     */
    public function getCptFinSuiviClasse1() {
        return $this->cptFinSuiviClasse1;
    }

    /**
     * Set the cpt fin suivi classe1.
     *
     * @param string $cptFinSuiviClasse1 The cpt fin suivi classe1.
     */
    public function setCptFinSuiviClasse1($cptFinSuiviClasse1) {
        $this->cptFinSuiviClasse1 = $cptFinSuiviClasse1;
        return $this;
    }
}
