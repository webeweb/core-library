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
 * Code profil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeProfilTrait {

    /**
     * Code profil.
     *
     * @var string
     */
    private $codeProfil;

    /**
     * Get the code profil.
     *
     * @return string Returns the code profil.
     */
    public function getCodeProfil() {
        return $this->codeProfil;
    }

    /**
     * Set the code profil.
     *
     * @param string $codeProfil The code profil.
     */
    public function setCodeProfil($codeProfil) {
        $this->codeProfil = $codeProfil;
        return $this;
    }
}
