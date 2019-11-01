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
 * Id institution ccca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionCccaTrait {

    /**
     * Id institution ccca.
     *
     * @var string
     */
    private $idInstitutionCcca;

    /**
     * Get the id institution ccca.
     *
     * @return string Returns the id institution ccca.
     */
    public function getIdInstitutionCcca() {
        return $this->idInstitutionCcca;
    }

    /**
     * Set the id institution ccca.
     *
     * @param string $idInstitutionCcca The id institution ccca.
     */
    public function setIdInstitutionCcca($idInstitutionCcca) {
        $this->idInstitutionCcca = $idInstitutionCcca;
        return $this;
    }
}
