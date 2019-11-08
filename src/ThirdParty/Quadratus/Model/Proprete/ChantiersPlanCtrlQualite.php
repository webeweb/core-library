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
 * Chantiers plan ctrl qualite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualite {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date prevue.
     *
     * @var DateTime|null
     */
    private $datePrevue;

    /**
     * Date reelle.
     *
     * @var DateTime|null
     */
    private $dateReelle;

    /**
     * Date validation synchro.
     *
     * @var DateTime|null
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Note globale.
     *
     * @var float
     */
    private $noteGlobale;

    /**
     * Numero reclam.
     *
     * @var int
     */
    private $numeroReclam;

    /**
     * Realise par fcq.
     *
     * @var bool
     */
    private $realiseParFcq;

    /**
     * Type controle.
     *
     * @var string
     */
    private $typeControle;

    /**
     * Uniq id noeud.
     *
     * @var string
     */
    private $uniqIdNoeud;

    /**
     * Uniq id synchro.
     *
     * @var string
     */
    private $uniqIdSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
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
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date prevue.
     *
     * @return DateTime|null Returns the date prevue.
     */
    public function getDatePrevue() {
        return $this->datePrevue;
    }

    /**
     * Get the date reelle.
     *
     * @return DateTime|null Returns the date reelle.
     */
    public function getDateReelle() {
        return $this->dateReelle;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime|null Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the note globale.
     *
     * @return float Returns the note globale.
     */
    public function getNoteGlobale() {
        return $this->noteGlobale;
    }

    /**
     * Get the numero reclam.
     *
     * @return int Returns the numero reclam.
     */
    public function getNumeroReclam() {
        return $this->numeroReclam;
    }

    /**
     * Get the realise par fcq.
     *
     * @return bool Returns the realise par fcq.
     */
    public function getRealiseParFcq() {
        return $this->realiseParFcq;
    }

    /**
     * Get the type controle.
     *
     * @return string Returns the type controle.
     */
    public function getTypeControle() {
        return $this->typeControle;
    }

    /**
     * Get the uniq id noeud.
     *
     * @return string Returns the uniq id noeud.
     */
    public function getUniqIdNoeud() {
        return $this->uniqIdNoeud;
    }

    /**
     * Get the uniq id synchro.
     *
     * @return string Returns the uniq id synchro.
     */
    public function getUniqIdSynchro() {
        return $this->uniqIdSynchro;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
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
     * Set the date prevue.
     *
     * @param DateTime|null $datePrevue The date prevue.
     */
    public function setDatePrevue(DateTime $datePrevue = null) {
        $this->datePrevue = $datePrevue;
        return $this;
    }

    /**
     * Set the date reelle.
     *
     * @param DateTime|null $dateReelle The date reelle.
     */
    public function setDateReelle(DateTime $dateReelle = null) {
        $this->dateReelle = $dateReelle;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime|null $dateValidationSynchro The date validation synchro.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the note globale.
     *
     * @param float $noteGlobale The note globale.
     */
    public function setNoteGlobale($noteGlobale) {
        $this->noteGlobale = $noteGlobale;
        return $this;
    }

    /**
     * Set the numero reclam.
     *
     * @param int $numeroReclam The numero reclam.
     */
    public function setNumeroReclam($numeroReclam) {
        $this->numeroReclam = $numeroReclam;
        return $this;
    }

    /**
     * Set the realise par fcq.
     *
     * @param bool $realiseParFcq The realise par fcq.
     */
    public function setRealiseParFcq($realiseParFcq) {
        $this->realiseParFcq = $realiseParFcq;
        return $this;
    }

    /**
     * Set the type controle.
     *
     * @param string $typeControle The type controle.
     */
    public function setTypeControle($typeControle) {
        $this->typeControle = $typeControle;
        return $this;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string $uniqIdNoeud The uniq id noeud.
     */
    public function setUniqIdNoeud($uniqIdNoeud) {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }

    /**
     * Set the uniq id synchro.
     *
     * @param string $uniqIdSynchro The uniq id synchro.
     */
    public function setUniqIdSynchro($uniqIdSynchro) {
        $this->uniqIdSynchro = $uniqIdSynchro;
        return $this;
    }
}
