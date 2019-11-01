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
 * Acces dossier cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAccesDossierCptaTrait {

    /**
     * Acces dossier cpta.
     *
     * @var string
     */
    private $accesDossierCpta;

    /**
     * Get the acces dossier cpta.
     *
     * @return string Returns the acces dossier cpta.
     */
    public function getAccesDossierCpta() {
        return $this->accesDossierCpta;
    }

    /**
     * Set the acces dossier cpta.
     *
     * @param string $accesDossierCpta The acces dossier cpta.
     */
    public function setAccesDossierCpta($accesDossierCpta) {
        $this->accesDossierCpta = $accesDossierCpta;
        return $this;
    }
}
