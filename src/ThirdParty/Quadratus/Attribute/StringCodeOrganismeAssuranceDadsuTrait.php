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
 * Code organisme assurance dadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeAssuranceDadsuTrait {

    /**
     * Code organisme assurance dadsu.
     *
     * @var string
     */
    private $codeOrganismeAssuranceDadsu;

    /**
     * Get the code organisme assurance dadsu.
     *
     * @return string Returns the code organisme assurance dadsu.
     */
    public function getCodeOrganismeAssuranceDadsu() {
        return $this->codeOrganismeAssuranceDadsu;
    }

    /**
     * Set the code organisme assurance dadsu.
     *
     * @param string $codeOrganismeAssuranceDadsu The code organisme assurance dadsu.
     */
    public function setCodeOrganismeAssuranceDadsu($codeOrganismeAssuranceDadsu) {
        $this->codeOrganismeAssuranceDadsu = $codeOrganismeAssuranceDadsu;
        return $this;
    }
}
