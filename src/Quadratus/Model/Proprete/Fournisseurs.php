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
 * Fournisseurs model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Fournisseurs {

    /**
     * A p e.
     *
     * @var string
     */
    private $aPE;

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
     * Code t v a.
     *
     * @var string
     */
    private $codeTVA;

    /**
     * Code t v a1.
     *
     * @var string
     */
    private $codeTVA1;

    /**
     * Code t v a2.
     *
     * @var string
     */
    private $codeTVA2;

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
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime
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
     * @var boolean
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
     * R i b.
     *
     * @var string
     */
    private $rIB;

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
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Soumis taxe1.
     *
     * @var boolean
     */
    private $soumisTaxe1;

    /**
     * Soumis taxe2.
     *
     * @var boolean
     */
    private $soumisTaxe2;

    /**
     * Soumis taxe3.
     *
     * @var boolean
     */
    private $soumisTaxe3;

    /**
     * T v a cle.
     *
     * @var string
     */
    private $tVACle;

    /**
     * T v a code dossier.
     *
     * @var string
     */
    private $tVACodeDossier;

    /**
     * T v a code recette.
     *
     * @var string
     */
    private $tVACodeRecette;

    /**
     * T v a regime.
     *
     * @var int
     */
    private $tVARegime;

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
     * Get the a p e.
     *
     * @return string Returns the a p e.
     */
    public function getAPE() {
        return $this->aPE;
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
     * Get the code t v a.
     *
     * @return string Returns the code t v a.
     */
    public function getCodeTVA() {
        return $this->codeTVA;
    }

    /**
     * Get the code t v a1.
     *
     * @return string Returns the code t v a1.
     */
    public function getCodeTVA1() {
        return $this->codeTVA1;
    }

    /**
     * Get the code t v a2.
     *
     * @return string Returns the code t v a2.
     */
    public function getCodeTVA2() {
        return $this->codeTVA2;
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
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
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
     * @return boolean Returns the facture euros.
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
     * Get the r i b.
     *
     * @return string Returns the r i b.
     */
    public function getRIB() {
        return $this->rIB;
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
     * @return boolean Returns the soumis taxe1.
     */
    public function getSoumisTaxe1() {
        return $this->soumisTaxe1;
    }

    /**
     * Get the soumis taxe2.
     *
     * @return boolean Returns the soumis taxe2.
     */
    public function getSoumisTaxe2() {
        return $this->soumisTaxe2;
    }

    /**
     * Get the soumis taxe3.
     *
     * @return boolean Returns the soumis taxe3.
     */
    public function getSoumisTaxe3() {
        return $this->soumisTaxe3;
    }

    /**
     * Get the t v a cle.
     *
     * @return string Returns the t v a cle.
     */
    public function getTVACle() {
        return $this->tVACle;
    }

    /**
     * Get the t v a code dossier.
     *
     * @return string Returns the t v a code dossier.
     */
    public function getTVACodeDossier() {
        return $this->tVACodeDossier;
    }

    /**
     * Get the t v a code recette.
     *
     * @return string Returns the t v a code recette.
     */
    public function getTVACodeRecette() {
        return $this->tVACodeRecette;
    }

    /**
     * Get the t v a regime.
     *
     * @return int Returns the t v a regime.
     */
    public function getTVARegime() {
        return $this->tVARegime;
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
     * Get the tx escompte achat.
     *
     * @return float Returns the tx escompte achat.
     */
    public function getTxEscompteAchat() {
        return $this->txEscompteAchat;
    }

    /**
     * Set the a p e.
     *
     * @param string $aPE The a p e.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setAPE($aPE) {
        $this->aPE = $aPE;
        return $this;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code pays.
     *
     * @param string $codePays The code pays.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code t v a.
     *
     * @param string $codeTVA The code t v a.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeTVA($codeTVA) {
        $this->codeTVA = $codeTVA;
        return $this;
    }

    /**
     * Set the code t v a1.
     *
     * @param string $codeTVA1 The code t v a1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeTVA1($codeTVA1) {
        $this->codeTVA1 = $codeTVA1;
        return $this;
    }

    /**
     * Set the code t v a2.
     *
     * @param string $codeTVA2 The code t v a2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeTVA2($codeTVA2) {
        $this->codeTVA2 = $codeTVA2;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the delai le.
     *
     * @param int $delaiLe The delai le.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDelaiLe($delaiLe) {
        $this->delaiLe = $delaiLe;
        return $this;
    }

    /**
     * Set the delai nombre.
     *
     * @param int $delaiNombre The delai nombre.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDelaiNombre($delaiNombre) {
        $this->delaiNombre = $delaiNombre;
        return $this;
    }

    /**
     * Set the delai type.
     *
     * @param int $delaiType The delai type.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDelaiType($delaiType) {
        $this->delaiType = $delaiType;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param boolean $factureEuros The facture euros.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param float $fraisFixes1 The frais fixes1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param float $fraisFixes2 The frais fixes2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setFraisFixes2($fraisFixes2) {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the frais fixes3.
     *
     * @param float $fraisFixes3 The frais fixes3.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setFraisFixes3($fraisFixes3) {
        $this->fraisFixes3 = $fraisFixes3;
        return $this;
    }

    /**
     * Set the ident tva.
     *
     * @param string $identTva The ident tva.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setIdentTva($identTva) {
        $this->identTva = $identTva;
        return $this;
    }

    /**
     * Set the montant acompte.
     *
     * @param float $montantAcompte The montant acompte.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setMontantAcompte($montantAcompte) {
        $this->montantAcompte = $montantAcompte;
        return $this;
    }

    /**
     * Set the nb colis.
     *
     * @param int $nbColis The nb colis.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNbColis($nbColis) {
        $this->nbColis = $nbColis;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom suite.
     *
     * @param string $nomSuite The nom suite.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNomSuite($nomSuite) {
        $this->nomSuite = $nomSuite;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int $nombreEcheances The nombre echeances.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param int $paiementDepartLe The paiement depart le.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param int $paiementLe The paiement le.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
        return $this;
    }

    /**
     * Set the poids.
     *
     * @param float $poids The poids.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPoids($poids) {
        $this->poids = $poids;
        return $this;
    }

    /**
     * Set the portable1.
     *
     * @param string $portable1 The portable1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPortable1($portable1) {
        $this->portable1 = $portable1;
        return $this;
    }

    /**
     * Set the portable2.
     *
     * @param string $portable2 The portable2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setPortable2($portable2) {
        $this->portable2 = $portable2;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the rc.
     *
     * @param string $rc The rc.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRc($rc) {
        $this->rc = $rc;
        return $this;
    }

    /**
     * Set the reference client.
     *
     * @param string $referenceClient The reference client.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setReferenceClient($referenceClient) {
        $this->referenceClient = $referenceClient;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float $remisePied2 The remise pied2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemisePied2($remisePied2) {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the soumis taxe1.
     *
     * @param boolean $soumisTaxe1 The soumis taxe1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setSoumisTaxe1($soumisTaxe1) {
        $this->soumisTaxe1 = $soumisTaxe1;
        return $this;
    }

    /**
     * Set the soumis taxe2.
     *
     * @param boolean $soumisTaxe2 The soumis taxe2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setSoumisTaxe2($soumisTaxe2) {
        $this->soumisTaxe2 = $soumisTaxe2;
        return $this;
    }

    /**
     * Set the soumis taxe3.
     *
     * @param boolean $soumisTaxe3 The soumis taxe3.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setSoumisTaxe3($soumisTaxe3) {
        $this->soumisTaxe3 = $soumisTaxe3;
        return $this;
    }

    /**
     * Set the t v a cle.
     *
     * @param string $tVACle The t v a cle.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTVACle($tVACle) {
        $this->tVACle = $tVACle;
        return $this;
    }

    /**
     * Set the t v a code dossier.
     *
     * @param string $tVACodeDossier The t v a code dossier.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTVACodeDossier($tVACodeDossier) {
        $this->tVACodeDossier = $tVACodeDossier;
        return $this;
    }

    /**
     * Set the t v a code recette.
     *
     * @param string $tVACodeRecette The t v a code recette.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTVACodeRecette($tVACodeRecette) {
        $this->tVACodeRecette = $tVACodeRecette;
        return $this;
    }

    /**
     * Set the t v a regime.
     *
     * @param int $tVARegime The t v a regime.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTVARegime($tVARegime) {
        $this->tVARegime = $tVARegime;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel voiture.
     *
     * @param string $telVoiture The tel voiture.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTelVoiture($telVoiture) {
        $this->telVoiture = $telVoiture;
        return $this;
    }

    /**
     * Set the telex.
     *
     * @param string $telex The telex.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTelex($telex) {
        $this->telex = $telex;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the tx escompte achat.
     *
     * @param float $txEscompteAchat The tx escompte achat.
     * @return Fournisseurs Returns this fournisseurs.
     */
    public function setTxEscompteAchat($txEscompteAchat) {
        $this->txEscompteAchat = $txEscompteAchat;
        return $this;
    }

}
