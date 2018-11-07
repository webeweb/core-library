<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Absences c p previsionnel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AbsencesCPPrevisionnel {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Collaborateur.
     *
     * @var string
     */
    private $collaborateur;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date debut c p.
     *
     * @var DateTime
     */
    private $dateDebutCP;

    /**
     * Date demande.
     *
     * @var DateTime
     */
    private $dateDemande;

    /**
     * Date etat c p.
     *
     * @var DateTime
     */
    private $dateEtatCP;

    /**
     * Date fin c p.
     *
     * @var DateTime
     */
    private $dateFinCP;

    /**
     * Depuis web.
     *
     * @var boolean
     */
    private $depuisWeb;

    /**
     * Etat c p.
     *
     * @var string
     */
    private $etatCP;

    /**
     * Indice.
     *
     * @var string
     */
    private $indice;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the collaborateur.
     *
     * @return string Returns the collaborateur.
     */
    public function getCollaborateur() {
        return $this->collaborateur;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date debut c p.
     *
     * @return DateTime Returns the date debut c p.
     */
    public function getDateDebutCP() {
        return $this->dateDebutCP;
    }

    /**
     * Get the date demande.
     *
     * @return DateTime Returns the date demande.
     */
    public function getDateDemande() {
        return $this->dateDemande;
    }

    /**
     * Get the date etat c p.
     *
     * @return DateTime Returns the date etat c p.
     */
    public function getDateEtatCP() {
        return $this->dateEtatCP;
    }

    /**
     * Get the date fin c p.
     *
     * @return DateTime Returns the date fin c p.
     */
    public function getDateFinCP() {
        return $this->dateFinCP;
    }

    /**
     * Get the depuis web.
     *
     * @return boolean Returns the depuis web.
     */
    public function getDepuisWeb() {
        return $this->depuisWeb;
    }

    /**
     * Get the etat c p.
     *
     * @return string Returns the etat c p.
     */
    public function getEtatCP() {
        return $this->etatCP;
    }

    /**
     * Get the indice.
     *
     * @return string Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date debut c p.
     *
     * @param DateTime $dateDebutCP The date debut c p.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setDateDebutCP(DateTime $dateDebutCP = null) {
        $this->dateDebutCP = $dateDebutCP;
        return $this;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime $dateDemande The date demande.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setDateDemande(DateTime $dateDemande = null) {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    /**
     * Set the date etat c p.
     *
     * @param DateTime $dateEtatCP The date etat c p.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setDateEtatCP(DateTime $dateEtatCP = null) {
        $this->dateEtatCP = $dateEtatCP;
        return $this;
    }

    /**
     * Set the date fin c p.
     *
     * @param DateTime $dateFinCP The date fin c p.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setDateFinCP(DateTime $dateFinCP = null) {
        $this->dateFinCP = $dateFinCP;
        return $this;
    }

    /**
     * Set the depuis web.
     *
     * @param boolean $depuisWeb The depuis web.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setDepuisWeb($depuisWeb) {
        $this->depuisWeb = $depuisWeb;
        return $this;
    }

    /**
     * Set the etat c p.
     *
     * @param string $etatCP The etat c p.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setEtatCP($etatCP) {
        $this->etatCP = $etatCP;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     * @return AbsencesCPPrevisionnel Returns this absences c p previsionnel.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

}
