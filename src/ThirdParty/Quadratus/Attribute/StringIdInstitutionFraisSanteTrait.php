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
 * Id institution frais sante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionFraisSanteTrait {

    /**
     * Id institution frais sante.
     *
     * @var string
     */
    private $idInstitutionFraisSante;

    /**
     * Get the id institution frais sante.
     *
     * @return string Returns the id institution frais sante.
     */
    public function getIdInstitutionFraisSante() {
        return $this->idInstitutionFraisSante;
    }

    /**
     * Set the id institution frais sante.
     *
     * @param string $idInstitutionFraisSante The id institution frais sante.
     */
    public function setIdInstitutionFraisSante($idInstitutionFraisSante) {
        $this->idInstitutionFraisSante = $idInstitutionFraisSante;
        return $this;
    }
}
