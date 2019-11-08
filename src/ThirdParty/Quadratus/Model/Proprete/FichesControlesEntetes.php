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
 * Fiches controles entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesEntetes {

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
     * Controleur.
     *
     * @var string
     */
    private $controleur;

    /**
     * Date controle.
     *
     * @var DateTime|null
     */
    private $dateControle;

    /**
     * Date ctrl prevue.
     *
     * @var DateTime|null
     */
    private $dateCtrlPrevue;

    /**
     * Date transfert.
     *
     * @var DateTime|null
     */
    private $dateTransfert;

    /**
     * Fiche contradictoire.
     *
     * @var bool
     */
    private $ficheContradictoire;

    /**
     * Fiche signee.
     *
     * @var bool
     */
    private $ficheSignee;

    /**
     * Heure debut.
     *
     * @var DateTime|null
     */
    private $heureDebut;

    /**
     * Heure fin.
     *
     * @var DateTime|null
     */
    private $heureFin;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Lien document.
     *
     * @var string
     */
    private $lienDocument;

    /**
     * Local.
     *
     * @var string
     */
    private $local;

    /**
     * Local pere.
     *
     * @var string
     */
    private $localPere;

    /**
     * Note globale.
     *
     * @var float
     */
    private $noteGlobale;

    /**
     * Note objectif.
     *
     * @var float
     */
    private $noteObjectif;

    /**
     * Numero fiche.
     *
     * @var int
     */
    private $numeroFiche;

    /**
     * Numero noeud local.
     *
     * @var int
     */
    private $numeroNoeudLocal;

    /**
     * Satisfaction generale.
     *
     * @var string
     */
    private $satisfactionGenerale;

    /**
     * Type controle.
     *
     * @var string
     */
    private $typeControle;

    /**
     * Uniq id blocage.
     *
     * @var string
     */
    private $uniqIdBlocage;

    /**
     * Uniq id noeud.
     *
     * @var string
     */
    private $uniqIdNoeud;

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
     * Get the controleur.
     *
     * @return string Returns the controleur.
     */
    public function getControleur() {
        return $this->controleur;
    }

    /**
     * Get the date controle.
     *
     * @return DateTime|null Returns the date controle.
     */
    public function getDateControle() {
        return $this->dateControle;
    }

    /**
     * Get the date ctrl prevue.
     *
     * @return DateTime|null Returns the date ctrl prevue.
     */
    public function getDateCtrlPrevue() {
        return $this->dateCtrlPrevue;
    }

    /**
     * Get the date transfert.
     *
     * @return DateTime|null Returns the date transfert.
     */
    public function getDateTransfert() {
        return $this->dateTransfert;
    }

    /**
     * Get the fiche contradictoire.
     *
     * @return bool Returns the fiche contradictoire.
     */
    public function getFicheContradictoire() {
        return $this->ficheContradictoire;
    }

    /**
     * Get the fiche signee.
     *
     * @return bool Returns the fiche signee.
     */
    public function getFicheSignee() {
        return $this->ficheSignee;
    }

    /**
     * Get the heure debut.
     *
     * @return DateTime|null Returns the heure debut.
     */
    public function getHeureDebut() {
        return $this->heureDebut;
    }

    /**
     * Get the heure fin.
     *
     * @return DateTime|null Returns the heure fin.
     */
    public function getHeureFin() {
        return $this->heureFin;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the lien document.
     *
     * @return string Returns the lien document.
     */
    public function getLienDocument() {
        return $this->lienDocument;
    }

    /**
     * Get the local.
     *
     * @return string Returns the local.
     */
    public function getLocal() {
        return $this->local;
    }

    /**
     * Get the local pere.
     *
     * @return string Returns the local pere.
     */
    public function getLocalPere() {
        return $this->localPere;
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
     * Get the note objectif.
     *
     * @return float Returns the note objectif.
     */
    public function getNoteObjectif() {
        return $this->noteObjectif;
    }

    /**
     * Get the numero fiche.
     *
     * @return int Returns the numero fiche.
     */
    public function getNumeroFiche() {
        return $this->numeroFiche;
    }

    /**
     * Get the numero noeud local.
     *
     * @return int Returns the numero noeud local.
     */
    public function getNumeroNoeudLocal() {
        return $this->numeroNoeudLocal;
    }

    /**
     * Get the satisfaction generale.
     *
     * @return string Returns the satisfaction generale.
     */
    public function getSatisfactionGenerale() {
        return $this->satisfactionGenerale;
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
     * Get the uniq id blocage.
     *
     * @return string Returns the uniq id blocage.
     */
    public function getUniqIdBlocage() {
        return $this->uniqIdBlocage;
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
     * Set the controleur.
     *
     * @param string $controleur The controleur.
     */
    public function setControleur($controleur) {
        $this->controleur = $controleur;
        return $this;
    }

    /**
     * Set the date controle.
     *
     * @param DateTime|null $dateControle The date controle.
     */
    public function setDateControle(DateTime $dateControle = null) {
        $this->dateControle = $dateControle;
        return $this;
    }

    /**
     * Set the date ctrl prevue.
     *
     * @param DateTime|null $dateCtrlPrevue The date ctrl prevue.
     */
    public function setDateCtrlPrevue(DateTime $dateCtrlPrevue = null) {
        $this->dateCtrlPrevue = $dateCtrlPrevue;
        return $this;
    }

    /**
     * Set the date transfert.
     *
     * @param DateTime|null $dateTransfert The date transfert.
     */
    public function setDateTransfert(DateTime $dateTransfert = null) {
        $this->dateTransfert = $dateTransfert;
        return $this;
    }

    /**
     * Set the fiche contradictoire.
     *
     * @param bool $ficheContradictoire The fiche contradictoire.
     */
    public function setFicheContradictoire($ficheContradictoire) {
        $this->ficheContradictoire = $ficheContradictoire;
        return $this;
    }

    /**
     * Set the fiche signee.
     *
     * @param bool $ficheSignee The fiche signee.
     */
    public function setFicheSignee($ficheSignee) {
        $this->ficheSignee = $ficheSignee;
        return $this;
    }

    /**
     * Set the heure debut.
     *
     * @param DateTime|null $heureDebut The heure debut.
     */
    public function setHeureDebut(DateTime $heureDebut = null) {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    /**
     * Set the heure fin.
     *
     * @param DateTime|null $heureFin The heure fin.
     */
    public function setHeureFin(DateTime $heureFin = null) {
        $this->heureFin = $heureFin;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien document.
     *
     * @param string $lienDocument The lien document.
     */
    public function setLienDocument($lienDocument) {
        $this->lienDocument = $lienDocument;
        return $this;
    }

    /**
     * Set the local.
     *
     * @param string $local The local.
     */
    public function setLocal($local) {
        $this->local = $local;
        return $this;
    }

    /**
     * Set the local pere.
     *
     * @param string $localPere The local pere.
     */
    public function setLocalPere($localPere) {
        $this->localPere = $localPere;
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
     * Set the note objectif.
     *
     * @param float $noteObjectif The note objectif.
     */
    public function setNoteObjectif($noteObjectif) {
        $this->noteObjectif = $noteObjectif;
        return $this;
    }

    /**
     * Set the numero fiche.
     *
     * @param int $numeroFiche The numero fiche.
     */
    public function setNumeroFiche($numeroFiche) {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }

    /**
     * Set the numero noeud local.
     *
     * @param int $numeroNoeudLocal The numero noeud local.
     */
    public function setNumeroNoeudLocal($numeroNoeudLocal) {
        $this->numeroNoeudLocal = $numeroNoeudLocal;
        return $this;
    }

    /**
     * Set the satisfaction generale.
     *
     * @param string $satisfactionGenerale The satisfaction generale.
     */
    public function setSatisfactionGenerale($satisfactionGenerale) {
        $this->satisfactionGenerale = $satisfactionGenerale;
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
     * Set the uniq id blocage.
     *
     * @param string $uniqIdBlocage The uniq id blocage.
     */
    public function setUniqIdBlocage($uniqIdBlocage) {
        $this->uniqIdBlocage = $uniqIdBlocage;
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
}
