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
 * Profil dir commercial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProfilDirCommercialTrait {

    /**
     * Profil dir commercial.
     *
     * @var bool
     */
    private $profilDirCommercial;

    /**
     * Get the profil dir commercial.
     *
     * @return bool Returns the profil dir commercial.
     */
    public function getProfilDirCommercial() {
        return $this->profilDirCommercial;
    }

    /**
     * Set the profil dir commercial.
     *
     * @param bool $profilDirCommercial The profil dir commercial.
     */
    public function setProfilDirCommercial($profilDirCommercial) {
        $this->profilDirCommercial = $profilDirCommercial;
        return $this;
    }
}
