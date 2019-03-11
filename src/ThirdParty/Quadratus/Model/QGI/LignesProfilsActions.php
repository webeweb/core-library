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
 * Lignes profils actions model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LignesProfilsActions {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code profil.
     *
     * @var string
     */
    private $codeProfil;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
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
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return LignesProfilsActions Returns this lignes profils actions.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code profil.
     *
     * @param string $codeProfil The code profil.
     * @return LignesProfilsActions Returns this lignes profils actions.
     */
    public function setCodeProfil($codeProfil) {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return LignesProfilsActions Returns this lignes profils actions.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }
}
