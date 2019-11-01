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
 * Cpt deb suivi classe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse2Trait {

    /**
     * Cpt deb suivi classe2.
     *
     * @var string
     */
    private $cptDebSuiviClasse2;

    /**
     * Get the cpt deb suivi classe2.
     *
     * @return string Returns the cpt deb suivi classe2.
     */
    public function getCptDebSuiviClasse2() {
        return $this->cptDebSuiviClasse2;
    }

    /**
     * Set the cpt deb suivi classe2.
     *
     * @param string $cptDebSuiviClasse2 The cpt deb suivi classe2.
     */
    public function setCptDebSuiviClasse2($cptDebSuiviClasse2) {
        $this->cptDebSuiviClasse2 = $cptDebSuiviClasse2;
        return $this;
    }
}
