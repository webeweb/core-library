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
 * Envoi sms.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class EnvoiSms {

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
     * Nb sms.
     *
     * @var int
     */
    private $nbSms;

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
     * Get the nb sms.
     *
     * @return int Returns the nb sms.
     */
    public function getNbSms() {
        return $this->nbSms;
    }

    /**
     * Set the acces collaborateur.
     *
     * @param bool $accesCollaborateur The acces collaborateur.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesCollaborateur($accesCollaborateur) {
        $this->accesCollaborateur = $accesCollaborateur;
        return $this;
    }

    /**
     * Set the acces intervenants.
     *
     * @param bool $accesIntervenants The acces intervenants.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesIntervenants($accesIntervenants) {
        $this->accesIntervenants = $accesIntervenants;
        return $this;
    }

    /**
     * Set the acces total.
     *
     * @param bool $accesTotal The acces total.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setAccesTotal($accesTotal) {
        $this->accesTotal = $accesTotal;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the nb sms.
     *
     * @param int $nbSms The nb sms.
     * @return EnvoiSms Returns this Envoi sms.
     */
    public function setNbSms($nbSms) {
        $this->nbSms = $nbSms;
        return $this;
    }
}
