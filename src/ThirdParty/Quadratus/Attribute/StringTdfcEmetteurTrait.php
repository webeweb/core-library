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
 * Tdfc emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTdfcEmetteurTrait {

    /**
     * Tdfc emetteur.
     *
     * @var string
     */
    private $tdfcEmetteur;

    /**
     * Get the tdfc emetteur.
     *
     * @return string Returns the tdfc emetteur.
     */
    public function getTdfcEmetteur() {
        return $this->tdfcEmetteur;
    }

    /**
     * Set the tdfc emetteur.
     *
     * @param string $tdfcEmetteur The tdfc emetteur.
     */
    public function setTdfcEmetteur($tdfcEmetteur) {
        $this->tdfcEmetteur = $tdfcEmetteur;
        return $this;
    }
}
