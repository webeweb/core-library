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
 * Profil dir technicien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfilDirTechnicienTrait {

    /**
     * Profil dir technicien.
     *
     * @var bool
     */
    private $profilDirTechnicien;

    /**
     * Get the profil dir technicien.
     *
     * @return bool Returns the profil dir technicien.
     */
    public function getProfilDirTechnicien() {
        return $this->profilDirTechnicien;
    }

    /**
     * Set the profil dir technicien.
     *
     * @param bool $profilDirTechnicien The profil dir technicien.
     */
    public function setProfilDirTechnicien($profilDirTechnicien) {
        $this->profilDirTechnicien = $profilDirTechnicien;
        return $this;
    }
}
