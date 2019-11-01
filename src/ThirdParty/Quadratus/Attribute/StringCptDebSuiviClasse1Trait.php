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
 * Cpt deb suivi classe1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse1Trait {

    /**
     * Cpt deb suivi classe1.
     *
     * @var string
     */
    private $cptDebSuiviClasse1;

    /**
     * Get the cpt deb suivi classe1.
     *
     * @return string Returns the cpt deb suivi classe1.
     */
    public function getCptDebSuiviClasse1() {
        return $this->cptDebSuiviClasse1;
    }

    /**
     * Set the cpt deb suivi classe1.
     *
     * @param string $cptDebSuiviClasse1 The cpt deb suivi classe1.
     */
    public function setCptDebSuiviClasse1($cptDebSuiviClasse1) {
        $this->cptDebSuiviClasse1 = $cptDebSuiviClasse1;
        return $this;
    }
}
