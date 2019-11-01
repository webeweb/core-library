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
 * Num ligne profil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLigneProfilTrait {

    /**
     * Num ligne profil.
     *
     * @var int
     */
    private $numLigneProfil;

    /**
     * Get the num ligne profil.
     *
     * @return int Returns the num ligne profil.
     */
    public function getNumLigneProfil() {
        return $this->numLigneProfil;
    }

    /**
     * Set the num ligne profil.
     *
     * @param int $numLigneProfil The num ligne profil.
     */
    public function setNumLigneProfil($numLigneProfil) {
        $this->numLigneProfil = $numLigneProfil;
        return $this;
    }
}
