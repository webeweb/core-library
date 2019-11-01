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
 * Cpt fin suivi classe4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse4Trait {

    /**
     * Cpt fin suivi classe4.
     *
     * @var string
     */
    private $cptFinSuiviClasse4;

    /**
     * Get the cpt fin suivi classe4.
     *
     * @return string Returns the cpt fin suivi classe4.
     */
    public function getCptFinSuiviClasse4() {
        return $this->cptFinSuiviClasse4;
    }

    /**
     * Set the cpt fin suivi classe4.
     *
     * @param string $cptFinSuiviClasse4 The cpt fin suivi classe4.
     */
    public function setCptFinSuiviClasse4($cptFinSuiviClasse4) {
        $this->cptFinSuiviClasse4 = $cptFinSuiviClasse4;
        return $this;
    }
}
