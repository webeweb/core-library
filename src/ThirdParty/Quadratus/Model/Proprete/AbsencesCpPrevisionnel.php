<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Absences cp previsionnel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class AbsencesCpPrevisionnel {

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
     * Date debut cp.
     *
     * @var DateTime|null
     */
    private $dateDebutCp;

    /**
     * Date demande.
     *
     * @var DateTime|null
     */
    private $dateDemande;

    /**
     * Date etat cp.
     *
     * @var DateTime|null
     */
    private $dateEtatCp;

    /**
     * Date fin cp.
     *
     * @var DateTime|null
     */
    private $dateFinCp;

    /**
     * Depuis web.
     *
     * @var bool
     */
    private $depuisWeb;

    /**
     * Etat cp.
     *
     * @var string
     */
    private $etatCp;

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
     * Get the date debut cp.
     *
     * @return DateTime|null Returns the date debut cp.
     */
    public function getDateDebutCp() {
        return $this->dateDebutCp;
    }

    /**
     * Get the date demande.
     *
     * @return DateTime|null Returns the date demande.
     */
    public function getDateDemande() {
        return $this->dateDemande;
    }

    /**
     * Get the date etat cp.
     *
     * @return DateTime|null Returns the date etat cp.
     */
    public function getDateEtatCp() {
        return $this->dateEtatCp;
    }

    /**
     * Get the date fin cp.
     *
     * @return DateTime|null Returns the date fin cp.
     */
    public function getDateFinCp() {
        return $this->dateFinCp;
    }

    /**
     * Get the depuis web.
     *
     * @return bool Returns the depuis web.
     */
    public function getDepuisWeb() {
        return $this->depuisWeb;
    }

    /**
     * Get the etat cp.
     *
     * @return string Returns the etat cp.
     */
    public function getEtatCp() {
        return $this->etatCp;
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
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date debut cp.
     *
     * @param DateTime|null $dateDebutCp The date debut cp.
     */
    public function setDateDebutCp(DateTime $dateDebutCp = null) {
        $this->dateDebutCp = $dateDebutCp;
        return $this;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime|null $dateDemande The date demande.
     */
    public function setDateDemande(DateTime $dateDemande = null) {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    /**
     * Set the date etat cp.
     *
     * @param DateTime|null $dateEtatCp The date etat cp.
     */
    public function setDateEtatCp(DateTime $dateEtatCp = null) {
        $this->dateEtatCp = $dateEtatCp;
        return $this;
    }

    /**
     * Set the date fin cp.
     *
     * @param DateTime|null $dateFinCp The date fin cp.
     */
    public function setDateFinCp(DateTime $dateFinCp = null) {
        $this->dateFinCp = $dateFinCp;
        return $this;
    }

    /**
     * Set the depuis web.
     *
     * @param bool $depuisWeb The depuis web.
     */
    public function setDepuisWeb($depuisWeb) {
        $this->depuisWeb = $depuisWeb;
        return $this;
    }

    /**
     * Set the etat cp.
     *
     * @param string $etatCp The etat cp.
     */
    public function setEtatCp($etatCp) {
        $this->etatCp = $etatCp;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param string $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }
}
