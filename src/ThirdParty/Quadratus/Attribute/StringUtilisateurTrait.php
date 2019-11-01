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
 * Utilisateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUtilisateurTrait {

    /**
     * Utilisateur.
     *
     * @var string
     */
    private $utilisateur;

    /**
     * Get the utilisateur.
     *
     * @return string Returns the utilisateur.
     */
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    /**
     * Set the utilisateur.
     *
     * @param string $utilisateur The utilisateur.
     */
    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
