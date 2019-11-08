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
 * Bons travaux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravaux {

    /**
     * Ad bt bureau distributeur.
     *
     * @var string
     */
    private $adBtBureauDistributeur;

    /**
     * Ad bt civilite.
     *
     * @var string
     */
    private $adBtCivilite;

    /**
     * Ad bt code pays.
     *
     * @var string
     */
    private $adBtCodePays;

    /**
     * Ad bt code postal.
     *
     * @var string
     */
    private $adBtCodePostal;

    /**
     * Ad bt complement.
     *
     * @var string
     */
    private $adBtComplement;

    /**
     * Ad bt nom.
     *
     * @var string
     */
    private $adBtNom;

    /**
     * Ad bt nom suite.
     *
     * @var string
     */
    private $adBtNomSuite;

    /**
     * Ad bt nom voie.
     *
     * @var string
     */
    private $adBtNomVoie;

    /**
     * Ad bt num voie.
     *
     * @var string
     */
    private $adBtNumVoie;

    /**
     * Ad btbtq.
     *
     * @var string
     */
    private $adBtbtq;

    /**
     * Ad f bureau distributeur.
     *
     * @var string
     */
    private $adFBureauDistributeur;

    /**
     * Ad f civilite.
     *
     * @var string
     */
    private $adFCivilite;

    /**
     * Ad f code pays.
     *
     * @var string
     */
    private $adFCodePays;

    /**
     * Ad f code postal.
     *
     * @var string
     */
    private $adFCodePostal;

    /**
     * Ad f complement.
     *
     * @var string
     */
    private $adFComplement;

    /**
     * Ad f nom.
     *
     * @var string
     */
    private $adFNom;

    /**
     * Ad f nom suite.
     *
     * @var string
     */
    private $adFNomSuite;

    /**
     * Ad f nom suite2.
     *
     * @var string
     */
    private $adFNomSuite2;

    /**
     * Ad f nom suite3.
     *
     * @var string
     */
    private $adFNomSuite3;

    /**
     * Ad f nom voie.
     *
     * @var string
     */
    private $adFNomVoie;

    /**
     * Ad f num voie.
     *
     * @var string
     */
    private $adFNumVoie;

    /**
     * Ad fbtq.
     *
     * @var string
     */
    private $adFbtq;

    /**
     * Adresse bt saisie.
     *
     * @var bool
     */
    private $adresseBtSaisie;

    /**
     * Adresse facturation saisie.
     *
     * @var bool
     */
    private $adresseFacturationSaisie;

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
     * Code frequence.
     *
     * @var string
     */
    private $codeFrequence;

    /**
     * Code tache bt.
     *
     * @var string
     */
    private $codeTacheBt;

    /**
     * Code tournee.
     *
     * @var string
     */
    private $codeTournee;

    /**
     * Critere liste1.
     *
     * @var string
     */
    private $critereListe1;

    /**
     * Critere liste2.
     *
     * @var string
     */
    private $critereListe2;

    /**
     * Critere numerique1.
     *
     * @var float
     */
    private $critereNumerique1;

    /**
     * Critere numerique2.
     *
     * @var float
     */
    private $critereNumerique2;

    /**
     * Critere texte1.
     *
     * @var string
     */
    private $critereTexte1;

    /**
     * Critere texte2.
     *
     * @var string
     */
    private $critereTexte2;

    /**
     * Date dernier passage.
     *
     * @var DateTime|null
     */
    private $dateDernierPassage;

    /**
     * Date fin validite.
     *
     * @var DateTime|null
     */
    private $dateFinValidite;

    /**
     * Date premier passage.
     *
     * @var DateTime|null
     */
    private $datePremierPassage;

    /**
     * Date validite.
     *
     * @var DateTime|null
     */
    private $dateValidite;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Equipe.
     *
     * @var string
     */
    private $equipe;

    /**
     * Frequence.
     *
     * @var string
     */
    private $frequence;

    /**
     * Frequence suite.
     *
     * @var string
     */
    private $frequenceSuite;

    /**
     * Gestion planning.
     *
     * @var bool
     */
    private $gestionPlanning;

    /**
     * Heure deb.
     *
     * @var DateTime|null
     */
    private $heureDeb;

    /**
     * Latitude.
     *
     * @var float
     */
    private $latitude;

    /**
     * Longitude.
     *
     * @var float
     */
    private $longitude;

    /**
     * Mention speciale.
     *
     * @var string
     */
    private $mentionSpeciale;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Nb jours.
     *
     * @var float
     */
    private $nbJours;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Saisie inter jour.
     *
     * @var bool
     */
    private $saisieInterJour;

    /**
     * Travaille dimanche.
     *
     * @var bool
     */
    private $travailleDimanche;

    /**
     * Travaille jours feries.
     *
     * @var bool
     */
    private $travailleJoursFeries;

    /**
     * Travaille samedi.
     *
     * @var bool
     */
    private $travailleSamedi;

    /**
     * Type frequence.
     *
     * @var string
     */
    private $typeFrequence;

    /**
     * Un bon par mois.
     *
     * @var bool
     */
    private $unBonParMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ad bt bureau distributeur.
     *
     * @return string Returns the ad bt bureau distributeur.
     */
    public function getAdBtBureauDistributeur() {
        return $this->adBtBureauDistributeur;
    }

    /**
     * Get the ad bt civilite.
     *
     * @return string Returns the ad bt civilite.
     */
    public function getAdBtCivilite() {
        return $this->adBtCivilite;
    }

    /**
     * Get the ad bt code pays.
     *
     * @return string Returns the ad bt code pays.
     */
    public function getAdBtCodePays() {
        return $this->adBtCodePays;
    }

    /**
     * Get the ad bt code postal.
     *
     * @return string Returns the ad bt code postal.
     */
    public function getAdBtCodePostal() {
        return $this->adBtCodePostal;
    }

    /**
     * Get the ad bt complement.
     *
     * @return string Returns the ad bt complement.
     */
    public function getAdBtComplement() {
        return $this->adBtComplement;
    }

    /**
     * Get the ad bt nom.
     *
     * @return string Returns the ad bt nom.
     */
    public function getAdBtNom() {
        return $this->adBtNom;
    }

    /**
     * Get the ad bt nom suite.
     *
     * @return string Returns the ad bt nom suite.
     */
    public function getAdBtNomSuite() {
        return $this->adBtNomSuite;
    }

    /**
     * Get the ad bt nom voie.
     *
     * @return string Returns the ad bt nom voie.
     */
    public function getAdBtNomVoie() {
        return $this->adBtNomVoie;
    }

    /**
     * Get the ad bt num voie.
     *
     * @return string Returns the ad bt num voie.
     */
    public function getAdBtNumVoie() {
        return $this->adBtNumVoie;
    }

    /**
     * Get the ad btbtq.
     *
     * @return string Returns the ad btbtq.
     */
    public function getAdBtbtq() {
        return $this->adBtbtq;
    }

    /**
     * Get the ad f bureau distributeur.
     *
     * @return string Returns the ad f bureau distributeur.
     */
    public function getAdFBureauDistributeur() {
        return $this->adFBureauDistributeur;
    }

    /**
     * Get the ad f civilite.
     *
     * @return string Returns the ad f civilite.
     */
    public function getAdFCivilite() {
        return $this->adFCivilite;
    }

    /**
     * Get the ad f code pays.
     *
     * @return string Returns the ad f code pays.
     */
    public function getAdFCodePays() {
        return $this->adFCodePays;
    }

    /**
     * Get the ad f code postal.
     *
     * @return string Returns the ad f code postal.
     */
    public function getAdFCodePostal() {
        return $this->adFCodePostal;
    }

    /**
     * Get the ad f complement.
     *
     * @return string Returns the ad f complement.
     */
    public function getAdFComplement() {
        return $this->adFComplement;
    }

    /**
     * Get the ad f nom.
     *
     * @return string Returns the ad f nom.
     */
    public function getAdFNom() {
        return $this->adFNom;
    }

    /**
     * Get the ad f nom suite.
     *
     * @return string Returns the ad f nom suite.
     */
    public function getAdFNomSuite() {
        return $this->adFNomSuite;
    }

    /**
     * Get the ad f nom suite2.
     *
     * @return string Returns the ad f nom suite2.
     */
    public function getAdFNomSuite2() {
        return $this->adFNomSuite2;
    }

    /**
     * Get the ad f nom suite3.
     *
     * @return string Returns the ad f nom suite3.
     */
    public function getAdFNomSuite3() {
        return $this->adFNomSuite3;
    }

    /**
     * Get the ad f nom voie.
     *
     * @return string Returns the ad f nom voie.
     */
    public function getAdFNomVoie() {
        return $this->adFNomVoie;
    }

    /**
     * Get the ad f num voie.
     *
     * @return string Returns the ad f num voie.
     */
    public function getAdFNumVoie() {
        return $this->adFNumVoie;
    }

    /**
     * Get the ad fbtq.
     *
     * @return string Returns the ad fbtq.
     */
    public function getAdFbtq() {
        return $this->adFbtq;
    }

    /**
     * Get the adresse bt saisie.
     *
     * @return bool Returns the adresse bt saisie.
     */
    public function getAdresseBtSaisie() {
        return $this->adresseBtSaisie;
    }

    /**
     * Get the adresse facturation saisie.
     *
     * @return bool Returns the adresse facturation saisie.
     */
    public function getAdresseFacturationSaisie() {
        return $this->adresseFacturationSaisie;
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
     * Get the code frequence.
     *
     * @return string Returns the code frequence.
     */
    public function getCodeFrequence() {
        return $this->codeFrequence;
    }

    /**
     * Get the code tache bt.
     *
     * @return string Returns the code tache bt.
     */
    public function getCodeTacheBt() {
        return $this->codeTacheBt;
    }

    /**
     * Get the code tournee.
     *
     * @return string Returns the code tournee.
     */
    public function getCodeTournee() {
        return $this->codeTournee;
    }

    /**
     * Get the critere liste1.
     *
     * @return string Returns the critere liste1.
     */
    public function getCritereListe1() {
        return $this->critereListe1;
    }

    /**
     * Get the critere liste2.
     *
     * @return string Returns the critere liste2.
     */
    public function getCritereListe2() {
        return $this->critereListe2;
    }

    /**
     * Get the critere numerique1.
     *
     * @return float Returns the critere numerique1.
     */
    public function getCritereNumerique1() {
        return $this->critereNumerique1;
    }

    /**
     * Get the critere numerique2.
     *
     * @return float Returns the critere numerique2.
     */
    public function getCritereNumerique2() {
        return $this->critereNumerique2;
    }

    /**
     * Get the critere texte1.
     *
     * @return string Returns the critere texte1.
     */
    public function getCritereTexte1() {
        return $this->critereTexte1;
    }

    /**
     * Get the critere texte2.
     *
     * @return string Returns the critere texte2.
     */
    public function getCritereTexte2() {
        return $this->critereTexte2;
    }

    /**
     * Get the date dernier passage.
     *
     * @return DateTime|null Returns the date dernier passage.
     */
    public function getDateDernierPassage() {
        return $this->dateDernierPassage;
    }

    /**
     * Get the date fin validite.
     *
     * @return DateTime|null Returns the date fin validite.
     */
    public function getDateFinValidite() {
        return $this->dateFinValidite;
    }

    /**
     * Get the date premier passage.
     *
     * @return DateTime|null Returns the date premier passage.
     */
    public function getDatePremierPassage() {
        return $this->datePremierPassage;
    }

    /**
     * Get the date validite.
     *
     * @return DateTime|null Returns the date validite.
     */
    public function getDateValidite() {
        return $this->dateValidite;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the equipe.
     *
     * @return string Returns the equipe.
     */
    public function getEquipe() {
        return $this->equipe;
    }

    /**
     * Get the frequence.
     *
     * @return string Returns the frequence.
     */
    public function getFrequence() {
        return $this->frequence;
    }

    /**
     * Get the frequence suite.
     *
     * @return string Returns the frequence suite.
     */
    public function getFrequenceSuite() {
        return $this->frequenceSuite;
    }

    /**
     * Get the gestion planning.
     *
     * @return bool Returns the gestion planning.
     */
    public function getGestionPlanning() {
        return $this->gestionPlanning;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime|null Returns the heure deb.
     */
    public function getHeureDeb() {
        return $this->heureDeb;
    }

    /**
     * Get the latitude.
     *
     * @return float Returns the latitude.
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Get the longitude.
     *
     * @return float Returns the longitude.
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Get the mention speciale.
     *
     * @return string Returns the mention speciale.
     */
    public function getMentionSpeciale() {
        return $this->mentionSpeciale;
    }

    /**
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Get the nb jours.
     *
     * @return float Returns the nb jours.
     */
    public function getNbJours() {
        return $this->nbJours;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the saisie inter jour.
     *
     * @return bool Returns the saisie inter jour.
     */
    public function getSaisieInterJour() {
        return $this->saisieInterJour;
    }

    /**
     * Get the travaille dimanche.
     *
     * @return bool Returns the travaille dimanche.
     */
    public function getTravailleDimanche() {
        return $this->travailleDimanche;
    }

    /**
     * Get the travaille jours feries.
     *
     * @return bool Returns the travaille jours feries.
     */
    public function getTravailleJoursFeries() {
        return $this->travailleJoursFeries;
    }

    /**
     * Get the travaille samedi.
     *
     * @return bool Returns the travaille samedi.
     */
    public function getTravailleSamedi() {
        return $this->travailleSamedi;
    }

    /**
     * Get the type frequence.
     *
     * @return string Returns the type frequence.
     */
    public function getTypeFrequence() {
        return $this->typeFrequence;
    }

    /**
     * Get the un bon par mois.
     *
     * @return bool Returns the un bon par mois.
     */
    public function getUnBonParMois() {
        return $this->unBonParMois;
    }

    /**
     * Set the ad bt bureau distributeur.
     *
     * @param string $adBtBureauDistributeur The ad bt bureau distributeur.
     */
    public function setAdBtBureauDistributeur($adBtBureauDistributeur) {
        $this->adBtBureauDistributeur = $adBtBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad bt civilite.
     *
     * @param string $adBtCivilite The ad bt civilite.
     */
    public function setAdBtCivilite($adBtCivilite) {
        $this->adBtCivilite = $adBtCivilite;
        return $this;
    }

    /**
     * Set the ad bt code pays.
     *
     * @param string $adBtCodePays The ad bt code pays.
     */
    public function setAdBtCodePays($adBtCodePays) {
        $this->adBtCodePays = $adBtCodePays;
        return $this;
    }

    /**
     * Set the ad bt code postal.
     *
     * @param string $adBtCodePostal The ad bt code postal.
     */
    public function setAdBtCodePostal($adBtCodePostal) {
        $this->adBtCodePostal = $adBtCodePostal;
        return $this;
    }

    /**
     * Set the ad bt complement.
     *
     * @param string $adBtComplement The ad bt complement.
     */
    public function setAdBtComplement($adBtComplement) {
        $this->adBtComplement = $adBtComplement;
        return $this;
    }

    /**
     * Set the ad bt nom.
     *
     * @param string $adBtNom The ad bt nom.
     */
    public function setAdBtNom($adBtNom) {
        $this->adBtNom = $adBtNom;
        return $this;
    }

    /**
     * Set the ad bt nom suite.
     *
     * @param string $adBtNomSuite The ad bt nom suite.
     */
    public function setAdBtNomSuite($adBtNomSuite) {
        $this->adBtNomSuite = $adBtNomSuite;
        return $this;
    }

    /**
     * Set the ad bt nom voie.
     *
     * @param string $adBtNomVoie The ad bt nom voie.
     */
    public function setAdBtNomVoie($adBtNomVoie) {
        $this->adBtNomVoie = $adBtNomVoie;
        return $this;
    }

    /**
     * Set the ad bt num voie.
     *
     * @param string $adBtNumVoie The ad bt num voie.
     */
    public function setAdBtNumVoie($adBtNumVoie) {
        $this->adBtNumVoie = $adBtNumVoie;
        return $this;
    }

    /**
     * Set the ad btbtq.
     *
     * @param string $adBtbtq The ad btbtq.
     */
    public function setAdBtbtq($adBtbtq) {
        $this->adBtbtq = $adBtbtq;
        return $this;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string $adFBureauDistributeur The ad f bureau distributeur.
     */
    public function setAdFBureauDistributeur($adFBureauDistributeur) {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string $adFCivilite The ad f civilite.
     */
    public function setAdFCivilite($adFCivilite) {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string $adFCodePays The ad f code pays.
     */
    public function setAdFCodePays($adFCodePays) {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string $adFCodePostal The ad f code postal.
     */
    public function setAdFCodePostal($adFCodePostal) {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string $adFComplement The ad f complement.
     */
    public function setAdFComplement($adFComplement) {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom.
     *
     * @param string $adFNom The ad f nom.
     */
    public function setAdFNom($adFNom) {
        $this->adFNom = $adFNom;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string $adFNomSuite The ad f nom suite.
     */
    public function setAdFNomSuite($adFNomSuite) {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string $adFNomSuite2 The ad f nom suite2.
     */
    public function setAdFNomSuite2($adFNomSuite2) {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string $adFNomSuite3 The ad f nom suite3.
     */
    public function setAdFNomSuite3($adFNomSuite3) {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string $adFNomVoie The ad f nom voie.
     */
    public function setAdFNomVoie($adFNomVoie) {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string $adFNumVoie The ad f num voie.
     */
    public function setAdFNumVoie($adFNumVoie) {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string $adFbtq The ad fbtq.
     */
    public function setAdFbtq($adFbtq) {
        $this->adFbtq = $adFbtq;
        return $this;
    }

    /**
     * Set the adresse bt saisie.
     *
     * @param bool $adresseBtSaisie The adresse bt saisie.
     */
    public function setAdresseBtSaisie($adresseBtSaisie) {
        $this->adresseBtSaisie = $adresseBtSaisie;
        return $this;
    }

    /**
     * Set the adresse facturation saisie.
     *
     * @param bool $adresseFacturationSaisie The adresse facturation saisie.
     */
    public function setAdresseFacturationSaisie($adresseFacturationSaisie) {
        $this->adresseFacturationSaisie = $adresseFacturationSaisie;
        return $this;
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
     * Set the code frequence.
     *
     * @param string $codeFrequence The code frequence.
     */
    public function setCodeFrequence($codeFrequence) {
        $this->codeFrequence = $codeFrequence;
        return $this;
    }

    /**
     * Set the code tache bt.
     *
     * @param string $codeTacheBt The code tache bt.
     */
    public function setCodeTacheBt($codeTacheBt) {
        $this->codeTacheBt = $codeTacheBt;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string $critereListe1 The critere liste1.
     */
    public function setCritereListe1($critereListe1) {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string $critereListe2 The critere liste2.
     */
    public function setCritereListe2($critereListe2) {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the critere numerique1.
     *
     * @param float $critereNumerique1 The critere numerique1.
     */
    public function setCritereNumerique1($critereNumerique1) {
        $this->critereNumerique1 = $critereNumerique1;
        return $this;
    }

    /**
     * Set the critere numerique2.
     *
     * @param float $critereNumerique2 The critere numerique2.
     */
    public function setCritereNumerique2($critereNumerique2) {
        $this->critereNumerique2 = $critereNumerique2;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string $critereTexte1 The critere texte1.
     */
    public function setCritereTexte1($critereTexte1) {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the critere texte2.
     *
     * @param string $critereTexte2 The critere texte2.
     */
    public function setCritereTexte2($critereTexte2) {
        $this->critereTexte2 = $critereTexte2;
        return $this;
    }

    /**
     * Set the date dernier passage.
     *
     * @param DateTime|null $dateDernierPassage The date dernier passage.
     */
    public function setDateDernierPassage(DateTime $dateDernierPassage = null) {
        $this->dateDernierPassage = $dateDernierPassage;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime|null $dateFinValidite The date fin validite.
     */
    public function setDateFinValidite(DateTime $dateFinValidite = null) {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the date premier passage.
     *
     * @param DateTime|null $datePremierPassage The date premier passage.
     */
    public function setDatePremierPassage(DateTime $datePremierPassage = null) {
        $this->datePremierPassage = $datePremierPassage;
        return $this;
    }

    /**
     * Set the date validite.
     *
     * @param DateTime|null $dateValidite The date validite.
     */
    public function setDateValidite(DateTime $dateValidite = null) {
        $this->dateValidite = $dateValidite;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the equipe.
     *
     * @param string $equipe The equipe.
     */
    public function setEquipe($equipe) {
        $this->equipe = $equipe;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the frequence suite.
     *
     * @param string $frequenceSuite The frequence suite.
     */
    public function setFrequenceSuite($frequenceSuite) {
        $this->frequenceSuite = $frequenceSuite;
        return $this;
    }

    /**
     * Set the gestion planning.
     *
     * @param bool $gestionPlanning The gestion planning.
     */
    public function setGestionPlanning($gestionPlanning) {
        $this->gestionPlanning = $gestionPlanning;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime|null $heureDeb The heure deb.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float $latitude The latitude.
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float $longitude The longitude.
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the mention speciale.
     *
     * @param string $mentionSpeciale The mention speciale.
     */
    public function setMentionSpeciale($mentionSpeciale) {
        $this->mentionSpeciale = $mentionSpeciale;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the nb jours.
     *
     * @param float $nbJours The nb jours.
     */
    public function setNbJours($nbJours) {
        $this->nbJours = $nbJours;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the saisie inter jour.
     *
     * @param bool $saisieInterJour The saisie inter jour.
     */
    public function setSaisieInterJour($saisieInterJour) {
        $this->saisieInterJour = $saisieInterJour;
        return $this;
    }

    /**
     * Set the travaille dimanche.
     *
     * @param bool $travailleDimanche The travaille dimanche.
     */
    public function setTravailleDimanche($travailleDimanche) {
        $this->travailleDimanche = $travailleDimanche;
        return $this;
    }

    /**
     * Set the travaille jours feries.
     *
     * @param bool $travailleJoursFeries The travaille jours feries.
     */
    public function setTravailleJoursFeries($travailleJoursFeries) {
        $this->travailleJoursFeries = $travailleJoursFeries;
        return $this;
    }

    /**
     * Set the travaille samedi.
     *
     * @param bool $travailleSamedi The travaille samedi.
     */
    public function setTravailleSamedi($travailleSamedi) {
        $this->travailleSamedi = $travailleSamedi;
        return $this;
    }

    /**
     * Set the type frequence.
     *
     * @param string $typeFrequence The type frequence.
     */
    public function setTypeFrequence($typeFrequence) {
        $this->typeFrequence = $typeFrequence;
        return $this;
    }

    /**
     * Set the un bon par mois.
     *
     * @param bool $unBonParMois The un bon par mois.
     */
    public function setUnBonParMois($unBonParMois) {
        $this->unBonParMois = $unBonParMois;
        return $this;
    }
}
