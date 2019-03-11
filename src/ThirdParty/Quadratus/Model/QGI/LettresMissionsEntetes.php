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
 * Lettres missions entetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsEntetes {

    /**
     * C a.
     *
     * @var float
     */
    private $cA;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

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
     * Date entretien.
     *
     * @var DateTime
     */
    private $dateEntretien;

    /**
     * Date signature.
     *
     * @var DateTime
     */
    private $dateSignature;

    /**
     * Debut mission.
     *
     * @var DateTime
     */
    private $debutMission;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Exercice courant.
     *
     * @var string
     */
    private $exerciceCourant;

    /**
     * Fin mission.
     *
     * @var DateTime
     */
    private $finMission;

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
     * Nb deplacements.
     *
     * @var string
     */
    private $nbDeplacements;

    /**
     * Nbr actes.
     *
     * @var float
     */
    private $nbrActes;

    /**
     * Nbr bulletins.
     *
     * @var float
     */
    private $nbrBulletins;

    /**
     * Nbr ecritures bq.
     *
     * @var float
     */
    private $nbrEcrituresBq;

    /**
     * Nbr ecritures depenses.
     *
     * @var float
     */
    private $nbrEcrituresDepenses;

    /**
     * Nbr ecritures o d.
     *
     * @var float
     */
    private $nbrEcrituresOD;

    /**
     * Nbr ecritures recettes.
     *
     * @var float
     */
    private $nbrEcrituresRecettes;

    /**
     * Nbr employes.
     *
     * @var float
     */
    private $nbrEmployes;

    /**
     * Numero lettre.
     *
     * @var string
     */
    private $numeroLettre;

    /**
     * Police1.
     *
     * @var string
     */
    private $police1;

    /**
     * Police2.
     *
     * @var string
     */
    private $police2;

    /**
     * Police3.
     *
     * @var string
     */
    private $police3;

    /**
     * Premier exercice.
     *
     * @var int
     */
    private $premierExercice;

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
     * Type actionnaires associes.
     *
     * @var string
     */
    private $typeActionnairesAssocies;

    /**
     * Type c a.
     *
     * @var string
     */
    private $typeCA;

    /**
     * Type mission.
     *
     * @var string
     */
    private $typeMission;

    /**
     * Type systeme info.
     *
     * @var string
     */
    private $typeSystemeInfo;

    /**
     * Type volume.
     *
     * @var string
     */
    private $typeVolume;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the c a.
     *
     * @return float Returns the c a.
     */
    public function getCA() {
        return $this->cA;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
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
     * Get the date entretien.
     *
     * @return DateTime Returns the date entretien.
     */
    public function getDateEntretien() {
        return $this->dateEntretien;
    }

    /**
     * Get the date signature.
     *
     * @return DateTime Returns the date signature.
     */
    public function getDateSignature() {
        return $this->dateSignature;
    }

    /**
     * Get the debut mission.
     *
     * @return DateTime Returns the debut mission.
     */
    public function getDebutMission() {
        return $this->debutMission;
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
     * Get the exercice courant.
     *
     * @return string Returns the exercice courant.
     */
    public function getExerciceCourant() {
        return $this->exerciceCourant;
    }

    /**
     * Get the fin mission.
     *
     * @return DateTime Returns the fin mission.
     */
    public function getFinMission() {
        return $this->finMission;
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
     * Get the nb deplacements.
     *
     * @return string Returns the nb deplacements.
     */
    public function getNbDeplacements() {
        return $this->nbDeplacements;
    }

    /**
     * Get the nbr actes.
     *
     * @return float Returns the nbr actes.
     */
    public function getNbrActes() {
        return $this->nbrActes;
    }

    /**
     * Get the nbr bulletins.
     *
     * @return float Returns the nbr bulletins.
     */
    public function getNbrBulletins() {
        return $this->nbrBulletins;
    }

    /**
     * Get the nbr ecritures bq.
     *
     * @return float Returns the nbr ecritures bq.
     */
    public function getNbrEcrituresBq() {
        return $this->nbrEcrituresBq;
    }

    /**
     * Get the nbr ecritures depenses.
     *
     * @return float Returns the nbr ecritures depenses.
     */
    public function getNbrEcrituresDepenses() {
        return $this->nbrEcrituresDepenses;
    }

    /**
     * Get the nbr ecritures o d.
     *
     * @return float Returns the nbr ecritures o d.
     */
    public function getNbrEcrituresOD() {
        return $this->nbrEcrituresOD;
    }

    /**
     * Get the nbr ecritures recettes.
     *
     * @return float Returns the nbr ecritures recettes.
     */
    public function getNbrEcrituresRecettes() {
        return $this->nbrEcrituresRecettes;
    }

    /**
     * Get the nbr employes.
     *
     * @return float Returns the nbr employes.
     */
    public function getNbrEmployes() {
        return $this->nbrEmployes;
    }

    /**
     * Get the numero lettre.
     *
     * @return string Returns the numero lettre.
     */
    public function getNumeroLettre() {
        return $this->numeroLettre;
    }

    /**
     * Get the police1.
     *
     * @return string Returns the police1.
     */
    public function getPolice1() {
        return $this->police1;
    }

    /**
     * Get the police2.
     *
     * @return string Returns the police2.
     */
    public function getPolice2() {
        return $this->police2;
    }

    /**
     * Get the police3.
     *
     * @return string Returns the police3.
     */
    public function getPolice3() {
        return $this->police3;
    }

    /**
     * Get the premier exercice.
     *
     * @return int Returns the premier exercice.
     */
    public function getPremierExercice() {
        return $this->premierExercice;
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
     * Get the type actionnaires associes.
     *
     * @return string Returns the type actionnaires associes.
     */
    public function getTypeActionnairesAssocies() {
        return $this->typeActionnairesAssocies;
    }

    /**
     * Get the type c a.
     *
     * @return string Returns the type c a.
     */
    public function getTypeCA() {
        return $this->typeCA;
    }

    /**
     * Get the type mission.
     *
     * @return string Returns the type mission.
     */
    public function getTypeMission() {
        return $this->typeMission;
    }

    /**
     * Get the type systeme info.
     *
     * @return string Returns the type systeme info.
     */
    public function getTypeSystemeInfo() {
        return $this->typeSystemeInfo;
    }

    /**
     * Get the type volume.
     *
     * @return string Returns the type volume.
     */
    public function getTypeVolume() {
        return $this->typeVolume;
    }

    /**
     * Set the c a.
     *
     * @param float $cA The c a.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setCA($cA) {
        $this->cA = $cA;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the comment1.
     *
     * @param string $comment1 The comment1.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment1($comment1) {
        $this->comment1 = $comment1;
        return $this;
    }

    /**
     * Set the comment2.
     *
     * @param string $comment2 The comment2.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment2($comment2) {
        $this->comment2 = $comment2;
        return $this;
    }

    /**
     * Set the comment3.
     *
     * @param string $comment3 The comment3.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment3($comment3) {
        $this->comment3 = $comment3;
        return $this;
    }

    /**
     * Set the comment4.
     *
     * @param string $comment4 The comment4.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment4($comment4) {
        $this->comment4 = $comment4;
        return $this;
    }

    /**
     * Set the comment5.
     *
     * @param string $comment5 The comment5.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment5($comment5) {
        $this->comment5 = $comment5;
        return $this;
    }

    /**
     * Set the comment6.
     *
     * @param string $comment6 The comment6.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment6($comment6) {
        $this->comment6 = $comment6;
        return $this;
    }

    /**
     * Set the comment7.
     *
     * @param string $comment7 The comment7.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setComment7($comment7) {
        $this->comment7 = $comment7;
        return $this;
    }

    /**
     * Set the date entretien.
     *
     * @param DateTime $dateEntretien The date entretien.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setDateEntretien(DateTime $dateEntretien = null) {
        $this->dateEntretien = $dateEntretien;
        return $this;
    }

    /**
     * Set the date signature.
     *
     * @param DateTime $dateSignature The date signature.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setDateSignature(DateTime $dateSignature = null) {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    /**
     * Set the debut mission.
     *
     * @param DateTime $debutMission The debut mission.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setDebutMission(DateTime $debutMission = null) {
        $this->debutMission = $debutMission;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the exercice courant.
     *
     * @param string $exerciceCourant The exercice courant.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setExerciceCourant($exerciceCourant) {
        $this->exerciceCourant = $exerciceCourant;
        return $this;
    }

    /**
     * Set the fin mission.
     *
     * @param DateTime $finMission The fin mission.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setFinMission(DateTime $finMission = null) {
        $this->finMission = $finMission;
        return $this;
    }

    /**
     * Set the hono prev.
     *
     * @param float $honoPrev The hono prev.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setHonoPrev($honoPrev) {
        $this->honoPrev = $honoPrev;
        return $this;
    }

    /**
     * Set the libelle1.
     *
     * @param string $libelle1 The libelle1.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle1($libelle1) {
        $this->libelle1 = $libelle1;
        return $this;
    }

    /**
     * Set the libelle2.
     *
     * @param string $libelle2 The libelle2.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle2($libelle2) {
        $this->libelle2 = $libelle2;
        return $this;
    }

    /**
     * Set the libelle3.
     *
     * @param string $libelle3 The libelle3.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle3($libelle3) {
        $this->libelle3 = $libelle3;
        return $this;
    }

    /**
     * Set the libelle4.
     *
     * @param string $libelle4 The libelle4.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle4($libelle4) {
        $this->libelle4 = $libelle4;
        return $this;
    }

    /**
     * Set the libelle5.
     *
     * @param string $libelle5 The libelle5.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle5($libelle5) {
        $this->libelle5 = $libelle5;
        return $this;
    }

    /**
     * Set the libelle6.
     *
     * @param string $libelle6 The libelle6.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle6($libelle6) {
        $this->libelle6 = $libelle6;
        return $this;
    }

    /**
     * Set the libelle7.
     *
     * @param string $libelle7 The libelle7.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setLibelle7($libelle7) {
        $this->libelle7 = $libelle7;
        return $this;
    }

    /**
     * Set the nb deplacements.
     *
     * @param string $nbDeplacements The nb deplacements.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbDeplacements($nbDeplacements) {
        $this->nbDeplacements = $nbDeplacements;
        return $this;
    }

    /**
     * Set the nbr actes.
     *
     * @param float $nbrActes The nbr actes.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrActes($nbrActes) {
        $this->nbrActes = $nbrActes;
        return $this;
    }

    /**
     * Set the nbr bulletins.
     *
     * @param float $nbrBulletins The nbr bulletins.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrBulletins($nbrBulletins) {
        $this->nbrBulletins = $nbrBulletins;
        return $this;
    }

    /**
     * Set the nbr ecritures bq.
     *
     * @param float $nbrEcrituresBq The nbr ecritures bq.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrEcrituresBq($nbrEcrituresBq) {
        $this->nbrEcrituresBq = $nbrEcrituresBq;
        return $this;
    }

    /**
     * Set the nbr ecritures depenses.
     *
     * @param float $nbrEcrituresDepenses The nbr ecritures depenses.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrEcrituresDepenses($nbrEcrituresDepenses) {
        $this->nbrEcrituresDepenses = $nbrEcrituresDepenses;
        return $this;
    }

    /**
     * Set the nbr ecritures o d.
     *
     * @param float $nbrEcrituresOD The nbr ecritures o d.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrEcrituresOD($nbrEcrituresOD) {
        $this->nbrEcrituresOD = $nbrEcrituresOD;
        return $this;
    }

    /**
     * Set the nbr ecritures recettes.
     *
     * @param float $nbrEcrituresRecettes The nbr ecritures recettes.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrEcrituresRecettes($nbrEcrituresRecettes) {
        $this->nbrEcrituresRecettes = $nbrEcrituresRecettes;
        return $this;
    }

    /**
     * Set the nbr employes.
     *
     * @param float $nbrEmployes The nbr employes.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNbrEmployes($nbrEmployes) {
        $this->nbrEmployes = $nbrEmployes;
        return $this;
    }

    /**
     * Set the numero lettre.
     *
     * @param string $numeroLettre The numero lettre.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setNumeroLettre($numeroLettre) {
        $this->numeroLettre = $numeroLettre;
        return $this;
    }

    /**
     * Set the police1.
     *
     * @param string $police1 The police1.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPolice1($police1) {
        $this->police1 = $police1;
        return $this;
    }

    /**
     * Set the police2.
     *
     * @param string $police2 The police2.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPolice2($police2) {
        $this->police2 = $police2;
        return $this;
    }

    /**
     * Set the police3.
     *
     * @param string $police3 The police3.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPolice3($police3) {
        $this->police3 = $police3;
        return $this;
    }

    /**
     * Set the premier exercice.
     *
     * @param int $premierExercice The premier exercice.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPremierExercice($premierExercice) {
        $this->premierExercice = $premierExercice;
        return $this;
    }

    /**
     * Set the prix1.
     *
     * @param float $prix1 The prix1.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix1($prix1) {
        $this->prix1 = $prix1;
        return $this;
    }

    /**
     * Set the prix2.
     *
     * @param float $prix2 The prix2.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix2($prix2) {
        $this->prix2 = $prix2;
        return $this;
    }

    /**
     * Set the prix3.
     *
     * @param float $prix3 The prix3.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix3($prix3) {
        $this->prix3 = $prix3;
        return $this;
    }

    /**
     * Set the prix4.
     *
     * @param float $prix4 The prix4.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix4($prix4) {
        $this->prix4 = $prix4;
        return $this;
    }

    /**
     * Set the prix5.
     *
     * @param float $prix5 The prix5.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix5($prix5) {
        $this->prix5 = $prix5;
        return $this;
    }

    /**
     * Set the prix6.
     *
     * @param float $prix6 The prix6.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix6($prix6) {
        $this->prix6 = $prix6;
        return $this;
    }

    /**
     * Set the prix7.
     *
     * @param float $prix7 The prix7.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setPrix7($prix7) {
        $this->prix7 = $prix7;
        return $this;
    }

    /**
     * Set the type actionnaires associes.
     *
     * @param string $typeActionnairesAssocies The type actionnaires associes.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setTypeActionnairesAssocies($typeActionnairesAssocies) {
        $this->typeActionnairesAssocies = $typeActionnairesAssocies;
        return $this;
    }

    /**
     * Set the type c a.
     *
     * @param string $typeCA The type c a.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setTypeCA($typeCA) {
        $this->typeCA = $typeCA;
        return $this;
    }

    /**
     * Set the type mission.
     *
     * @param string $typeMission The type mission.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setTypeMission($typeMission) {
        $this->typeMission = $typeMission;
        return $this;
    }

    /**
     * Set the type systeme info.
     *
     * @param string $typeSystemeInfo The type systeme info.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setTypeSystemeInfo($typeSystemeInfo) {
        $this->typeSystemeInfo = $typeSystemeInfo;
        return $this;
    }

    /**
     * Set the type volume.
     *
     * @param string $typeVolume The type volume.
     * @return LettresMissionsEntetes Returns this lettres missions entetes.
     */
    public function setTypeVolume($typeVolume) {
        $this->typeVolume = $typeVolume;
        return $this;
    }
}
