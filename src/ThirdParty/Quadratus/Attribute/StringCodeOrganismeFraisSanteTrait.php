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
 * Code organisme frais sante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeFraisSanteTrait {

    /**
     * Code organisme frais sante.
     *
     * @var string
     */
    private $codeOrganismeFraisSante;

    /**
     * Get the code organisme frais sante.
     *
     * @return string Returns the code organisme frais sante.
     */
    public function getCodeOrganismeFraisSante() {
        return $this->codeOrganismeFraisSante;
    }

    /**
     * Set the code organisme frais sante.
     *
     * @param string $codeOrganismeFraisSante The code organisme frais sante.
     */
    public function setCodeOrganismeFraisSante($codeOrganismeFraisSante) {
        $this->codeOrganismeFraisSante = $codeOrganismeFraisSante;
        return $this;
    }
}
