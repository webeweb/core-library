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
 * Cpt deb suivi classe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDebSuiviClasse3Trait {

    /**
     * Cpt deb suivi classe3.
     *
     * @var string
     */
    private $cptDebSuiviClasse3;

    /**
     * Get the cpt deb suivi classe3.
     *
     * @return string Returns the cpt deb suivi classe3.
     */
    public function getCptDebSuiviClasse3() {
        return $this->cptDebSuiviClasse3;
    }

    /**
     * Set the cpt deb suivi classe3.
     *
     * @param string $cptDebSuiviClasse3 The cpt deb suivi classe3.
     */
    public function setCptDebSuiviClasse3($cptDebSuiviClasse3) {
        $this->cptDebSuiviClasse3 = $cptDebSuiviClasse3;
        return $this;
    }
}
