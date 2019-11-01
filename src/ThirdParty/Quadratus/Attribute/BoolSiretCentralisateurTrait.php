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
 * Siret centralisateur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSiretCentralisateurTrait {

    /**
     * Siret centralisateur.
     *
     * @var bool
     */
    private $siretCentralisateur;

    /**
     * Get the siret centralisateur.
     *
     * @return bool Returns the siret centralisateur.
     */
    public function getSiretCentralisateur() {
        return $this->siretCentralisateur;
    }

    /**
     * Set the siret centralisateur.
     *
     * @param bool $siretCentralisateur The siret centralisateur.
     */
    public function setSiretCentralisateur($siretCentralisateur) {
        $this->siretCentralisateur = $siretCentralisateur;
        return $this;
    }
}
