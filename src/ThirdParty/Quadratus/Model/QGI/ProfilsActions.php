<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Profils actions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ProfilsActions {

    /**
     * Code profil.
     *
     * @var string
     */
    private $codeProfil;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code profil.
     *
     * @return string Returns the code profil.
     */
    public function getCodeProfil() {
        return $this->codeProfil;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Set the code profil.
     *
     * @param string $codeProfil The code profil.
     * @return ProfilsActions Returns this profils actions.
     */
    public function setCodeProfil($codeProfil) {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return ProfilsActions Returns this profils actions.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }
}
