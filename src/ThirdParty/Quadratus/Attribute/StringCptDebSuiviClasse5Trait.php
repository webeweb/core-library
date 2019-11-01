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
 * Cpt deb suivi classe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse5Trait {

    /**
     * Cpt deb suivi classe5.
     *
     * @var string
     */
    private $cptDebSuiviClasse5;

    /**
     * Get the cpt deb suivi classe5.
     *
     * @return string Returns the cpt deb suivi classe5.
     */
    public function getCptDebSuiviClasse5() {
        return $this->cptDebSuiviClasse5;
    }

    /**
     * Set the cpt deb suivi classe5.
     *
     * @param string $cptDebSuiviClasse5 The cpt deb suivi classe5.
     */
    public function setCptDebSuiviClasse5($cptDebSuiviClasse5) {
        $this->cptDebSuiviClasse5 = $cptDebSuiviClasse5;
        return $this;
    }
}
