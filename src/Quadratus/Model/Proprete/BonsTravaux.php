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
 * Bons travaux model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class BonsTravaux {

    /**
     * Ad b t b t q.
     *
     * @var string
     */
    private $adBTBTQ;

    /**
     * Ad b t bureau distributeur.
     *
     * @var string
     */
    private $adBTBureauDistributeur;

    /**
     * Ad b t civilite.
     *
     * @var string
     */
    private $adBTCivilite;

    /**
     * Ad b t code pays.
     *
     * @var string
     */
    private $adBTCodePays;

    /**
     * Ad b t code postal.
     *
     * @var string
     */
    private $adBTCodePostal;

    /**
     * Ad b t complement.
     *
     * @var string
     */
    private $adBTComplement;

    /**
     * Ad b t nom.
     *
     * @var string
     */
    private $adBTNom;

    /**
     * Ad b t nom suite.
     *
     * @var string
     */
    private $adBTNomSuite;

    /**
     * Ad b t nom voie.
     *
     * @var string
     */
    private $adBTNomVoie;

    /**
     * Ad b t num voie.
     *
     * @var string
     */
    private $adBTNumVoie;

    /**
     * Ad f b t q.
     *
     * @var string
     */
    private $adFBTQ;

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
     * Adresse b t saisie.
     *
     * @var boolean
     */
    private $adresseBTSaisie;

    /**
     * Adresse facturation saisie.
     *
     * @var boolean
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
     * Code tache b t.
     *
     * @var string
     */
    private $codeTacheBT;

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
     * @var DateTime
     */
    private $dateDernierPassage;

    /**
     * Date fin validite.
     *
     * @var DateTime
     */
    private $dateFinValidite;

    /**
     * Date premier passage.
     *
     * @var DateTime
     */
    private $datePremierPassage;

    /**
     * Date validite.
     *
     * @var DateTime
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
     * @var boolean
     */
    private $gestionPlanning;

    /**
     * Heure deb.
     *
     * @var DateTime
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
     * Num b t.
     *
     * @var int
     */
    private $numBT;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Saisie inter jour.
     *
     * @var boolean
     */
    private $saisieInterJour;

    /**
     * Travaille dimanche.
     *
     * @var boolean
     */
    private $travailleDimanche;

    /**
     * Travaille jours feries.
     *
     * @var boolean
     */
    private $travailleJoursFeries;

    /**
     * Travaille samedi.
     *
     * @var boolean
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
     * @var boolean
     */
    private $unBonParMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ad b t b t q.
     *
     * @return string Returns the ad b t b t q.
     */
    public function getAdBTBTQ() {
        return $this->adBTBTQ;
    }

    /**
     * Get the ad b t bureau distributeur.
     *
     * @return string Returns the ad b t bureau distributeur.
     */
    public function getAdBTBureauDistributeur() {
        return $this->adBTBureauDistributeur;
    }

    /**
     * Get the ad b t civilite.
     *
     * @return string Returns the ad b t civilite.
     */
    public function getAdBTCivilite() {
        return $this->adBTCivilite;
    }

    /**
     * Get the ad b t code pays.
     *
     * @return string Returns the ad b t code pays.
     */
    public function getAdBTCodePays() {
        return $this->adBTCodePays;
    }

    /**
     * Get the ad b t code postal.
     *
     * @return string Returns the ad b t code postal.
     */
    public function getAdBTCodePostal() {
        return $this->adBTCodePostal;
    }

    /**
     * Get the ad b t complement.
     *
     * @return string Returns the ad b t complement.
     */
    public function getAdBTComplement() {
        return $this->adBTComplement;
    }

    /**
     * Get the ad b t nom.
     *
     * @return string Returns the ad b t nom.
     */
    public function getAdBTNom() {
        return $this->adBTNom;
    }

    /**
     * Get the ad b t nom suite.
     *
     * @return string Returns the ad b t nom suite.
     */
    public function getAdBTNomSuite() {
        return $this->adBTNomSuite;
    }

    /**
     * Get the ad b t nom voie.
     *
     * @return string Returns the ad b t nom voie.
     */
    public function getAdBTNomVoie() {
        return $this->adBTNomVoie;
    }

    /**
     * Get the ad b t num voie.
     *
     * @return string Returns the ad b t num voie.
     */
    public function getAdBTNumVoie() {
        return $this->adBTNumVoie;
    }

    /**
     * Get the ad f b t q.
     *
     * @return string Returns the ad f b t q.
     */
    public function getAdFBTQ() {
        return $this->adFBTQ;
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
     * Get the adresse b t saisie.
     *
     * @return boolean Returns the adresse b t saisie.
     */
    public function getAdresseBTSaisie() {
        return $this->adresseBTSaisie;
    }

    /**
     * Get the adresse facturation saisie.
     *
     * @return boolean Returns the adresse facturation saisie.
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
     * Get the code tache b t.
     *
     * @return string Returns the code tache b t.
     */
    public function getCodeTacheBT() {
        return $this->codeTacheBT;
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
     * @return DateTime Returns the date dernier passage.
     */
    public function getDateDernierPassage() {
        return $this->dateDernierPassage;
    }

    /**
     * Get the date fin validite.
     *
     * @return DateTime Returns the date fin validite.
     */
    public function getDateFinValidite() {
        return $this->dateFinValidite;
    }

    /**
     * Get the date premier passage.
     *
     * @return DateTime Returns the date premier passage.
     */
    public function getDatePremierPassage() {
        return $this->datePremierPassage;
    }

    /**
     * Get the date validite.
     *
     * @return DateTime Returns the date validite.
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
     * @return boolean Returns the gestion planning.
     */
    public function getGestionPlanning() {
        return $this->gestionPlanning;
    }

    /**
     * Get the heure deb.
     *
     * @return DateTime Returns the heure deb.
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
     * Get the num b t.
     *
     * @return int Returns the num b t.
     */
    public function getNumBT() {
        return $this->numBT;
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
     * @return boolean Returns the saisie inter jour.
     */
    public function getSaisieInterJour() {
        return $this->saisieInterJour;
    }

    /**
     * Get the travaille dimanche.
     *
     * @return boolean Returns the travaille dimanche.
     */
    public function getTravailleDimanche() {
        return $this->travailleDimanche;
    }

    /**
     * Get the travaille jours feries.
     *
     * @return boolean Returns the travaille jours feries.
     */
    public function getTravailleJoursFeries() {
        return $this->travailleJoursFeries;
    }

    /**
     * Get the travaille samedi.
     *
     * @return boolean Returns the travaille samedi.
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
     * @return boolean Returns the un bon par mois.
     */
    public function getUnBonParMois() {
        return $this->unBonParMois;
    }

    /**
     * Set the ad b t b t q.
     *
     * @param string $adBTBTQ The ad b t b t q.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTBTQ($adBTBTQ) {
        $this->adBTBTQ = $adBTBTQ;
        return $this;
    }

    /**
     * Set the ad b t bureau distributeur.
     *
     * @param string $adBTBureauDistributeur The ad b t bureau distributeur.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTBureauDistributeur($adBTBureauDistributeur) {
        $this->adBTBureauDistributeur = $adBTBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad b t civilite.
     *
     * @param string $adBTCivilite The ad b t civilite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTCivilite($adBTCivilite) {
        $this->adBTCivilite = $adBTCivilite;
        return $this;
    }

    /**
     * Set the ad b t code pays.
     *
     * @param string $adBTCodePays The ad b t code pays.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTCodePays($adBTCodePays) {
        $this->adBTCodePays = $adBTCodePays;
        return $this;
    }

    /**
     * Set the ad b t code postal.
     *
     * @param string $adBTCodePostal The ad b t code postal.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTCodePostal($adBTCodePostal) {
        $this->adBTCodePostal = $adBTCodePostal;
        return $this;
    }

    /**
     * Set the ad b t complement.
     *
     * @param string $adBTComplement The ad b t complement.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTComplement($adBTComplement) {
        $this->adBTComplement = $adBTComplement;
        return $this;
    }

    /**
     * Set the ad b t nom.
     *
     * @param string $adBTNom The ad b t nom.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTNom($adBTNom) {
        $this->adBTNom = $adBTNom;
        return $this;
    }

    /**
     * Set the ad b t nom suite.
     *
     * @param string $adBTNomSuite The ad b t nom suite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTNomSuite($adBTNomSuite) {
        $this->adBTNomSuite = $adBTNomSuite;
        return $this;
    }

    /**
     * Set the ad b t nom voie.
     *
     * @param string $adBTNomVoie The ad b t nom voie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTNomVoie($adBTNomVoie) {
        $this->adBTNomVoie = $adBTNomVoie;
        return $this;
    }

    /**
     * Set the ad b t num voie.
     *
     * @param string $adBTNumVoie The ad b t num voie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdBTNumVoie($adBTNumVoie) {
        $this->adBTNumVoie = $adBTNumVoie;
        return $this;
    }

    /**
     * Set the ad f b t q.
     *
     * @param string $adFBTQ The ad f b t q.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFBTQ($adFBTQ) {
        $this->adFBTQ = $adFBTQ;
        return $this;
    }

    /**
     * Set the ad f bureau distributeur.
     *
     * @param string $adFBureauDistributeur The ad f bureau distributeur.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFBureauDistributeur($adFBureauDistributeur) {
        $this->adFBureauDistributeur = $adFBureauDistributeur;
        return $this;
    }

    /**
     * Set the ad f civilite.
     *
     * @param string $adFCivilite The ad f civilite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFCivilite($adFCivilite) {
        $this->adFCivilite = $adFCivilite;
        return $this;
    }

    /**
     * Set the ad f code pays.
     *
     * @param string $adFCodePays The ad f code pays.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFCodePays($adFCodePays) {
        $this->adFCodePays = $adFCodePays;
        return $this;
    }

    /**
     * Set the ad f code postal.
     *
     * @param string $adFCodePostal The ad f code postal.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFCodePostal($adFCodePostal) {
        $this->adFCodePostal = $adFCodePostal;
        return $this;
    }

    /**
     * Set the ad f complement.
     *
     * @param string $adFComplement The ad f complement.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFComplement($adFComplement) {
        $this->adFComplement = $adFComplement;
        return $this;
    }

    /**
     * Set the ad f nom.
     *
     * @param string $adFNom The ad f nom.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNom($adFNom) {
        $this->adFNom = $adFNom;
        return $this;
    }

    /**
     * Set the ad f nom suite.
     *
     * @param string $adFNomSuite The ad f nom suite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNomSuite($adFNomSuite) {
        $this->adFNomSuite = $adFNomSuite;
        return $this;
    }

    /**
     * Set the ad f nom suite2.
     *
     * @param string $adFNomSuite2 The ad f nom suite2.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNomSuite2($adFNomSuite2) {
        $this->adFNomSuite2 = $adFNomSuite2;
        return $this;
    }

    /**
     * Set the ad f nom suite3.
     *
     * @param string $adFNomSuite3 The ad f nom suite3.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNomSuite3($adFNomSuite3) {
        $this->adFNomSuite3 = $adFNomSuite3;
        return $this;
    }

    /**
     * Set the ad f nom voie.
     *
     * @param string $adFNomVoie The ad f nom voie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNomVoie($adFNomVoie) {
        $this->adFNomVoie = $adFNomVoie;
        return $this;
    }

    /**
     * Set the ad f num voie.
     *
     * @param string $adFNumVoie The ad f num voie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdFNumVoie($adFNumVoie) {
        $this->adFNumVoie = $adFNumVoie;
        return $this;
    }

    /**
     * Set the adresse b t saisie.
     *
     * @param boolean $adresseBTSaisie The adresse b t saisie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdresseBTSaisie($adresseBTSaisie) {
        $this->adresseBTSaisie = $adresseBTSaisie;
        return $this;
    }

    /**
     * Set the adresse facturation saisie.
     *
     * @param boolean $adresseFacturationSaisie The adresse facturation saisie.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setAdresseFacturationSaisie($adresseFacturationSaisie) {
        $this->adresseFacturationSaisie = $adresseFacturationSaisie;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code frequence.
     *
     * @param string $codeFrequence The code frequence.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeFrequence($codeFrequence) {
        $this->codeFrequence = $codeFrequence;
        return $this;
    }

    /**
     * Set the code tache b t.
     *
     * @param string $codeTacheBT The code tache b t.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeTacheBT($codeTacheBT) {
        $this->codeTacheBT = $codeTacheBT;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the critere liste1.
     *
     * @param string $critereListe1 The critere liste1.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereListe1($critereListe1) {
        $this->critereListe1 = $critereListe1;
        return $this;
    }

    /**
     * Set the critere liste2.
     *
     * @param string $critereListe2 The critere liste2.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereListe2($critereListe2) {
        $this->critereListe2 = $critereListe2;
        return $this;
    }

    /**
     * Set the critere numerique1.
     *
     * @param float $critereNumerique1 The critere numerique1.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereNumerique1($critereNumerique1) {
        $this->critereNumerique1 = $critereNumerique1;
        return $this;
    }

    /**
     * Set the critere numerique2.
     *
     * @param float $critereNumerique2 The critere numerique2.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereNumerique2($critereNumerique2) {
        $this->critereNumerique2 = $critereNumerique2;
        return $this;
    }

    /**
     * Set the critere texte1.
     *
     * @param string $critereTexte1 The critere texte1.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereTexte1($critereTexte1) {
        $this->critereTexte1 = $critereTexte1;
        return $this;
    }

    /**
     * Set the critere texte2.
     *
     * @param string $critereTexte2 The critere texte2.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setCritereTexte2($critereTexte2) {
        $this->critereTexte2 = $critereTexte2;
        return $this;
    }

    /**
     * Set the date dernier passage.
     *
     * @param DateTime $dateDernierPassage The date dernier passage.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setDateDernierPassage(DateTime $dateDernierPassage = null) {
        $this->dateDernierPassage = $dateDernierPassage;
        return $this;
    }

    /**
     * Set the date fin validite.
     *
     * @param DateTime $dateFinValidite The date fin validite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setDateFinValidite(DateTime $dateFinValidite = null) {
        $this->dateFinValidite = $dateFinValidite;
        return $this;
    }

    /**
     * Set the date premier passage.
     *
     * @param DateTime $datePremierPassage The date premier passage.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setDatePremierPassage(DateTime $datePremierPassage = null) {
        $this->datePremierPassage = $datePremierPassage;
        return $this;
    }

    /**
     * Set the date validite.
     *
     * @param DateTime $dateValidite The date validite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setDateValidite(DateTime $dateValidite = null) {
        $this->dateValidite = $dateValidite;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the equipe.
     *
     * @param string $equipe The equipe.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setEquipe($equipe) {
        $this->equipe = $equipe;
        return $this;
    }

    /**
     * Set the frequence.
     *
     * @param string $frequence The frequence.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setFrequence($frequence) {
        $this->frequence = $frequence;
        return $this;
    }

    /**
     * Set the frequence suite.
     *
     * @param string $frequenceSuite The frequence suite.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setFrequenceSuite($frequenceSuite) {
        $this->frequenceSuite = $frequenceSuite;
        return $this;
    }

    /**
     * Set the gestion planning.
     *
     * @param boolean $gestionPlanning The gestion planning.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setGestionPlanning($gestionPlanning) {
        $this->gestionPlanning = $gestionPlanning;
        return $this;
    }

    /**
     * Set the heure deb.
     *
     * @param DateTime $heureDeb The heure deb.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setHeureDeb(DateTime $heureDeb = null) {
        $this->heureDeb = $heureDeb;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param float $latitude The latitude.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param float $longitude The longitude.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the mention speciale.
     *
     * @param string $mentionSpeciale The mention speciale.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setMentionSpeciale($mentionSpeciale) {
        $this->mentionSpeciale = $mentionSpeciale;
        return $this;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }

    /**
     * Set the nb jours.
     *
     * @param float $nbJours The nb jours.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setNbJours($nbJours) {
        $this->nbJours = $nbJours;
        return $this;
    }

    /**
     * Set the num b t.
     *
     * @param int $numBT The num b t.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setNumBT($numBT) {
        $this->numBT = $numBT;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the saisie inter jour.
     *
     * @param boolean $saisieInterJour The saisie inter jour.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setSaisieInterJour($saisieInterJour) {
        $this->saisieInterJour = $saisieInterJour;
        return $this;
    }

    /**
     * Set the travaille dimanche.
     *
     * @param boolean $travailleDimanche The travaille dimanche.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setTravailleDimanche($travailleDimanche) {
        $this->travailleDimanche = $travailleDimanche;
        return $this;
    }

    /**
     * Set the travaille jours feries.
     *
     * @param boolean $travailleJoursFeries The travaille jours feries.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setTravailleJoursFeries($travailleJoursFeries) {
        $this->travailleJoursFeries = $travailleJoursFeries;
        return $this;
    }

    /**
     * Set the travaille samedi.
     *
     * @param boolean $travailleSamedi The travaille samedi.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setTravailleSamedi($travailleSamedi) {
        $this->travailleSamedi = $travailleSamedi;
        return $this;
    }

    /**
     * Set the type frequence.
     *
     * @param string $typeFrequence The type frequence.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setTypeFrequence($typeFrequence) {
        $this->typeFrequence = $typeFrequence;
        return $this;
    }

    /**
     * Set the un bon par mois.
     *
     * @param boolean $unBonParMois The un bon par mois.
     * @return BonsTravaux Returns this bons travaux.
     */
    public function setUnBonParMois($unBonParMois) {
        $this->unBonParMois = $unBonParMois;
        return $this;
    }

}
