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
 * Fournisseurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Fournisseurs {

    /**
     * Adresse site fournisseur.
     *
     * @var string
     */
    private $adresseSiteFournisseur;

    /**
     * Article port1.
     *
     * @var string
     */
    private $articlePort1;

    /**
     * Article port2.
     *
     * @var string
     */
    private $articlePort2;

    /**
     * Bloque.
     *
     * @var bool
     */
    private $bloque;

    /**
     * Chiffre affaire.
     *
     * @var float
     */
    private $chiffreAffaire;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

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
     * Code avocat.
     *
     * @var string
     */
    private $codeAvocat;

    /**
     * Code barre.
     *
     * @var bool
     */
    private $codeBarre;

    /**
     * Code categorie fournisseur.
     *
     * @var string
     */
    private $codeCategorieFournisseur;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code edition fact.
     *
     * @var string
     */
    private $codeEditionFact;

    /**
     * Code exc.
     *
     * @var string
     */
    private $codeExc;

    /**
     * Code expert.
     *
     * @var string
     */
    private $codeExpert;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code geo.
     *
     * @var string
     */
    private $codeGeo;

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
     * Code origine.
     *
     * @var string
     */
    private $codeOrigine;

    /**
     * Code portefeuille.
     *
     * @var string
     */
    private $codePortefeuille;

    /**
     * Code reglement.
     *
     * @var string
     */
    private $codeReglement;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code sous famille.
     *
     * @var string
     */
    private $codeSousFamille;

    /**
     * Code transporteur.
     *
     * @var string
     */
    private $codeTransporteur;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

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
     * Compte de vente.
     *
     * @var bool
     */
    private $compteDeVente;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

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
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Delai.
     *
     * @var float
     */
    private $delai;

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
     * Dossier comptable.
     *
     * @var string
     */
    private $dossierComptable;

    /**
     * Dossier paie.
     *
     * @var string
     */
    private $dossierPaie;

    /**
     * Ds code collab.
     *
     * @var string
     */
    private $dsCodeCollab;

    /**
     * Ds date retour.
     *
     * @var DateTime|null
     */
    private $dsDateRetour;

    /**
     * Ds date sortie.
     *
     * @var DateTime|null
     */
    private $dsDateSortie;

    /**
     * Ean frn.
     *
     * @var string
     */
    private $eanFrn;

    /**
     * Echeance fin decade.
     *
     * @var bool
     */
    private $echeanceFinDecade;

    /**
     * Echeance fin quinzaine.
     *
     * @var bool
     */
    private $echeanceFinQuinzaine;

    /**
     * Etat1.
     *
     * @var string
     */
    private $etat1;

    /**
     * Etat2.
     *
     * @var string
     */
    private $etat2;

    /**
     * Etat3.
     *
     * @var string
     */
    private $etat3;

    /**
     * Etat4.
     *
     * @var string
     */
    private $etat4;

    /**
     * Etat5.
     *
     * @var string
     */
    private $etat5;

    /**
     * Etiquettes.
     *
     * @var bool
     */
    private $etiquettes;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Facture isolee.
     *
     * @var bool
     */
    private $factureIsolee;

    /**
     * Frais fixes1.
     *
     * @var bool
     */
    private $fraisFixes1;

    /**
     * Frais fixes2.
     *
     * @var bool
     */
    private $fraisFixes2;

    /**
     * Franco port1.
     *
     * @var float
     */
    private $francoPort1;

    /**
     * Franco port2.
     *
     * @var float
     */
    private $francoPort2;

    /**
     * Identifiant tva.
     *
     * @var string
     */
    private $identifiantTva;

    /**
     * Igp.
     *
     * @var bool
     */
    private $igp;

    /**
     * Insp.
     *
     * @var string
     */
    private $insp;

    /**
     * Mission sur dossier.
     *
     * @var int
     */
    private $missionSurDossier;

    /**
     * Modele br.
     *
     * @var string
     */
    private $modeleBr;

    /**
     * Modele commande.
     *
     * @var string
     */
    private $modeleCommande;

    /**
     * Modele facture.
     *
     * @var string
     */
    private $modeleFacture;

    /**
     * Modele releve.
     *
     * @var string
     */
    private $modeleReleve;

    /**
     * Montant franco.
     *
     * @var float
     */
    private $montantFranco;

    /**
     * Montant mini cde.
     *
     * @var float
     */
    private $montantMiniCde;

    /**
     * Montant port liv.
     *
     * @var float
     */
    private $montantPortLiv;

    /**
     * Nb br.
     *
     * @var string
     */
    private $nbBr;

    /**
     * Nb commande.
     *
     * @var string
     */
    private $nbCommande;

    /**
     * Nb facture.
     *
     * @var string
     */
    private $nbFacture;

    /**
     * Nb jour interval.
     *
     * @var int
     */
    private $nbJourInterval;

    /**
     * Nb max br.
     *
     * @var string
     */
    private $nbMaxBr;

    /**
     * Nb releve.
     *
     * @var string
     */
    private $nbReleve;

    /**
     * Nombre echeances.
     *
     * @var string
     */
    private $nombreEcheances;

    /**
     * Num facture f.
     *
     * @var int
     */
    private $numFactureF;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Observation1.
     *
     * @var string
     */
    private $observation1;

    /**
     * Observation2.
     *
     * @var string
     */
    private $observation2;

    /**
     * Paiement depart le.
     *
     * @var int
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int
     */
    private $paiementNombreDeJours;

    /**
     * Prefixe facture f.
     *
     * @var string
     */
    private $prefixeFactureF;

    /**
     * Regime.
     *
     * @var string
     */
    private $regime;

    /**
     * Regroupement fact.
     *
     * @var string
     */
    private $regroupementFact;

    /**
     * Releve facture.
     *
     * @var bool
     */
    private $releveFacture;

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
     * Resultat.
     *
     * @var float
     */
    private $resultat;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Siege groupe.
     *
     * @var bool
     */
    private $siegeGroupe;

    /**
     * Soumis escompte.
     *
     * @var bool
     */
    private $soumisEscompte;

    /**
     * Soumis port1.
     *
     * @var string
     */
    private $soumisPort1;

    /**
     * Soumis port2.
     *
     * @var string
     */
    private $soumisPort2;

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
     * Soumis taxe4.
     *
     * @var bool
     */
    private $soumisTaxe4;

    /**
     * Soumis taxe5.
     *
     * @var bool
     */
    private $soumisTaxe5;

    /**
     * Soumis tva.
     *
     * @var bool
     */
    private $soumisTva;

    /**
     * Taux comm.
     *
     * @var float
     */
    private $tauxComm;

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Toutes activites.
     *
     * @var string
     */
    private $toutesActivites;

    /**
     * Transporteur.
     *
     * @var string
     */
    private $transporteur;

    /**
     * Trs aff grp.
     *
     * @var bool
     */
    private $trsAffGrp;

    /**
     * Trs aff mat dang.
     *
     * @var string
     */
    private $trsAffMatDang;

    /**
     * Trs aff prod chim.
     *
     * @var string
     */
    private $trsAffProdChim;

    /**
     * Trs aff refri.
     *
     * @var string
     */
    private $trsAffRefri;

    /**
     * Trs code tarif.
     *
     * @var string
     */
    private $trsCodeTarif;

    /**
     * Trs est un affrete.
     *
     * @var string
     */
    private $trsEstUnAffrete;

    /**
     * Trs gestion palettes.
     *
     * @var bool
     */
    private $trsGestionPalettes;

    /**
     * Trs suivi planing aff.
     *
     * @var bool
     */
    private $trsSuiviPlaningAff;

    /**
     * Trsp cent px trs.
     *
     * @var float
     */
    private $trspCentPxTrs;

    /**
     * Tva regime.
     *
     * @var string
     */
    private $tvaRegime;

    /**
     * Type edit br.
     *
     * @var string
     */
    private $typeEditBr;

    /**
     * Type fournisseur.
     *
     * @var string
     */
    private $typeFournisseur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse site fournisseur.
     *
     * @return string Returns the adresse site fournisseur.
     */
    public function getAdresseSiteFournisseur() {
        return $this->adresseSiteFournisseur;
    }

    /**
     * Get the article port1.
     *
     * @return string Returns the article port1.
     */
    public function getArticlePort1() {
        return $this->articlePort1;
    }

    /**
     * Get the article port2.
     *
     * @return string Returns the article port2.
     */
    public function getArticlePort2() {
        return $this->articlePort2;
    }

    /**
     * Get the bloque.
     *
     * @return bool Returns the bloque.
     */
    public function getBloque() {
        return $this->bloque;
    }

    /**
     * Get the chiffre affaire.
     *
     * @return float Returns the chiffre affaire.
     */
    public function getChiffreAffaire() {
        return $this->chiffreAffaire;
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
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
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
     * Get the code avocat.
     *
     * @return string Returns the code avocat.
     */
    public function getCodeAvocat() {
        return $this->codeAvocat;
    }

    /**
     * Get the code barre.
     *
     * @return bool Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Get the code categorie fournisseur.
     *
     * @return string Returns the code categorie fournisseur.
     */
    public function getCodeCategorieFournisseur() {
        return $this->codeCategorieFournisseur;
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
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
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
     * Get the code edition fact.
     *
     * @return string Returns the code edition fact.
     */
    public function getCodeEditionFact() {
        return $this->codeEditionFact;
    }

    /**
     * Get the code exc.
     *
     * @return string Returns the code exc.
     */
    public function getCodeExc() {
        return $this->codeExc;
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
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code geo.
     *
     * @return string Returns the code geo.
     */
    public function getCodeGeo() {
        return $this->codeGeo;
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
     * Get the code origine.
     *
     * @return string Returns the code origine.
     */
    public function getCodeOrigine() {
        return $this->codeOrigine;
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
     * Get the code reglement.
     *
     * @return string Returns the code reglement.
     */
    public function getCodeReglement() {
        return $this->codeReglement;
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
     * Get the code sous famille.
     *
     * @return string Returns the code sous famille.
     */
    public function getCodeSousFamille() {
        return $this->codeSousFamille;
    }

    /**
     * Get the code transporteur.
     *
     * @return string Returns the code transporteur.
     */
    public function getCodeTransporteur() {
        return $this->codeTransporteur;
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
     * Get the compte de vente.
     *
     * @return bool Returns the compte de vente.
     */
    public function getCompteDeVente() {
        return $this->compteDeVente;
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
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the delai.
     *
     * @return float Returns the delai.
     */
    public function getDelai() {
        return $this->delai;
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
     * Get the dossier comptable.
     *
     * @return string Returns the dossier comptable.
     */
    public function getDossierComptable() {
        return $this->dossierComptable;
    }

    /**
     * Get the dossier paie.
     *
     * @return string Returns the dossier paie.
     */
    public function getDossierPaie() {
        return $this->dossierPaie;
    }

    /**
     * Get the ds code collab.
     *
     * @return string Returns the ds code collab.
     */
    public function getDsCodeCollab() {
        return $this->dsCodeCollab;
    }

    /**
     * Get the ds date retour.
     *
     * @return DateTime|null Returns the ds date retour.
     */
    public function getDsDateRetour() {
        return $this->dsDateRetour;
    }

    /**
     * Get the ds date sortie.
     *
     * @return DateTime|null Returns the ds date sortie.
     */
    public function getDsDateSortie() {
        return $this->dsDateSortie;
    }

    /**
     * Get the ean frn.
     *
     * @return string Returns the ean frn.
     */
    public function getEanFrn() {
        return $this->eanFrn;
    }

    /**
     * Get the echeance fin decade.
     *
     * @return bool Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
    }

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Get the etat1.
     *
     * @return string Returns the etat1.
     */
    public function getEtat1() {
        return $this->etat1;
    }

    /**
     * Get the etat2.
     *
     * @return string Returns the etat2.
     */
    public function getEtat2() {
        return $this->etat2;
    }

    /**
     * Get the etat3.
     *
     * @return string Returns the etat3.
     */
    public function getEtat3() {
        return $this->etat3;
    }

    /**
     * Get the etat4.
     *
     * @return string Returns the etat4.
     */
    public function getEtat4() {
        return $this->etat4;
    }

    /**
     * Get the etat5.
     *
     * @return string Returns the etat5.
     */
    public function getEtat5() {
        return $this->etat5;
    }

    /**
     * Get the etiquettes.
     *
     * @return bool Returns the etiquettes.
     */
    public function getEtiquettes() {
        return $this->etiquettes;
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
     * Get the facture isolee.
     *
     * @return bool Returns the facture isolee.
     */
    public function getFactureIsolee() {
        return $this->factureIsolee;
    }

    /**
     * Get the frais fixes1.
     *
     * @return bool Returns the frais fixes1.
     */
    public function getFraisFixes1() {
        return $this->fraisFixes1;
    }

    /**
     * Get the frais fixes2.
     *
     * @return bool Returns the frais fixes2.
     */
    public function getFraisFixes2() {
        return $this->fraisFixes2;
    }

    /**
     * Get the franco port1.
     *
     * @return float Returns the franco port1.
     */
    public function getFrancoPort1() {
        return $this->francoPort1;
    }

    /**
     * Get the franco port2.
     *
     * @return float Returns the franco port2.
     */
    public function getFrancoPort2() {
        return $this->francoPort2;
    }

    /**
     * Get the identifiant tva.
     *
     * @return string Returns the identifiant tva.
     */
    public function getIdentifiantTva() {
        return $this->identifiantTva;
    }

    /**
     * Get the igp.
     *
     * @return bool Returns the igp.
     */
    public function getIgp() {
        return $this->igp;
    }

    /**
     * Get the insp.
     *
     * @return string Returns the insp.
     */
    public function getInsp() {
        return $this->insp;
    }

    /**
     * Get the mission sur dossier.
     *
     * @return int Returns the mission sur dossier.
     */
    public function getMissionSurDossier() {
        return $this->missionSurDossier;
    }

    /**
     * Get the modele br.
     *
     * @return string Returns the modele br.
     */
    public function getModeleBr() {
        return $this->modeleBr;
    }

    /**
     * Get the modele commande.
     *
     * @return string Returns the modele commande.
     */
    public function getModeleCommande() {
        return $this->modeleCommande;
    }

    /**
     * Get the modele facture.
     *
     * @return string Returns the modele facture.
     */
    public function getModeleFacture() {
        return $this->modeleFacture;
    }

    /**
     * Get the modele releve.
     *
     * @return string Returns the modele releve.
     */
    public function getModeleReleve() {
        return $this->modeleReleve;
    }

    /**
     * Get the montant franco.
     *
     * @return float Returns the montant franco.
     */
    public function getMontantFranco() {
        return $this->montantFranco;
    }

    /**
     * Get the montant mini cde.
     *
     * @return float Returns the montant mini cde.
     */
    public function getMontantMiniCde() {
        return $this->montantMiniCde;
    }

    /**
     * Get the montant port liv.
     *
     * @return float Returns the montant port liv.
     */
    public function getMontantPortLiv() {
        return $this->montantPortLiv;
    }

    /**
     * Get the nb br.
     *
     * @return string Returns the nb br.
     */
    public function getNbBr() {
        return $this->nbBr;
    }

    /**
     * Get the nb commande.
     *
     * @return string Returns the nb commande.
     */
    public function getNbCommande() {
        return $this->nbCommande;
    }

    /**
     * Get the nb facture.
     *
     * @return string Returns the nb facture.
     */
    public function getNbFacture() {
        return $this->nbFacture;
    }

    /**
     * Get the nb jour interval.
     *
     * @return int Returns the nb jour interval.
     */
    public function getNbJourInterval() {
        return $this->nbJourInterval;
    }

    /**
     * Get the nb max br.
     *
     * @return string Returns the nb max br.
     */
    public function getNbMaxBr() {
        return $this->nbMaxBr;
    }

    /**
     * Get the nb releve.
     *
     * @return string Returns the nb releve.
     */
    public function getNbReleve() {
        return $this->nbReleve;
    }

    /**
     * Get the nombre echeances.
     *
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the num facture f.
     *
     * @return int Returns the num facture f.
     */
    public function getNumFactureF() {
        return $this->numFactureF;
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
     * Get the observation1.
     *
     * @return string Returns the observation1.
     */
    public function getObservation1() {
        return $this->observation1;
    }

    /**
     * Get the observation2.
     *
     * @return string Returns the observation2.
     */
    public function getObservation2() {
        return $this->observation2;
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
     * @return string Returns the paiement le.
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
     * Get the prefixe facture f.
     *
     * @return string Returns the prefixe facture f.
     */
    public function getPrefixeFactureF() {
        return $this->prefixeFactureF;
    }

    /**
     * Get the regime.
     *
     * @return string Returns the regime.
     */
    public function getRegime() {
        return $this->regime;
    }

    /**
     * Get the regroupement fact.
     *
     * @return string Returns the regroupement fact.
     */
    public function getRegroupementFact() {
        return $this->regroupementFact;
    }

    /**
     * Get the releve facture.
     *
     * @return bool Returns the releve facture.
     */
    public function getReleveFacture() {
        return $this->releveFacture;
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
     * Get the resultat.
     *
     * @return float Returns the resultat.
     */
    public function getResultat() {
        return $this->resultat;
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
     * Get the siege groupe.
     *
     * @return bool Returns the siege groupe.
     */
    public function getSiegeGroupe() {
        return $this->siegeGroupe;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the soumis port1.
     *
     * @return string Returns the soumis port1.
     */
    public function getSoumisPort1() {
        return $this->soumisPort1;
    }

    /**
     * Get the soumis port2.
     *
     * @return string Returns the soumis port2.
     */
    public function getSoumisPort2() {
        return $this->soumisPort2;
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
     * Get the soumis taxe4.
     *
     * @return bool Returns the soumis taxe4.
     */
    public function getSoumisTaxe4() {
        return $this->soumisTaxe4;
    }

    /**
     * Get the soumis taxe5.
     *
     * @return bool Returns the soumis taxe5.
     */
    public function getSoumisTaxe5() {
        return $this->soumisTaxe5;
    }

    /**
     * Get the soumis tva.
     *
     * @return bool Returns the soumis tva.
     */
    public function getSoumisTva() {
        return $this->soumisTva;
    }

    /**
     * Get the taux comm.
     *
     * @return float Returns the taux comm.
     */
    public function getTauxComm() {
        return $this->tauxComm;
    }

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Get the toutes activites.
     *
     * @return string Returns the toutes activites.
     */
    public function getToutesActivites() {
        return $this->toutesActivites;
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
     * Get the trs aff grp.
     *
     * @return bool Returns the trs aff grp.
     */
    public function getTrsAffGrp() {
        return $this->trsAffGrp;
    }

    /**
     * Get the trs aff mat dang.
     *
     * @return string Returns the trs aff mat dang.
     */
    public function getTrsAffMatDang() {
        return $this->trsAffMatDang;
    }

    /**
     * Get the trs aff prod chim.
     *
     * @return string Returns the trs aff prod chim.
     */
    public function getTrsAffProdChim() {
        return $this->trsAffProdChim;
    }

    /**
     * Get the trs aff refri.
     *
     * @return string Returns the trs aff refri.
     */
    public function getTrsAffRefri() {
        return $this->trsAffRefri;
    }

    /**
     * Get the trs code tarif.
     *
     * @return string Returns the trs code tarif.
     */
    public function getTrsCodeTarif() {
        return $this->trsCodeTarif;
    }

    /**
     * Get the trs est un affrete.
     *
     * @return string Returns the trs est un affrete.
     */
    public function getTrsEstUnAffrete() {
        return $this->trsEstUnAffrete;
    }

    /**
     * Get the trs gestion palettes.
     *
     * @return bool Returns the trs gestion palettes.
     */
    public function getTrsGestionPalettes() {
        return $this->trsGestionPalettes;
    }

    /**
     * Get the trs suivi planing aff.
     *
     * @return bool Returns the trs suivi planing aff.
     */
    public function getTrsSuiviPlaningAff() {
        return $this->trsSuiviPlaningAff;
    }

    /**
     * Get the trsp cent px trs.
     *
     * @return float Returns the trsp cent px trs.
     */
    public function getTrspCentPxTrs() {
        return $this->trspCentPxTrs;
    }

    /**
     * Get the tva regime.
     *
     * @return string Returns the tva regime.
     */
    public function getTvaRegime() {
        return $this->tvaRegime;
    }

    /**
     * Get the type edit br.
     *
     * @return string Returns the type edit br.
     */
    public function getTypeEditBr() {
        return $this->typeEditBr;
    }

    /**
     * Get the type fournisseur.
     *
     * @return string Returns the type fournisseur.
     */
    public function getTypeFournisseur() {
        return $this->typeFournisseur;
    }

    /**
     * Set the adresse site fournisseur.
     *
     * @param string $adresseSiteFournisseur The adresse site fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setAdresseSiteFournisseur($adresseSiteFournisseur) {
        $this->adresseSiteFournisseur = $adresseSiteFournisseur;
        return $this;
    }

    /**
     * Set the article port1.
     *
     * @param string $articlePort1 The article port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setArticlePort1($articlePort1) {
        $this->articlePort1 = $articlePort1;
        return $this;
    }

    /**
     * Set the article port2.
     *
     * @param string $articlePort2 The article port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setArticlePort2($articlePort2) {
        $this->articlePort2 = $articlePort2;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool $bloque The bloque.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the chiffre affaire.
     *
     * @param float $chiffreAffaire The chiffre affaire.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setChiffreAffaire($chiffreAffaire) {
        $this->chiffreAffaire = $chiffreAffaire;
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
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code assistant juridique.
     *
     * @param string $codeAssistantJuridique The code assistant juridique.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAssistantJuridique($codeAssistantJuridique) {
        $this->codeAssistantJuridique = $codeAssistantJuridique;
        return $this;
    }

    /**
     * Set the code assistant social.
     *
     * @param string $codeAssistantSocial The code assistant social.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAssistantSocial($codeAssistantSocial) {
        $this->codeAssistantSocial = $codeAssistantSocial;
        return $this;
    }

    /**
     * Set the code autre1.
     *
     * @param string $codeAutre1 The code autre1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAutre1($codeAutre1) {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }

    /**
     * Set the code autre2.
     *
     * @param string $codeAutre2 The code autre2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAutre2($codeAutre2) {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }

    /**
     * Set the code avocat.
     *
     * @param string $codeAvocat The code avocat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeAvocat($codeAvocat) {
        $this->codeAvocat = $codeAvocat;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param bool $codeBarre The code barre.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code categorie fournisseur.
     *
     * @param string $codeCategorieFournisseur The code categorie fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeCategorieFournisseur($codeCategorieFournisseur) {
        $this->codeCategorieFournisseur = $codeCategorieFournisseur;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
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
     * Set the code edition fact.
     *
     * @param string $codeEditionFact The code edition fact.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeEditionFact($codeEditionFact) {
        $this->codeEditionFact = $codeEditionFact;
        return $this;
    }

    /**
     * Set the code exc.
     *
     * @param string $codeExc The code exc.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeExc($codeExc) {
        $this->codeExc = $codeExc;
        return $this;
    }

    /**
     * Set the code expert.
     *
     * @param string $codeExpert The code expert.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeExpert($codeExpert) {
        $this->codeExpert = $codeExpert;
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
     * Set the code geo.
     *
     * @param string $codeGeo The code geo.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeGeo($codeGeo) {
        $this->codeGeo = $codeGeo;
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
     * Set the code origine.
     *
     * @param string $codeOrigine The code origine.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeOrigine($codeOrigine) {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code portefeuille.
     *
     * @param string $codePortefeuille The code portefeuille.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodePortefeuille($codePortefeuille) {
        $this->codePortefeuille = $codePortefeuille;
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
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
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
     * Set the code transporteur.
     *
     * @param string $codeTransporteur The code transporteur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCodeTransporteur($codeTransporteur) {
        $this->codeTransporteur = $codeTransporteur;
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
     * Set the compte de vente.
     *
     * @param bool $compteDeVente The compte de vente.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setCompteDeVente($compteDeVente) {
        $this->compteDeVente = $compteDeVente;
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
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
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
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the delai.
     *
     * @param float $delai The delai.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDelai($delai) {
        $this->delai = $delai;
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
     * Set the dossier comptable.
     *
     * @param string $dossierComptable The dossier comptable.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDossierComptable($dossierComptable) {
        $this->dossierComptable = $dossierComptable;
        return $this;
    }

    /**
     * Set the dossier paie.
     *
     * @param string $dossierPaie The dossier paie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDossierPaie($dossierPaie) {
        $this->dossierPaie = $dossierPaie;
        return $this;
    }

    /**
     * Set the ds code collab.
     *
     * @param string $dsCodeCollab The ds code collab.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsCodeCollab($dsCodeCollab) {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }

    /**
     * Set the ds date retour.
     *
     * @param DateTime|null $dsDateRetour The ds date retour.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsDateRetour(DateTime $dsDateRetour = null) {
        $this->dsDateRetour = $dsDateRetour;
        return $this;
    }

    /**
     * Set the ds date sortie.
     *
     * @param DateTime|null $dsDateSortie The ds date sortie.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setDsDateSortie(DateTime $dsDateSortie = null) {
        $this->dsDateSortie = $dsDateSortie;
        return $this;
    }

    /**
     * Set the ean frn.
     *
     * @param string $eanFrn The ean frn.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEanFrn($eanFrn) {
        $this->eanFrn = $eanFrn;
        return $this;
    }

    /**
     * Set the echeance fin decade.
     *
     * @param bool $echeanceFinDecade The echeance fin decade.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
        return $this;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool $echeanceFinQuinzaine The echeance fin quinzaine.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }

    /**
     * Set the etat1.
     *
     * @param string $etat1 The etat1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat1($etat1) {
        $this->etat1 = $etat1;
        return $this;
    }

    /**
     * Set the etat2.
     *
     * @param string $etat2 The etat2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat2($etat2) {
        $this->etat2 = $etat2;
        return $this;
    }

    /**
     * Set the etat3.
     *
     * @param string $etat3 The etat3.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat3($etat3) {
        $this->etat3 = $etat3;
        return $this;
    }

    /**
     * Set the etat4.
     *
     * @param string $etat4 The etat4.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat4($etat4) {
        $this->etat4 = $etat4;
        return $this;
    }

    /**
     * Set the etat5.
     *
     * @param string $etat5 The etat5.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtat5($etat5) {
        $this->etat5 = $etat5;
        return $this;
    }

    /**
     * Set the etiquettes.
     *
     * @param bool $etiquettes The etiquettes.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setEtiquettes($etiquettes) {
        $this->etiquettes = $etiquettes;
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
     * Set the facture isolee.
     *
     * @param bool $factureIsolee The facture isolee.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFactureIsolee($factureIsolee) {
        $this->factureIsolee = $factureIsolee;
        return $this;
    }

    /**
     * Set the frais fixes1.
     *
     * @param bool $fraisFixes1 The frais fixes1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes1($fraisFixes1) {
        $this->fraisFixes1 = $fraisFixes1;
        return $this;
    }

    /**
     * Set the frais fixes2.
     *
     * @param bool $fraisFixes2 The frais fixes2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFraisFixes2($fraisFixes2) {
        $this->fraisFixes2 = $fraisFixes2;
        return $this;
    }

    /**
     * Set the franco port1.
     *
     * @param float $francoPort1 The franco port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFrancoPort1($francoPort1) {
        $this->francoPort1 = $francoPort1;
        return $this;
    }

    /**
     * Set the franco port2.
     *
     * @param float $francoPort2 The franco port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setFrancoPort2($francoPort2) {
        $this->francoPort2 = $francoPort2;
        return $this;
    }

    /**
     * Set the identifiant tva.
     *
     * @param string $identifiantTva The identifiant tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIdentifiantTva($identifiantTva) {
        $this->identifiantTva = $identifiantTva;
        return $this;
    }

    /**
     * Set the igp.
     *
     * @param bool $igp The igp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setIgp($igp) {
        $this->igp = $igp;
        return $this;
    }

    /**
     * Set the insp.
     *
     * @param string $insp The insp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setInsp($insp) {
        $this->insp = $insp;
        return $this;
    }

    /**
     * Set the mission sur dossier.
     *
     * @param int $missionSurDossier The mission sur dossier.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMissionSurDossier($missionSurDossier) {
        $this->missionSurDossier = $missionSurDossier;
        return $this;
    }

    /**
     * Set the modele br.
     *
     * @param string $modeleBr The modele br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleBr($modeleBr) {
        $this->modeleBr = $modeleBr;
        return $this;
    }

    /**
     * Set the modele commande.
     *
     * @param string $modeleCommande The modele commande.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleCommande($modeleCommande) {
        $this->modeleCommande = $modeleCommande;
        return $this;
    }

    /**
     * Set the modele facture.
     *
     * @param string $modeleFacture The modele facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleFacture($modeleFacture) {
        $this->modeleFacture = $modeleFacture;
        return $this;
    }

    /**
     * Set the modele releve.
     *
     * @param string $modeleReleve The modele releve.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setModeleReleve($modeleReleve) {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }

    /**
     * Set the montant franco.
     *
     * @param float $montantFranco The montant franco.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantFranco($montantFranco) {
        $this->montantFranco = $montantFranco;
        return $this;
    }

    /**
     * Set the montant mini cde.
     *
     * @param float $montantMiniCde The montant mini cde.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantMiniCde($montantMiniCde) {
        $this->montantMiniCde = $montantMiniCde;
        return $this;
    }

    /**
     * Set the montant port liv.
     *
     * @param float $montantPortLiv The montant port liv.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setMontantPortLiv($montantPortLiv) {
        $this->montantPortLiv = $montantPortLiv;
        return $this;
    }

    /**
     * Set the nb br.
     *
     * @param string $nbBr The nb br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbBr($nbBr) {
        $this->nbBr = $nbBr;
        return $this;
    }

    /**
     * Set the nb commande.
     *
     * @param string $nbCommande The nb commande.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbCommande($nbCommande) {
        $this->nbCommande = $nbCommande;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param string $nbFacture The nb facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbFacture($nbFacture) {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int $nbJourInterval The nb jour interval.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbJourInterval($nbJourInterval) {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }

    /**
     * Set the nb max br.
     *
     * @param string $nbMaxBr The nb max br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbMaxBr($nbMaxBr) {
        $this->nbMaxBr = $nbMaxBr;
        return $this;
    }

    /**
     * Set the nb releve.
     *
     * @param string $nbReleve The nb releve.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNbReleve($nbReleve) {
        $this->nbReleve = $nbReleve;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param string $nombreEcheances The nombre echeances.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num facture f.
     *
     * @param int $numFactureF The num facture f.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setNumFactureF($numFactureF) {
        $this->numFactureF = $numFactureF;
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
     * Set the observation1.
     *
     * @param string $observation1 The observation1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setObservation1($observation1) {
        $this->observation1 = $observation1;
        return $this;
    }

    /**
     * Set the observation2.
     *
     * @param string $observation2 The observation2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setObservation2($observation2) {
        $this->observation2 = $observation2;
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
     * @param string $paiementLe The paiement le.
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
     * Set the prefixe facture f.
     *
     * @param string $prefixeFactureF The prefixe facture f.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setPrefixeFactureF($prefixeFactureF) {
        $this->prefixeFactureF = $prefixeFactureF;
        return $this;
    }

    /**
     * Set the regime.
     *
     * @param string $regime The regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRegime($regime) {
        $this->regime = $regime;
        return $this;
    }

    /**
     * Set the regroupement fact.
     *
     * @param string $regroupementFact The regroupement fact.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setRegroupementFact($regroupementFact) {
        $this->regroupementFact = $regroupementFact;
        return $this;
    }

    /**
     * Set the releve facture.
     *
     * @param bool $releveFacture The releve facture.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setReleveFacture($releveFacture) {
        $this->releveFacture = $releveFacture;
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
     * Set the resultat.
     *
     * @param float $resultat The resultat.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
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
     * Set the siege groupe.
     *
     * @param bool $siegeGroupe The siege groupe.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSiegeGroupe($siegeGroupe) {
        $this->siegeGroupe = $siegeGroupe;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool $soumisEscompte The soumis escompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the soumis port1.
     *
     * @param string $soumisPort1 The soumis port1.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisPort1($soumisPort1) {
        $this->soumisPort1 = $soumisPort1;
        return $this;
    }

    /**
     * Set the soumis port2.
     *
     * @param string $soumisPort2 The soumis port2.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisPort2($soumisPort2) {
        $this->soumisPort2 = $soumisPort2;
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
     * Set the soumis taxe4.
     *
     * @param bool $soumisTaxe4 The soumis taxe4.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe4($soumisTaxe4) {
        $this->soumisTaxe4 = $soumisTaxe4;
        return $this;
    }

    /**
     * Set the soumis taxe5.
     *
     * @param bool $soumisTaxe5 The soumis taxe5.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTaxe5($soumisTaxe5) {
        $this->soumisTaxe5 = $soumisTaxe5;
        return $this;
    }

    /**
     * Set the soumis tva.
     *
     * @param bool $soumisTva The soumis tva.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setSoumisTva($soumisTva) {
        $this->soumisTva = $soumisTva;
        return $this;
    }

    /**
     * Set the taux comm.
     *
     * @param float $tauxComm The taux comm.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTauxComm($tauxComm) {
        $this->tauxComm = $tauxComm;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the toutes activites.
     *
     * @param string $toutesActivites The toutes activites.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setToutesActivites($toutesActivites) {
        $this->toutesActivites = $toutesActivites;
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
     * Set the trs aff grp.
     *
     * @param bool $trsAffGrp The trs aff grp.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffGrp($trsAffGrp) {
        $this->trsAffGrp = $trsAffGrp;
        return $this;
    }

    /**
     * Set the trs aff mat dang.
     *
     * @param string $trsAffMatDang The trs aff mat dang.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffMatDang($trsAffMatDang) {
        $this->trsAffMatDang = $trsAffMatDang;
        return $this;
    }

    /**
     * Set the trs aff prod chim.
     *
     * @param string $trsAffProdChim The trs aff prod chim.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffProdChim($trsAffProdChim) {
        $this->trsAffProdChim = $trsAffProdChim;
        return $this;
    }

    /**
     * Set the trs aff refri.
     *
     * @param string $trsAffRefri The trs aff refri.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsAffRefri($trsAffRefri) {
        $this->trsAffRefri = $trsAffRefri;
        return $this;
    }

    /**
     * Set the trs code tarif.
     *
     * @param string $trsCodeTarif The trs code tarif.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsCodeTarif($trsCodeTarif) {
        $this->trsCodeTarif = $trsCodeTarif;
        return $this;
    }

    /**
     * Set the trs est un affrete.
     *
     * @param string $trsEstUnAffrete The trs est un affrete.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsEstUnAffrete($trsEstUnAffrete) {
        $this->trsEstUnAffrete = $trsEstUnAffrete;
        return $this;
    }

    /**
     * Set the trs gestion palettes.
     *
     * @param bool $trsGestionPalettes The trs gestion palettes.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsGestionPalettes($trsGestionPalettes) {
        $this->trsGestionPalettes = $trsGestionPalettes;
        return $this;
    }

    /**
     * Set the trs suivi planing aff.
     *
     * @param bool $trsSuiviPlaningAff The trs suivi planing aff.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrsSuiviPlaningAff($trsSuiviPlaningAff) {
        $this->trsSuiviPlaningAff = $trsSuiviPlaningAff;
        return $this;
    }

    /**
     * Set the trsp cent px trs.
     *
     * @param float $trspCentPxTrs The trsp cent px trs.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTrspCentPxTrs($trspCentPxTrs) {
        $this->trspCentPxTrs = $trspCentPxTrs;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string $tvaRegime The tva regime.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the type edit br.
     *
     * @param string $typeEditBr The type edit br.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTypeEditBr($typeEditBr) {
        $this->typeEditBr = $typeEditBr;
        return $this;
    }

    /**
     * Set the type fournisseur.
     *
     * @param string $typeFournisseur The type fournisseur.
     * @return Fournisseurs Returns this Fournisseurs.
     */
    public function setTypeFournisseur($typeFournisseur) {
        $this->typeFournisseur = $typeFournisseur;
        return $this;
    }
}
