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
 * Cpt deb suivi classe9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse9Trait {

    /**
     * Cpt deb suivi classe9.
     *
     * @var string
     */
    private $cptDebSuiviClasse9;

    /**
     * Get the cpt deb suivi classe9.
     *
     * @return string Returns the cpt deb suivi classe9.
     */
    public function getCptDebSuiviClasse9() {
        return $this->cptDebSuiviClasse9;
    }

    /**
     * Set the cpt deb suivi classe9.
     *
     * @param string $cptDebSuiviClasse9 The cpt deb suivi classe9.
     */
    public function setCptDebSuiviClasse9($cptDebSuiviClasse9) {
        $this->cptDebSuiviClasse9 = $cptDebSuiviClasse9;
        return $this;
    }
}
