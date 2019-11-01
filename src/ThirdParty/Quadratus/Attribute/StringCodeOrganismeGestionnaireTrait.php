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
 * Code organisme gestionnaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeGestionnaireTrait {

    /**
     * Code organisme gestionnaire.
     *
     * @var string
     */
    private $codeOrganismeGestionnaire;

    /**
     * Get the code organisme gestionnaire.
     *
     * @return string Returns the code organisme gestionnaire.
     */
    public function getCodeOrganismeGestionnaire() {
        return $this->codeOrganismeGestionnaire;
    }

    /**
     * Set the code organisme gestionnaire.
     *
     * @param string $codeOrganismeGestionnaire The code organisme gestionnaire.
     */
    public function setCodeOrganismeGestionnaire($codeOrganismeGestionnaire) {
        $this->codeOrganismeGestionnaire = $codeOrganismeGestionnaire;
        return $this;
    }
}
