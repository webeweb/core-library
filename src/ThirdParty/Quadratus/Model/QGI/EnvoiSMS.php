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
 * Envoi s m s model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class EnvoiSMS {

    /**
     * Acces collaborateur.
     *
     * @var bool
     */
    private $accesCollaborateur;

    /**
     * Acces intervenants.
     *
     * @var bool
     */
    private $accesIntervenants;

    /**
     * Acces total.
     *
     * @var bool
     */
    private $accesTotal;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Nb s m s.
     *
     * @var int
     */
    private $nbSMS;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces collaborateur.
     *
     * @return bool Returns the acces collaborateur.
     */
    public function getAccesCollaborateur() {
        return $this->accesCollaborateur;
    }

    /**
     * Get the acces intervenants.
     *
     * @return bool Returns the acces intervenants.
     */
    public function getAccesIntervenants() {
        return $this->accesIntervenants;
    }

    /**
     * Get the acces total.
     *
     * @return bool Returns the acces total.
     */
    public function getAccesTotal() {
        return $this->accesTotal;
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
     * Get the nb s m s.
     *
     * @return int Returns the nb s m s.
     */
    public function getNbSMS() {
        return $this->nbSMS;
    }

    /**
     * Set the acces collaborateur.
     *
     * @param bool $accesCollaborateur The acces collaborateur.
     * @return EnvoiSMS Returns this envoi s m s.
     */
    public function setAccesCollaborateur($accesCollaborateur) {
        $this->accesCollaborateur = $accesCollaborateur;
        return $this;
    }

    /**
     * Set the acces intervenants.
     *
     * @param bool $accesIntervenants The acces intervenants.
     * @return EnvoiSMS Returns this envoi s m s.
     */
    public function setAccesIntervenants($accesIntervenants) {
        $this->accesIntervenants = $accesIntervenants;
        return $this;
    }

    /**
     * Set the acces total.
     *
     * @param bool $accesTotal The acces total.
     * @return EnvoiSMS Returns this envoi s m s.
     */
    public function setAccesTotal($accesTotal) {
        $this->accesTotal = $accesTotal;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return EnvoiSMS Returns this envoi s m s.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nb s m s.
     *
     * @param int $nbSMS The nb s m s.
     * @return EnvoiSMS Returns this envoi s m s.
     */
    public function setNbSMS($nbSMS) {
        $this->nbSMS = $nbSMS;
        return $this;
    }
}
