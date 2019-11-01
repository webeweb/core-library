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
 * Cpt fin suivi classe8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse8Trait {

    /**
     * Cpt fin suivi classe8.
     *
     * @var string
     */
    private $cptFinSuiviClasse8;

    /**
     * Get the cpt fin suivi classe8.
     *
     * @return string Returns the cpt fin suivi classe8.
     */
    public function getCptFinSuiviClasse8() {
        return $this->cptFinSuiviClasse8;
    }

    /**
     * Set the cpt fin suivi classe8.
     *
     * @param string $cptFinSuiviClasse8 The cpt fin suivi classe8.
     */
    public function setCptFinSuiviClasse8($cptFinSuiviClasse8) {
        $this->cptFinSuiviClasse8 = $cptFinSuiviClasse8;
        return $this;
    }
}
