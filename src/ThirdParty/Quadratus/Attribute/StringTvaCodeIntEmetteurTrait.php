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
 * Tva code int emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeIntEmetteurTrait {

    /**
     * Tva code int emetteur.
     *
     * @var string
     */
    private $tvaCodeIntEmetteur;

    /**
     * Get the tva code int emetteur.
     *
     * @return string Returns the tva code int emetteur.
     */
    public function getTvaCodeIntEmetteur() {
        return $this->tvaCodeIntEmetteur;
    }

    /**
     * Set the tva code int emetteur.
     *
     * @param string $tvaCodeIntEmetteur The tva code int emetteur.
     */
    public function setTvaCodeIntEmetteur($tvaCodeIntEmetteur) {
        $this->tvaCodeIntEmetteur = $tvaCodeIntEmetteur;
        return $this;
    }
}
