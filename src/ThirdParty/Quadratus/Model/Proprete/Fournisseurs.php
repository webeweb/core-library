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
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Fournisseurs {

    /**
     * Ape.
     *
     * @var string
     */
    private $ape;

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
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code imputation analytique.
     *
     * @var string
     */
    private $codeImputationAnalytique;

    /**
     * Code langue designation article.
     *
     * @var string
     */
    private $codeLangueDesignationArticle;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code pays.
     *
     * @var string
     */
    private $codePays;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Code reglement.
     *
     * @var string
     */
    private $codeReglement;

    /**
     * Code sous famille.
     *
     * @var string
     */
    private $codeSousFamille;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Code tva1.
     *
     * @var string
     */
    private $codeTva1;

    /**
     * Code tva2.
     *
     * @var string
     */
    private $codeTva2;

    /**
     * Code ventil compta.
     *
     * @var string
     */
    private $codeVentilCompta;

    /**
     * Collectif.
     *
     * @var string
     */
    private $collectif;

    /**
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Delai le.
     *
     * @var int
     */
    private $delaiLe;

    /**
     * Delai nombre.
     *
     * @var int
     */
    private $delaiNombre;

    /**
     * Delai type.
     *
     * @var int
     */
    private $delaiType;

    /**
     * Domiciliation bancaire1.
     *
     * @var string
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string
     */
    private $domiciliationBancaire2;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Frais fixes1.
     *
     * @var float
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var float
     */
    private $fraisFixes2;

    /**
     * Frais fixes3.
     *
     * @var float
     */
    private $fraisFixes3;

    /**
     * Ident tva.
     *
     * @var string
     */
    private $identTva;

    /**
     * Montant acompte.
     *
     * @var float
     */
    private $montantAcompte;

    /**
     * Nb colis.
     *
     * @var int
     */
    private $nbColis;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Nom responsable.
     *
     * @var string
     */
    private $nomResponsable;

    /**
     * Nom suite.
     *
     * @var string
     */
    private $nomSuite;

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
     * Nombre echeances.
     *
     * @var int
     */
    private $nombreEcheances;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Paiement depart le.
     *
     * @var int
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var int
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int
     */
    private $paiementNombreDeJours;

    /**
     * Poids.
     *
     * @var float
     */
    private $poids;

    /**
     * Portable1.
     *
     * @var string
     */
    private $portable1;

    /**
     * Portable2.
     *
     * @var string
     */
    private $portable2;

    /**
     * Rc.
     *
     * @var string
     */
    private $rc;

    /**
     * Reference client.
     *
     * @var string
     */
    private $referenceClient;

    /**
     * Remise ligne1.
     *
     * @var float
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float
     */
    private $remiseLigne3;

    /**
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

    /**
     * Remise pied2.
     *
     * @var float
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float
     */
    private $remisePied3;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Soumis taxe1.
     *
     * @var bool
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var bool
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var bool
     */
    private $soumisTaxe3;

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
     * Tel voiture.
     *
     * @var string
     */
    private $telVoiture;

    /**
     * Telex.
     *
     * @var string
     */
    private $telex;

    /**
     * Transporteur.
     *
     * @var string
     */
    private $transporteur;

    /**
     * Tva cle.
     *
     * @var string
     */
    private $tvaCle;

    /**
     * Tva code dossier.
     *
     * @var string
     */
    private $tvaCodeDossier;

    /**
     * Tva code recette.
     *
     * @var string
     */
    private $tvaCodeRecette;

    /**
     * Tva regime.
     *
     * @var int
     */
    private $tvaRegime;

    /**
     * Tx escompte achat.
     *
     * @var float
     */
    private $txEscompteAchat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the ape.
     *
     * @return string Returns the ape.
     */
    public function getApe() {
        return $this->ape;
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
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code imputation analytique.
     *
     * @return string Returns the code imputation analytique.
     */
    public function getCodeImputationAnalytique() {
        return $this->codeImputationAnalytique;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle() {
        return $this->codeLangueDesignationArticle;
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
     * Get the code pays.
     *
     * @return string Returns the code pays.
     */
    public function getCodePays() {
        return $this->codePays;
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
     * Get the code reglement.
     *
     * @return string Returns the code reglement.
     */
    public function getCodeReglement() {
        return $this->codeReglement;
    }

    /**
     * Get the code sous famille.
     *
     * @return string Returns the code sous famille.
     */
    public function getCodeSousFamille() {
        return $this->codeSousFamille;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the code tva1.
     *
     * @return string Returns the code tva1.
     */
    public function getCodeTva1() {
        return $this->codeTva1;
    }

    /**
     * Get the code tva2.
     *
     * @return string Returns the code tva2.
     */
    public function getCodeTva2() {
        return $this->codeTva2;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string Returns the code ventil compta.
     */
    public function getCodeVentilCompta() {
        return $this->codeVentilCompta;
    }

    /**
     * Get the collectif.
     *
     * @return string Returns the collectif.
     */
    public function getCollectif() {
        return $this->collectif;
    }

    /**
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
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
     * Get the delai le.
     *
     * @return int Returns the delai le.
     */
    public function getDelaiLe() {
        return $this->delaiLe;
    }

    /**
     * Get the delai nombre.
     *
     * @return int Returns the delai nombre.
     */
    public function getDelaiNombre() {
        return $this->delaiNombre;
    }

    /**
     * Get the delai type.
     *
     * @return int Returns the delai type.
     */
    public function getDelaiType() {
        return $this->delaiType;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1() {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2() {
        return $this->domiciliationBancaire2;
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
     * Get the facture euros.
     *
     * @return bool Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the frais fixes1.
     *
     * @return float Returns the frais fixes1.
     */
    public function getFraisFixes1() {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return float Returns the frais fixes2.
     */
    public function getFraisFixes2() {
        return $this->fraisFixes2;
    }

    /**
     * Get the frais fixes3.
     *
     * @return float Returns the frais fixes3.
     */
    public function getFraisFixes3() {
        return $this->fraisFixes3;
    }

    /**
     * Get the ident tva.
     *
     * @return string Returns the ident tva.
     */
    public function getIdentTva() {
        return $this->identTva;
    }

    /**
     * Get the montant acompte.
     *
     * @return float Returns the montant acompte.
     */
    public function getMontantAcompte() {
        return $this->montantAcompte;
    }

    /**
     * Get the nb colis.
     *
     * @return int Returns the nb colis.
     */
    public function getNbColis() {
        return $this->nbColis;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the nom responsable.
     *
     * @return string Returns the nom responsable.
     */
    public function getNomResponsable() {
        return $this->nomResponsable;
    }

    /**
     * Get the nom suite.
     *
     * @return string Returns the nom suite.
     */
    public function getNomSuite() {
        return $this->nomSuite;
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
     * Get the nombre echeances.
     *
     * @return int Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
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
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the paiement depart le.
     *
     * @return int Returns the paiement depart le.
     */
    public function getPaiementDepartLe() {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return int Returns the paiement le.
     */
    public function getPaiementLe() {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours() {
        return $this->paiementNombreDeJours;
    }

    /**
     * Get the poids.
     *
     * @return float Returns the poids.
     */
    public function getPoids() {
        return $this->poids;
    }

    /**
     * Get the portable1.
     *
     * @return string Returns the portable1.
     */
    public function getPortable1() {
        return $this->portable1;
    }

    /**
     * Get the portable2.
     *
     * @return string Returns the portable2.
     */
    public function getPortable2() {
        return $this->portable2;
    }

    /**
     * Get the rc.
     *
     * @return string Returns the rc.
     */
    public function getRc() {
        return $this->rc;
    }

    /**
     * Get the reference client.
     *
     * @return string Returns the reference client.
     */
    public function getReferenceClient() {
        return $this->referenceClient;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float Returns the remise ligne1.
     */
    public function getRemiseLigne1() {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float Returns the remise ligne2.
     */
    public function getRemiseLigne2() {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float Returns the remise ligne3.
     */
    public function getRemiseLigne3() {
        return $this->remiseLigne3;
    }

    /**
     * Get the remise pied.
     *
     * @return float Returns the remise pied.
     */
    public function getRemisePied() {
        return $this->remisePied;
    }

    /**
     * Get the remise pied2.
     *
     * @return float Returns the remise pied2.
     */
    public function getRemisePied2() {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float Returns the remise pied3.
     */
    public function getRemisePied3() {
        return $this->remisePied3;
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
     * Get the siret.
     *
     * @return string Returns the siret.
     */
    public function getSiret() {
        return $this->siret;
    }

    /**
     * Get the soumis taxe1.
     *
     * @return bool Returns the soumis taxe1.
     */
    public function getSoumisTaxe1() {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return bool Returns the soumis taxe2.
     */
    public function getSoumisTaxe2() {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return bool Returns the soumis taxe3.
     */
    public function getSoumisTaxe3() {
        return $this->soumisTaxe3;
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
     * Get the tel voiture.
     *
     * @return string Returns the tel voiture.
     */
    public function getTelVoiture() {
        return $this->telVoiture;
    }

    /**
     * Get the telex.
     *
     * @return string Returns the telex.
     */
    public function getTelex() {
        return $this->telex;
    }

    /**
     * Get the transporteur.
     *
     * @return string Returns the transporteur.
     */
    public function getTransporteur() {
        return $this->transporteur;
    }

    /**
     * Get the tva cle.
     *
     * @return string Returns the tva cle.
     */
    public function getTvaCle() {
        return $this->tvaCle;
    }

    /**
     * Get the tva code dossier.
     *
     * @return string Returns the tva code dossier.
     */
    public function getTvaCodeDossier() {
        return $this->tvaCodeDossier;
    }

    /**
     * Get the tva code recette.
     *
     * @return string Returns the tva code recette.
     */
    public function getTvaCodeRecette() {
        return $this->tvaCodeRecette;
    }

    /**
     * Get the tva regime.
     *
     * @return int Returns the tva regime.
     */
    public function getTvaRegime() {
        return $this->tvaRegime;
    }

    /**
     * Get the tx escompte achat.
     *
     * @return float Returns the tx escompte achat.
     */
    public function getTxEscompteAchat() {
        return $this->txEscompteAchat;
    }

    /**
     * Set the ape.
     *
     * @param string $ape The ape.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setApe($ape) {
        $this->ape = $ape;
        return $this;
    }

    /**
     * Set the btq.
     *
     * @param string $btq The btq.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBtq($btq) {
        $this->btq = $btq;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code tva1.
     *
     * @param string $codeTva1 The code tva1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva1($codeTva1) {
        $this->codeTva1 = $codeTva1;
        return $this;
    }

    /**
     * Set the code tva2.
     *
     * @param string $codeTva2 The code tva2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTva2($codeTva2) {
        $this->codeTva2 = $codeTva2;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int $delaiLe The delai le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiLe($delaiLe) {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int $delaiNombre The delai nombre.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiNombre($delaiNombre) {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int $delaiType The delai type.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelaiType($delaiType) {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool $factureEuros The facture euros.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param float $fraisFixes1 The frais fixes1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param float $fraisFixes2 The frais fixes2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes2($fraisFixes2) {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the frais fixes3.
     *
     * @param float $fraisFixes3 The frais fixes3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes3($fraisFixes3) {
        $this->fraisFixes3 = $fraisFixes3;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string $identTva The ident tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIdentTva($identTva) {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float $montantAcompte The montant acompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantAcompte($montantAcompte) {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the nb colis.
     *
     * @param int $nbColis The nb colis.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbColis($nbColis) {
        $this->nbColis = $nbColis;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int $nombreEcheances The nombre echeances.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int $paiementDepartLe The paiement depart le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param int $paiementLe The paiement le.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the poids.
     *
     * @param float $poids The poids.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPoids($poids) {
        $this->poids = $poids;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string $portable1 The portable1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPortable1($portable1) {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string $portable2 The portable2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPortable2($portable2) {
        $this->portable2 = $portable2;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string $rc The rc.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRc($rc) {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the reference client.
     *
     * @param string $referenceClient The reference client.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setReferenceClient($referenceClient) {
        $this->referenceClient = $referenceClient;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float $remisePied2 The remise pied2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied2($remisePied2) {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param bool $soumisTaxe1 The soumis taxe1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe1($soumisTaxe1) {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param bool $soumisTaxe2 The soumis taxe2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe2($soumisTaxe2) {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param bool $soumisTaxe3 The soumis taxe3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe3($soumisTaxe3) {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string $telVoiture The tel voiture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTelVoiture($telVoiture) {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string $telex The telex.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTelex($telex) {
        $this->telex = $telex;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tva cle.
     *
     * @param string $tvaCle The tva cle.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCle($tvaCle) {
        $this->tvaCle = $tvaCle;
        return $this;
    }

    /**
     * Set the tva code dossier.
     *
     * @param string $tvaCodeDossier The tva code dossier.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCodeDossier($tvaCodeDossier) {
        $this->tvaCodeDossier = $tvaCodeDossier;
        return $this;
    }

    /**
     * Set the tva code recette.
     *
     * @param string $tvaCodeRecette The tva code recette.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaCodeRecette($tvaCodeRecette) {
        $this->tvaCodeRecette = $tvaCodeRecette;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param int $tvaRegime The tva regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tx escompte achat.
     *
     * @param float $txEscompteAchat The tx escompte achat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTxEscompteAchat($txEscompteAchat) {
        $this->txEscompteAchat = $txEscompteAchat;
        return $this;
    }
}
