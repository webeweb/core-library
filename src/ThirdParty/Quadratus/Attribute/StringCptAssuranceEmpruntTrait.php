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
 * Cpt assurance emprunt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptAssuranceEmpruntTrait {

    /**
     * Cpt assurance emprunt.
     *
     * @var string
     */
    private $cptAssuranceEmprunt;

    /**
     * Get the cpt assurance emprunt.
     *
     * @return string Returns the cpt assurance emprunt.
     */
    public function getCptAssuranceEmprunt() {
        return $this->cptAssuranceEmprunt;
    }

    /**
     * Set the cpt assurance emprunt.
     *
     * @param string $cptAssuranceEmprunt The cpt assurance emprunt.
     */
    public function setCptAssuranceEmprunt($cptAssuranceEmprunt) {
        $this->cptAssuranceEmprunt = $cptAssuranceEmprunt;
        return $this;
    }
}
