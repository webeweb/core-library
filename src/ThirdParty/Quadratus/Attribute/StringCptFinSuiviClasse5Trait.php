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
 * Cpt fin suivi classe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse5Trait {

    /**
     * Cpt fin suivi classe5.
     *
     * @var string
     */
    private $cptFinSuiviClasse5;

    /**
     * Get the cpt fin suivi classe5.
     *
     * @return string Returns the cpt fin suivi classe5.
     */
    public function getCptFinSuiviClasse5() {
        return $this->cptFinSuiviClasse5;
    }

    /**
     * Set the cpt fin suivi classe5.
     *
     * @param string $cptFinSuiviClasse5 The cpt fin suivi classe5.
     */
    public function setCptFinSuiviClasse5($cptFinSuiviClasse5) {
        $this->cptFinSuiviClasse5 = $cptFinSuiviClasse5;
        return $this;
    }
}
