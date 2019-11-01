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
 * Tva code int recepteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeIntRecepteurTrait {

    /**
     * Tva code int recepteur.
     *
     * @var string
     */
    private $tvaCodeIntRecepteur;

    /**
     * Get the tva code int recepteur.
     *
     * @return string Returns the tva code int recepteur.
     */
    public function getTvaCodeIntRecepteur() {
        return $this->tvaCodeIntRecepteur;
    }

    /**
     * Set the tva code int recepteur.
     *
     * @param string $tvaCodeIntRecepteur The tva code int recepteur.
     */
    public function setTvaCodeIntRecepteur($tvaCodeIntRecepteur) {
        $this->tvaCodeIntRecepteur = $tvaCodeIntRecepteur;
        return $this;
    }
}
