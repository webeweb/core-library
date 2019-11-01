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
 * Qualification frais sante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualificationFraisSanteTrait {

    /**
     * Qualification frais sante.
     *
     * @var string
     */
    private $qualificationFraisSante;

    /**
     * Get the qualification frais sante.
     *
     * @return string Returns the qualification frais sante.
     */
    public function getQualificationFraisSante() {
        return $this->qualificationFraisSante;
    }

    /**
     * Set the qualification frais sante.
     *
     * @param string $qualificationFraisSante The qualification frais sante.
     */
    public function setQualificationFraisSante($qualificationFraisSante) {
        $this->qualificationFraisSante = $qualificationFraisSante;
        return $this;
    }
}
