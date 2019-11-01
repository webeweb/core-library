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
 * Profil ent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProfilEntTrait {

    /**
     * Profil ent.
     *
     * @var string
     */
    private $profilEnt;

    /**
     * Get the profil ent.
     *
     * @return string Returns the profil ent.
     */
    public function getProfilEnt() {
        return $this->profilEnt;
    }

    /**
     * Set the profil ent.
     *
     * @param string $profilEnt The profil ent.
     */
    public function setProfilEnt($profilEnt) {
        $this->profilEnt = $profilEnt;
        return $this;
    }
}
