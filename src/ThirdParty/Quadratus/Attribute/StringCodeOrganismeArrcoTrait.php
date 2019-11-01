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
 * Code organisme arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeArrcoTrait {

    /**
     * Code organisme arrco.
     *
     * @var string
     */
    private $codeOrganismeArrco;

    /**
     * Get the code organisme arrco.
     *
     * @return string Returns the code organisme arrco.
     */
    public function getCodeOrganismeArrco() {
        return $this->codeOrganismeArrco;
    }

    /**
     * Set the code organisme arrco.
     *
     * @param string $codeOrganismeArrco The code organisme arrco.
     */
    public function setCodeOrganismeArrco($codeOrganismeArrco) {
        $this->codeOrganismeArrco = $codeOrganismeArrco;
        return $this;
    }
}
