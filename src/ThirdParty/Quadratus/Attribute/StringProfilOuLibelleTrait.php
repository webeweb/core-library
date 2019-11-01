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
 * Profil ou libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProfilOuLibelleTrait {

    /**
     * Profil ou libelle.
     *
     * @var string
     */
    private $profilOuLibelle;

    /**
     * Get the profil ou libelle.
     *
     * @return string Returns the profil ou libelle.
     */
    public function getProfilOuLibelle() {
        return $this->profilOuLibelle;
    }

    /**
     * Set the profil ou libelle.
     *
     * @param string $profilOuLibelle The profil ou libelle.
     */
    public function setProfilOuLibelle($profilOuLibelle) {
        $this->profilOuLibelle = $profilOuLibelle;
        return $this;
    }
}
