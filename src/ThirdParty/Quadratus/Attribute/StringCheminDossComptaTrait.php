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
 * Chemin doss compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCheminDossComptaTrait {

    /**
     * Chemin doss compta.
     *
     * @var string
     */
    private $cheminDossCompta;

    /**
     * Get the chemin doss compta.
     *
     * @return string Returns the chemin doss compta.
     */
    public function getCheminDossCompta() {
        return $this->cheminDossCompta;
    }

    /**
     * Set the chemin doss compta.
     *
     * @param string $cheminDossCompta The chemin doss compta.
     */
    public function setCheminDossCompta($cheminDossCompta) {
        $this->cheminDossCompta = $cheminDossCompta;
        return $this;
    }
}
