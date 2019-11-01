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
 * Profil dir anxieux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfilDirAnxieuxTrait {

    /**
     * Profil dir anxieux.
     *
     * @var bool
     */
    private $profilDirAnxieux;

    /**
     * Get the profil dir anxieux.
     *
     * @return bool Returns the profil dir anxieux.
     */
    public function getProfilDirAnxieux() {
        return $this->profilDirAnxieux;
    }

    /**
     * Set the profil dir anxieux.
     *
     * @param bool $profilDirAnxieux The profil dir anxieux.
     */
    public function setProfilDirAnxieux($profilDirAnxieux) {
        $this->profilDirAnxieux = $profilDirAnxieux;
        return $this;
    }
}
