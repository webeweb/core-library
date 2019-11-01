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
 * Code transporteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteurTrait {

    /**
     * Code transporteur.
     *
     * @var string
     */
    private $codeTransporteur;

    /**
     * Get the code transporteur.
     *
     * @return string Returns the code transporteur.
     */
    public function getCodeTransporteur() {
        return $this->codeTransporteur;
    }

    /**
     * Set the code transporteur.
     *
     * @param string $codeTransporteur The code transporteur.
     */
    public function setCodeTransporteur($codeTransporteur) {
        $this->codeTransporteur = $codeTransporteur;
        return $this;
    }
}
