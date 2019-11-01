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
 * Organisation adm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganisationAdmTrait {

    /**
     * Organisation adm.
     *
     * @var string
     */
    private $organisationAdm;

    /**
     * Get the organisation adm.
     *
     * @return string Returns the organisation adm.
     */
    public function getOrganisationAdm() {
        return $this->organisationAdm;
    }

    /**
     * Set the organisation adm.
     *
     * @param string $organisationAdm The organisation adm.
     */
    public function setOrganisationAdm($organisationAdm) {
        $this->organisationAdm = $organisationAdm;
        return $this;
    }
}
