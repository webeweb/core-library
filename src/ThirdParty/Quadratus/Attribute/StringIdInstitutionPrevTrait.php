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
 * Id institution prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionPrevTrait {

    /**
     * Id institution prev.
     *
     * @var string
     */
    private $idInstitutionPrev;

    /**
     * Get the id institution prev.
     *
     * @return string Returns the id institution prev.
     */
    public function getIdInstitutionPrev() {
        return $this->idInstitutionPrev;
    }

    /**
     * Set the id institution prev.
     *
     * @param string $idInstitutionPrev The id institution prev.
     */
    public function setIdInstitutionPrev($idInstitutionPrev) {
        $this->idInstitutionPrev = $idInstitutionPrev;
        return $this;
    }
}
