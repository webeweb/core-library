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
 * Cpt deb suivi classe8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse8Trait {

    /**
     * Cpt deb suivi classe8.
     *
     * @var string
     */
    private $cptDebSuiviClasse8;

    /**
     * Get the cpt deb suivi classe8.
     *
     * @return string Returns the cpt deb suivi classe8.
     */
    public function getCptDebSuiviClasse8() {
        return $this->cptDebSuiviClasse8;
    }

    /**
     * Set the cpt deb suivi classe8.
     *
     * @param string $cptDebSuiviClasse8 The cpt deb suivi classe8.
     */
    public function setCptDebSuiviClasse8($cptDebSuiviClasse8) {
        $this->cptDebSuiviClasse8 = $cptDebSuiviClasse8;
        return $this;
    }
}
