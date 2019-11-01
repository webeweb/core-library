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
 * Controleur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringControleurTrait {

    /**
     * Controleur.
     *
     * @var string
     */
    private $controleur;

    /**
     * Get the controleur.
     *
     * @return string Returns the controleur.
     */
    public function getControleur() {
        return $this->controleur;
    }

    /**
     * Set the controleur.
     *
     * @param string $controleur The controleur.
     */
    public function setControleur($controleur) {
        $this->controleur = $controleur;
        return $this;
    }
}
