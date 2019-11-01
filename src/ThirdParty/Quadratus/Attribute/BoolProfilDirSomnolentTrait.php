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
 * Profil dir somnolent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfilDirSomnolentTrait {

    /**
     * Profil dir somnolent.
     *
     * @var bool
     */
    private $profilDirSomnolent;

    /**
     * Get the profil dir somnolent.
     *
     * @return bool Returns the profil dir somnolent.
     */
    public function getProfilDirSomnolent() {
        return $this->profilDirSomnolent;
    }

    /**
     * Set the profil dir somnolent.
     *
     * @param bool $profilDirSomnolent The profil dir somnolent.
     */
    public function setProfilDirSomnolent($profilDirSomnolent) {
        $this->profilDirSomnolent = $profilDirSomnolent;
        return $this;
    }
}
