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
 * Compte saisie arret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteSaisieArretTrait {

    /**
     * Compte saisie arret.
     *
     * @var string
     */
    private $compteSaisieArret;

    /**
     * Get the compte saisie arret.
     *
     * @return string Returns the compte saisie arret.
     */
    public function getCompteSaisieArret() {
        return $this->compteSaisieArret;
    }

    /**
     * Set the compte saisie arret.
     *
     * @param string $compteSaisieArret The compte saisie arret.
     */
    public function setCompteSaisieArret($compteSaisieArret) {
        $this->compteSaisieArret = $compteSaisieArret;
        return $this;
    }
}
