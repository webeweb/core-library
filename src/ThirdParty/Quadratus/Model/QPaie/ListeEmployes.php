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
 * Liste employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class ListeEmployes {

    /**
     * Btq.
     *
     * @var string
     */
    private $btq;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Carte sejour delivree le.
     *
     * @var DateTime|null
     */
    private $carteSejourDelivreeLe;

    /**
     * Carte sejour expire le.
     *
     * @var DateTime|null
     */
    private $carteSejourExpireLe;

    /**
     * Carte travail delivree le.
     *
     * @var DateTime|null
     */
    private $carteTravailDelivreeLe;

    /**
     * Carte travail expire le.
     *
     * @var DateTime|null
     */
    private $carteTravailExpireLe;

    /**
     * Categorie permis.
     *
     * @var string
     */
    private $categoriePermis;

    /**
     * Cddcdi.
     *
     * @var bool
     */
    private $cddcdi;

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
     * Cum30 ss.
     *
     * @var float
     */
    private $cum30Ss;

    /**
     * Cum base gmp.
     *
     * @var float
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float
     */
    private $cumBaseSs;

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
     * Cum brut al.
     *
     * @var float
     */
    private $cumBrutAl;

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float
     */
    private $cumCpPris1;

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
     * Cum mt cp pris1.
     *
     * @var float
     */
    private $cumMtCpPris1;

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
     * Cum plafond gmp.
     *
     * @var float
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date naiss conjoint.
     *
     * @var DateTime|null
     */
    private $dateNaissConjoint;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Date visite medicale.
     *
     * @var DateTime|null
     */
    private $dateVisiteMedicale;

    /**
     * Date visite reprise.
     *
     * @var DateTime|null
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
     * @var DateTime|null
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
     * @var DateTime|null
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
     * @var DateTime|null
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
     * Rib.
     *
     * @var string
     */
    private $rib;

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
     * Tds138.
     *
     * @var string
     */
    private $tds138;

    /**
     * Tds60.
     *
     * @var bool
     */
    private $tds60;

    /**
     * Tds61.
     *
     * @var string
     */
    private $tds61;

    /**
     * Tds76.
     *
     * @var string
     */
    private $tds76;

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
     * Get the btq.
     *
     * @return string Returns the btq.
     */
    public function getBtq() {
        return $this->btq;
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
     * Get the carte sejour delivree le.
     *
     * @return DateTime|null Returns the carte sejour delivree le.
     */
    public function getCarteSejourDelivreeLe() {
        return $this->carteSejourDelivreeLe;
    }

    /**
     * Get the carte sejour expire le.
     *
     * @return DateTime|null Returns the carte sejour expire le.
     */
    public function getCarteSejourExpireLe() {
        return $this->carteSejourExpireLe;
    }

    /**
     * Get the carte travail delivree le.
     *
     * @return DateTime|null Returns the carte travail delivree le.
     */
    public function getCarteTravailDelivreeLe() {
        return $this->carteTravailDelivreeLe;
    }

    /**
     * Get the carte travail expire le.
     *
     * @return DateTime|null Returns the carte travail expire le.
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
     * Get the cddcdi.
     *
     * @return bool Returns the cddcdi.
     */
    public function getCddcdi() {
        return $this->cddcdi;
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
     * Get the cum30 ss.
     *
     * @return float Returns the cum30 ss.
     */
    public function getCum30Ss() {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float Returns the cum base gmp.
     */
    public function getCumBaseGmp() {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float Returns the cum base ss.
     */
    public function getCumBaseSs() {
        return $this->cumBaseSs;
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
     * Get the cum brut al.
     *
     * @return float Returns the cum brut al.
     */
    public function getCumBrutAl() {
        return $this->cumBrutAl;
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
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float Returns the cum cp dus1.
     */
    public function getCumCpDus1() {
        return $this->cumCpDus1;
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
     * Get the cum cp pris1.
     *
     * @return float Returns the cum cp pris1.
     */
    public function getCumCpPris1() {
        return $this->cumCpPris1;
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
     * Get the cum mt cp pris1.
     *
     * @return float Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1() {
        return $this->cumMtCpPris1;
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
     * Get the cum plafond gmp.
     *
     * @return float Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp() {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1() {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2() {
        return $this->cumPlafondSs2;
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
     * Get the cum prov cp1.
     *
     * @return float Returns the cum prov cp1.
     */
    public function getCumProvCp1() {
        return $this->cumProvCp1;
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
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime|null Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint() {
        return $this->dateNaissConjoint;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the date visite medicale.
     *
     * @return DateTime|null Returns the date visite medicale.
     */
    public function getDateVisiteMedicale() {
        return $this->dateVisiteMedicale;
    }

    /**
     * Get the date visite reprise.
     *
     * @return DateTime|null Returns the date visite reprise.
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
     * @return DateTime|null Returns the derniere visite medicale.
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
     * @return DateTime|null Returns the permis delivre le.
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
     * @return DateTime|null Returns the permis expire le.
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
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
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
     * Get the tds138.
     *
     * @return string Returns the tds138.
     */
    public function getTds138() {
        return $this->tds138;
    }

    /**
     * Get the tds60.
     *
     * @return bool Returns the tds60.
     */
    public function getTds60() {
        return $this->tds60;
    }

    /**
     * Get the tds61.
     *
     * @return string Returns the tds61.
     */
    public function getTds61() {
        return $this->tds61;
    }

    /**
     * Get the tds76.
     *
     * @return string Returns the tds76.
     */
    public function getTds76() {
        return $this->tds76;
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
     * Set the btq.
     *
     * @param string $btq The btq.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the carte sejour delivree le.
     *
     * @param DateTime|null $carteSejourDelivreeLe The carte sejour delivree le.
     */
    public function setCarteSejourDelivreeLe(DateTime $carteSejourDelivreeLe = null) {
        $this->carteSejourDelivreeLe = $carteSejourDelivreeLe;
        return $this;
    }

    /**
     * Set the carte sejour expire le.
     *
     * @param DateTime|null $carteSejourExpireLe The carte sejour expire le.
     */
    public function setCarteSejourExpireLe(DateTime $carteSejourExpireLe = null) {
        $this->carteSejourExpireLe = $carteSejourExpireLe;
        return $this;
    }

    /**
     * Set the carte travail delivree le.
     *
     * @param DateTime|null $carteTravailDelivreeLe The carte travail delivree le.
     */
    public function setCarteTravailDelivreeLe(DateTime $carteTravailDelivreeLe = null) {
        $this->carteTravailDelivreeLe = $carteTravailDelivreeLe;
        return $this;
    }

    /**
     * Set the carte travail expire le.
     *
     * @param DateTime|null $carteTravailExpireLe The carte travail expire le.
     */
    public function setCarteTravailExpireLe(DateTime $carteTravailExpireLe = null) {
        $this->carteTravailExpireLe = $carteTravailExpireLe;
        return $this;
    }

    /**
     * Set the categorie permis.
     *
     * @param string $categoriePermis The categorie permis.
     */
    public function setCategoriePermis($categoriePermis) {
        $this->categoriePermis = $categoriePermis;
        return $this;
    }

    /**
     * Set the cddcdi.
     *
     * @param bool $cddcdi The cddcdi.
     */
    public function setCddcdi($cddcdi) {
        $this->cddcdi = $cddcdi;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string $cleDeux The cle deux.
     */
    public function setCleDeux($cleDeux) {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }

    /**
     * Set the commune naissance.
     *
     * @param string $communeNaissance The commune naissance.
     */
    public function setCommuneNaissance($communeNaissance) {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float $cum30Ss The cum30 ss.
     */
    public function setCum30Ss($cum30Ss) {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float $cumBaseGmp The cum base gmp.
     */
    public function setCumBaseGmp($cumBaseGmp) {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float $cumBaseSs The cum base ss.
     */
    public function setCumBaseSs($cumBaseSs) {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float $cumBrutAl The cum brut al.
     */
    public function setCumBrutAl($cumBrutAl) {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float $cumCpDus1 The cum cp dus1.
     */
    public function setCumCpDus1($cumCpDus1) {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float $cumCpPris1 The cum cp pris1.
     */
    public function setCumCpPris1($cumCpPris1) {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float $cumMtCpPris1 The cum mt cp pris1.
     */
    public function setCumMtCpPris1($cumMtCpPris1) {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float $cumPlafondGmp The cum plafond gmp.
     */
    public function setCumPlafondGmp($cumPlafondGmp) {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float $cumPlafondSs1 The cum plafond ss1.
     */
    public function setCumPlafondSs1($cumPlafondSs1) {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float $cumPlafondSs2 The cum plafond ss2.
     */
    public function setCumPlafondSs2($cumPlafondSs2) {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float $cumProvCp1 The cum prov cp1.
     */
    public function setCumProvCp1($cumProvCp1) {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime|null $dateNaissConjoint The date naiss conjoint.
     */
    public function setDateNaissConjoint(DateTime $dateNaissConjoint = null) {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     */
    public function setDateNaissance(DateTime $dateNaissance = null) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the date visite medicale.
     *
     * @param DateTime|null $dateVisiteMedicale The date visite medicale.
     */
    public function setDateVisiteMedicale(DateTime $dateVisiteMedicale = null) {
        $this->dateVisiteMedicale = $dateVisiteMedicale;
        return $this;
    }

    /**
     * Set the date visite reprise.
     *
     * @param DateTime|null $dateVisiteReprise The date visite reprise.
     */
    public function setDateVisiteReprise(DateTime $dateVisiteReprise = null) {
        $this->dateVisiteReprise = $dateVisiteReprise;
        return $this;
    }

    /**
     * Set the dept naissance.
     *
     * @param string $deptNaissance The dept naissance.
     */
    public function setDeptNaissance($deptNaissance) {
        $this->deptNaissance = $deptNaissance;
        return $this;
    }

    /**
     * Set the derniere visite medicale.
     *
     * @param DateTime|null $derniereVisiteMedicale The derniere visite medicale.
     */
    public function setDerniereVisiteMedicale(DateTime $derniereVisiteMedicale = null) {
        $this->derniereVisiteMedicale = $derniereVisiteMedicale;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the fictif.
     *
     * @param bool $fictif The fictif.
     */
    public function setFictif($fictif) {
        $this->fictif = $fictif;
        return $this;
    }

    /**
     * Set the gestion mail bulletin.
     *
     * @param bool $gestionMailBulletin The gestion mail bulletin.
     */
    public function setGestionMailBulletin($gestionMailBulletin) {
        $this->gestionMailBulletin = $gestionMailBulletin;
        return $this;
    }

    /**
     * Set the handicape.
     *
     * @param bool $handicape The handicape.
     */
    public function setHandicape($handicape) {
        $this->handicape = $handicape;
        return $this;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string $lieuTravailConjoint The lieu travail conjoint.
     */
    public function setLieuTravailConjoint($lieuTravailConjoint) {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param string $nationalite The nationalite.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nb heure mois.
     *
     * @param float $nbHeureMois The nb heure mois.
     */
    public function setNbHeureMois($nbHeureMois) {
        $this->nbHeureMois = $nbHeureMois;
        return $this;
    }

    /**
     * Set the nb jours anc.
     *
     * @param int $nbJoursAnc The nb jours anc.
     */
    public function setNbJoursAnc($nbJoursAnc) {
        $this->nbJoursAnc = $nbJoursAnc;
        return $this;
    }

    /**
     * Set the nb jours visite med.
     *
     * @param int $nbJoursVisiteMed The nb jours visite med.
     */
    public function setNbJoursVisiteMed($nbJoursVisiteMed) {
        $this->nbJoursVisiteMed = $nbJoursVisiteMed;
        return $this;
    }

    /**
     * Set the niveau confidentialite.
     *
     * @param string $niveauConfidentialite The niveau confidentialite.
     */
    public function setNiveauConfidentialite($niveauConfidentialite) {
        $this->niveauConfidentialite = $niveauConfidentialite;
        return $this;
    }

    /**
     * Set the nom conjoint.
     *
     * @param string $nomConjoint The nom conjoint.
     */
    public function setNomConjoint($nomConjoint) {
        $this->nomConjoint = $nomConjoint;
        return $this;
    }

    /**
     * Set the nom marital.
     *
     * @param string $nomMarital The nom marital.
     */
    public function setNomMarital($nomMarital) {
        $this->nomMarital = $nomMarital;
        return $this;
    }

    /**
     * Set the nom naissance.
     *
     * @param string $nomNaissance The nom naissance.
     */
    public function setNomNaissance($nomNaissance) {
        $this->nomNaissance = $nomNaissance;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre enfants.
     *
     * @param string $nombreEnfants The nombre enfants.
     */
    public function setNombreEnfants($nombreEnfants) {
        $this->nombreEnfants = $nombreEnfants;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero carte sejour.
     *
     * @param string $numeroCarteSejour The numero carte sejour.
     */
    public function setNumeroCarteSejour($numeroCarteSejour) {
        $this->numeroCarteSejour = $numeroCarteSejour;
        return $this;
    }

    /**
     * Set the numero carte travail.
     *
     * @param string $numeroCarteTravail The numero carte travail.
     */
    public function setNumeroCarteTravail($numeroCarteTravail) {
        $this->numeroCarteTravail = $numeroCarteTravail;
        return $this;
    }

    /**
     * Set the numero insee.
     *
     * @param string $numeroInsee The numero insee.
     */
    public function setNumeroInsee($numeroInsee) {
        $this->numeroInsee = $numeroInsee;
        return $this;
    }

    /**
     * Set the numero permis.
     *
     * @param string $numeroPermis The numero permis.
     */
    public function setNumeroPermis($numeroPermis) {
        $this->numeroPermis = $numeroPermis;
        return $this;
    }

    /**
     * Set the orphelin.
     *
     * @param bool $orphelin The orphelin.
     */
    public function setOrphelin($orphelin) {
        $this->orphelin = $orphelin;
        return $this;
    }

    /**
     * Set the pas gestion pdp.
     *
     * @param bool $pasGestionPdp The pas gestion pdp.
     */
    public function setPasGestionPdp($pasGestionPdp) {
        $this->pasGestionPdp = $pasGestionPdp;
        return $this;
    }

    /**
     * Set the pension.
     *
     * @param bool $pension The pension.
     */
    public function setPension($pension) {
        $this->pension = $pension;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string $periodicite The periodicite.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the permis delivre le.
     *
     * @param DateTime|null $permisDelivreLe The permis delivre le.
     */
    public function setPermisDelivreLe(DateTime $permisDelivreLe = null) {
        $this->permisDelivreLe = $permisDelivreLe;
        return $this;
    }

    /**
     * Set the permis delivre par.
     *
     * @param string $permisDelivrePar The permis delivre par.
     */
    public function setPermisDelivrePar($permisDelivrePar) {
        $this->permisDelivrePar = $permisDelivrePar;
        return $this;
    }

    /**
     * Set the permis expire le.
     *
     * @param DateTime|null $permisExpireLe The permis expire le.
     */
    public function setPermisExpireLe(DateTime $permisExpireLe = null) {
        $this->permisExpireLe = $permisExpireLe;
        return $this;
    }

    /**
     * Set the personne a prevenir.
     *
     * @param string $personneAPrevenir The personne a prevenir.
     */
    public function setPersonneAPrevenir($personneAPrevenir) {
        $this->personneAPrevenir = $personneAPrevenir;
        return $this;
    }

    /**
     * Set the pourcent act.
     *
     * @param float $pourcentAct The pourcent act.
     */
    public function setPourcentAct($pourcentAct) {
        $this->pourcentAct = $pourcentAct;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the prenom conjoint.
     *
     * @param string $prenomConjoint The prenom conjoint.
     */
    public function setPrenomConjoint($prenomConjoint) {
        $this->prenomConjoint = $prenomConjoint;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the salaire base.
     *
     * @param float $salaireBase The salaire base.
     */
    public function setSalaireBase($salaireBase) {
        $this->salaireBase = $salaireBase;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string $sexe The sexe.
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the situation fam.
     *
     * @param string $situationFam The situation fam.
     */
    public function setSituationFam($situationFam) {
        $this->situationFam = $situationFam;
        return $this;
    }

    /**
     * Set the taux pension civile.
     *
     * @param float $tauxPensionCivile The taux pension civile.
     */
    public function setTauxPensionCivile($tauxPensionCivile) {
        $this->tauxPensionCivile = $tauxPensionCivile;
        return $this;
    }

    /**
     * Set the taux pension militaire.
     *
     * @param float $tauxPensionMilitaire The taux pension militaire.
     */
    public function setTauxPensionMilitaire($tauxPensionMilitaire) {
        $this->tauxPensionMilitaire = $tauxPensionMilitaire;
        return $this;
    }

    /**
     * Set the tds138.
     *
     * @param string $tds138 The tds138.
     */
    public function setTds138($tds138) {
        $this->tds138 = $tds138;
        return $this;
    }

    /**
     * Set the tds60.
     *
     * @param bool $tds60 The tds60.
     */
    public function setTds60($tds60) {
        $this->tds60 = $tds60;
        return $this;
    }

    /**
     * Set the tds61.
     *
     * @param string $tds61 The tds61.
     */
    public function setTds61($tds61) {
        $this->tds61 = $tds61;
        return $this;
    }

    /**
     * Set the tds76.
     *
     * @param string $tds76 The tds76.
     */
    public function setTds76($tds76) {
        $this->tds76 = $tds76;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel conjoint.
     *
     * @param string $telConjoint The tel conjoint.
     */
    public function setTelConjoint($telConjoint) {
        $this->telConjoint = $telConjoint;
        return $this;
    }

    /**
     * Set the tel pers a prevenir.
     *
     * @param string $telPersAPrevenir The tel pers a prevenir.
     */
    public function setTelPersAPrevenir($telPersAPrevenir) {
        $this->telPersAPrevenir = $telPersAPrevenir;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the transfert entree.
     *
     * @param bool $transfertEntree The transfert entree.
     */
    public function setTransfertEntree($transfertEntree) {
        $this->transfertEntree = $transfertEntree;
        return $this;
    }

    /**
     * Set the transfert sortie.
     *
     * @param bool $transfertSortie The transfert sortie.
     */
    public function setTransfertSortie($transfertSortie) {
        $this->transfertSortie = $transfertSortie;
        return $this;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
