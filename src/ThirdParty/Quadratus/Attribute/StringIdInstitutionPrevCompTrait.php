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
 * Id institution prev comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionPrevCompTrait {

    /**
     * Id institution prev comp.
     *
     * @var string
     */
    private $idInstitutionPrevComp;

    /**
     * Get the id institution prev comp.
     *
     * @return string Returns the id institution prev comp.
     */
    public function getIdInstitutionPrevComp() {
        return $this->idInstitutionPrevComp;
    }

    /**
     * Set the id institution prev comp.
     *
     * @param string $idInstitutionPrevComp The id institution prev comp.
     */
    public function setIdInstitutionPrevComp($idInstitutionPrevComp) {
        $this->idInstitutionPrevComp = $idInstitutionPrevComp;
        return $this;
    }
}
