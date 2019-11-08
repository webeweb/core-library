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
 * Budget t.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class BudgetT {

    /**
     * Code assistant juridique.
     *
     * @var string
     */
    private $codeAssistantJuridique;

    /**
     * Code assistant social.
     *
     * @var string
     */
    private $codeAssistantSocial;

    /**
     * Code autre1.
     *
     * @var string
     */
    private $codeAutre1;

    /**
     * Code autre2.
     *
     * @var string
     */
    private $codeAutre2;

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
     * Code expert.
     *
     * @var string
     */
    private $codeExpert;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Code portefeuille.
     *
     * @var string
     */
    private $codePortefeuille;

    /**
     * Collab auteur.
     *
     * @var string
     */
    private $collabAuteur;

    /**
     * Collab valideur.
     *
     * @var string
     */
    private $collabValideur;

    /**
     * Comment1.
     *
     * @var string
     */
    private $comment1;

    /**
     * Comment2.
     *
     * @var string
     */
    private $comment2;

    /**
     * Comment3.
     *
     * @var string
     */
    private $comment3;

    /**
     * Comment4.
     *
     * @var string
     */
    private $comment4;

    /**
     * Comment5.
     *
     * @var string
     */
    private $comment5;

    /**
     * Comment6.
     *
     * @var string
     */
    private $comment6;

    /**
     * Comment7.
     *
     * @var string
     */
    private $comment7;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date valid.
     *
     * @var DateTime|null
     */
    private $dateValid;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Hono prev.
     *
     * @var float
     */
    private $honoPrev;

    /**
     * Libelle1.
     *
     * @var string
     */
    private $libelle1;

    /**
     * Libelle2.
     *
     * @var string
     */
    private $libelle2;

    /**
     * Libelle3.
     *
     * @var string
     */
    private $libelle3;

    /**
     * Libelle4.
     *
     * @var string
     */
    private $libelle4;

    /**
     * Libelle5.
     *
     * @var string
     */
    private $libelle5;

    /**
     * Libelle6.
     *
     * @var string
     */
    private $libelle6;

    /**
     * Libelle7.
     *
     * @var string
     */
    private $libelle7;

    /**
     * Nbr bulletins.
     *
     * @var int
     */
    private $nbrBulletins;

    /**
     * Nbr ecritures.
     *
     * @var int
     */
    private $nbrEcritures;

    /**
     * Nbr heures.
     *
     * @var float
     */
    private $nbrHeures;

    /**
     * Prix1.
     *
     * @var float
     */
    private $prix1;

    /**
     * Prix2.
     *
     * @var float
     */
    private $prix2;

    /**
     * Prix3.
     *
     * @var float
     */
    private $prix3;

    /**
     * Prix4.
     *
     * @var float
     */
    private $prix4;

    /**
     * Prix5.
     *
     * @var float
     */
    private $prix5;

    /**
     * Prix6.
     *
     * @var float
     */
    private $prix6;

    /**
     * Prix7.
     *
     * @var float
     */
    private $prix7;

    /**
     * Saisie tache.
     *
     * @var bool
     */
    private $saisieTache;

    /**
     * Type suivi.
     *
     * @var string
     */
    private $typeSuivi;

    /**
     * Valo recap.
     *
     * @var int
     */
    private $valoRecap;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code assistant juridique.
     *
     * @return string Returns the code assistant juridique.
     */
    public function getCodeAssistantJuridique() {
        return $this->codeAssistantJuridique;
    }

    /**
     * Get the code assistant social.
     *
     * @return string Returns the code assistant social.
     */
    public function getCodeAssistantSocial() {
        return $this->codeAssistantSocial;
    }

    /**
     * Get the code autre1.
     *
     * @return string Returns the code autre1.
     */
    public function getCodeAutre1() {
        return $this->codeAutre1;
    }

    /**
     * Get the code autre2.
     *
     * @return string Returns the code autre2.
     */
    public function getCodeAutre2() {
        return $this->codeAutre2;
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
     * Get the code expert.
     *
     * @return string Returns the code expert.
     */
    public function getCodeExpert() {
        return $this->codeExpert;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the code portefeuille.
     *
     * @return string Returns the code portefeuille.
     */
    public function getCodePortefeuille() {
        return $this->codePortefeuille;
    }

    /**
     * Get the collab auteur.
     *
     * @return string Returns the collab auteur.
     */
    public function getCollabAuteur() {
        return $this->collabAuteur;
    }

    /**
     * Get the collab valideur.
     *
     * @return string Returns the collab valideur.
     */
    public function getCollabValideur() {
        return $this->collabValideur;
    }

    /**
     * Get the comment1.
     *
     * @return string Returns the comment1.
     */
    public function getComment1() {
        return $this->comment1;
    }

    /**
     * Get the comment2.
     *
     * @return string Returns the comment2.
     */
    public function getComment2() {
        return $this->comment2;
    }

    /**
     * Get the comment3.
     *
     * @return string Returns the comment3.
     */
    public function getComment3() {
        return $this->comment3;
    }

    /**
     * Get the comment4.
     *
     * @return string Returns the comment4.
     */
    public function getComment4() {
        return $this->comment4;
    }

    /**
     * Get the comment5.
     *
     * @return string Returns the comment5.
     */
    public function getComment5() {
        return $this->comment5;
    }

    /**
     * Get the comment6.
     *
     * @return string Returns the comment6.
     */
    public function getComment6() {
        return $this->comment6;
    }

    /**
     * Get the comment7.
     *
     * @return string Returns the comment7.
     */
    public function getComment7() {
        return $this->comment7;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Get the date valid.
     *
     * @return DateTime|null Returns the date valid.
     */
    public function getDateValid() {
        return $this->dateValid;
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
     * Get the hono prev.
     *
     * @return float Returns the hono prev.
     */
    public function getHonoPrev() {
        return $this->honoPrev;
    }

    /**
     * Get the libelle1.
     *
     * @return string Returns the libelle1.
     */
    public function getLibelle1() {
        return $this->libelle1;
    }

    /**
     * Get the libelle2.
     *
     * @return string Returns the libelle2.
     */
    public function getLibelle2() {
        return $this->libelle2;
    }

    /**
     * Get the libelle3.
     *
     * @return string Returns the libelle3.
     */
    public function getLibelle3() {
        return $this->libelle3;
    }

    /**
     * Get the libelle4.
     *
     * @return string Returns the libelle4.
     */
    public function getLibelle4() {
        return $this->libelle4;
    }

    /**
     * Get the libelle5.
     *
     * @return string Returns the libelle5.
     */
    public function getLibelle5() {
        return $this->libelle5;
    }

    /**
     * Get the libelle6.
     *
     * @return string Returns the libelle6.
     */
    public function getLibelle6() {
        return $this->libelle6;
    }

    /**
     * Get the libelle7.
     *
     * @return string Returns the libelle7.
     */
    public function getLibelle7() {
        return $this->libelle7;
    }

    /**
     * Get the nbr bulletins.
     *
     * @return int Returns the nbr bulletins.
     */
    public function getNbrBulletins() {
        return $this->nbrBulletins;
    }

    /**
     * Get the nbr ecritures.
     *
     * @return int Returns the nbr ecritures.
     */
    public function getNbrEcritures() {
        return $this->nbrEcritures;
    }

    /**
     * Get the nbr heures.
     *
     * @return float Returns the nbr heures.
     */
    public function getNbrHeures() {
        return $this->nbrHeures;
    }

    /**
     * Get the prix1.
     *
     * @return float Returns the prix1.
     */
    public function getPrix1() {
        return $this->prix1;
    }

    /**
     * Get the prix2.
     *
     * @return float Returns the prix2.
     */
    public function getPrix2() {
        return $this->prix2;
    }

    /**
     * Get the prix3.
     *
     * @return float Returns the prix3.
     */
    public function getPrix3() {
        return $this->prix3;
    }

    /**
     * Get the prix4.
     *
     * @return float Returns the prix4.
     */
    public function getPrix4() {
        return $this->prix4;
    }

    /**
     * Get the prix5.
     *
     * @return float Returns the prix5.
     */
    public function getPrix5() {
        return $this->prix5;
    }

    /**
     * Get the prix6.
     *
     * @return float Returns the prix6.
     */
    public function getPrix6() {
        return $this->prix6;
    }

    /**
     * Get the prix7.
     *
     * @return float Returns the prix7.
     */
    public function getPrix7() {
        return $this->prix7;
    }

    /**
     * Get the saisie tache.
     *
     * @return bool Returns the saisie tache.
     */
    public function getSaisieTache() {
        return $this->saisieTache;
    }

    /**
     * Get the type suivi.
     *
     * @return string Returns the type suivi.
     */
    public function getTypeSuivi() {
        return $this->typeSuivi;
    }

    /**
     * Get the valo recap.
     *
     * @return int Returns the valo recap.
     */
    public function getValoRecap() {
        return $this->valoRecap;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string $codeAssistantJuridique The code assistant juridique.
     */
    public function setCodeAssistantJuridique($codeAssistantJuridique) {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string $codeAssistantSocial The code assistant social.
     */
    public function setCodeAssistantSocial($codeAssistantSocial) {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string $codeAutre1 The code autre1.
     */
    public function setCodeAutre1($codeAutre1) {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string $codeAutre2 The code autre2.
     */
    public function setCodeAutre2($codeAutre2) {
        $this->codeAutre2 = $codeAutre2;
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
     * Set the code expert.
     *
     * @param string $codeExpert The code expert.
     */
    public function setCodeExpert($codeExpert) {
        $this->codeExpert = $codeExpert;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string $codePortefeuille The code portefeuille.
     */
    public function setCodePortefeuille($codePortefeuille) {
        $this->codePortefeuille = $codePortefeuille;
        return $this;
    }

    /**
     * Set the collab auteur.
     *
     * @param string $collabAuteur The collab auteur.
     */
    public function setCollabAuteur($collabAuteur) {
        $this->collabAuteur = $collabAuteur;
        return $this;
    }

    /**
     * Set the collab valideur.
     *
     * @param string $collabValideur The collab valideur.
     */
    public function setCollabValideur($collabValideur) {
        $this->collabValideur = $collabValideur;
        return $this;
    }

    /**
     * Set the comment1.
     *
     * @param string $comment1 The comment1.
     */
    public function setComment1($comment1) {
        $this->comment1 = $comment1;
        return $this;
    }

    /**
     * Set the comment2.
     *
     * @param string $comment2 The comment2.
     */
    public function setComment2($comment2) {
        $this->comment2 = $comment2;
        return $this;
    }

    /**
     * Set the comment3.
     *
     * @param string $comment3 The comment3.
     */
    public function setComment3($comment3) {
        $this->comment3 = $comment3;
        return $this;
    }

    /**
     * Set the comment4.
     *
     * @param string $comment4 The comment4.
     */
    public function setComment4($comment4) {
        $this->comment4 = $comment4;
        return $this;
    }

    /**
     * Set the comment5.
     *
     * @param string $comment5 The comment5.
     */
    public function setComment5($comment5) {
        $this->comment5 = $comment5;
        return $this;
    }

    /**
     * Set the comment6.
     *
     * @param string $comment6 The comment6.
     */
    public function setComment6($comment6) {
        $this->comment6 = $comment6;
        return $this;
    }

    /**
     * Set the comment7.
     *
     * @param string $comment7 The comment7.
     */
    public function setComment7($comment7) {
        $this->comment7 = $comment7;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     */
    public function setDateDebut(DateTime $dateDebut = null) {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date valid.
     *
     * @param DateTime|null $dateValid The date valid.
     */
    public function setDateValid(DateTime $dateValid = null) {
        $this->dateValid = $dateValid;
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
     * Set the hono prev.
     *
     * @param float $honoPrev The hono prev.
     */
    public function setHonoPrev($honoPrev) {
        $this->honoPrev = $honoPrev;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string $libelle1 The libelle1.
     */
    public function setLibelle1($libelle1) {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string $libelle2 The libelle2.
     */
    public function setLibelle2($libelle2) {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string $libelle3 The libelle3.
     */
    public function setLibelle3($libelle3) {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle4.
     *
     * @param string $libelle4 The libelle4.
     */
    public function setLibelle4($libelle4) {
        $this->libelle4 = $libelle4;
        return $this;
    }

    /**
     * Set the libelle5.
     *
     * @param string $libelle5 The libelle5.
     */
    public function setLibelle5($libelle5) {
        $this->libelle5 = $libelle5;
        return $this;
    }

    /**
     * Set the libelle6.
     *
     * @param string $libelle6 The libelle6.
     */
    public function setLibelle6($libelle6) {
        $this->libelle6 = $libelle6;
        return $this;
    }

    /**
     * Set the libelle7.
     *
     * @param string $libelle7 The libelle7.
     */
    public function setLibelle7($libelle7) {
        $this->libelle7 = $libelle7;
        return $this;
    }

    /**
     * Set the nbr bulletins.
     *
     * @param int $nbrBulletins The nbr bulletins.
     */
    public function setNbrBulletins($nbrBulletins) {
        $this->nbrBulletins = $nbrBulletins;
        return $this;
    }

    /**
     * Set the nbr ecritures.
     *
     * @param int $nbrEcritures The nbr ecritures.
     */
    public function setNbrEcritures($nbrEcritures) {
        $this->nbrEcritures = $nbrEcritures;
        return $this;
    }

    /**
     * Set the nbr heures.
     *
     * @param float $nbrHeures The nbr heures.
     */
    public function setNbrHeures($nbrHeures) {
        $this->nbrHeures = $nbrHeures;
        return $this;
    }

    /**
     * Set the prix1.
     *
     * @param float $prix1 The prix1.
     */
    public function setPrix1($prix1) {
        $this->prix1 = $prix1;
        return $this;
    }

    /**
     * Set the prix2.
     *
     * @param float $prix2 The prix2.
     */
    public function setPrix2($prix2) {
        $this->prix2 = $prix2;
        return $this;
    }

    /**
     * Set the prix3.
     *
     * @param float $prix3 The prix3.
     */
    public function setPrix3($prix3) {
        $this->prix3 = $prix3;
        return $this;
    }

    /**
     * Set the prix4.
     *
     * @param float $prix4 The prix4.
     */
    public function setPrix4($prix4) {
        $this->prix4 = $prix4;
        return $this;
    }

    /**
     * Set the prix5.
     *
     * @param float $prix5 The prix5.
     */
    public function setPrix5($prix5) {
        $this->prix5 = $prix5;
        return $this;
    }

    /**
     * Set the prix6.
     *
     * @param float $prix6 The prix6.
     */
    public function setPrix6($prix6) {
        $this->prix6 = $prix6;
        return $this;
    }

    /**
     * Set the prix7.
     *
     * @param float $prix7 The prix7.
     */
    public function setPrix7($prix7) {
        $this->prix7 = $prix7;
        return $this;
    }

    /**
     * Set the saisie tache.
     *
     * @param bool $saisieTache The saisie tache.
     */
    public function setSaisieTache($saisieTache) {
        $this->saisieTache = $saisieTache;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string $typeSuivi The type suivi.
     */
    public function setTypeSuivi($typeSuivi) {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the valo recap.
     *
     * @param int $valoRecap The valo recap.
     */
    public function setValoRecap($valoRecap) {
        $this->valoRecap = $valoRecap;
        return $this;
    }
}
