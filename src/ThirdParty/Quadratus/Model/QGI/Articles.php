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
 * Articles.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Articles {

    /**
     * Achat par colis.
     *
     * @var bool
     */
    private $achatParColis;

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Allee casier.
     *
     * @var string
     */
    private $alleeCasier;

    /**
     * Article frais.
     *
     * @var bool
     */
    private $articleFrais;

    /**
     * Article rattache.
     *
     * @var string
     */
    private $articleRattache;

    /**
     * Article regroupement.
     *
     * @var string
     */
    private $articleRegroupement;

    /**
     * Article remplacement.
     *
     * @var string
     */
    private $articleRemplacement;

    /**
     * Article taxe1.
     *
     * @var string
     */
    private $articleTaxe1;

    /**
     * Article taxe2.
     *
     * @var string
     */
    private $articleTaxe2;

    /**
     * Article taxe3.
     *
     * @var string
     */
    private $articleTaxe3;

    /**
     * Article taxe4.
     *
     * @var string
     */
    private $articleTaxe4;

    /**
     * Article taxe5.
     *
     * @var string
     */
    private $articleTaxe5;

    /**
     * Calcul coeff pa pv.
     *
     * @var bool
     */
    private $calculCoeffPaPv;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code article2.
     *
     * @var string
     */
    private $codeArticle2;

    /**
     * Code devise achat.
     *
     * @var string
     */
    private $codeDeviseAchat;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code fournisseur.
     *
     * @var string
     */
    private $codeFournisseur;

    /**
     * Code gamme.
     *
     * @var string
     */
    private $codeGamme;

    /**
     * Code grille gamme.
     *
     * @var string
     */
    private $codeGrilleGamme;

    /**
     * Code honoraire.
     *
     * @var string
     */
    private $codeHonoraire;

    /**
     * Code imputation analytique.
     *
     * @var string
     */
    private $codeImputationAnalytique;

    /**
     * Code presentation.
     *
     * @var string
     */
    private $codePresentation;

    /**
     * Code ss famille.
     *
     * @var string
     */
    private $codeSsFamille;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Code tarif art.
     *
     * @var string
     */
    private $codeTarifArt;

    /**
     * Code taxe.
     *
     * @var string
     */
    private $codeTaxe;

    /**
     * Code tva achat.
     *
     * @var string
     */
    private $codeTvaAchat;

    /**
     * Code tva vente.
     *
     * @var string
     */
    private $codeTvaVente;

    /**
     * Code tva vente2.
     *
     * @var string
     */
    private $codeTvaVente2;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Code ventil achat.
     *
     * @var string
     */
    private $codeVentilAchat;

    /**
     * Code ventil vente.
     *
     * @var string
     */
    private $codeVentilVente;

    /**
     * Code ventil vente2.
     *
     * @var string
     */
    private $codeVentilVente2;

    /**
     * Coeff pv pa.
     *
     * @var float
     */
    private $coeffPvPa;

    /**
     * Coeff sur px achat.
     *
     * @var string
     */
    private $coeffSurPxAchat;

    /**
     * Coeff sur px achat brut.
     *
     * @var bool
     */
    private $coeffSurPxAchatBrut;

    /**
     * Colisage achat.
     *
     * @var float
     */
    private $colisageAchat;

    /**
     * Colisage px achat.
     *
     * @var float
     */
    private $colisagePxAchat;

    /**
     * Colisage px vente.
     *
     * @var float
     */
    private $colisagePxVente;

    /**
     * Colisage vente.
     *
     * @var float
     */
    private $colisageVente;

    /**
     * Commission unique.
     *
     * @var bool
     */
    private $commissionUnique;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Conditionnement1.
     *
     * @var float
     */
    private $conditionnement1;

    /**
     * Conditionnement2.
     *
     * @var float
     */
    private $conditionnement2;

    /**
     * Conditionnement3.
     *
     * @var float
     */
    private $conditionnement3;

    /**
     * Contremarque interdite.
     *
     * @var bool
     */
    private $contremarqueInterdite;

    /**
     * Cout supp.
     *
     * @var float
     */
    private $coutSupp;

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
     * Debour.
     *
     * @var bool
     */
    private $debour;

    /**
     * Dernier px achat.
     *
     * @var float
     */
    private $dernierPxAchat;

    /**
     * Designation apres.
     *
     * @var string
     */
    private $designationApres;

    /**
     * Designation avant.
     *
     * @var string
     */
    private $designationAvant;

    /**
     * Editer article rattache.
     *
     * @var bool
     */
    private $editerArticleRattache;

    /**
     * Editer article remplacement.
     *
     * @var bool
     */
    private $editerArticleRemplacement;

    /**
     * Ensemble.
     *
     * @var bool
     */
    private $ensemble;

    /**
     * Est multi tva.
     *
     * @var bool
     */
    private $estMultiTva;

    /**
     * Est occasion.
     *
     * @var bool
     */
    private $estOccasion;

    /**
     * Facturation ttc.
     *
     * @var bool
     */
    private $facturationTtc;

    /**
     * Famille achat.
     *
     * @var string
     */
    private $familleAchat;

    /**
     * Frais1.
     *
     * @var float
     */
    private $frais1;

    /**
     * Frais2.
     *
     * @var float
     */
    private $frais2;

    /**
     * Frais3.
     *
     * @var float
     */
    private $frais3;

    /**
     * Ha coeff pv pa.
     *
     * @var float
     */
    private $haCoeffPvPa;

    /**
     * Ha coeff sur px achat.
     *
     * @var string
     */
    private $haCoeffSurPxAchat;

    /**
     * Ha date pa.
     *
     * @var DateTime|null
     */
    private $haDatePa;

    /**
     * Ha date pv.
     *
     * @var DateTime|null
     */
    private $haDatePv;

    /**
     * Ha dernier px achat.
     *
     * @var float
     */
    private $haDernierPxAchat;

    /**
     * Ha prix revient.
     *
     * @var float
     */
    private $haPrixRevient;

    /**
     * Ha prix revient net.
     *
     * @var float
     */
    private $haPrixRevientNet;

    /**
     * Ha prix vente.
     *
     * @var float
     */
    private $haPrixVente;

    /**
     * Ha px achat brut.
     *
     * @var float
     */
    private $haPxAchatBrut;

    /**
     * Ha remise achat1.
     *
     * @var float
     */
    private $haRemiseAchat1;

    /**
     * Ha remise achat2.
     *
     * @var float
     */
    private $haRemiseAchat2;

    /**
     * Ha remise achat3.
     *
     * @var float
     */
    private $haRemiseAchat3;

    /**
     * Ha remise sup achat1.
     *
     * @var float
     */
    private $haRemiseSupAchat1;

    /**
     * Ha remise sup achat2.
     *
     * @var float
     */
    private $haRemiseSupAchat2;

    /**
     * Ha remise sup achat3.
     *
     * @var float
     */
    private $haRemiseSupAchat3;

    /**
     * Hauteur.
     *
     * @var float
     */
    private $hauteur;

    /**
     * Honoraires.
     *
     * @var bool
     */
    private $honoraires;

    /**
     * Honoraires uniquement.
     *
     * @var bool
     */
    private $honorairesUniquement;

    /**
     * Hors stock.
     *
     * @var bool
     */
    private $horsStock;

    /**
     * Intitule1.
     *
     * @var string
     */
    private $intitule1;

    /**
     * Intitule2.
     *
     * @var string
     */
    private $intitule2;

    /**
     * Intitule3.
     *
     * @var string
     */
    private $intitule3;

    /**
     * Intitule4.
     *
     * @var string
     */
    private $intitule4;

    /**
     * Largeur.
     *
     * @var float
     */
    private $largeur;

    /**
     * Libelle interne.
     *
     * @var string
     */
    private $libelleInterne;

    /**
     * Longueur.
     *
     * @var float
     */
    private $longueur;

    /**
     * Lot serie autre.
     *
     * @var bool
     */
    private $lotSerieAutre;

    /**
     * Marge mini.
     *
     * @var float
     */
    private $margeMini;

    /**
     * Mini facturable.
     *
     * @var float
     */
    private $miniFacturable;

    /**
     * Modele code barre.
     *
     * @var string
     */
    private $modeleCodeBarre;

    /**
     * Modele code barre f.
     *
     * @var string
     */
    private $modeleCodeBarreF;

    /**
     * Mt soumis tva2.
     *
     * @var float
     */
    private $mtSoumisTva2;

    /**
     * Mt tare.
     *
     * @var float
     */
    private $mtTare;

    /**
     * Multi tva avec remises.
     *
     * @var bool
     */
    private $multiTvaAvecRemises;

    /**
     * Nature produit.
     *
     * @var string
     */
    private $natureProduit;

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Ne pas cumuler stats.
     *
     * @var bool
     */
    private $nePasCumulerStats;

    /**
     * Ne pas editer.
     *
     * @var bool
     */
    private $nePasEditer;

    /**
     * Ne plus commander.
     *
     * @var bool
     */
    private $nePlusCommander;

    /**
     * Neutre.
     *
     * @var bool
     */
    private $neutre;

    /**
     * Niveau apparition.
     *
     * @var int
     */
    private $niveauApparition;

    /**
     * Niveau totalisation.
     *
     * @var string
     */
    private $niveauTotalisation;

    /**
     * Nomenclature ensemble.
     *
     * @var bool
     */
    private $nomenclatureEnsemble;

    /**
     * Nomenclature europe.
     *
     * @var string
     */
    private $nomenclatureEurope;

    /**
     * Num compte achat.
     *
     * @var string
     */
    private $numCompteAchat;

    /**
     * Num compte vente.
     *
     * @var string
     */
    private $numCompteVente;

    /**
     * Numero pj.
     *
     * @var int
     */
    private $numeroPj;

    /**
     * Pamp.
     *
     * @var float
     */
    private $pamp;

    /**
     * Param cde.
     *
     * @var float
     */
    private $paramCde;

    /**
     * Poids unitaire.
     *
     * @var float
     */
    private $poidsUnitaire;

    /**
     * Prix achat ckp.
     *
     * @var string
     */
    private $prixAchatCkp;

    /**
     * Prix fixe.
     *
     * @var bool
     */
    private $prixFixe;

    /**
     * Prix mini.
     *
     * @var float
     */
    private $prixMini;

    /**
     * Prix net.
     *
     * @var bool
     */
    private $prixNet;

    /**
     * Prix revient.
     *
     * @var float
     */
    private $prixRevient;

    /**
     * Prix revient net.
     *
     * @var float
     */
    private $prixRevientNet;

    /**
     * Prix vente ckp.
     *
     * @var string
     */
    private $prixVenteCkp;

    /**
     * Prmp.
     *
     * @var float
     */
    private $prmp;

    /**
     * Provenance.
     *
     * @var string
     */
    private $provenance;

    /**
     * Px achat brut.
     *
     * @var float
     */
    private $pxAchatBrut;

    /**
     * Px achat colis.
     *
     * @var bool
     */
    private $pxAchatColis;

    /**
     * Px achat en devise.
     *
     * @var float
     */
    private $pxAchatEnDevise;

    /**
     * Px unit a editer.
     *
     * @var bool
     */
    private $pxUnitAEditer;

    /**
     * Px vente colis.
     *
     * @var bool
     */
    private $pxVenteColis;

    /**
     * Px vente ht euro.
     *
     * @var float
     */
    private $pxVenteHtEuro;

    /**
     * Px vente ht frf.
     *
     * @var float
     */
    private $pxVenteHtFrf;

    /**
     * Px vente ttc euro.
     *
     * @var float
     */
    private $pxVenteTtcEuro;

    /**
     * Px vente ttc frf.
     *
     * @var float
     */
    private $pxVenteTtcFrf;

    /**
     * Qte a editer.
     *
     * @var bool
     */
    private $qteAEditer;

    /**
     * Qte eco commande.
     *
     * @var float
     */
    private $qteEcoCommande;

    /**
     * Qte hab commande.
     *
     * @var float
     */
    private $qteHabCommande;

    /**
     * Qte max facture.
     *
     * @var float
     */
    private $qteMaxFacture;

    /**
     * Qte min commande.
     *
     * @var float
     */
    private $qteMinCommande;

    /**
     * Regroup fact.
     *
     * @var string
     */
    private $regroupFact;

    /**
     * Regroup fact tp.
     *
     * @var int
     */
    private $regroupFactTp;

    /**
     * Remise1en montant.
     *
     * @var bool
     */
    private $remise1enMontant;

    /**
     * Remise2en montant.
     *
     * @var bool
     */
    private $remise2enMontant;

    /**
     * Remise achat1.
     *
     * @var float
     */
    private $remiseAchat1;

    /**
     * Remise achat2.
     *
     * @var float
     */
    private $remiseAchat2;

    /**
     * Remise achat3.
     *
     * @var float
     */
    private $remiseAchat3;

    /**
     * Remise sup achat1.
     *
     * @var float
     */
    private $remiseSupAchat1;

    /**
     * Remise sup achat1 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat1EnMontant;

    /**
     * Remise sup achat2.
     *
     * @var float
     */
    private $remiseSupAchat2;

    /**
     * Remise sup achat2 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat2EnMontant;

    /**
     * Remise sup achat3.
     *
     * @var float
     */
    private $remiseSupAchat3;

    /**
     * Remise sup achat3 en montant.
     *
     * @var bool
     */
    private $remiseSupAchat3EnMontant;

    /**
     * Remises interdites.
     *
     * @var bool
     */
    private $remisesInterdites;

    /**
     * Soumis certif.
     *
     * @var bool
     */
    private $soumisCertif;

    /**
     * Ss famille achat.
     *
     * @var string
     */
    private $ssFamilleAchat;

    /**
     * Suivi stock.
     *
     * @var bool
     */
    private $suiviStock;

    /**
     * Tare vat.
     *
     * @var string
     */
    private $tareVat;

    /**
     * Taux alcool.
     *
     * @var float
     */
    private $tauxAlcool;

    /**
     * Taux devise achat.
     *
     * @var float
     */
    private $tauxDeviseAchat;

    /**
     * Tva encaissement.
     *
     * @var bool
     */
    private $tvaEncaissement;

    /**
     * Tx commission.
     *
     * @var float
     */
    private $txCommission;

    /**
     * Type arrondi.
     *
     * @var string
     */
    private $typeArrondi;

    /**
     * Type heure.
     *
     * @var bool
     */
    private $typeHeure;

    /**
     * Type unite.
     *
     * @var string
     */
    private $typeUnite;

    /**
     * Unite activite.
     *
     * @var bool
     */
    private $uniteActivite;

    /**
     * Variante.
     *
     * @var bool
     */
    private $variante;

    /**
     * Vente par colis.
     *
     * @var bool
     */
    private $venteParColis;

    /**
     * Volume.
     *
     * @var float
     */
    private $volume;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the achat par colis.
     *
     * @return bool Returns the achat par colis.
     */
    public function getAchatParColis() {
        return $this->achatParColis;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the allee casier.
     *
     * @return string Returns the allee casier.
     */
    public function getAlleeCasier() {
        return $this->alleeCasier;
    }

    /**
     * Get the article frais.
     *
     * @return bool Returns the article frais.
     */
    public function getArticleFrais() {
        return $this->articleFrais;
    }

    /**
     * Get the article rattache.
     *
     * @return string Returns the article rattache.
     */
    public function getArticleRattache() {
        return $this->articleRattache;
    }

    /**
     * Get the article regroupement.
     *
     * @return string Returns the article regroupement.
     */
    public function getArticleRegroupement() {
        return $this->articleRegroupement;
    }

    /**
     * Get the article remplacement.
     *
     * @return string Returns the article remplacement.
     */
    public function getArticleRemplacement() {
        return $this->articleRemplacement;
    }

    /**
     * Get the article taxe1.
     *
     * @return string Returns the article taxe1.
     */
    public function getArticleTaxe1() {
        return $this->articleTaxe1;
    }

    /**
     * Get the article taxe2.
     *
     * @return string Returns the article taxe2.
     */
    public function getArticleTaxe2() {
        return $this->articleTaxe2;
    }

    /**
     * Get the article taxe3.
     *
     * @return string Returns the article taxe3.
     */
    public function getArticleTaxe3() {
        return $this->articleTaxe3;
    }

    /**
     * Get the article taxe4.
     *
     * @return string Returns the article taxe4.
     */
    public function getArticleTaxe4() {
        return $this->articleTaxe4;
    }

    /**
     * Get the article taxe5.
     *
     * @return string Returns the article taxe5.
     */
    public function getArticleTaxe5() {
        return $this->articleTaxe5;
    }

    /**
     * Get the calcul coeff pa pv.
     *
     * @return bool Returns the calcul coeff pa pv.
     */
    public function getCalculCoeffPaPv() {
        return $this->calculCoeffPaPv;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code article2.
     *
     * @return string Returns the code article2.
     */
    public function getCodeArticle2() {
        return $this->codeArticle2;
    }

    /**
     * Get the code devise achat.
     *
     * @return string Returns the code devise achat.
     */
    public function getCodeDeviseAchat() {
        return $this->codeDeviseAchat;
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
     * Get the code fournisseur.
     *
     * @return string Returns the code fournisseur.
     */
    public function getCodeFournisseur() {
        return $this->codeFournisseur;
    }

    /**
     * Get the code gamme.
     *
     * @return string Returns the code gamme.
     */
    public function getCodeGamme() {
        return $this->codeGamme;
    }

    /**
     * Get the code grille gamme.
     *
     * @return string Returns the code grille gamme.
     */
    public function getCodeGrilleGamme() {
        return $this->codeGrilleGamme;
    }

    /**
     * Get the code honoraire.
     *
     * @return string Returns the code honoraire.
     */
    public function getCodeHonoraire() {
        return $this->codeHonoraire;
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
     * Get the code presentation.
     *
     * @return string Returns the code presentation.
     */
    public function getCodePresentation() {
        return $this->codePresentation;
    }

    /**
     * Get the code ss famille.
     *
     * @return string Returns the code ss famille.
     */
    public function getCodeSsFamille() {
        return $this->codeSsFamille;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the code tarif art.
     *
     * @return string Returns the code tarif art.
     */
    public function getCodeTarifArt() {
        return $this->codeTarifArt;
    }

    /**
     * Get the code taxe.
     *
     * @return string Returns the code taxe.
     */
    public function getCodeTaxe() {
        return $this->codeTaxe;
    }

    /**
     * Get the code tva achat.
     *
     * @return string Returns the code tva achat.
     */
    public function getCodeTvaAchat() {
        return $this->codeTvaAchat;
    }

    /**
     * Get the code tva vente.
     *
     * @return string Returns the code tva vente.
     */
    public function getCodeTvaVente() {
        return $this->codeTvaVente;
    }

    /**
     * Get the code tva vente2.
     *
     * @return string Returns the code tva vente2.
     */
    public function getCodeTvaVente2() {
        return $this->codeTvaVente2;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the code ventil achat.
     *
     * @return string Returns the code ventil achat.
     */
    public function getCodeVentilAchat() {
        return $this->codeVentilAchat;
    }

    /**
     * Get the code ventil vente.
     *
     * @return string Returns the code ventil vente.
     */
    public function getCodeVentilVente() {
        return $this->codeVentilVente;
    }

    /**
     * Get the code ventil vente2.
     *
     * @return string Returns the code ventil vente2.
     */
    public function getCodeVentilVente2() {
        return $this->codeVentilVente2;
    }

    /**
     * Get the coeff pv pa.
     *
     * @return float Returns the coeff pv pa.
     */
    public function getCoeffPvPa() {
        return $this->coeffPvPa;
    }

    /**
     * Get the coeff sur px achat.
     *
     * @return string Returns the coeff sur px achat.
     */
    public function getCoeffSurPxAchat() {
        return $this->coeffSurPxAchat;
    }

    /**
     * Get the coeff sur px achat brut.
     *
     * @return bool Returns the coeff sur px achat brut.
     */
    public function getCoeffSurPxAchatBrut() {
        return $this->coeffSurPxAchatBrut;
    }

    /**
     * Get the colisage achat.
     *
     * @return float Returns the colisage achat.
     */
    public function getColisageAchat() {
        return $this->colisageAchat;
    }

    /**
     * Get the colisage px achat.
     *
     * @return float Returns the colisage px achat.
     */
    public function getColisagePxAchat() {
        return $this->colisagePxAchat;
    }

    /**
     * Get the colisage px vente.
     *
     * @return float Returns the colisage px vente.
     */
    public function getColisagePxVente() {
        return $this->colisagePxVente;
    }

    /**
     * Get the colisage vente.
     *
     * @return float Returns the colisage vente.
     */
    public function getColisageVente() {
        return $this->colisageVente;
    }

    /**
     * Get the commission unique.
     *
     * @return bool Returns the commission unique.
     */
    public function getCommissionUnique() {
        return $this->commissionUnique;
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
     * Get the conditionnement1.
     *
     * @return float Returns the conditionnement1.
     */
    public function getConditionnement1() {
        return $this->conditionnement1;
    }

    /**
     * Get the conditionnement2.
     *
     * @return float Returns the conditionnement2.
     */
    public function getConditionnement2() {
        return $this->conditionnement2;
    }

    /**
     * Get the conditionnement3.
     *
     * @return float Returns the conditionnement3.
     */
    public function getConditionnement3() {
        return $this->conditionnement3;
    }

    /**
     * Get the contremarque interdite.
     *
     * @return bool Returns the contremarque interdite.
     */
    public function getContremarqueInterdite() {
        return $this->contremarqueInterdite;
    }

    /**
     * Get the cout supp.
     *
     * @return float Returns the cout supp.
     */
    public function getCoutSupp() {
        return $this->coutSupp;
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
     * Get the debour.
     *
     * @return bool Returns the debour.
     */
    public function getDebour() {
        return $this->debour;
    }

    /**
     * Get the dernier px achat.
     *
     * @return float Returns the dernier px achat.
     */
    public function getDernierPxAchat() {
        return $this->dernierPxAchat;
    }

    /**
     * Get the designation apres.
     *
     * @return string Returns the designation apres.
     */
    public function getDesignationApres() {
        return $this->designationApres;
    }

    /**
     * Get the designation avant.
     *
     * @return string Returns the designation avant.
     */
    public function getDesignationAvant() {
        return $this->designationAvant;
    }

    /**
     * Get the editer article rattache.
     *
     * @return bool Returns the editer article rattache.
     */
    public function getEditerArticleRattache() {
        return $this->editerArticleRattache;
    }

    /**
     * Get the editer article remplacement.
     *
     * @return bool Returns the editer article remplacement.
     */
    public function getEditerArticleRemplacement() {
        return $this->editerArticleRemplacement;
    }

    /**
     * Get the ensemble.
     *
     * @return bool Returns the ensemble.
     */
    public function getEnsemble() {
        return $this->ensemble;
    }

    /**
     * Get the est multi tva.
     *
     * @return bool Returns the est multi tva.
     */
    public function getEstMultiTva() {
        return $this->estMultiTva;
    }

    /**
     * Get the est occasion.
     *
     * @return bool Returns the est occasion.
     */
    public function getEstOccasion() {
        return $this->estOccasion;
    }

    /**
     * Get the facturation ttc.
     *
     * @return bool Returns the facturation ttc.
     */
    public function getFacturationTtc() {
        return $this->facturationTtc;
    }

    /**
     * Get the famille achat.
     *
     * @return string Returns the famille achat.
     */
    public function getFamilleAchat() {
        return $this->familleAchat;
    }

    /**
     * Get the frais1.
     *
     * @return float Returns the frais1.
     */
    public function getFrais1() {
        return $this->frais1;
    }

    /**
     * Get the frais2.
     *
     * @return float Returns the frais2.
     */
    public function getFrais2() {
        return $this->frais2;
    }

    /**
     * Get the frais3.
     *
     * @return float Returns the frais3.
     */
    public function getFrais3() {
        return $this->frais3;
    }

    /**
     * Get the ha coeff pv pa.
     *
     * @return float Returns the ha coeff pv pa.
     */
    public function getHaCoeffPvPa() {
        return $this->haCoeffPvPa;
    }

    /**
     * Get the ha coeff sur px achat.
     *
     * @return string Returns the ha coeff sur px achat.
     */
    public function getHaCoeffSurPxAchat() {
        return $this->haCoeffSurPxAchat;
    }

    /**
     * Get the ha date pa.
     *
     * @return DateTime|null Returns the ha date pa.
     */
    public function getHaDatePa() {
        return $this->haDatePa;
    }

    /**
     * Get the ha date pv.
     *
     * @return DateTime|null Returns the ha date pv.
     */
    public function getHaDatePv() {
        return $this->haDatePv;
    }

    /**
     * Get the ha dernier px achat.
     *
     * @return float Returns the ha dernier px achat.
     */
    public function getHaDernierPxAchat() {
        return $this->haDernierPxAchat;
    }

    /**
     * Get the ha prix revient.
     *
     * @return float Returns the ha prix revient.
     */
    public function getHaPrixRevient() {
        return $this->haPrixRevient;
    }

    /**
     * Get the ha prix revient net.
     *
     * @return float Returns the ha prix revient net.
     */
    public function getHaPrixRevientNet() {
        return $this->haPrixRevientNet;
    }

    /**
     * Get the ha prix vente.
     *
     * @return float Returns the ha prix vente.
     */
    public function getHaPrixVente() {
        return $this->haPrixVente;
    }

    /**
     * Get the ha px achat brut.
     *
     * @return float Returns the ha px achat brut.
     */
    public function getHaPxAchatBrut() {
        return $this->haPxAchatBrut;
    }

    /**
     * Get the ha remise achat1.
     *
     * @return float Returns the ha remise achat1.
     */
    public function getHaRemiseAchat1() {
        return $this->haRemiseAchat1;
    }

    /**
     * Get the ha remise achat2.
     *
     * @return float Returns the ha remise achat2.
     */
    public function getHaRemiseAchat2() {
        return $this->haRemiseAchat2;
    }

    /**
     * Get the ha remise achat3.
     *
     * @return float Returns the ha remise achat3.
     */
    public function getHaRemiseAchat3() {
        return $this->haRemiseAchat3;
    }

    /**
     * Get the ha remise sup achat1.
     *
     * @return float Returns the ha remise sup achat1.
     */
    public function getHaRemiseSupAchat1() {
        return $this->haRemiseSupAchat1;
    }

    /**
     * Get the ha remise sup achat2.
     *
     * @return float Returns the ha remise sup achat2.
     */
    public function getHaRemiseSupAchat2() {
        return $this->haRemiseSupAchat2;
    }

    /**
     * Get the ha remise sup achat3.
     *
     * @return float Returns the ha remise sup achat3.
     */
    public function getHaRemiseSupAchat3() {
        return $this->haRemiseSupAchat3;
    }

    /**
     * Get the hauteur.
     *
     * @return float Returns the hauteur.
     */
    public function getHauteur() {
        return $this->hauteur;
    }

    /**
     * Get the honoraires.
     *
     * @return bool Returns the honoraires.
     */
    public function getHonoraires() {
        return $this->honoraires;
    }

    /**
     * Get the honoraires uniquement.
     *
     * @return bool Returns the honoraires uniquement.
     */
    public function getHonorairesUniquement() {
        return $this->honorairesUniquement;
    }

    /**
     * Get the hors stock.
     *
     * @return bool Returns the hors stock.
     */
    public function getHorsStock() {
        return $this->horsStock;
    }

    /**
     * Get the intitule1.
     *
     * @return string Returns the intitule1.
     */
    public function getIntitule1() {
        return $this->intitule1;
    }

    /**
     * Get the intitule2.
     *
     * @return string Returns the intitule2.
     */
    public function getIntitule2() {
        return $this->intitule2;
    }

    /**
     * Get the intitule3.
     *
     * @return string Returns the intitule3.
     */
    public function getIntitule3() {
        return $this->intitule3;
    }

    /**
     * Get the intitule4.
     *
     * @return string Returns the intitule4.
     */
    public function getIntitule4() {
        return $this->intitule4;
    }

    /**
     * Get the largeur.
     *
     * @return float Returns the largeur.
     */
    public function getLargeur() {
        return $this->largeur;
    }

    /**
     * Get the libelle interne.
     *
     * @return string Returns the libelle interne.
     */
    public function getLibelleInterne() {
        return $this->libelleInterne;
    }

    /**
     * Get the longueur.
     *
     * @return float Returns the longueur.
     */
    public function getLongueur() {
        return $this->longueur;
    }

    /**
     * Get the lot serie autre.
     *
     * @return bool Returns the lot serie autre.
     */
    public function getLotSerieAutre() {
        return $this->lotSerieAutre;
    }

    /**
     * Get the marge mini.
     *
     * @return float Returns the marge mini.
     */
    public function getMargeMini() {
        return $this->margeMini;
    }

    /**
     * Get the mini facturable.
     *
     * @return float Returns the mini facturable.
     */
    public function getMiniFacturable() {
        return $this->miniFacturable;
    }

    /**
     * Get the modele code barre.
     *
     * @return string Returns the modele code barre.
     */
    public function getModeleCodeBarre() {
        return $this->modeleCodeBarre;
    }

    /**
     * Get the modele code barre f.
     *
     * @return string Returns the modele code barre f.
     */
    public function getModeleCodeBarreF() {
        return $this->modeleCodeBarreF;
    }

    /**
     * Get the mt soumis tva2.
     *
     * @return float Returns the mt soumis tva2.
     */
    public function getMtSoumisTva2() {
        return $this->mtSoumisTva2;
    }

    /**
     * Get the mt tare.
     *
     * @return float Returns the mt tare.
     */
    public function getMtTare() {
        return $this->mtTare;
    }

    /**
     * Get the multi tva avec remises.
     *
     * @return bool Returns the multi tva avec remises.
     */
    public function getMultiTvaAvecRemises() {
        return $this->multiTvaAvecRemises;
    }

    /**
     * Get the nature produit.
     *
     * @return string Returns the nature produit.
     */
    public function getNatureProduit() {
        return $this->natureProduit;
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
     * Get the ne pas cumuler stats.
     *
     * @return bool Returns the ne pas cumuler stats.
     */
    public function getNePasCumulerStats() {
        return $this->nePasCumulerStats;
    }

    /**
     * Get the ne pas editer.
     *
     * @return bool Returns the ne pas editer.
     */
    public function getNePasEditer() {
        return $this->nePasEditer;
    }

    /**
     * Get the ne plus commander.
     *
     * @return bool Returns the ne plus commander.
     */
    public function getNePlusCommander() {
        return $this->nePlusCommander;
    }

    /**
     * Get the neutre.
     *
     * @return bool Returns the neutre.
     */
    public function getNeutre() {
        return $this->neutre;
    }

    /**
     * Get the niveau apparition.
     *
     * @return int Returns the niveau apparition.
     */
    public function getNiveauApparition() {
        return $this->niveauApparition;
    }

    /**
     * Get the niveau totalisation.
     *
     * @return string Returns the niveau totalisation.
     */
    public function getNiveauTotalisation() {
        return $this->niveauTotalisation;
    }

    /**
     * Get the nomenclature ensemble.
     *
     * @return bool Returns the nomenclature ensemble.
     */
    public function getNomenclatureEnsemble() {
        return $this->nomenclatureEnsemble;
    }

    /**
     * Get the nomenclature europe.
     *
     * @return string Returns the nomenclature europe.
     */
    public function getNomenclatureEurope() {
        return $this->nomenclatureEurope;
    }

    /**
     * Get the num compte achat.
     *
     * @return string Returns the num compte achat.
     */
    public function getNumCompteAchat() {
        return $this->numCompteAchat;
    }

    /**
     * Get the num compte vente.
     *
     * @return string Returns the num compte vente.
     */
    public function getNumCompteVente() {
        return $this->numCompteVente;
    }

    /**
     * Get the numero pj.
     *
     * @return int Returns the numero pj.
     */
    public function getNumeroPj() {
        return $this->numeroPj;
    }

    /**
     * Get the pamp.
     *
     * @return float Returns the pamp.
     */
    public function getPamp() {
        return $this->pamp;
    }

    /**
     * Get the param cde.
     *
     * @return float Returns the param cde.
     */
    public function getParamCde() {
        return $this->paramCde;
    }

    /**
     * Get the poids unitaire.
     *
     * @return float Returns the poids unitaire.
     */
    public function getPoidsUnitaire() {
        return $this->poidsUnitaire;
    }

    /**
     * Get the prix achat ckp.
     *
     * @return string Returns the prix achat ckp.
     */
    public function getPrixAchatCkp() {
        return $this->prixAchatCkp;
    }

    /**
     * Get the prix fixe.
     *
     * @return bool Returns the prix fixe.
     */
    public function getPrixFixe() {
        return $this->prixFixe;
    }

    /**
     * Get the prix mini.
     *
     * @return float Returns the prix mini.
     */
    public function getPrixMini() {
        return $this->prixMini;
    }

    /**
     * Get the prix net.
     *
     * @return bool Returns the prix net.
     */
    public function getPrixNet() {
        return $this->prixNet;
    }

    /**
     * Get the prix revient.
     *
     * @return float Returns the prix revient.
     */
    public function getPrixRevient() {
        return $this->prixRevient;
    }

    /**
     * Get the prix revient net.
     *
     * @return float Returns the prix revient net.
     */
    public function getPrixRevientNet() {
        return $this->prixRevientNet;
    }

    /**
     * Get the prix vente ckp.
     *
     * @return string Returns the prix vente ckp.
     */
    public function getPrixVenteCkp() {
        return $this->prixVenteCkp;
    }

    /**
     * Get the prmp.
     *
     * @return float Returns the prmp.
     */
    public function getPrmp() {
        return $this->prmp;
    }

    /**
     * Get the provenance.
     *
     * @return string Returns the provenance.
     */
    public function getProvenance() {
        return $this->provenance;
    }

    /**
     * Get the px achat brut.
     *
     * @return float Returns the px achat brut.
     */
    public function getPxAchatBrut() {
        return $this->pxAchatBrut;
    }

    /**
     * Get the px achat colis.
     *
     * @return bool Returns the px achat colis.
     */
    public function getPxAchatColis() {
        return $this->pxAchatColis;
    }

    /**
     * Get the px achat en devise.
     *
     * @return float Returns the px achat en devise.
     */
    public function getPxAchatEnDevise() {
        return $this->pxAchatEnDevise;
    }

    /**
     * Get the px unit a editer.
     *
     * @return bool Returns the px unit a editer.
     */
    public function getPxUnitAEditer() {
        return $this->pxUnitAEditer;
    }

    /**
     * Get the px vente colis.
     *
     * @return bool Returns the px vente colis.
     */
    public function getPxVenteColis() {
        return $this->pxVenteColis;
    }

    /**
     * Get the px vente ht euro.
     *
     * @return float Returns the px vente ht euro.
     */
    public function getPxVenteHtEuro() {
        return $this->pxVenteHtEuro;
    }

    /**
     * Get the px vente ht frf.
     *
     * @return float Returns the px vente ht frf.
     */
    public function getPxVenteHtFrf() {
        return $this->pxVenteHtFrf;
    }

    /**
     * Get the px vente ttc euro.
     *
     * @return float Returns the px vente ttc euro.
     */
    public function getPxVenteTtcEuro() {
        return $this->pxVenteTtcEuro;
    }

    /**
     * Get the px vente ttc frf.
     *
     * @return float Returns the px vente ttc frf.
     */
    public function getPxVenteTtcFrf() {
        return $this->pxVenteTtcFrf;
    }

    /**
     * Get the qte a editer.
     *
     * @return bool Returns the qte a editer.
     */
    public function getQteAEditer() {
        return $this->qteAEditer;
    }

    /**
     * Get the qte eco commande.
     *
     * @return float Returns the qte eco commande.
     */
    public function getQteEcoCommande() {
        return $this->qteEcoCommande;
    }

    /**
     * Get the qte hab commande.
     *
     * @return float Returns the qte hab commande.
     */
    public function getQteHabCommande() {
        return $this->qteHabCommande;
    }

    /**
     * Get the qte max facture.
     *
     * @return float Returns the qte max facture.
     */
    public function getQteMaxFacture() {
        return $this->qteMaxFacture;
    }

    /**
     * Get the qte min commande.
     *
     * @return float Returns the qte min commande.
     */
    public function getQteMinCommande() {
        return $this->qteMinCommande;
    }

    /**
     * Get the regroup fact.
     *
     * @return string Returns the regroup fact.
     */
    public function getRegroupFact() {
        return $this->regroupFact;
    }

    /**
     * Get the regroup fact tp.
     *
     * @return int Returns the regroup fact tp.
     */
    public function getRegroupFactTp() {
        return $this->regroupFactTp;
    }

    /**
     * Get the remise1en montant.
     *
     * @return bool Returns the remise1en montant.
     */
    public function getRemise1enMontant() {
        return $this->remise1enMontant;
    }

    /**
     * Get the remise2en montant.
     *
     * @return bool Returns the remise2en montant.
     */
    public function getRemise2enMontant() {
        return $this->remise2enMontant;
    }

    /**
     * Get the remise achat1.
     *
     * @return float Returns the remise achat1.
     */
    public function getRemiseAchat1() {
        return $this->remiseAchat1;
    }

    /**
     * Get the remise achat2.
     *
     * @return float Returns the remise achat2.
     */
    public function getRemiseAchat2() {
        return $this->remiseAchat2;
    }

    /**
     * Get the remise achat3.
     *
     * @return float Returns the remise achat3.
     */
    public function getRemiseAchat3() {
        return $this->remiseAchat3;
    }

    /**
     * Get the remise sup achat1.
     *
     * @return float Returns the remise sup achat1.
     */
    public function getRemiseSupAchat1() {
        return $this->remiseSupAchat1;
    }

    /**
     * Get the remise sup achat1 en montant.
     *
     * @return bool Returns the remise sup achat1 en montant.
     */
    public function getRemiseSupAchat1EnMontant() {
        return $this->remiseSupAchat1EnMontant;
    }

    /**
     * Get the remise sup achat2.
     *
     * @return float Returns the remise sup achat2.
     */
    public function getRemiseSupAchat2() {
        return $this->remiseSupAchat2;
    }

    /**
     * Get the remise sup achat2 en montant.
     *
     * @return bool Returns the remise sup achat2 en montant.
     */
    public function getRemiseSupAchat2EnMontant() {
        return $this->remiseSupAchat2EnMontant;
    }

    /**
     * Get the remise sup achat3.
     *
     * @return float Returns the remise sup achat3.
     */
    public function getRemiseSupAchat3() {
        return $this->remiseSupAchat3;
    }

    /**
     * Get the remise sup achat3 en montant.
     *
     * @return bool Returns the remise sup achat3 en montant.
     */
    public function getRemiseSupAchat3EnMontant() {
        return $this->remiseSupAchat3EnMontant;
    }

    /**
     * Get the remises interdites.
     *
     * @return bool Returns the remises interdites.
     */
    public function getRemisesInterdites() {
        return $this->remisesInterdites;
    }

    /**
     * Get the soumis certif.
     *
     * @return bool Returns the soumis certif.
     */
    public function getSoumisCertif() {
        return $this->soumisCertif;
    }

    /**
     * Get the ss famille achat.
     *
     * @return string Returns the ss famille achat.
     */
    public function getSsFamilleAchat() {
        return $this->ssFamilleAchat;
    }

    /**
     * Get the suivi stock.
     *
     * @return bool Returns the suivi stock.
     */
    public function getSuiviStock() {
        return $this->suiviStock;
    }

    /**
     * Get the tare vat.
     *
     * @return string Returns the tare vat.
     */
    public function getTareVat() {
        return $this->tareVat;
    }

    /**
     * Get the taux alcool.
     *
     * @return float Returns the taux alcool.
     */
    public function getTauxAlcool() {
        return $this->tauxAlcool;
    }

    /**
     * Get the taux devise achat.
     *
     * @return float Returns the taux devise achat.
     */
    public function getTauxDeviseAchat() {
        return $this->tauxDeviseAchat;
    }

    /**
     * Get the tva encaissement.
     *
     * @return bool Returns the tva encaissement.
     */
    public function getTvaEncaissement() {
        return $this->tvaEncaissement;
    }

    /**
     * Get the tx commission.
     *
     * @return float Returns the tx commission.
     */
    public function getTxCommission() {
        return $this->txCommission;
    }

    /**
     * Get the type arrondi.
     *
     * @return string Returns the type arrondi.
     */
    public function getTypeArrondi() {
        return $this->typeArrondi;
    }

    /**
     * Get the type heure.
     *
     * @return bool Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Get the type unite.
     *
     * @return string Returns the type unite.
     */
    public function getTypeUnite() {
        return $this->typeUnite;
    }

    /**
     * Get the unite activite.
     *
     * @return bool Returns the unite activite.
     */
    public function getUniteActivite() {
        return $this->uniteActivite;
    }

    /**
     * Get the variante.
     *
     * @return bool Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Get the vente par colis.
     *
     * @return bool Returns the vente par colis.
     */
    public function getVenteParColis() {
        return $this->venteParColis;
    }

    /**
     * Get the volume.
     *
     * @return float Returns the volume.
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * Set the achat par colis.
     *
     * @param bool $achatParColis The achat par colis.
     */
    public function setAchatParColis($achatParColis) {
        $this->achatParColis = $achatParColis;
        return $this;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the allee casier.
     *
     * @param string $alleeCasier The allee casier.
     */
    public function setAlleeCasier($alleeCasier) {
        $this->alleeCasier = $alleeCasier;
        return $this;
    }

    /**
     * Set the article frais.
     *
     * @param bool $articleFrais The article frais.
     */
    public function setArticleFrais($articleFrais) {
        $this->articleFrais = $articleFrais;
        return $this;
    }

    /**
     * Set the article rattache.
     *
     * @param string $articleRattache The article rattache.
     */
    public function setArticleRattache($articleRattache) {
        $this->articleRattache = $articleRattache;
        return $this;
    }

    /**
     * Set the article regroupement.
     *
     * @param string $articleRegroupement The article regroupement.
     */
    public function setArticleRegroupement($articleRegroupement) {
        $this->articleRegroupement = $articleRegroupement;
        return $this;
    }

    /**
     * Set the article remplacement.
     *
     * @param string $articleRemplacement The article remplacement.
     */
    public function setArticleRemplacement($articleRemplacement) {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }

    /**
     * Set the article taxe1.
     *
     * @param string $articleTaxe1 The article taxe1.
     */
    public function setArticleTaxe1($articleTaxe1) {
        $this->articleTaxe1 = $articleTaxe1;
        return $this;
    }

    /**
     * Set the article taxe2.
     *
     * @param string $articleTaxe2 The article taxe2.
     */
    public function setArticleTaxe2($articleTaxe2) {
        $this->articleTaxe2 = $articleTaxe2;
        return $this;
    }

    /**
     * Set the article taxe3.
     *
     * @param string $articleTaxe3 The article taxe3.
     */
    public function setArticleTaxe3($articleTaxe3) {
        $this->articleTaxe3 = $articleTaxe3;
        return $this;
    }

    /**
     * Set the article taxe4.
     *
     * @param string $articleTaxe4 The article taxe4.
     */
    public function setArticleTaxe4($articleTaxe4) {
        $this->articleTaxe4 = $articleTaxe4;
        return $this;
    }

    /**
     * Set the article taxe5.
     *
     * @param string $articleTaxe5 The article taxe5.
     */
    public function setArticleTaxe5($articleTaxe5) {
        $this->articleTaxe5 = $articleTaxe5;
        return $this;
    }

    /**
     * Set the calcul coeff pa pv.
     *
     * @param bool $calculCoeffPaPv The calcul coeff pa pv.
     */
    public function setCalculCoeffPaPv($calculCoeffPaPv) {
        $this->calculCoeffPaPv = $calculCoeffPaPv;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code article2.
     *
     * @param string $codeArticle2 The code article2.
     */
    public function setCodeArticle2($codeArticle2) {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }

    /**
     * Set the code devise achat.
     *
     * @param string $codeDeviseAchat The code devise achat.
     */
    public function setCodeDeviseAchat($codeDeviseAchat) {
        $this->codeDeviseAchat = $codeDeviseAchat;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code fournisseur.
     *
     * @param string $codeFournisseur The code fournisseur.
     */
    public function setCodeFournisseur($codeFournisseur) {
        $this->codeFournisseur = $codeFournisseur;
        return $this;
    }

    /**
     * Set the code gamme.
     *
     * @param string $codeGamme The code gamme.
     */
    public function setCodeGamme($codeGamme) {
        $this->codeGamme = $codeGamme;
        return $this;
    }

    /**
     * Set the code grille gamme.
     *
     * @param string $codeGrilleGamme The code grille gamme.
     */
    public function setCodeGrilleGamme($codeGrilleGamme) {
        $this->codeGrilleGamme = $codeGrilleGamme;
        return $this;
    }

    /**
     * Set the code honoraire.
     *
     * @param string $codeHonoraire The code honoraire.
     */
    public function setCodeHonoraire($codeHonoraire) {
        $this->codeHonoraire = $codeHonoraire;
        return $this;
    }

    /**
     * Set the code imputation analytique.
     *
     * @param string $codeImputationAnalytique The code imputation analytique.
     */
    public function setCodeImputationAnalytique($codeImputationAnalytique) {
        $this->codeImputationAnalytique = $codeImputationAnalytique;
        return $this;
    }

    /**
     * Set the code presentation.
     *
     * @param string $codePresentation The code presentation.
     */
    public function setCodePresentation($codePresentation) {
        $this->codePresentation = $codePresentation;
        return $this;
    }

    /**
     * Set the code ss famille.
     *
     * @param string $codeSsFamille The code ss famille.
     */
    public function setCodeSsFamille($codeSsFamille) {
        $this->codeSsFamille = $codeSsFamille;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the code tarif art.
     *
     * @param string $codeTarifArt The code tarif art.
     */
    public function setCodeTarifArt($codeTarifArt) {
        $this->codeTarifArt = $codeTarifArt;
        return $this;
    }

    /**
     * Set the code taxe.
     *
     * @param string $codeTaxe The code taxe.
     */
    public function setCodeTaxe($codeTaxe) {
        $this->codeTaxe = $codeTaxe;
        return $this;
    }

    /**
     * Set the code tva achat.
     *
     * @param string $codeTvaAchat The code tva achat.
     */
    public function setCodeTvaAchat($codeTvaAchat) {
        $this->codeTvaAchat = $codeTvaAchat;
        return $this;
    }

    /**
     * Set the code tva vente.
     *
     * @param string $codeTvaVente The code tva vente.
     */
    public function setCodeTvaVente($codeTvaVente) {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }

    /**
     * Set the code tva vente2.
     *
     * @param string $codeTvaVente2 The code tva vente2.
     */
    public function setCodeTvaVente2($codeTvaVente2) {
        $this->codeTvaVente2 = $codeTvaVente2;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the code ventil achat.
     *
     * @param string $codeVentilAchat The code ventil achat.
     */
    public function setCodeVentilAchat($codeVentilAchat) {
        $this->codeVentilAchat = $codeVentilAchat;
        return $this;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }

    /**
     * Set the code ventil vente2.
     *
     * @param string $codeVentilVente2 The code ventil vente2.
     */
    public function setCodeVentilVente2($codeVentilVente2) {
        $this->codeVentilVente2 = $codeVentilVente2;
        return $this;
    }

    /**
     * Set the coeff pv pa.
     *
     * @param float $coeffPvPa The coeff pv pa.
     */
    public function setCoeffPvPa($coeffPvPa) {
        $this->coeffPvPa = $coeffPvPa;
        return $this;
    }

    /**
     * Set the coeff sur px achat.
     *
     * @param string $coeffSurPxAchat The coeff sur px achat.
     */
    public function setCoeffSurPxAchat($coeffSurPxAchat) {
        $this->coeffSurPxAchat = $coeffSurPxAchat;
        return $this;
    }

    /**
     * Set the coeff sur px achat brut.
     *
     * @param bool $coeffSurPxAchatBrut The coeff sur px achat brut.
     */
    public function setCoeffSurPxAchatBrut($coeffSurPxAchatBrut) {
        $this->coeffSurPxAchatBrut = $coeffSurPxAchatBrut;
        return $this;
    }

    /**
     * Set the colisage achat.
     *
     * @param float $colisageAchat The colisage achat.
     */
    public function setColisageAchat($colisageAchat) {
        $this->colisageAchat = $colisageAchat;
        return $this;
    }

    /**
     * Set the colisage px achat.
     *
     * @param float $colisagePxAchat The colisage px achat.
     */
    public function setColisagePxAchat($colisagePxAchat) {
        $this->colisagePxAchat = $colisagePxAchat;
        return $this;
    }

    /**
     * Set the colisage px vente.
     *
     * @param float $colisagePxVente The colisage px vente.
     */
    public function setColisagePxVente($colisagePxVente) {
        $this->colisagePxVente = $colisagePxVente;
        return $this;
    }

    /**
     * Set the colisage vente.
     *
     * @param float $colisageVente The colisage vente.
     */
    public function setColisageVente($colisageVente) {
        $this->colisageVente = $colisageVente;
        return $this;
    }

    /**
     * Set the commission unique.
     *
     * @param bool $commissionUnique The commission unique.
     */
    public function setCommissionUnique($commissionUnique) {
        $this->commissionUnique = $commissionUnique;
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
     * Set the conditionnement1.
     *
     * @param float $conditionnement1 The conditionnement1.
     */
    public function setConditionnement1($conditionnement1) {
        $this->conditionnement1 = $conditionnement1;
        return $this;
    }

    /**
     * Set the conditionnement2.
     *
     * @param float $conditionnement2 The conditionnement2.
     */
    public function setConditionnement2($conditionnement2) {
        $this->conditionnement2 = $conditionnement2;
        return $this;
    }

    /**
     * Set the conditionnement3.
     *
     * @param float $conditionnement3 The conditionnement3.
     */
    public function setConditionnement3($conditionnement3) {
        $this->conditionnement3 = $conditionnement3;
        return $this;
    }

    /**
     * Set the contremarque interdite.
     *
     * @param bool $contremarqueInterdite The contremarque interdite.
     */
    public function setContremarqueInterdite($contremarqueInterdite) {
        $this->contremarqueInterdite = $contremarqueInterdite;
        return $this;
    }

    /**
     * Set the cout supp.
     *
     * @param float $coutSupp The cout supp.
     */
    public function setCoutSupp($coutSupp) {
        $this->coutSupp = $coutSupp;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
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
     * Set the debour.
     *
     * @param bool $debour The debour.
     */
    public function setDebour($debour) {
        $this->debour = $debour;
        return $this;
    }

    /**
     * Set the dernier px achat.
     *
     * @param float $dernierPxAchat The dernier px achat.
     */
    public function setDernierPxAchat($dernierPxAchat) {
        $this->dernierPxAchat = $dernierPxAchat;
        return $this;
    }

    /**
     * Set the designation apres.
     *
     * @param string $designationApres The designation apres.
     */
    public function setDesignationApres($designationApres) {
        $this->designationApres = $designationApres;
        return $this;
    }

    /**
     * Set the designation avant.
     *
     * @param string $designationAvant The designation avant.
     */
    public function setDesignationAvant($designationAvant) {
        $this->designationAvant = $designationAvant;
        return $this;
    }

    /**
     * Set the editer article rattache.
     *
     * @param bool $editerArticleRattache The editer article rattache.
     */
    public function setEditerArticleRattache($editerArticleRattache) {
        $this->editerArticleRattache = $editerArticleRattache;
        return $this;
    }

    /**
     * Set the editer article remplacement.
     *
     * @param bool $editerArticleRemplacement The editer article remplacement.
     */
    public function setEditerArticleRemplacement($editerArticleRemplacement) {
        $this->editerArticleRemplacement = $editerArticleRemplacement;
        return $this;
    }

    /**
     * Set the ensemble.
     *
     * @param bool $ensemble The ensemble.
     */
    public function setEnsemble($ensemble) {
        $this->ensemble = $ensemble;
        return $this;
    }

    /**
     * Set the est multi tva.
     *
     * @param bool $estMultiTva The est multi tva.
     */
    public function setEstMultiTva($estMultiTva) {
        $this->estMultiTva = $estMultiTva;
        return $this;
    }

    /**
     * Set the est occasion.
     *
     * @param bool $estOccasion The est occasion.
     */
    public function setEstOccasion($estOccasion) {
        $this->estOccasion = $estOccasion;
        return $this;
    }

    /**
     * Set the facturation ttc.
     *
     * @param bool $facturationTtc The facturation ttc.
     */
    public function setFacturationTtc($facturationTtc) {
        $this->facturationTtc = $facturationTtc;
        return $this;
    }

    /**
     * Set the famille achat.
     *
     * @param string $familleAchat The famille achat.
     */
    public function setFamilleAchat($familleAchat) {
        $this->familleAchat = $familleAchat;
        return $this;
    }

    /**
     * Set the frais1.
     *
     * @param float $frais1 The frais1.
     */
    public function setFrais1($frais1) {
        $this->frais1 = $frais1;
        return $this;
    }

    /**
     * Set the frais2.
     *
     * @param float $frais2 The frais2.
     */
    public function setFrais2($frais2) {
        $this->frais2 = $frais2;
        return $this;
    }

    /**
     * Set the frais3.
     *
     * @param float $frais3 The frais3.
     */
    public function setFrais3($frais3) {
        $this->frais3 = $frais3;
        return $this;
    }

    /**
     * Set the ha coeff pv pa.
     *
     * @param float $haCoeffPvPa The ha coeff pv pa.
     */
    public function setHaCoeffPvPa($haCoeffPvPa) {
        $this->haCoeffPvPa = $haCoeffPvPa;
        return $this;
    }

    /**
     * Set the ha coeff sur px achat.
     *
     * @param string $haCoeffSurPxAchat The ha coeff sur px achat.
     */
    public function setHaCoeffSurPxAchat($haCoeffSurPxAchat) {
        $this->haCoeffSurPxAchat = $haCoeffSurPxAchat;
        return $this;
    }

    /**
     * Set the ha date pa.
     *
     * @param DateTime|null $haDatePa The ha date pa.
     */
    public function setHaDatePa(DateTime $haDatePa = null) {
        $this->haDatePa = $haDatePa;
        return $this;
    }

    /**
     * Set the ha date pv.
     *
     * @param DateTime|null $haDatePv The ha date pv.
     */
    public function setHaDatePv(DateTime $haDatePv = null) {
        $this->haDatePv = $haDatePv;
        return $this;
    }

    /**
     * Set the ha dernier px achat.
     *
     * @param float $haDernierPxAchat The ha dernier px achat.
     */
    public function setHaDernierPxAchat($haDernierPxAchat) {
        $this->haDernierPxAchat = $haDernierPxAchat;
        return $this;
    }

    /**
     * Set the ha prix revient.
     *
     * @param float $haPrixRevient The ha prix revient.
     */
    public function setHaPrixRevient($haPrixRevient) {
        $this->haPrixRevient = $haPrixRevient;
        return $this;
    }

    /**
     * Set the ha prix revient net.
     *
     * @param float $haPrixRevientNet The ha prix revient net.
     */
    public function setHaPrixRevientNet($haPrixRevientNet) {
        $this->haPrixRevientNet = $haPrixRevientNet;
        return $this;
    }

    /**
     * Set the ha prix vente.
     *
     * @param float $haPrixVente The ha prix vente.
     */
    public function setHaPrixVente($haPrixVente) {
        $this->haPrixVente = $haPrixVente;
        return $this;
    }

    /**
     * Set the ha px achat brut.
     *
     * @param float $haPxAchatBrut The ha px achat brut.
     */
    public function setHaPxAchatBrut($haPxAchatBrut) {
        $this->haPxAchatBrut = $haPxAchatBrut;
        return $this;
    }

    /**
     * Set the ha remise achat1.
     *
     * @param float $haRemiseAchat1 The ha remise achat1.
     */
    public function setHaRemiseAchat1($haRemiseAchat1) {
        $this->haRemiseAchat1 = $haRemiseAchat1;
        return $this;
    }

    /**
     * Set the ha remise achat2.
     *
     * @param float $haRemiseAchat2 The ha remise achat2.
     */
    public function setHaRemiseAchat2($haRemiseAchat2) {
        $this->haRemiseAchat2 = $haRemiseAchat2;
        return $this;
    }

    /**
     * Set the ha remise achat3.
     *
     * @param float $haRemiseAchat3 The ha remise achat3.
     */
    public function setHaRemiseAchat3($haRemiseAchat3) {
        $this->haRemiseAchat3 = $haRemiseAchat3;
        return $this;
    }

    /**
     * Set the ha remise sup achat1.
     *
     * @param float $haRemiseSupAchat1 The ha remise sup achat1.
     */
    public function setHaRemiseSupAchat1($haRemiseSupAchat1) {
        $this->haRemiseSupAchat1 = $haRemiseSupAchat1;
        return $this;
    }

    /**
     * Set the ha remise sup achat2.
     *
     * @param float $haRemiseSupAchat2 The ha remise sup achat2.
     */
    public function setHaRemiseSupAchat2($haRemiseSupAchat2) {
        $this->haRemiseSupAchat2 = $haRemiseSupAchat2;
        return $this;
    }

    /**
     * Set the ha remise sup achat3.
     *
     * @param float $haRemiseSupAchat3 The ha remise sup achat3.
     */
    public function setHaRemiseSupAchat3($haRemiseSupAchat3) {
        $this->haRemiseSupAchat3 = $haRemiseSupAchat3;
        return $this;
    }

    /**
     * Set the hauteur.
     *
     * @param float $hauteur The hauteur.
     */
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
        return $this;
    }

    /**
     * Set the honoraires.
     *
     * @param bool $honoraires The honoraires.
     */
    public function setHonoraires($honoraires) {
        $this->honoraires = $honoraires;
        return $this;
    }

    /**
     * Set the honoraires uniquement.
     *
     * @param bool $honorairesUniquement The honoraires uniquement.
     */
    public function setHonorairesUniquement($honorairesUniquement) {
        $this->honorairesUniquement = $honorairesUniquement;
        return $this;
    }

    /**
     * Set the hors stock.
     *
     * @param bool $horsStock The hors stock.
     */
    public function setHorsStock($horsStock) {
        $this->horsStock = $horsStock;
        return $this;
    }

    /**
     * Set the intitule1.
     *
     * @param string $intitule1 The intitule1.
     */
    public function setIntitule1($intitule1) {
        $this->intitule1 = $intitule1;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string $intitule2 The intitule2.
     */
    public function setIntitule2($intitule2) {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the intitule3.
     *
     * @param string $intitule3 The intitule3.
     */
    public function setIntitule3($intitule3) {
        $this->intitule3 = $intitule3;
        return $this;
    }

    /**
     * Set the intitule4.
     *
     * @param string $intitule4 The intitule4.
     */
    public function setIntitule4($intitule4) {
        $this->intitule4 = $intitule4;
        return $this;
    }

    /**
     * Set the largeur.
     *
     * @param float $largeur The largeur.
     */
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
        return $this;
    }

    /**
     * Set the libelle interne.
     *
     * @param string $libelleInterne The libelle interne.
     */
    public function setLibelleInterne($libelleInterne) {
        $this->libelleInterne = $libelleInterne;
        return $this;
    }

    /**
     * Set the longueur.
     *
     * @param float $longueur The longueur.
     */
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
        return $this;
    }

    /**
     * Set the lot serie autre.
     *
     * @param bool $lotSerieAutre The lot serie autre.
     */
    public function setLotSerieAutre($lotSerieAutre) {
        $this->lotSerieAutre = $lotSerieAutre;
        return $this;
    }

    /**
     * Set the marge mini.
     *
     * @param float $margeMini The marge mini.
     */
    public function setMargeMini($margeMini) {
        $this->margeMini = $margeMini;
        return $this;
    }

    /**
     * Set the mini facturable.
     *
     * @param float $miniFacturable The mini facturable.
     */
    public function setMiniFacturable($miniFacturable) {
        $this->miniFacturable = $miniFacturable;
        return $this;
    }

    /**
     * Set the modele code barre.
     *
     * @param string $modeleCodeBarre The modele code barre.
     */
    public function setModeleCodeBarre($modeleCodeBarre) {
        $this->modeleCodeBarre = $modeleCodeBarre;
        return $this;
    }

    /**
     * Set the modele code barre f.
     *
     * @param string $modeleCodeBarreF The modele code barre f.
     */
    public function setModeleCodeBarreF($modeleCodeBarreF) {
        $this->modeleCodeBarreF = $modeleCodeBarreF;
        return $this;
    }

    /**
     * Set the mt soumis tva2.
     *
     * @param float $mtSoumisTva2 The mt soumis tva2.
     */
    public function setMtSoumisTva2($mtSoumisTva2) {
        $this->mtSoumisTva2 = $mtSoumisTva2;
        return $this;
    }

    /**
     * Set the mt tare.
     *
     * @param float $mtTare The mt tare.
     */
    public function setMtTare($mtTare) {
        $this->mtTare = $mtTare;
        return $this;
    }

    /**
     * Set the multi tva avec remises.
     *
     * @param bool $multiTvaAvecRemises The multi tva avec remises.
     */
    public function setMultiTvaAvecRemises($multiTvaAvecRemises) {
        $this->multiTvaAvecRemises = $multiTvaAvecRemises;
        return $this;
    }

    /**
     * Set the nature produit.
     *
     * @param string $natureProduit The nature produit.
     */
    public function setNatureProduit($natureProduit) {
        $this->natureProduit = $natureProduit;
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
     * Set the ne pas cumuler stats.
     *
     * @param bool $nePasCumulerStats The ne pas cumuler stats.
     */
    public function setNePasCumulerStats($nePasCumulerStats) {
        $this->nePasCumulerStats = $nePasCumulerStats;
        return $this;
    }

    /**
     * Set the ne pas editer.
     *
     * @param bool $nePasEditer The ne pas editer.
     */
    public function setNePasEditer($nePasEditer) {
        $this->nePasEditer = $nePasEditer;
        return $this;
    }

    /**
     * Set the ne plus commander.
     *
     * @param bool $nePlusCommander The ne plus commander.
     */
    public function setNePlusCommander($nePlusCommander) {
        $this->nePlusCommander = $nePlusCommander;
        return $this;
    }

    /**
     * Set the neutre.
     *
     * @param bool $neutre The neutre.
     */
    public function setNeutre($neutre) {
        $this->neutre = $neutre;
        return $this;
    }

    /**
     * Set the niveau apparition.
     *
     * @param int $niveauApparition The niveau apparition.
     */
    public function setNiveauApparition($niveauApparition) {
        $this->niveauApparition = $niveauApparition;
        return $this;
    }

    /**
     * Set the niveau totalisation.
     *
     * @param string $niveauTotalisation The niveau totalisation.
     */
    public function setNiveauTotalisation($niveauTotalisation) {
        $this->niveauTotalisation = $niveauTotalisation;
        return $this;
    }

    /**
     * Set the nomenclature ensemble.
     *
     * @param bool $nomenclatureEnsemble The nomenclature ensemble.
     */
    public function setNomenclatureEnsemble($nomenclatureEnsemble) {
        $this->nomenclatureEnsemble = $nomenclatureEnsemble;
        return $this;
    }

    /**
     * Set the nomenclature europe.
     *
     * @param string $nomenclatureEurope The nomenclature europe.
     */
    public function setNomenclatureEurope($nomenclatureEurope) {
        $this->nomenclatureEurope = $nomenclatureEurope;
        return $this;
    }

    /**
     * Set the num compte achat.
     *
     * @param string $numCompteAchat The num compte achat.
     */
    public function setNumCompteAchat($numCompteAchat) {
        $this->numCompteAchat = $numCompteAchat;
        return $this;
    }

    /**
     * Set the num compte vente.
     *
     * @param string $numCompteVente The num compte vente.
     */
    public function setNumCompteVente($numCompteVente) {
        $this->numCompteVente = $numCompteVente;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int $numeroPj The numero pj.
     */
    public function setNumeroPj($numeroPj) {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the pamp.
     *
     * @param float $pamp The pamp.
     */
    public function setPamp($pamp) {
        $this->pamp = $pamp;
        return $this;
    }

    /**
     * Set the param cde.
     *
     * @param float $paramCde The param cde.
     */
    public function setParamCde($paramCde) {
        $this->paramCde = $paramCde;
        return $this;
    }

    /**
     * Set the poids unitaire.
     *
     * @param float $poidsUnitaire The poids unitaire.
     */
    public function setPoidsUnitaire($poidsUnitaire) {
        $this->poidsUnitaire = $poidsUnitaire;
        return $this;
    }

    /**
     * Set the prix achat ckp.
     *
     * @param string $prixAchatCkp The prix achat ckp.
     */
    public function setPrixAchatCkp($prixAchatCkp) {
        $this->prixAchatCkp = $prixAchatCkp;
        return $this;
    }

    /**
     * Set the prix fixe.
     *
     * @param bool $prixFixe The prix fixe.
     */
    public function setPrixFixe($prixFixe) {
        $this->prixFixe = $prixFixe;
        return $this;
    }

    /**
     * Set the prix mini.
     *
     * @param float $prixMini The prix mini.
     */
    public function setPrixMini($prixMini) {
        $this->prixMini = $prixMini;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param bool $prixNet The prix net.
     */
    public function setPrixNet($prixNet) {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix revient.
     *
     * @param float $prixRevient The prix revient.
     */
    public function setPrixRevient($prixRevient) {
        $this->prixRevient = $prixRevient;
        return $this;
    }

    /**
     * Set the prix revient net.
     *
     * @param float $prixRevientNet The prix revient net.
     */
    public function setPrixRevientNet($prixRevientNet) {
        $this->prixRevientNet = $prixRevientNet;
        return $this;
    }

    /**
     * Set the prix vente ckp.
     *
     * @param string $prixVenteCkp The prix vente ckp.
     */
    public function setPrixVenteCkp($prixVenteCkp) {
        $this->prixVenteCkp = $prixVenteCkp;
        return $this;
    }

    /**
     * Set the prmp.
     *
     * @param float $prmp The prmp.
     */
    public function setPrmp($prmp) {
        $this->prmp = $prmp;
        return $this;
    }

    /**
     * Set the provenance.
     *
     * @param string $provenance The provenance.
     */
    public function setProvenance($provenance) {
        $this->provenance = $provenance;
        return $this;
    }

    /**
     * Set the px achat brut.
     *
     * @param float $pxAchatBrut The px achat brut.
     */
    public function setPxAchatBrut($pxAchatBrut) {
        $this->pxAchatBrut = $pxAchatBrut;
        return $this;
    }

    /**
     * Set the px achat colis.
     *
     * @param bool $pxAchatColis The px achat colis.
     */
    public function setPxAchatColis($pxAchatColis) {
        $this->pxAchatColis = $pxAchatColis;
        return $this;
    }

    /**
     * Set the px achat en devise.
     *
     * @param float $pxAchatEnDevise The px achat en devise.
     */
    public function setPxAchatEnDevise($pxAchatEnDevise) {
        $this->pxAchatEnDevise = $pxAchatEnDevise;
        return $this;
    }

    /**
     * Set the px unit a editer.
     *
     * @param bool $pxUnitAEditer The px unit a editer.
     */
    public function setPxUnitAEditer($pxUnitAEditer) {
        $this->pxUnitAEditer = $pxUnitAEditer;
        return $this;
    }

    /**
     * Set the px vente colis.
     *
     * @param bool $pxVenteColis The px vente colis.
     */
    public function setPxVenteColis($pxVenteColis) {
        $this->pxVenteColis = $pxVenteColis;
        return $this;
    }

    /**
     * Set the px vente ht euro.
     *
     * @param float $pxVenteHtEuro The px vente ht euro.
     */
    public function setPxVenteHtEuro($pxVenteHtEuro) {
        $this->pxVenteHtEuro = $pxVenteHtEuro;
        return $this;
    }

    /**
     * Set the px vente ht frf.
     *
     * @param float $pxVenteHtFrf The px vente ht frf.
     */
    public function setPxVenteHtFrf($pxVenteHtFrf) {
        $this->pxVenteHtFrf = $pxVenteHtFrf;
        return $this;
    }

    /**
     * Set the px vente ttc euro.
     *
     * @param float $pxVenteTtcEuro The px vente ttc euro.
     */
    public function setPxVenteTtcEuro($pxVenteTtcEuro) {
        $this->pxVenteTtcEuro = $pxVenteTtcEuro;
        return $this;
    }

    /**
     * Set the px vente ttc frf.
     *
     * @param float $pxVenteTtcFrf The px vente ttc frf.
     */
    public function setPxVenteTtcFrf($pxVenteTtcFrf) {
        $this->pxVenteTtcFrf = $pxVenteTtcFrf;
        return $this;
    }

    /**
     * Set the qte a editer.
     *
     * @param bool $qteAEditer The qte a editer.
     */
    public function setQteAEditer($qteAEditer) {
        $this->qteAEditer = $qteAEditer;
        return $this;
    }

    /**
     * Set the qte eco commande.
     *
     * @param float $qteEcoCommande The qte eco commande.
     */
    public function setQteEcoCommande($qteEcoCommande) {
        $this->qteEcoCommande = $qteEcoCommande;
        return $this;
    }

    /**
     * Set the qte hab commande.
     *
     * @param float $qteHabCommande The qte hab commande.
     */
    public function setQteHabCommande($qteHabCommande) {
        $this->qteHabCommande = $qteHabCommande;
        return $this;
    }

    /**
     * Set the qte max facture.
     *
     * @param float $qteMaxFacture The qte max facture.
     */
    public function setQteMaxFacture($qteMaxFacture) {
        $this->qteMaxFacture = $qteMaxFacture;
        return $this;
    }

    /**
     * Set the qte min commande.
     *
     * @param float $qteMinCommande The qte min commande.
     */
    public function setQteMinCommande($qteMinCommande) {
        $this->qteMinCommande = $qteMinCommande;
        return $this;
    }

    /**
     * Set the regroup fact.
     *
     * @param string $regroupFact The regroup fact.
     */
    public function setRegroupFact($regroupFact) {
        $this->regroupFact = $regroupFact;
        return $this;
    }

    /**
     * Set the regroup fact tp.
     *
     * @param int $regroupFactTp The regroup fact tp.
     */
    public function setRegroupFactTp($regroupFactTp) {
        $this->regroupFactTp = $regroupFactTp;
        return $this;
    }

    /**
     * Set the remise1en montant.
     *
     * @param bool $remise1enMontant The remise1en montant.
     */
    public function setRemise1enMontant($remise1enMontant) {
        $this->remise1enMontant = $remise1enMontant;
        return $this;
    }

    /**
     * Set the remise2en montant.
     *
     * @param bool $remise2enMontant The remise2en montant.
     */
    public function setRemise2enMontant($remise2enMontant) {
        $this->remise2enMontant = $remise2enMontant;
        return $this;
    }

    /**
     * Set the remise achat1.
     *
     * @param float $remiseAchat1 The remise achat1.
     */
    public function setRemiseAchat1($remiseAchat1) {
        $this->remiseAchat1 = $remiseAchat1;
        return $this;
    }

    /**
     * Set the remise achat2.
     *
     * @param float $remiseAchat2 The remise achat2.
     */
    public function setRemiseAchat2($remiseAchat2) {
        $this->remiseAchat2 = $remiseAchat2;
        return $this;
    }

    /**
     * Set the remise achat3.
     *
     * @param float $remiseAchat3 The remise achat3.
     */
    public function setRemiseAchat3($remiseAchat3) {
        $this->remiseAchat3 = $remiseAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat1.
     *
     * @param float $remiseSupAchat1 The remise sup achat1.
     */
    public function setRemiseSupAchat1($remiseSupAchat1) {
        $this->remiseSupAchat1 = $remiseSupAchat1;
        return $this;
    }

    /**
     * Set the remise sup achat1 en montant.
     *
     * @param bool $remiseSupAchat1EnMontant The remise sup achat1 en montant.
     */
    public function setRemiseSupAchat1EnMontant($remiseSupAchat1EnMontant) {
        $this->remiseSupAchat1EnMontant = $remiseSupAchat1EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat2.
     *
     * @param float $remiseSupAchat2 The remise sup achat2.
     */
    public function setRemiseSupAchat2($remiseSupAchat2) {
        $this->remiseSupAchat2 = $remiseSupAchat2;
        return $this;
    }

    /**
     * Set the remise sup achat2 en montant.
     *
     * @param bool $remiseSupAchat2EnMontant The remise sup achat2 en montant.
     */
    public function setRemiseSupAchat2EnMontant($remiseSupAchat2EnMontant) {
        $this->remiseSupAchat2EnMontant = $remiseSupAchat2EnMontant;
        return $this;
    }

    /**
     * Set the remise sup achat3.
     *
     * @param float $remiseSupAchat3 The remise sup achat3.
     */
    public function setRemiseSupAchat3($remiseSupAchat3) {
        $this->remiseSupAchat3 = $remiseSupAchat3;
        return $this;
    }

    /**
     * Set the remise sup achat3 en montant.
     *
     * @param bool $remiseSupAchat3EnMontant The remise sup achat3 en montant.
     */
    public function setRemiseSupAchat3EnMontant($remiseSupAchat3EnMontant) {
        $this->remiseSupAchat3EnMontant = $remiseSupAchat3EnMontant;
        return $this;
    }

    /**
     * Set the remises interdites.
     *
     * @param bool $remisesInterdites The remises interdites.
     */
    public function setRemisesInterdites($remisesInterdites) {
        $this->remisesInterdites = $remisesInterdites;
        return $this;
    }

    /**
     * Set the soumis certif.
     *
     * @param bool $soumisCertif The soumis certif.
     */
    public function setSoumisCertif($soumisCertif) {
        $this->soumisCertif = $soumisCertif;
        return $this;
    }

    /**
     * Set the ss famille achat.
     *
     * @param string $ssFamilleAchat The ss famille achat.
     */
    public function setSsFamilleAchat($ssFamilleAchat) {
        $this->ssFamilleAchat = $ssFamilleAchat;
        return $this;
    }

    /**
     * Set the suivi stock.
     *
     * @param bool $suiviStock The suivi stock.
     */
    public function setSuiviStock($suiviStock) {
        $this->suiviStock = $suiviStock;
        return $this;
    }

    /**
     * Set the tare vat.
     *
     * @param string $tareVat The tare vat.
     */
    public function setTareVat($tareVat) {
        $this->tareVat = $tareVat;
        return $this;
    }

    /**
     * Set the taux alcool.
     *
     * @param float $tauxAlcool The taux alcool.
     */
    public function setTauxAlcool($tauxAlcool) {
        $this->tauxAlcool = $tauxAlcool;
        return $this;
    }

    /**
     * Set the taux devise achat.
     *
     * @param float $tauxDeviseAchat The taux devise achat.
     */
    public function setTauxDeviseAchat($tauxDeviseAchat) {
        $this->tauxDeviseAchat = $tauxDeviseAchat;
        return $this;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool $tvaEncaissement The tva encaissement.
     */
    public function setTvaEncaissement($tvaEncaissement) {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }

    /**
     * Set the tx commission.
     *
     * @param float $txCommission The tx commission.
     */
    public function setTxCommission($txCommission) {
        $this->txCommission = $txCommission;
        return $this;
    }

    /**
     * Set the type arrondi.
     *
     * @param string $typeArrondi The type arrondi.
     */
    public function setTypeArrondi($typeArrondi) {
        $this->typeArrondi = $typeArrondi;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param bool $typeHeure The type heure.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

    /**
     * Set the type unite.
     *
     * @param string $typeUnite The type unite.
     */
    public function setTypeUnite($typeUnite) {
        $this->typeUnite = $typeUnite;
        return $this;
    }

    /**
     * Set the unite activite.
     *
     * @param bool $uniteActivite The unite activite.
     */
    public function setUniteActivite($uniteActivite) {
        $this->uniteActivite = $uniteActivite;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param bool $variante The variante.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }

    /**
     * Set the vente par colis.
     *
     * @param bool $venteParColis The vente par colis.
     */
    public function setVenteParColis($venteParColis) {
        $this->venteParColis = $venteParColis;
        return $this;
    }

    /**
     * Set the volume.
     *
     * @param float $volume The volume.
     */
    public function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }
}
