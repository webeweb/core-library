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
 * Id institution arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionArrcoTrait {

    /**
     * Id institution arrco.
     *
     * @var string
     */
    private $idInstitutionArrco;

    /**
     * Get the id institution arrco.
     *
     * @return string Returns the id institution arrco.
     */
    public function getIdInstitutionArrco() {
        return $this->idInstitutionArrco;
    }

    /**
     * Set the id institution arrco.
     *
     * @param string $idInstitutionArrco The id institution arrco.
     */
    public function setIdInstitutionArrco($idInstitutionArrco) {
        $this->idInstitutionArrco = $idInstitutionArrco;
        return $this;
    }
}
