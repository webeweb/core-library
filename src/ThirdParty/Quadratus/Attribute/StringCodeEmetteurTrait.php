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
 * Code emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEmetteurTrait {

    /**
     * Code emetteur.
     *
     * @var string
     */
    private $codeEmetteur;

    /**
     * Get the code emetteur.
     *
     * @return string Returns the code emetteur.
     */
    public function getCodeEmetteur() {
        return $this->codeEmetteur;
    }

    /**
     * Set the code emetteur.
     *
     * @param string $codeEmetteur The code emetteur.
     */
    public function setCodeEmetteur($codeEmetteur) {
        $this->codeEmetteur = $codeEmetteur;
        return $this;
    }
}
