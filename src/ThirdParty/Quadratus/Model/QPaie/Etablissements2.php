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
 * Etablissements2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Etablissements2 {

    /**
     * Adherent syndicat.
     *
     * @var bool
     */
    private $adherentSyndicat;

    /**
     * Annee chgt effectif.
     *
     * @var string
     */
    private $anneeChgtEffectif;

    /**
     * Annee jei.
     *
     * @var int
     */
    private $anneeJei;

    /**
     * Assujetti cvae.
     *
     * @var bool
     */
    private $assujettiCvae;

    /**
     * Autre signature dnae.
     *
     * @var string
     */
    private $autreSignatureDnae;

    /**
     * Bic2.
     *
     * @var string
     */
    private $bic2;

    /**
     * Bic3.
     *
     * @var string
     */
    private $bic3;

    /**
     * Caisse cp transport.
     *
     * @var bool
     */
    private $caisseCpTransport;

    /**
     * Categorie juridique.
     *
     * @var string
     */
    private $categorieJuridique;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code med trav due.
     *
     * @var string
     */
    private $codeMedTravDue;

    /**
     * Code orga due.
     *
     * @var string
     */
    private $codeOrgaDue;

    /**
     * Coeff fillon moins20.
     *
     * @var bool
     */
    private $coeffFillonMoins20;

    /**
     * Compte charge heures act part.
     *
     * @var string
     */
    private $compteChargeHeuresActPart;

    /**
     * Compte charge indem abs intemp.
     *
     * @var string
     */
    private $compteChargeIndemAbsIntemp;

    /**
     * Compte charge indem act part.
     *
     * @var string
     */
    private $compteChargeIndemActPart;

    /**
     * Compte charge int vers.
     *
     * @var string
     */
    private $compteChargeIntVers;

    /**
     * Compte charge part vers.
     *
     * @var string
     */
    private $compteChargePartVers;

    /**
     * Contact signature dnae.
     *
     * @var string
     */
    private $contactSignatureDnae;

    /**
     * Date fin exclure lfr2012.
     *
     * @var DateTime|null
     */
    private $dateFinExclureLfr2012;

    /**
     * Exclure lfr2012.
     *
     * @var bool
     */
    private $exclureLfr2012;

    /**
     * Gestion hstepa.
     *
     * @var string
     */
    private $gestionHstepa;

    /**
     * Gestion maintien sal auto.
     *
     * @var bool
     */
    private $gestionMaintienSalAuto;

    /**
     * Iban2.
     *
     * @var string
     */
    private $iban2;

    /**
     * Iban3.
     *
     * @var string
     */
    private $iban3;

    /**
     * Iban id client2.
     *
     * @var string
     */
    private $ibanIdClient2;

    /**
     * Iban id client3.
     *
     * @var string
     */
    private $ibanIdClient3;

    /**
     * Implantation entreprise.
     *
     * @var string
     */
    private $implantationEntreprise;

    /**
     * Jf charge emp.
     *
     * @var bool
     */
    private $jfChargeEmp;

    /**
     * Lieu signature dnae.
     *
     * @var string
     */
    private $lieuSignatureDnae;

    /**
     * Maintien net deduc csgijss.
     *
     * @var bool
     */
    private $maintienNetDeducCsgijss;

    /**
     * Nb fraction etab.
     *
     * @var int
     */
    private $nbFractionEtab;

    /**
     * Nom signataire dnae.
     *
     * @var string
     */
    private $nomSignataireDnae;

    /**
     * Prenom signataire dnae.
     *
     * @var string
     */
    private $prenomSignataireDnae;

    /**
     * Pseudo siret.
     *
     * @var string
     */
    private $pseudoSiret;

    /**
     * Qualite signataire dnae.
     *
     * @var string
     */
    private $qualiteSignataireDnae;

    /**
     * Reduction mayotte.
     *
     * @var bool
     */
    private $reductionMayotte;

    /**
     * Remuneration expatries.
     *
     * @var string
     */
    private $remunerationExpatries;

    /**
     * Siret centralisateur.
     *
     * @var bool
     */
    private $siretCentralisateur;

    /**
     * Smic m courant.
     *
     * @var bool
     */
    private $smicMCourant;

    /**
     * Societe interim.
     *
     * @var bool
     */
    private $societeInterim;

    /**
     * Taux compl heure.
     *
     * @var float
     */
    private $tauxComplHeure;

    /**
     * Taux cotis oss et ope.
     *
     * @var float
     */
    private $tauxCotisOssEtOpe;

    /**
     * Taux h comp.
     *
     * @var float
     */
    private $tauxHComp;

    /**
     * Tds19.
     *
     * @var string
     */
    private $tds19;

    /**
     * Tel signature dnae.
     *
     * @var string
     */
    private $telSignatureDnae;

    /**
     * Tepa moins20.
     *
     * @var bool
     */
    private $tepaMoins20;

    /**
     * Type effectif ct.
     *
     * @var string
     */
    private $typeEffectifCt;

    /**
     * Type maintien brut net.
     *
     * @var string
     */
    private $typeMaintienBrutNet;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adherent syndicat.
     *
     * @return bool Returns the adherent syndicat.
     */
    public function getAdherentSyndicat() {
        return $this->adherentSyndicat;
    }

    /**
     * Get the annee chgt effectif.
     *
     * @return string Returns the annee chgt effectif.
     */
    public function getAnneeChgtEffectif() {
        return $this->anneeChgtEffectif;
    }

    /**
     * Get the annee jei.
     *
     * @return int Returns the annee jei.
     */
    public function getAnneeJei() {
        return $this->anneeJei;
    }

    /**
     * Get the assujetti cvae.
     *
     * @return bool Returns the assujetti cvae.
     */
    public function getAssujettiCvae() {
        return $this->assujettiCvae;
    }

    /**
     * Get the autre signature dnae.
     *
     * @return string Returns the autre signature dnae.
     */
    public function getAutreSignatureDnae() {
        return $this->autreSignatureDnae;
    }

    /**
     * Get the bic2.
     *
     * @return string Returns the bic2.
     */
    public function getBic2() {
        return $this->bic2;
    }

    /**
     * Get the bic3.
     *
     * @return string Returns the bic3.
     */
    public function getBic3() {
        return $this->bic3;
    }

    /**
     * Get the caisse cp transport.
     *
     * @return bool Returns the caisse cp transport.
     */
    public function getCaisseCpTransport() {
        return $this->caisseCpTransport;
    }

    /**
     * Get the categorie juridique.
     *
     * @return string Returns the categorie juridique.
     */
    public function getCategorieJuridique() {
        return $this->categorieJuridique;
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
     * Get the code med trav due.
     *
     * @return string Returns the code med trav due.
     */
    public function getCodeMedTravDue() {
        return $this->codeMedTravDue;
    }

    /**
     * Get the code orga due.
     *
     * @return string Returns the code orga due.
     */
    public function getCodeOrgaDue() {
        return $this->codeOrgaDue;
    }

    /**
     * Get the coeff fillon moins20.
     *
     * @return bool Returns the coeff fillon moins20.
     */
    public function getCoeffFillonMoins20() {
        return $this->coeffFillonMoins20;
    }

    /**
     * Get the compte charge heures act part.
     *
     * @return string Returns the compte charge heures act part.
     */
    public function getCompteChargeHeuresActPart() {
        return $this->compteChargeHeuresActPart;
    }

    /**
     * Get the compte charge indem abs intemp.
     *
     * @return string Returns the compte charge indem abs intemp.
     */
    public function getCompteChargeIndemAbsIntemp() {
        return $this->compteChargeIndemAbsIntemp;
    }

    /**
     * Get the compte charge indem act part.
     *
     * @return string Returns the compte charge indem act part.
     */
    public function getCompteChargeIndemActPart() {
        return $this->compteChargeIndemActPart;
    }

    /**
     * Get the compte charge int vers.
     *
     * @return string Returns the compte charge int vers.
     */
    public function getCompteChargeIntVers() {
        return $this->compteChargeIntVers;
    }

    /**
     * Get the compte charge part vers.
     *
     * @return string Returns the compte charge part vers.
     */
    public function getCompteChargePartVers() {
        return $this->compteChargePartVers;
    }

    /**
     * Get the contact signature dnae.
     *
     * @return string Returns the contact signature dnae.
     */
    public function getContactSignatureDnae() {
        return $this->contactSignatureDnae;
    }

    /**
     * Get the date fin exclure lfr2012.
     *
     * @return DateTime|null Returns the date fin exclure lfr2012.
     */
    public function getDateFinExclureLfr2012() {
        return $this->dateFinExclureLfr2012;
    }

    /**
     * Get the exclure lfr2012.
     *
     * @return bool Returns the exclure lfr2012.
     */
    public function getExclureLfr2012() {
        return $this->exclureLfr2012;
    }

    /**
     * Get the gestion hstepa.
     *
     * @return string Returns the gestion hstepa.
     */
    public function getGestionHstepa() {
        return $this->gestionHstepa;
    }

    /**
     * Get the gestion maintien sal auto.
     *
     * @return bool Returns the gestion maintien sal auto.
     */
    public function getGestionMaintienSalAuto() {
        return $this->gestionMaintienSalAuto;
    }

    /**
     * Get the iban2.
     *
     * @return string Returns the iban2.
     */
    public function getIban2() {
        return $this->iban2;
    }

    /**
     * Get the iban3.
     *
     * @return string Returns the iban3.
     */
    public function getIban3() {
        return $this->iban3;
    }

    /**
     * Get the iban id client2.
     *
     * @return string Returns the iban id client2.
     */
    public function getIbanIdClient2() {
        return $this->ibanIdClient2;
    }

    /**
     * Get the iban id client3.
     *
     * @return string Returns the iban id client3.
     */
    public function getIbanIdClient3() {
        return $this->ibanIdClient3;
    }

    /**
     * Get the implantation entreprise.
     *
     * @return string Returns the implantation entreprise.
     */
    public function getImplantationEntreprise() {
        return $this->implantationEntreprise;
    }

    /**
     * Get the jf charge emp.
     *
     * @return bool Returns the jf charge emp.
     */
    public function getJfChargeEmp() {
        return $this->jfChargeEmp;
    }

    /**
     * Get the lieu signature dnae.
     *
     * @return string Returns the lieu signature dnae.
     */
    public function getLieuSignatureDnae() {
        return $this->lieuSignatureDnae;
    }

    /**
     * Get the maintien net deduc csgijss.
     *
     * @return bool Returns the maintien net deduc csgijss.
     */
    public function getMaintienNetDeducCsgijss() {
        return $this->maintienNetDeducCsgijss;
    }

    /**
     * Get the nb fraction etab.
     *
     * @return int Returns the nb fraction etab.
     */
    public function getNbFractionEtab() {
        return $this->nbFractionEtab;
    }

    /**
     * Get the nom signataire dnae.
     *
     * @return string Returns the nom signataire dnae.
     */
    public function getNomSignataireDnae() {
        return $this->nomSignataireDnae;
    }

    /**
     * Get the prenom signataire dnae.
     *
     * @return string Returns the prenom signataire dnae.
     */
    public function getPrenomSignataireDnae() {
        return $this->prenomSignataireDnae;
    }

    /**
     * Get the pseudo siret.
     *
     * @return string Returns the pseudo siret.
     */
    public function getPseudoSiret() {
        return $this->pseudoSiret;
    }

    /**
     * Get the qualite signataire dnae.
     *
     * @return string Returns the qualite signataire dnae.
     */
    public function getQualiteSignataireDnae() {
        return $this->qualiteSignataireDnae;
    }

    /**
     * Get the reduction mayotte.
     *
     * @return bool Returns the reduction mayotte.
     */
    public function getReductionMayotte() {
        return $this->reductionMayotte;
    }

    /**
     * Get the remuneration expatries.
     *
     * @return string Returns the remuneration expatries.
     */
    public function getRemunerationExpatries() {
        return $this->remunerationExpatries;
    }

    /**
     * Get the siret centralisateur.
     *
     * @return bool Returns the siret centralisateur.
     */
    public function getSiretCentralisateur() {
        return $this->siretCentralisateur;
    }

    /**
     * Get the smic m courant.
     *
     * @return bool Returns the smic m courant.
     */
    public function getSmicMCourant() {
        return $this->smicMCourant;
    }

    /**
     * Get the societe interim.
     *
     * @return bool Returns the societe interim.
     */
    public function getSocieteInterim() {
        return $this->societeInterim;
    }

    /**
     * Get the taux compl heure.
     *
     * @return float Returns the taux compl heure.
     */
    public function getTauxComplHeure() {
        return $this->tauxComplHeure;
    }

    /**
     * Get the taux cotis oss et ope.
     *
     * @return float Returns the taux cotis oss et ope.
     */
    public function getTauxCotisOssEtOpe() {
        return $this->tauxCotisOssEtOpe;
    }

    /**
     * Get the taux h comp.
     *
     * @return float Returns the taux h comp.
     */
    public function getTauxHComp() {
        return $this->tauxHComp;
    }

    /**
     * Get the tds19.
     *
     * @return string Returns the tds19.
     */
    public function getTds19() {
        return $this->tds19;
    }

    /**
     * Get the tel signature dnae.
     *
     * @return string Returns the tel signature dnae.
     */
    public function getTelSignatureDnae() {
        return $this->telSignatureDnae;
    }

    /**
     * Get the tepa moins20.
     *
     * @return bool Returns the tepa moins20.
     */
    public function getTepaMoins20() {
        return $this->tepaMoins20;
    }

    /**
     * Get the type effectif ct.
     *
     * @return string Returns the type effectif ct.
     */
    public function getTypeEffectifCt() {
        return $this->typeEffectifCt;
    }

    /**
     * Get the type maintien brut net.
     *
     * @return string Returns the type maintien brut net.
     */
    public function getTypeMaintienBrutNet() {
        return $this->typeMaintienBrutNet;
    }

    /**
     * Set the adherent syndicat.
     *
     * @param bool $adherentSyndicat The adherent syndicat.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAdherentSyndicat($adherentSyndicat) {
        $this->adherentSyndicat = $adherentSyndicat;
        return $this;
    }

    /**
     * Set the annee chgt effectif.
     *
     * @param string $anneeChgtEffectif The annee chgt effectif.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAnneeChgtEffectif($anneeChgtEffectif) {
        $this->anneeChgtEffectif = $anneeChgtEffectif;
        return $this;
    }

    /**
     * Set the annee jei.
     *
     * @param int $anneeJei The annee jei.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAnneeJei($anneeJei) {
        $this->anneeJei = $anneeJei;
        return $this;
    }

    /**
     * Set the assujetti cvae.
     *
     * @param bool $assujettiCvae The assujetti cvae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAssujettiCvae($assujettiCvae) {
        $this->assujettiCvae = $assujettiCvae;
        return $this;
    }

    /**
     * Set the autre signature dnae.
     *
     * @param string $autreSignatureDnae The autre signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setAutreSignatureDnae($autreSignatureDnae) {
        $this->autreSignatureDnae = $autreSignatureDnae;
        return $this;
    }

    /**
     * Set the bic2.
     *
     * @param string $bic2 The bic2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setBic2($bic2) {
        $this->bic2 = $bic2;
        return $this;
    }

    /**
     * Set the bic3.
     *
     * @param string $bic3 The bic3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setBic3($bic3) {
        $this->bic3 = $bic3;
        return $this;
    }

    /**
     * Set the caisse cp transport.
     *
     * @param bool $caisseCpTransport The caisse cp transport.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCaisseCpTransport($caisseCpTransport) {
        $this->caisseCpTransport = $caisseCpTransport;
        return $this;
    }

    /**
     * Set the categorie juridique.
     *
     * @param string $categorieJuridique The categorie juridique.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCategorieJuridique($categorieJuridique) {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code med trav due.
     *
     * @param string $codeMedTravDue The code med trav due.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeMedTravDue($codeMedTravDue) {
        $this->codeMedTravDue = $codeMedTravDue;
        return $this;
    }

    /**
     * Set the code orga due.
     *
     * @param string $codeOrgaDue The code orga due.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCodeOrgaDue($codeOrgaDue) {
        $this->codeOrgaDue = $codeOrgaDue;
        return $this;
    }

    /**
     * Set the coeff fillon moins20.
     *
     * @param bool $coeffFillonMoins20 The coeff fillon moins20.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCoeffFillonMoins20($coeffFillonMoins20) {
        $this->coeffFillonMoins20 = $coeffFillonMoins20;
        return $this;
    }

    /**
     * Set the compte charge heures act part.
     *
     * @param string $compteChargeHeuresActPart The compte charge heures act part.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeHeuresActPart($compteChargeHeuresActPart) {
        $this->compteChargeHeuresActPart = $compteChargeHeuresActPart;
        return $this;
    }

    /**
     * Set the compte charge indem abs intemp.
     *
     * @param string $compteChargeIndemAbsIntemp The compte charge indem abs intemp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIndemAbsIntemp($compteChargeIndemAbsIntemp) {
        $this->compteChargeIndemAbsIntemp = $compteChargeIndemAbsIntemp;
        return $this;
    }

    /**
     * Set the compte charge indem act part.
     *
     * @param string $compteChargeIndemActPart The compte charge indem act part.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIndemActPart($compteChargeIndemActPart) {
        $this->compteChargeIndemActPart = $compteChargeIndemActPart;
        return $this;
    }

    /**
     * Set the compte charge int vers.
     *
     * @param string $compteChargeIntVers The compte charge int vers.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargeIntVers($compteChargeIntVers) {
        $this->compteChargeIntVers = $compteChargeIntVers;
        return $this;
    }

    /**
     * Set the compte charge part vers.
     *
     * @param string $compteChargePartVers The compte charge part vers.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setCompteChargePartVers($compteChargePartVers) {
        $this->compteChargePartVers = $compteChargePartVers;
        return $this;
    }

    /**
     * Set the contact signature dnae.
     *
     * @param string $contactSignatureDnae The contact signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setContactSignatureDnae($contactSignatureDnae) {
        $this->contactSignatureDnae = $contactSignatureDnae;
        return $this;
    }

    /**
     * Set the date fin exclure lfr2012.
     *
     * @param DateTime|null $dateFinExclureLfr2012 The date fin exclure lfr2012.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setDateFinExclureLfr2012(DateTime $dateFinExclureLfr2012 = null) {
        $this->dateFinExclureLfr2012 = $dateFinExclureLfr2012;
        return $this;
    }

    /**
     * Set the exclure lfr2012.
     *
     * @param bool $exclureLfr2012 The exclure lfr2012.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setExclureLfr2012($exclureLfr2012) {
        $this->exclureLfr2012 = $exclureLfr2012;
        return $this;
    }

    /**
     * Set the gestion hstepa.
     *
     * @param string $gestionHstepa The gestion hstepa.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setGestionHstepa($gestionHstepa) {
        $this->gestionHstepa = $gestionHstepa;
        return $this;
    }

    /**
     * Set the gestion maintien sal auto.
     *
     * @param bool $gestionMaintienSalAuto The gestion maintien sal auto.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setGestionMaintienSalAuto($gestionMaintienSalAuto) {
        $this->gestionMaintienSalAuto = $gestionMaintienSalAuto;
        return $this;
    }

    /**
     * Set the iban2.
     *
     * @param string $iban2 The iban2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIban2($iban2) {
        $this->iban2 = $iban2;
        return $this;
    }

    /**
     * Set the iban3.
     *
     * @param string $iban3 The iban3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIban3($iban3) {
        $this->iban3 = $iban3;
        return $this;
    }

    /**
     * Set the iban id client2.
     *
     * @param string $ibanIdClient2 The iban id client2.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIbanIdClient2($ibanIdClient2) {
        $this->ibanIdClient2 = $ibanIdClient2;
        return $this;
    }

    /**
     * Set the iban id client3.
     *
     * @param string $ibanIdClient3 The iban id client3.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setIbanIdClient3($ibanIdClient3) {
        $this->ibanIdClient3 = $ibanIdClient3;
        return $this;
    }

    /**
     * Set the implantation entreprise.
     *
     * @param string $implantationEntreprise The implantation entreprise.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setImplantationEntreprise($implantationEntreprise) {
        $this->implantationEntreprise = $implantationEntreprise;
        return $this;
    }

    /**
     * Set the jf charge emp.
     *
     * @param bool $jfChargeEmp The jf charge emp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setJfChargeEmp($jfChargeEmp) {
        $this->jfChargeEmp = $jfChargeEmp;
        return $this;
    }

    /**
     * Set the lieu signature dnae.
     *
     * @param string $lieuSignatureDnae The lieu signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setLieuSignatureDnae($lieuSignatureDnae) {
        $this->lieuSignatureDnae = $lieuSignatureDnae;
        return $this;
    }

    /**
     * Set the maintien net deduc csgijss.
     *
     * @param bool $maintienNetDeducCsgijss The maintien net deduc csgijss.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setMaintienNetDeducCsgijss($maintienNetDeducCsgijss) {
        $this->maintienNetDeducCsgijss = $maintienNetDeducCsgijss;
        return $this;
    }

    /**
     * Set the nb fraction etab.
     *
     * @param int $nbFractionEtab The nb fraction etab.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setNbFractionEtab($nbFractionEtab) {
        $this->nbFractionEtab = $nbFractionEtab;
        return $this;
    }

    /**
     * Set the nom signataire dnae.
     *
     * @param string $nomSignataireDnae The nom signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setNomSignataireDnae($nomSignataireDnae) {
        $this->nomSignataireDnae = $nomSignataireDnae;
        return $this;
    }

    /**
     * Set the prenom signataire dnae.
     *
     * @param string $prenomSignataireDnae The prenom signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setPrenomSignataireDnae($prenomSignataireDnae) {
        $this->prenomSignataireDnae = $prenomSignataireDnae;
        return $this;
    }

    /**
     * Set the pseudo siret.
     *
     * @param string $pseudoSiret The pseudo siret.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setPseudoSiret($pseudoSiret) {
        $this->pseudoSiret = $pseudoSiret;
        return $this;
    }

    /**
     * Set the qualite signataire dnae.
     *
     * @param string $qualiteSignataireDnae The qualite signataire dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setQualiteSignataireDnae($qualiteSignataireDnae) {
        $this->qualiteSignataireDnae = $qualiteSignataireDnae;
        return $this;
    }

    /**
     * Set the reduction mayotte.
     *
     * @param bool $reductionMayotte The reduction mayotte.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setReductionMayotte($reductionMayotte) {
        $this->reductionMayotte = $reductionMayotte;
        return $this;
    }

    /**
     * Set the remuneration expatries.
     *
     * @param string $remunerationExpatries The remuneration expatries.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setRemunerationExpatries($remunerationExpatries) {
        $this->remunerationExpatries = $remunerationExpatries;
        return $this;
    }

    /**
     * Set the siret centralisateur.
     *
     * @param bool $siretCentralisateur The siret centralisateur.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSiretCentralisateur($siretCentralisateur) {
        $this->siretCentralisateur = $siretCentralisateur;
        return $this;
    }

    /**
     * Set the smic m courant.
     *
     * @param bool $smicMCourant The smic m courant.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSmicMCourant($smicMCourant) {
        $this->smicMCourant = $smicMCourant;
        return $this;
    }

    /**
     * Set the societe interim.
     *
     * @param bool $societeInterim The societe interim.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setSocieteInterim($societeInterim) {
        $this->societeInterim = $societeInterim;
        return $this;
    }

    /**
     * Set the taux compl heure.
     *
     * @param float $tauxComplHeure The taux compl heure.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxComplHeure($tauxComplHeure) {
        $this->tauxComplHeure = $tauxComplHeure;
        return $this;
    }

    /**
     * Set the taux cotis oss et ope.
     *
     * @param float $tauxCotisOssEtOpe The taux cotis oss et ope.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxCotisOssEtOpe($tauxCotisOssEtOpe) {
        $this->tauxCotisOssEtOpe = $tauxCotisOssEtOpe;
        return $this;
    }

    /**
     * Set the taux h comp.
     *
     * @param float $tauxHComp The taux h comp.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTauxHComp($tauxHComp) {
        $this->tauxHComp = $tauxHComp;
        return $this;
    }

    /**
     * Set the tds19.
     *
     * @param string $tds19 The tds19.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTds19($tds19) {
        $this->tds19 = $tds19;
        return $this;
    }

    /**
     * Set the tel signature dnae.
     *
     * @param string $telSignatureDnae The tel signature dnae.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTelSignatureDnae($telSignatureDnae) {
        $this->telSignatureDnae = $telSignatureDnae;
        return $this;
    }

    /**
     * Set the tepa moins20.
     *
     * @param bool $tepaMoins20 The tepa moins20.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTepaMoins20($tepaMoins20) {
        $this->tepaMoins20 = $tepaMoins20;
        return $this;
    }

    /**
     * Set the type effectif ct.
     *
     * @param string $typeEffectifCt The type effectif ct.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTypeEffectifCt($typeEffectifCt) {
        $this->typeEffectifCt = $typeEffectifCt;
        return $this;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string $typeMaintienBrutNet The type maintien brut net.
     * @return Etablissements2 Returns this Etablissements2.
     */
    public function setTypeMaintienBrutNet($typeMaintienBrutNet) {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }
}
