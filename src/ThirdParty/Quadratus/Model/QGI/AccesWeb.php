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

use DateTime;

/**
 * Acces web.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AccesWeb {

    /**
     * Acces agenda.
     *
     * @var bool
     */
    private $accesAgenda;

    /**
     * Acces articles.
     *
     * @var bool
     */
    private $accesArticles;

    /**
     * Acces articles consommes.
     *
     * @var bool
     */
    private $accesArticlesConsommes;

    /**
     * Acces clients.
     *
     * @var bool
     */
    private $accesClients;

    /**
     * Acces clients favoris.
     *
     * @var bool
     */
    private $accesClientsFavoris;

    /**
     * Acces consultation.
     *
     * @var bool
     */
    private $accesConsultation;

    /**
     * Acces dossier cabinet.
     *
     * @var bool
     */
    private $accesDossierCabinet;

    /**
     * Acces facture.
     *
     * @var bool
     */
    private $accesFacture;

    /**
     * Acces i bureau.
     *
     * @var bool
     */
    private $accesIBureau;

    /**
     * Acces interventions.
     *
     * @var bool
     */
    private $accesInterventions;

    /**
     * Acces liste collab.
     *
     * @var bool
     */
    private $accesListeCollab;

    /**
     * Acces messages.
     *
     * @var bool
     */
    private $accesMessages;

    /**
     * Acces note frais.
     *
     * @var bool
     */
    private $accesNoteFrais;

    /**
     * Acces repertoire.
     *
     * @var bool
     */
    private $accesRepertoire;

    /**
     * Acces saisie commande.
     *
     * @var bool
     */
    private $accesSaisieCommande;

    /**
     * Acces saisie tp.
     *
     * @var bool
     */
    private $accesSaisieTp;

    /**
     * Acces solde cpta.
     *
     * @var bool
     */
    private $accesSoldeCpta;

    /**
     * Acces tableaux bord.
     *
     * @var bool
     */
    private $accesTableauxBord;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Date activation.
     *
     * @var DateTime|null
     */
    private $dateActivation;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Dern tentative.
     *
     * @var DateTime|null
     */
    private $dernTentative;

    /**
     * Doss cpta.
     *
     * @var string
     */
    private $dossCpta;

    /**
     * Doss paie.
     *
     * @var string
     */
    private $dossPaie;

    /**
     * Doss prop.
     *
     * @var string
     */
    private $dossProp;

    /**
     * Duplique intervention.
     *
     * @var bool
     */
    private $dupliqueIntervention;

    /**
     * i key.
     *
     * @var string
     */
    private $iKey;

    /**
     * Meme mdp que i bureau.
     *
     * @var bool
     */
    private $memeMdpQueIBureau;

    /**
     * Mot de passe.
     *
     * @var string
     */
    private $motDePasse;

    /**
     * Restr cli assist1.
     *
     * @var string
     */
    private $restrCliAssist1;

    /**
     * Restr cli assist2.
     *
     * @var string
     */
    private $restrCliAssist2;

    /**
     * Restr cli autre1.
     *
     * @var string
     */
    private $restrCliAutre1;

    /**
     * Restr cli autre2.
     *
     * @var string
     */
    private $restrCliAutre2;

    /**
     * Restr cli collab.
     *
     * @var string
     */
    private $restrCliCollab;

    /**
     * Restr cli debut.
     *
     * @var string
     */
    private $restrCliDebut;

    /**
     * Restr cli expert.
     *
     * @var string
     */
    private $restrCliExpert;

    /**
     * Restr cli fin.
     *
     * @var string
     */
    private $restrCliFin;

    /**
     * Restr cli portef.
     *
     * @var string
     */
    private $restrCliPortef;

    /**
     * Tentatives.
     *
     * @var string
     */
    private $tentatives;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces agenda.
     *
     * @return bool Returns the acces agenda.
     */
    public function getAccesAgenda() {
        return $this->accesAgenda;
    }

    /**
     * Get the acces articles.
     *
     * @return bool Returns the acces articles.
     */
    public function getAccesArticles() {
        return $this->accesArticles;
    }

    /**
     * Get the acces articles consommes.
     *
     * @return bool Returns the acces articles consommes.
     */
    public function getAccesArticlesConsommes() {
        return $this->accesArticlesConsommes;
    }

    /**
     * Get the acces clients.
     *
     * @return bool Returns the acces clients.
     */
    public function getAccesClients() {
        return $this->accesClients;
    }

    /**
     * Get the acces clients favoris.
     *
     * @return bool Returns the acces clients favoris.
     */
    public function getAccesClientsFavoris() {
        return $this->accesClientsFavoris;
    }

    /**
     * Get the acces consultation.
     *
     * @return bool Returns the acces consultation.
     */
    public function getAccesConsultation() {
        return $this->accesConsultation;
    }

    /**
     * Get the acces dossier cabinet.
     *
     * @return bool Returns the acces dossier cabinet.
     */
    public function getAccesDossierCabinet() {
        return $this->accesDossierCabinet;
    }

    /**
     * Get the acces facture.
     *
     * @return bool Returns the acces facture.
     */
    public function getAccesFacture() {
        return $this->accesFacture;
    }

    /**
     * Get the acces i bureau.
     *
     * @return bool Returns the acces i bureau.
     */
    public function getAccesIBureau() {
        return $this->accesIBureau;
    }

    /**
     * Get the acces interventions.
     *
     * @return bool Returns the acces interventions.
     */
    public function getAccesInterventions() {
        return $this->accesInterventions;
    }

    /**
     * Get the acces liste collab.
     *
     * @return bool Returns the acces liste collab.
     */
    public function getAccesListeCollab() {
        return $this->accesListeCollab;
    }

    /**
     * Get the acces messages.
     *
     * @return bool Returns the acces messages.
     */
    public function getAccesMessages() {
        return $this->accesMessages;
    }

    /**
     * Get the acces note frais.
     *
     * @return bool Returns the acces note frais.
     */
    public function getAccesNoteFrais() {
        return $this->accesNoteFrais;
    }

    /**
     * Get the acces repertoire.
     *
     * @return bool Returns the acces repertoire.
     */
    public function getAccesRepertoire() {
        return $this->accesRepertoire;
    }

    /**
     * Get the acces saisie commande.
     *
     * @return bool Returns the acces saisie commande.
     */
    public function getAccesSaisieCommande() {
        return $this->accesSaisieCommande;
    }

    /**
     * Get the acces saisie tp.
     *
     * @return bool Returns the acces saisie tp.
     */
    public function getAccesSaisieTp() {
        return $this->accesSaisieTp;
    }

    /**
     * Get the acces solde cpta.
     *
     * @return bool Returns the acces solde cpta.
     */
    public function getAccesSoldeCpta() {
        return $this->accesSoldeCpta;
    }

    /**
     * Get the acces tableaux bord.
     *
     * @return bool Returns the acces tableaux bord.
     */
    public function getAccesTableauxBord() {
        return $this->accesTableauxBord;
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
     * Get the date activation.
     *
     * @return DateTime|null Returns the date activation.
     */
    public function getDateActivation() {
        return $this->dateActivation;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Get the dern tentative.
     *
     * @return DateTime|null Returns the dern tentative.
     */
    public function getDernTentative() {
        return $this->dernTentative;
    }

    /**
     * Get the doss cpta.
     *
     * @return string Returns the doss cpta.
     */
    public function getDossCpta() {
        return $this->dossCpta;
    }

    /**
     * Get the doss paie.
     *
     * @return string Returns the doss paie.
     */
    public function getDossPaie() {
        return $this->dossPaie;
    }

    /**
     * Get the doss prop.
     *
     * @return string Returns the doss prop.
     */
    public function getDossProp() {
        return $this->dossProp;
    }

    /**
     * Get the duplique intervention.
     *
     * @return bool Returns the duplique intervention.
     */
    public function getDupliqueIntervention() {
        return $this->dupliqueIntervention;
    }

    /**
     * Get the meme mdp que i bureau.
     *
     * @return bool Returns the meme mdp que i bureau.
     */
    public function getMemeMdpQueIBureau() {
        return $this->memeMdpQueIBureau;
    }

    /**
     * Get the mot de passe.
     *
     * @return string Returns the mot de passe.
     */
    public function getMotDePasse() {
        return $this->motDePasse;
    }

    /**
     * Get the restr cli assist1.
     *
     * @return string Returns the restr cli assist1.
     */
    public function getRestrCliAssist1() {
        return $this->restrCliAssist1;
    }

    /**
     * Get the restr cli assist2.
     *
     * @return string Returns the restr cli assist2.
     */
    public function getRestrCliAssist2() {
        return $this->restrCliAssist2;
    }

    /**
     * Get the restr cli autre1.
     *
     * @return string Returns the restr cli autre1.
     */
    public function getRestrCliAutre1() {
        return $this->restrCliAutre1;
    }

    /**
     * Get the restr cli autre2.
     *
     * @return string Returns the restr cli autre2.
     */
    public function getRestrCliAutre2() {
        return $this->restrCliAutre2;
    }

    /**
     * Get the restr cli collab.
     *
     * @return string Returns the restr cli collab.
     */
    public function getRestrCliCollab() {
        return $this->restrCliCollab;
    }

    /**
     * Get the restr cli debut.
     *
     * @return string Returns the restr cli debut.
     */
    public function getRestrCliDebut() {
        return $this->restrCliDebut;
    }

    /**
     * Get the restr cli expert.
     *
     * @return string Returns the restr cli expert.
     */
    public function getRestrCliExpert() {
        return $this->restrCliExpert;
    }

    /**
     * Get the restr cli fin.
     *
     * @return string Returns the restr cli fin.
     */
    public function getRestrCliFin() {
        return $this->restrCliFin;
    }

    /**
     * Get the restr cli portef.
     *
     * @return string Returns the restr cli portef.
     */
    public function getRestrCliPortef() {
        return $this->restrCliPortef;
    }

    /**
     * Get the tentatives.
     *
     * @return string Returns the tentatives.
     */
    public function getTentatives() {
        return $this->tentatives;
    }

    /**
     * Get the i key.
     *
     * @return string Returns the i key.
     */
    public function getiKey() {
        return $this->iKey;
    }

    /**
     * Set the acces agenda.
     *
     * @param bool $accesAgenda The acces agenda.
     */
    public function setAccesAgenda($accesAgenda) {
        $this->accesAgenda = $accesAgenda;
        return $this;
    }

    /**
     * Set the acces articles.
     *
     * @param bool $accesArticles The acces articles.
     */
    public function setAccesArticles($accesArticles) {
        $this->accesArticles = $accesArticles;
        return $this;
    }

    /**
     * Set the acces articles consommes.
     *
     * @param bool $accesArticlesConsommes The acces articles consommes.
     */
    public function setAccesArticlesConsommes($accesArticlesConsommes) {
        $this->accesArticlesConsommes = $accesArticlesConsommes;
        return $this;
    }

    /**
     * Set the acces clients.
     *
     * @param bool $accesClients The acces clients.
     */
    public function setAccesClients($accesClients) {
        $this->accesClients = $accesClients;
        return $this;
    }

    /**
     * Set the acces clients favoris.
     *
     * @param bool $accesClientsFavoris The acces clients favoris.
     */
    public function setAccesClientsFavoris($accesClientsFavoris) {
        $this->accesClientsFavoris = $accesClientsFavoris;
        return $this;
    }

    /**
     * Set the acces consultation.
     *
     * @param bool $accesConsultation The acces consultation.
     */
    public function setAccesConsultation($accesConsultation) {
        $this->accesConsultation = $accesConsultation;
        return $this;
    }

    /**
     * Set the acces dossier cabinet.
     *
     * @param bool $accesDossierCabinet The acces dossier cabinet.
     */
    public function setAccesDossierCabinet($accesDossierCabinet) {
        $this->accesDossierCabinet = $accesDossierCabinet;
        return $this;
    }

    /**
     * Set the acces facture.
     *
     * @param bool $accesFacture The acces facture.
     */
    public function setAccesFacture($accesFacture) {
        $this->accesFacture = $accesFacture;
        return $this;
    }

    /**
     * Set the acces i bureau.
     *
     * @param bool $accesIBureau The acces i bureau.
     */
    public function setAccesIBureau($accesIBureau) {
        $this->accesIBureau = $accesIBureau;
        return $this;
    }

    /**
     * Set the acces interventions.
     *
     * @param bool $accesInterventions The acces interventions.
     */
    public function setAccesInterventions($accesInterventions) {
        $this->accesInterventions = $accesInterventions;
        return $this;
    }

    /**
     * Set the acces liste collab.
     *
     * @param bool $accesListeCollab The acces liste collab.
     */
    public function setAccesListeCollab($accesListeCollab) {
        $this->accesListeCollab = $accesListeCollab;
        return $this;
    }

    /**
     * Set the acces messages.
     *
     * @param bool $accesMessages The acces messages.
     */
    public function setAccesMessages($accesMessages) {
        $this->accesMessages = $accesMessages;
        return $this;
    }

    /**
     * Set the acces note frais.
     *
     * @param bool $accesNoteFrais The acces note frais.
     */
    public function setAccesNoteFrais($accesNoteFrais) {
        $this->accesNoteFrais = $accesNoteFrais;
        return $this;
    }

    /**
     * Set the acces repertoire.
     *
     * @param bool $accesRepertoire The acces repertoire.
     */
    public function setAccesRepertoire($accesRepertoire) {
        $this->accesRepertoire = $accesRepertoire;
        return $this;
    }

    /**
     * Set the acces saisie commande.
     *
     * @param bool $accesSaisieCommande The acces saisie commande.
     */
    public function setAccesSaisieCommande($accesSaisieCommande) {
        $this->accesSaisieCommande = $accesSaisieCommande;
        return $this;
    }

    /**
     * Set the acces saisie tp.
     *
     * @param bool $accesSaisieTp The acces saisie tp.
     */
    public function setAccesSaisieTp($accesSaisieTp) {
        $this->accesSaisieTp = $accesSaisieTp;
        return $this;
    }

    /**
     * Set the acces solde cpta.
     *
     * @param bool $accesSoldeCpta The acces solde cpta.
     */
    public function setAccesSoldeCpta($accesSoldeCpta) {
        $this->accesSoldeCpta = $accesSoldeCpta;
        return $this;
    }

    /**
     * Set the acces tableaux bord.
     *
     * @param bool $accesTableauxBord The acces tableaux bord.
     */
    public function setAccesTableauxBord($accesTableauxBord) {
        $this->accesTableauxBord = $accesTableauxBord;
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
     * Set the date activation.
     *
     * @param DateTime|null $dateActivation The date activation.
     */
    public function setDateActivation(DateTime $dateActivation = null) {
        $this->dateActivation = $dateActivation;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     */
    public function setDateFin(DateTime $dateFin = null) {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the dern tentative.
     *
     * @param DateTime|null $dernTentative The dern tentative.
     */
    public function setDernTentative(DateTime $dernTentative = null) {
        $this->dernTentative = $dernTentative;
        return $this;
    }

    /**
     * Set the doss cpta.
     *
     * @param string $dossCpta The doss cpta.
     */
    public function setDossCpta($dossCpta) {
        $this->dossCpta = $dossCpta;
        return $this;
    }

    /**
     * Set the doss paie.
     *
     * @param string $dossPaie The doss paie.
     */
    public function setDossPaie($dossPaie) {
        $this->dossPaie = $dossPaie;
        return $this;
    }

    /**
     * Set the doss prop.
     *
     * @param string $dossProp The doss prop.
     */
    public function setDossProp($dossProp) {
        $this->dossProp = $dossProp;
        return $this;
    }

    /**
     * Set the duplique intervention.
     *
     * @param bool $dupliqueIntervention The duplique intervention.
     */
    public function setDupliqueIntervention($dupliqueIntervention) {
        $this->dupliqueIntervention = $dupliqueIntervention;
        return $this;
    }

    /**
     * Set the meme mdp que i bureau.
     *
     * @param bool $memeMdpQueIBureau The meme mdp que i bureau.
     */
    public function setMemeMdpQueIBureau($memeMdpQueIBureau) {
        $this->memeMdpQueIBureau = $memeMdpQueIBureau;
        return $this;
    }

    /**
     * Set the mot de passe.
     *
     * @param string $motDePasse The mot de passe.
     */
    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Set the restr cli assist1.
     *
     * @param string $restrCliAssist1 The restr cli assist1.
     */
    public function setRestrCliAssist1($restrCliAssist1) {
        $this->restrCliAssist1 = $restrCliAssist1;
        return $this;
    }

    /**
     * Set the restr cli assist2.
     *
     * @param string $restrCliAssist2 The restr cli assist2.
     */
    public function setRestrCliAssist2($restrCliAssist2) {
        $this->restrCliAssist2 = $restrCliAssist2;
        return $this;
    }

    /**
     * Set the restr cli autre1.
     *
     * @param string $restrCliAutre1 The restr cli autre1.
     */
    public function setRestrCliAutre1($restrCliAutre1) {
        $this->restrCliAutre1 = $restrCliAutre1;
        return $this;
    }

    /**
     * Set the restr cli autre2.
     *
     * @param string $restrCliAutre2 The restr cli autre2.
     */
    public function setRestrCliAutre2($restrCliAutre2) {
        $this->restrCliAutre2 = $restrCliAutre2;
        return $this;
    }

    /**
     * Set the restr cli collab.
     *
     * @param string $restrCliCollab The restr cli collab.
     */
    public function setRestrCliCollab($restrCliCollab) {
        $this->restrCliCollab = $restrCliCollab;
        return $this;
    }

    /**
     * Set the restr cli debut.
     *
     * @param string $restrCliDebut The restr cli debut.
     */
    public function setRestrCliDebut($restrCliDebut) {
        $this->restrCliDebut = $restrCliDebut;
        return $this;
    }

    /**
     * Set the restr cli expert.
     *
     * @param string $restrCliExpert The restr cli expert.
     */
    public function setRestrCliExpert($restrCliExpert) {
        $this->restrCliExpert = $restrCliExpert;
        return $this;
    }

    /**
     * Set the restr cli fin.
     *
     * @param string $restrCliFin The restr cli fin.
     */
    public function setRestrCliFin($restrCliFin) {
        $this->restrCliFin = $restrCliFin;
        return $this;
    }

    /**
     * Set the restr cli portef.
     *
     * @param string $restrCliPortef The restr cli portef.
     */
    public function setRestrCliPortef($restrCliPortef) {
        $this->restrCliPortef = $restrCliPortef;
        return $this;
    }

    /**
     * Set the tentatives.
     *
     * @param string $tentatives The tentatives.
     */
    public function setTentatives($tentatives) {
        $this->tentatives = $tentatives;
        return $this;
    }

    /**
     * Set the i key.
     *
     * @param string $iKey The i key.
     */
    public function setiKey($iKey) {
        $this->iKey = $iKey;
        return $this;
    }
}
