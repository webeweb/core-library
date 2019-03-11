<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Liste employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ListeEmployes {

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * C d d c d i.
     *
     * @var bool
     */
    private $cDDCDI;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime
     */
    private $carteTravailExpireLe;

    /**
     * Categorie permis.
     *
     * @var string
     */
    private $categoriePermis;

    /**
     * Cle deux.
     *
     * @var string
     */
    private $cleDeux;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code motif rupture.
     *
     * @var string
     */
    private $codeMotifRupture;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code type sal.
     *
     * @var string
     */
    private $codeTypeSal;

    /**
     * Commune naissance.
     *
     * @var string
     */
    private $communeNaissance;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Cum30 s s.
     *
     * @var float
     */
    private $cum30SS;

    /**
     * Cum base g m p.
     *
     * @var float
     */
    private $cumBaseGMP;

    /**
     * Cum base s s.
     *
     * @var float
     */
    private $cumBaseSS;

    /**
     * Cum base tr a.
     *
     * @var float
     */
    private $cumBaseTrA;

    /**
     * Cum base tr b.
     *
     * @var float
     */
    private $cumBaseTrB;

    /**
     * Cum base tr c.
     *
     * @var float
     */
    private $cumBaseTrC;

    /**
     * Cum brut abat non lim.
     *
     * @var float
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Cum brutal.
     *
     * @var float
     */
    private $cumBrutal;

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Cum cp dus_1.
     *
     * @var float
     */
    private $cumCpDus_1;

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Cum cp pris_1.
     *
     * @var float
     */
    private $cumCpPris_1;

    /**
     * Cum h sup.
     *
     * @var float
     */
    private $cumHSup;

    /**
     * Cum heure paye.
     *
     * @var float
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float
     */
    private $cumHeureTrav;

    /**
     * Cum jour paye.
     *
     * @var float
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris_1.
     *
     * @var float
     */
    private $cumMtCpPris_1;

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float
     */
    private $cumNetImposable;

    /**
     * Cum plafond g m p.
     *
     * @var float
     */
    private $cumPlafondGMP;

    /**
     * Cum plafond s s1.
     *
     * @var float
     */
    private $cumPlafondSS1;

    /**
     * Cum plafond s s2.
     *
     * @var float
     */
    private $cumPlafondSS2;

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Cum prov cp_1.
     *
     * @var float
     */
    private $cumProvCp_1;

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Date entree.
     *
     * @var DateTime
     */
    private $dateEntree;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime
     */
    private $dateNaissance;

    /**
     * Date sortie.
     *
     * @var DateTime
     */
    private $dateSortie;

    /**
     * Date visite medicale.
     *
     * @var DateTime
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime
     */
    private $dateVisiteReprise;

    /**
     * Dept naissance.
     *
     * @var string
     */
    private $deptNaissance;

    /**
     * Derniere visite medicale.
     *
     * @var DateTime
     */
    private $derniereVisiteMedicale;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Fictif.
     *
     * @var bool
     */
    private $fictif;

    /**
     * Gestion mail bulletin.
     *
     * @var bool
     */
    private $gestionMailBulletin;

    /**
     * Handicape.
     *
     * @var bool
     */
    private $handicape;

    /**
     * Lieu travail conjoint.
     *
     * @var string
     */
    private $lieuTravailConjoint;

    /**
     * Matricule.
     *
     * @var string
     */
    private $matricule;

    /**
     * Nationalite.
     *
     * @var string
     */
    private $nationalite;

    /**
     * Nb heure mois.
     *
     * @var float
     */
    private $nbHeureMois;

    /**
     * Nb jours anc.
     *
     * @var int
     */
    private $nbJoursAnc;

    /**
     * Nb jours visite med.
     *
     * @var int
     */
    private $nbJoursVisiteMed;

    /**
     * Niveau confidentialite.
     *
     * @var string
     */
    private $niveauConfidentialite;

    /**
     * Nom conjoint.
     *
     * @var string
     */
    private $nomConjoint;

    /**
     * Nom marital.
     *
     * @var string
     */
    private $nomMarital;

    /**
     * Nom naissance.
     *
     * @var string
     */
    private $nomNaissance;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Nombre enfants.
     *
     * @var string
     */
    private $nombreEnfants;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Numero carte sejour.
     *
     * @var string
     */
    private $numeroCarteSejour;

    /**
     * Numero carte travail.
     *
     * @var string
     */
    private $numeroCarteTravail;

    /**
     * Numero insee.
     *
     * @var string
     */
    private $numeroInsee;

    /**
     * Numero permis.
     *
     * @var string
     */
    private $numeroPermis;

    /**
     * Orphelin.
     *
     * @var bool
     */
    private $orphelin;

    /**
     * Pas gestion pdp.
     *
     * @var bool
     */
    private $pasGestionPdp;

    /**
     * Pension.
     *
     * @var bool
     */
    private $pension;

    /**
     * Periodicite.
     *
     * @var string
     */
    private $periodicite;

    /**
     * Permis delivre le.
     *
     * @var DateTime
     */
    private $permisDelivreLe;

    /**
     * Permis delivre par.
     *
     * @var string
     */
    private $permisDelivrePar;

    /**
     * Permis expire le.
     *
     * @var DateTime
     */
    private $permisExpireLe;

    /**
     * Personne a prevenir.
     *
     * @var string
     */
    private $personneAPrevenir;

    /**
     * Pourcent act.
     *
     * @var float
     */
    private $pourcentAct;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Prenom conjoint.
     *
     * @var string
     */
    private $prenomConjoint;

    /**
     * R i b.
     *
     * @var string
     */
    private $rIB;

    /**
     * Salaire base.
     *
     * @var float
     */
    private $salaireBase;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Sexe.
     *
     * @var string
     */
    private $sexe;

    /**
     * Situation fam.
     *
     * @var string
     */
    private $situationFam;

    /**
     * T d s138.
     *
     * @var string
     */
    private $tDS138;

    /**
     * T d s60.
     *
     * @var bool
     */
    private $tDS60;

    /**
     * T d s61.
     *
     * @var string
     */
    private $tDS61;

    /**
     * T d s76.
     *
     * @var string
     */
    private $tDS76;

    /**
     * Taux pension civile.
     *
     * @var float
     */
    private $tauxPensionCivile;

    /**
     * Taux pension militaire.
     *
     * @var float
     */
    private $tauxPensionMilitaire;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Tel conjoint.
     *
     * @var string
     */
    private $telConjoint;

    /**
     * Tel pers a prevenir.
     *
     * @var string
     */
    private $telPersAPrevenir;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Transfert entree.
     *
     * @var bool
     */
    private $transfertEntree;

    /**
     * Transfert sortie.
     *
     * @var bool
     */
    private $transfertSortie;

    /**
     * Type nationalite.
     *
     * @var string
     */
    private $typeNationalite;

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the b t q.
     *
     * @return string Returns the b t q.
     */
    public function getBTQ() {
        return $this->bTQ;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the c d d c d i.
     *
     * @return bool Returns the c d d c d i.
     */
    public function getCDDCDI() {
        return $this->cDDCDI;
    }

    /**
     * Get the carte sejour delivree le.
     *
     * @return DateTime Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe() {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe() {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe() {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime Returns the carte travail expire le.
     */
    public function getCarteTravailExpireLe() {
        return $this->carteTravailExpireLe;
    }

    /**
     * Get the categorie permis.
     *
     * @return string Returns the categorie permis.
     */
    public function getCategoriePermis() {
        return $this->categoriePermis;
    }

    /**
     * Get the cle deux.
     *
     * @return string Returns the cle deux.
     */
    public function getCleDeux() {
        return $this->cleDeux;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code motif rupture.
     *
     * @return string Returns the code motif rupture.
     */
    public function getCodeMotifRupture() {
        return $this->codeMotifRupture;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the code type sal.
     *
     * @return string Returns the code type sal.
     */
    public function getCodeTypeSal() {
        return $this->codeTypeSal;
    }

    /**
     * Get the commune naissance.
     *
     * @return string Returns the commune naissance.
     */
    public function getCommuneNaissance() {
        return $this->communeNaissance;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the cum30 s s.
     *
     * @return float Returns the cum30 s s.
     */
    public function getCum30SS() {
        return $this->cum30SS;
    }

    /**
     * Get the cum base g m p.
     *
     * @return float Returns the cum base g m p.
     */
    public function getCumBaseGMP() {
        return $this->cumBaseGMP;
    }

    /**
     * Get the cum base s s.
     *
     * @return float Returns the cum base s s.
     */
    public function getCumBaseSS() {
        return $this->cumBaseSS;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float Returns the cum base tr a.
     */
    public function getCumBaseTrA() {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float Returns the cum base tr b.
     */
    public function getCumBaseTrB() {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float Returns the cum base tr c.
     */
    public function getCumBaseTrC() {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim() {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu() {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum brutal.
     *
     * @return float Returns the cum brutal.
     */
    public function getCumBrutal() {
        return $this->cumBrutal;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus_1.
     *
     * @return float Returns the cum cp dus_1.
     */
    public function getCumCpDus_1() {
        return $this->cumCpDus_1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float Returns the cum cp pris.
     */
    public function getCumCpPris() {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris_1.
     *
     * @return float Returns the cum cp pris_1.
     */
    public function getCumCpPris_1() {
        return $this->cumCpPris_1;
    }

    /**
     * Get the cum h sup.
     *
     * @return float Returns the cum h sup.
     */
    public function getCumHSup() {
        return $this->cumHSup;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float Returns the cum heure paye.
     */
    public function getCumHeurePaye() {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float Returns the cum heure trav.
     */
    public function getCumHeureTrav() {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float Returns the cum jour paye.
     */
    public function getCumJourPaye() {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float Returns the cum jour trav.
     */
    public function getCumJourTrav() {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris_1.
     *
     * @return float Returns the cum mt cp pris_1.
     */
    public function getCumMtCpPris_1() {
        return $this->cumMtCpPris_1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float Returns the cum net a payer.
     */
    public function getCumNetAPayer() {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float Returns the cum net imposable.
     */
    public function getCumNetImposable() {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plafond g m p.
     *
     * @return float Returns the cum plafond g m p.
     */
    public function getCumPlafondGMP() {
        return $this->cumPlafondGMP;
    }

    /**
     * Get the cum plafond s s1.
     *
     * @return float Returns the cum plafond s s1.
     */
    public function getCumPlafondSS1() {
        return $this->cumPlafondSS1;
    }

    /**
     * Get the cum plafond s s2.
     *
     * @return float Returns the cum plafond s s2.
     */
    public function getCumPlafondSS2() {
        return $this->cumPlafondSS2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float Returns the cum prov cp.
     */
    public function getCumProvCp() {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp_1.
     *
     * @return float Returns the cum prov cp_1.
     */
    public function getCumProvCp_1() {
        return $this->cumProvCp_1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float Returns the cum repos comp.
     */
    public function getCumReposComp() {
        return $this->cumReposComp;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint() {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the date visite medicale.
     *
     * @return DateTime Returns the date visite medicale.
     */
    public function getDateVisiteMedicale() {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime Returns the date visite reprise.
     */
    public function getDateVisiteReprise() {
        return $this->dateVisiteReprise;
    }

    /**
     * Get the dept naissance.
     *
     * @return string Returns the dept naissance.
     */
    public function getDeptNaissance() {
        return $this->deptNaissance;
    }

    /**
     * Get the derniere visite medicale.
     *
     * @return DateTime Returns the derniere visite medicale.
     */
    public function getDerniereVisiteMedicale() {
        return $this->derniereVisiteMedicale;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the fictif.
     *
     * @return bool Returns the fictif.
     */
    public function getFictif() {
        return $this->fictif;
    }

    /**
     * Get the gestion mail bulletin.
     *
     * @return bool Returns the gestion mail bulletin.
     */
    public function getGestionMailBulletin() {
        return $this->gestionMailBulletin;
    }

    /**
     * Get the handicape.
     *
     * @return bool Returns the handicape.
     */
    public function getHandicape() {
        return $this->handicape;
    }

    /**
     * Get the lieu travail conjoint.
     *
     * @return string Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint() {
        return $this->lieuTravailConjoint;
    }

    /**
     * Get the matricule.
     *
     * @return string Returns the matricule.
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Get the nationalite.
     *
     * @return string Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Get the nb heure mois.
     *
     * @return float Returns the nb heure mois.
     */
    public function getNbHeureMois() {
        return $this->nbHeureMois;
    }

    /**
     * Get the nb jours anc.
     *
     * @return int Returns the nb jours anc.
     */
    public function getNbJoursAnc() {
        return $this->nbJoursAnc;
    }

    /**
     * Get the nb jours visite med.
     *
     * @return int Returns the nb jours visite med.
     */
    public function getNbJoursVisiteMed() {
        return $this->nbJoursVisiteMed;
    }

    /**
     * Get the niveau confidentialite.
     *
     * @return string Returns the niveau confidentialite.
     */
    public function getNiveauConfidentialite() {
        return $this->niveauConfidentialite;
    }

    /**
     * Get the nom conjoint.
     *
     * @return string Returns the nom conjoint.
     */
    public function getNomConjoint() {
        return $this->nomConjoint;
    }

    /**
     * Get the nom marital.
     *
     * @return string Returns the nom marital.
     */
    public function getNomMarital() {
        return $this->nomMarital;
    }

    /**
     * Get the nom naissance.
     *
     * @return string Returns the nom naissance.
     */
    public function getNomNaissance() {
        return $this->nomNaissance;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the nombre enfants.
     *
     * @return string Returns the nombre enfants.
     */
    public function getNombreEnfants() {
        return $this->nombreEnfants;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the numero.
     *
     * @return string Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero carte sejour.
     *
     * @return string Returns the numero carte sejour.
     */
    public function getNumeroCarteSejour() {
        return $this->numeroCarteSejour;
    }

    /**
     * Get the numero carte travail.
     *
     * @return string Returns the numero carte travail.
     */
    public function getNumeroCarteTravail() {
        return $this->numeroCarteTravail;
    }

    /**
     * Get the numero insee.
     *
     * @return string Returns the numero insee.
     */
    public function getNumeroInsee() {
        return $this->numeroInsee;
    }

    /**
     * Get the numero permis.
     *
     * @return string Returns the numero permis.
     */
    public function getNumeroPermis() {
        return $this->numeroPermis;
    }

    /**
     * Get the orphelin.
     *
     * @return bool Returns the orphelin.
     */
    public function getOrphelin() {
        return $this->orphelin;
    }

    /**
     * Get the pas gestion pdp.
     *
     * @return bool Returns the pas gestion pdp.
     */
    public function getPasGestionPdp() {
        return $this->pasGestionPdp;
    }

    /**
     * Get the pension.
     *
     * @return bool Returns the pension.
     */
    public function getPension() {
        return $this->pension;
    }

    /**
     * Get the periodicite.
     *
     * @return string Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the permis delivre le.
     *
     * @return DateTime Returns the permis delivre le.
     */
    public function getPermisDelivreLe() {
        return $this->permisDelivreLe;
    }

    /**
     * Get the permis delivre par.
     *
     * @return string Returns the permis delivre par.
     */
    public function getPermisDelivrePar() {
        return $this->permisDelivrePar;
    }

    /**
     * Get the permis expire le.
     *
     * @return DateTime Returns the permis expire le.
     */
    public function getPermisExpireLe() {
        return $this->permisExpireLe;
    }

    /**
     * Get the personne a prevenir.
     *
     * @return string Returns the personne a prevenir.
     */
    public function getPersonneAPrevenir() {
        return $this->personneAPrevenir;
    }

    /**
     * Get the pourcent act.
     *
     * @return float Returns the pourcent act.
     */
    public function getPourcentAct() {
        return $this->pourcentAct;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the prenom conjoint.
     *
     * @return string Returns the prenom conjoint.
     */
    public function getPrenomConjoint() {
        return $this->prenomConjoint;
    }

    /**
     * Get the r i b.
     *
     * @return string Returns the r i b.
     */
    public function getRIB() {
        return $this->rIB;
    }

    /**
     * Get the salaire base.
     *
     * @return float Returns the salaire base.
     */
    public function getSalaireBase() {
        return $this->salaireBase;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the sexe.
     *
     * @return string Returns the sexe.
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Get the situation fam.
     *
     * @return string Returns the situation fam.
     */
    public function getSituationFam() {
        return $this->situationFam;
    }

    /**
     * Get the t d s138.
     *
     * @return string Returns the t d s138.
     */
    public function getTDS138() {
        return $this->tDS138;
    }

    /**
     * Get the t d s60.
     *
     * @return bool Returns the t d s60.
     */
    public function getTDS60() {
        return $this->tDS60;
    }

    /**
     * Get the t d s61.
     *
     * @return string Returns the t d s61.
     */
    public function getTDS61() {
        return $this->tDS61;
    }

    /**
     * Get the t d s76.
     *
     * @return string Returns the t d s76.
     */
    public function getTDS76() {
        return $this->tDS76;
    }

    /**
     * Get the taux pension civile.
     *
     * @return float Returns the taux pension civile.
     */
    public function getTauxPensionCivile() {
        return $this->tauxPensionCivile;
    }

    /**
     * Get the taux pension militaire.
     *
     * @return float Returns the taux pension militaire.
     */
    public function getTauxPensionMilitaire() {
        return $this->tauxPensionMilitaire;
    }

    /**
     * Get the tel1.
     *
     * @return string Returns the tel1.
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * Get the tel2.
     *
     * @return string Returns the tel2.
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * Get the tel conjoint.
     *
     * @return string Returns the tel conjoint.
     */
    public function getTelConjoint() {
        return $this->telConjoint;
    }

    /**
     * Get the tel pers a prevenir.
     *
     * @return string Returns the tel pers a prevenir.
     */
    public function getTelPersAPrevenir() {
        return $this->telPersAPrevenir;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the transfert entree.
     *
     * @return bool Returns the transfert entree.
     */
    public function getTransfertEntree() {
        return $this->transfertEntree;
    }

    /**
     * Get the transfert sortie.
     *
     * @return bool Returns the transfert sortie.
     */
    public function getTransfertSortie() {
        return $this->transfertSortie;
    }

    /**
     * Get the type nationalite.
     *
     * @return string Returns the type nationalite.
     */
    public function getTypeNationalite() {
        return $this->typeNationalite;
    }

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the c d d c d i.
     *
     * @param bool $cDDCDI The c d d c d i.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCDDCDI($cDDCDI) {
        $this->cDDCDI = $cDDCDI;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime $carteSejourDelivreeLe The carte sejour delivree le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCarteSejourDelivreeLe(DateTime $carteSejourDelivreeLe = null) {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime $carteSejourExpireLe The carte sejour expire le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCarteSejourExpireLe(DateTime $carteSejourExpireLe = null) {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime $carteTravailDelivreeLe The carte travail delivree le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCarteTravailDelivreeLe(DateTime $carteTravailDelivreeLe = null) {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime $carteTravailExpireLe The carte travail expire le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCarteTravailExpireLe(DateTime $carteTravailExpireLe = null) {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string $categoriePermis The categorie permis.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCategoriePermis($categoriePermis) {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string $cleDeux The cle deux.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCleDeux($cleDeux) {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string $communeNaissance The commune naissance.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCommuneNaissance($communeNaissance) {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the cum30 s s.
     *
     * @param float $cum30SS The cum30 s s.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCum30SS($cum30SS) {
        $this->cum30SS = $cum30SS;
        return $this;
    }

    /**
     * Set the cum base g m p.
     *
     * @param float $cumBaseGMP The cum base g m p.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBaseGMP($cumBaseGMP) {
        $this->cumBaseGMP = $cumBaseGMP;
        return $this;
    }

    /**
     * Set the cum base s s.
     *
     * @param float $cumBaseSS The cum base s s.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBaseSS($cumBaseSS) {
        $this->cumBaseSS = $cumBaseSS;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum brutal.
     *
     * @param float $cumBrutal The cum brutal.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumBrutal($cumBrutal) {
        $this->cumBrutal = $cumBrutal;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus_1.
     *
     * @param float $cumCpDus_1 The cum cp dus_1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumCpDus_1($cumCpDus_1) {
        $this->cumCpDus_1 = $cumCpDus_1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris_1.
     *
     * @param float $cumCpPris_1 The cum cp pris_1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumCpPris_1($cumCpPris_1) {
        $this->cumCpPris_1 = $cumCpPris_1;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris_1.
     *
     * @param float $cumMtCpPris_1 The cum mt cp pris_1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumMtCpPris_1($cumMtCpPris_1) {
        $this->cumMtCpPris_1 = $cumMtCpPris_1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plafond g m p.
     *
     * @param float $cumPlafondGMP The cum plafond g m p.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumPlafondGMP($cumPlafondGMP) {
        $this->cumPlafondGMP = $cumPlafondGMP;
        return $this;
    }

    /**
     * Set the cum plafond s s1.
     *
     * @param float $cumPlafondSS1 The cum plafond s s1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumPlafondSS1($cumPlafondSS1) {
        $this->cumPlafondSS1 = $cumPlafondSS1;
        return $this;
    }

    /**
     * Set the cum plafond s s2.
     *
     * @param float $cumPlafondSS2 The cum plafond s s2.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumPlafondSS2($cumPlafondSS2) {
        $this->cumPlafondSS2 = $cumPlafondSS2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp_1.
     *
     * @param float $cumProvCp_1 The cum prov cp_1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumProvCp_1($cumProvCp_1) {
        $this->cumProvCp_1 = $cumProvCp_1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime $dateEntree The date entree.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime $dateNaissConjoint The date naiss conjoint.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateNaissConjoint(DateTime $dateNaissConjoint = null) {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime $dateNaissance The date naissance.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime $dateSortie The date sortie.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime $dateVisiteMedicale The date visite medicale.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateVisiteMedicale(DateTime $dateVisiteMedicale = null) {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime $dateVisiteReprise The date visite reprise.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDateVisiteReprise(DateTime $dateVisiteReprise = null) {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the derniere visite medicale.
     *
     * @param DateTime $derniereVisiteMedicale The derniere visite medicale.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setDerniereVisiteMedicale(DateTime $derniereVisiteMedicale = null) {
        $this->derniereVisiteMedicale = $derniereVisiteMedicale;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool $fictif The fictif.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool $gestionMailBulletin The gestion mail bulletin.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool $handicape The handicape.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setHandicape($handicape) {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string $lieuTravailConjoint The lieu travail conjoint.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setLieuTravailConjoint($lieuTravailConjoint) {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jours anc.
     *
     * @param int $nbJoursAnc The nb jours anc.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNbJoursAnc($nbJoursAnc) {
        $this->nbJoursAnc = $nbJoursAnc;
        return $this;
    }

    /**
     * Set the nb jours visite med.
     *
     * @param int $nbJoursVisiteMed The nb jours visite med.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNbJoursVisiteMed($nbJoursVisiteMed) {
        $this->nbJoursVisiteMed = $nbJoursVisiteMed;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string $niveauConfidentialite The niveau confidentialite.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNiveauConfidentialite($niveauConfidentialite) {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string $nomConjoint The nom conjoint.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNomConjoint($nomConjoint) {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string $nombreEnfants The nombre enfants.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string $numeroCarteSejour The numero carte sejour.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumeroCarteSejour($numeroCarteSejour) {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string $numeroCarteTravail The numero carte travail.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumeroCarteTravail($numeroCarteTravail) {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string $numeroInsee The numero insee.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumeroInsee($numeroInsee) {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string $numeroPermis The numero permis.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setNumeroPermis($numeroPermis) {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param bool $orphelin The orphelin.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setOrphelin($orphelin) {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool $pasGestionPdp The pas gestion pdp.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPasGestionPdp($pasGestionPdp) {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param bool $pension The pension.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPension($pension) {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime $permisDelivreLe The permis delivre le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPermisDelivreLe(DateTime $permisDelivreLe = null) {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string $permisDelivrePar The permis delivre par.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPermisDelivrePar($permisDelivrePar) {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime $permisExpireLe The permis expire le.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPermisExpireLe(DateTime $permisExpireLe = null) {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string $personneAPrevenir The personne a prevenir.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPersonneAPrevenir($personneAPrevenir) {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string $prenomConjoint The prenom conjoint.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setPrenomConjoint($prenomConjoint) {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the t d s138.
     *
     * @param string $tDS138 The t d s138.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTDS138($tDS138) {
        $this->tDS138 = $tDS138;
        return $this;
    }

    /**
     * Set the t d s60.
     *
     * @param bool $tDS60 The t d s60.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTDS60($tDS60) {
        $this->tDS60 = $tDS60;
        return $this;
    }

    /**
     * Set the t d s61.
     *
     * @param string $tDS61 The t d s61.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTDS61($tDS61) {
        $this->tDS61 = $tDS61;
        return $this;
    }

    /**
     * Set the t d s76.
     *
     * @param string $tDS76 The t d s76.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTDS76($tDS76) {
        $this->tDS76 = $tDS76;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float $tauxPensionCivile The taux pension civile.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTauxPensionCivile($tauxPensionCivile) {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float $tauxPensionMilitaire The taux pension militaire.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTauxPensionMilitaire($tauxPensionMilitaire) {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string $telConjoint The tel conjoint.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTelConjoint($telConjoint) {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string $telPersAPrevenir The tel pers a prevenir.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTelPersAPrevenir($telPersAPrevenir) {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree.
     *
     * @param bool $transfertEntree The transfert entree.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTransfertEntree($transfertEntree) {
        $this->transfertEntree = $transfertEntree;
        return $this;
    }

    /**
     * Set the transfert sortie.
     *
     * @param bool $transfertSortie The transfert sortie.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTransfertSortie($transfertSortie) {
        $this->transfertSortie = $transfertSortie;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     * @return ListeEmployes Returns this liste employes.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
