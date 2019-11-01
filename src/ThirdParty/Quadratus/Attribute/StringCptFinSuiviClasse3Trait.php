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
 * Cpt fin suivi classe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFinSuiviClasse3Trait {

    /**
     * Cpt fin suivi classe3.
     *
     * @var string
     */
    private $cptFinSuiviClasse3;

    /**
     * Get the cpt fin suivi classe3.
     *
     * @return string Returns the cpt fin suivi classe3.
     */
    public function getCptFinSuiviClasse3() {
        return $this->cptFinSuiviClasse3;
    }

    /**
     * Set the cpt fin suivi classe3.
     *
     * @param string $cptFinSuiviClasse3 The cpt fin suivi classe3.
     */
    public function setCptFinSuiviClasse3($cptFinSuiviClasse3) {
        $this->cptFinSuiviClasse3 = $cptFinSuiviClasse3;
        return $this;
    }
}
