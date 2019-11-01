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
 * Acces collaborateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesCollaborateurTrait {

    /**
     * Acces collaborateur.
     *
     * @var bool
     */
    private $accesCollaborateur;

    /**
     * Get the acces collaborateur.
     *
     * @return bool Returns the acces collaborateur.
     */
    public function getAccesCollaborateur() {
        return $this->accesCollaborateur;
    }

    /**
     * Set the acces collaborateur.
     *
     * @param bool $accesCollaborateur The acces collaborateur.
     */
    public function setAccesCollaborateur($accesCollaborateur) {
        $this->accesCollaborateur = $accesCollaborateur;
        return $this;
    }
}
