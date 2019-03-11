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
 * Collab adr mail conf model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabAdrMailConf {

    /**
     * Adresse email.
     *
     * @var string
     */
    private $adresseEmail;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

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
     * Get the adresse email.
     *
     * @return string Returns the adresse email.
     */
    public function getAdresseEmail() {
        return $this->adresseEmail;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
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
     * Set the adresse email.
     *
     * @param string $adresseEmail The adresse email.
     * @return CollabAdrMailConf Returns this collab adr mail conf.
     */
    public function setAdresseEmail($adresseEmail) {
        $this->adresseEmail = $adresseEmail;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return CollabAdrMailConf Returns this collab adr mail conf.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return CollabAdrMailConf Returns this collab adr mail conf.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }
}
