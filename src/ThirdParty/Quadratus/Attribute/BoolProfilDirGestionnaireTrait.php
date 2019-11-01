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
 * Profil dir gestionnaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfilDirGestionnaireTrait {

    /**
     * Profil dir gestionnaire.
     *
     * @var bool
     */
    private $profilDirGestionnaire;

    /**
     * Get the profil dir gestionnaire.
     *
     * @return bool Returns the profil dir gestionnaire.
     */
    public function getProfilDirGestionnaire() {
        return $this->profilDirGestionnaire;
    }

    /**
     * Set the profil dir gestionnaire.
     *
     * @param bool $profilDirGestionnaire The profil dir gestionnaire.
     */
    public function setProfilDirGestionnaire($profilDirGestionnaire) {
        $this->profilDirGestionnaire = $profilDirGestionnaire;
        return $this;
    }
}
