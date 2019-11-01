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
 * Code emp inspecteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmpInspecteurTrait {

    /**
     * Code emp inspecteur.
     *
     * @var string
     */
    private $codeEmpInspecteur;

    /**
     * Get the code emp inspecteur.
     *
     * @return string Returns the code emp inspecteur.
     */
    public function getCodeEmpInspecteur() {
        return $this->codeEmpInspecteur;
    }

    /**
     * Set the code emp inspecteur.
     *
     * @param string $codeEmpInspecteur The code emp inspecteur.
     */
    public function setCodeEmpInspecteur($codeEmpInspecteur) {
        $this->codeEmpInspecteur = $codeEmpInspecteur;
        return $this;
    }
}
