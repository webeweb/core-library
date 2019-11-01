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
 * Code inspecteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeInspecteurTrait {

    /**
     * Code inspecteur.
     *
     * @var string
     */
    private $codeInspecteur;

    /**
     * Get the code inspecteur.
     *
     * @return string Returns the code inspecteur.
     */
    public function getCodeInspecteur() {
        return $this->codeInspecteur;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string $codeInspecteur The code inspecteur.
     */
    public function setCodeInspecteur($codeInspecteur) {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }
}
