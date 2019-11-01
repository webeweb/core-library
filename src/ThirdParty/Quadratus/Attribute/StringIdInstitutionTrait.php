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
 * Id institution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdInstitutionTrait {

    /**
     * Id institution.
     *
     * @var string
     */
    private $idInstitution;

    /**
     * Get the id institution.
     *
     * @return string Returns the id institution.
     */
    public function getIdInstitution() {
        return $this->idInstitution;
    }

    /**
     * Set the id institution.
     *
     * @param string $idInstitution The id institution.
     */
    public function setIdInstitution($idInstitution) {
        $this->idInstitution = $idInstitution;
        return $this;
    }
}
