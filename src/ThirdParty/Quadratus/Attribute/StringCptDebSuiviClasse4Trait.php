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
 * Cpt deb suivi classe4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse4Trait {

    /**
     * Cpt deb suivi classe4.
     *
     * @var string
     */
    private $cptDebSuiviClasse4;

    /**
     * Get the cpt deb suivi classe4.
     *
     * @return string Returns the cpt deb suivi classe4.
     */
    public function getCptDebSuiviClasse4() {
        return $this->cptDebSuiviClasse4;
    }

    /**
     * Set the cpt deb suivi classe4.
     *
     * @param string $cptDebSuiviClasse4 The cpt deb suivi classe4.
     */
    public function setCptDebSuiviClasse4($cptDebSuiviClasse4) {
        $this->cptDebSuiviClasse4 = $cptDebSuiviClasse4;
        return $this;
    }
}
