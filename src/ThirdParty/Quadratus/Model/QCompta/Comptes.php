<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Comptes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes {

    /**
     * A lettrer auto.
     *
     * @var bool
     */
    private $aLettrerAuto;

    /**
     * Activer lot trace.
     *
     * @var bool
     */
    private $activerLotTrace;

    /**
     * Bon a payer.
     *
     * @var bool
     */
    private $bonAPayer;

    /**
     * Centralise gd livre.
     *
     * @var bool
     */
    private $centraliseGdLivre;

    /**
     * Cle deux.
     *
     * @var string
     */
    private $cleDeux;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code regroup1.
     *
     * @var string
     */
    private $codeRegroup1;

    /**
     * Code regroup2.
     *
     * @var string
     */
    private $codeRegroup2;

    /**
     * Code regroup3.
     *
     * @var string
     */
    private $codeRegroup3;

    /**
     * Code regroup4.
     *
     * @var string
     */
    private $codeRegroup4;

    /**
     * Code repartition ana.
     *
     * @var string
     */
    private $codeRepartitionAna;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Collectif.
     *
     * @var string
     */
    private $collectif;

    /**
     * Collectif_1.
     *
     * @var string
     */
    private $collectif_1;

    /**
     * Collectif_2.
     *
     * @var string
     */
    private $collectif_2;

    /**
     * Compte inactif.
     *
     * @var bool
     */
    private $compteInactif;

    /**
     * Contrepartie charge prod.
     *
     * @var string
     */
    private $contrepartieChargeProd;

    /**
     * Cpt particulier.
     *
     * @var bool
     */
    private $cptParticulier;

    /**
     * Cpt tva contrep c p r.
     *
     * @var string
     */
    private $cptTvaContrepCPR;

    /**
     * Credit.
     *
     * @var float
     */
    private $credit;

    /**
     * Credit hors ex.
     *
     * @var float
     */
    private $creditHorsEx;

    /**
     * Credit_1.
     *
     * @var float
     */
    private $credit_1;

    /**
     * Credit_2.
     *
     * @var float
     */
    private $credit_2;

    /**
     * Cumul pied journal.
     *
     * @var bool
     */
    private $cumulPiedJournal;

    /**
     * Date revision.
     *
     * @var DateTime
     */
    private $dateRevision;

    /**
     * Date sys creation.
     *
     * @var DateTime
     */
    private $dateSysCreation;

    /**
     * Debit.
     *
     * @var float
     */
    private $debit;

    /**
     * Debit hors ex.
     *
     * @var float
     */
    private $debitHorsEx;

    /**
     * Debit_1.
     *
     * @var float
     */
    private $debit_1;

    /**
     * Debit_2.
     *
     * @var float
     */
    private $debit_2;

    /**
     * Detail cloture.
     *
     * @var bool
     */
    private $detailCloture;

    /**
     * Edit m2.
     *
     * @var bool
     */
    private $editM2;

    /**
     * Etat revision.
     *
     * @var string
     */
    private $etatRevision;

    /**
     * Famille.
     *
     * @var string
     */
    private $famille;

    /**
     * Franchise.
     *
     * @var bool
     */
    private $franchise;

    /**
     * Gerer int cpt cour.
     *
     * @var bool
     */
    private $gererIntCptCour;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule a l l.
     *
     * @var string
     */
    private $intituleALL;

    /**
     * Intitule a n g.
     *
     * @var string
     */
    private $intituleANG;

    /**
     * Intitule e s p.
     *
     * @var string
     */
    private $intituleESP;

    /**
     * Intitule i t a.
     *
     * @var string
     */
    private $intituleITA;

    /**
     * Intitule long.
     *
     * @var string
     */
    private $intituleLong;

    /**
     * Intra com.
     *
     * @var bool
     */
    private $intraCom;

    /**
     * Jal tre regl.
     *
     * @var string
     */
    private $jalTreRegl;

    /**
     * Libelle lot trace.
     *
     * @var string
     */
    private $libelleLotTrace;

    /**
     * Marge theorique.
     *
     * @var float
     */
    private $margeTheorique;

    /**
     * Methode t v a.
     *
     * @var string
     */
    private $methodeTVA;

    /**
     * Nb ecritures.
     *
     * @var int
     */
    private $nbEcritures;

    /**
     * Niveau droit.
     *
     * @var string
     */
    private $niveauDroit;

    /**
     * No doss reflechi.
     *
     * @var string
     */
    private $noDossReflechi;

    /**
     * No prochain lettrage.
     *
     * @var int
     */
    private $noProchainLettrage;

    /**
     * Num cpt reflechi.
     *
     * @var string
     */
    private $numCptReflechi;

    /**
     * Numero.
     *
     * @var string
     */
    private $numero;

    /**
     * Periodicite.
     *
     * @var bool
     */
    private $periodicite;

    /**
     * Personne morale.
     *
     * @var bool
     */
    private $personneMorale;

    /**
     * Presta tel.
     *
     * @var bool
     */
    private $prestaTel;

    /**
     * Prestataire.
     *
     * @var int
     */
    private $prestataire;

    /**
     * Prix moyen nb dec.
     *
     * @var int
     */
    private $prixMoyenNbDec;

    /**
     * Prix moyen nb dec2.
     *
     * @var int
     */
    private $prixMoyenNbDec2;

    /**
     * Prix moyen nb entier.
     *
     * @var int
     */
    private $prixMoyenNbEntier;

    /**
     * Prix moyen nb entier2.
     *
     * @var int
     */
    private $prixMoyenNbEntier2;

    /**
     * Prochaine lettre.
     *
     * @var string
     */
    private $prochaineLettre;

    /**
     * Prochaine lettre tiers.
     *
     * @var string
     */
    private $prochaineLettreTiers;

    /**
     * Quantite libelle.
     *
     * @var string
     */
    private $quantiteLibelle;

    /**
     * Quantite libelle2.
     *
     * @var string
     */
    private $quantiteLibelle2;

    /**
     * Quantite nb dec.
     *
     * @var int
     */
    private $quantiteNbDec;

    /**
     * Quantite nb dec2.
     *
     * @var int
     */
    private $quantiteNbDec2;

    /**
     * Quantite nb entier.
     *
     * @var int
     */
    private $quantiteNbEntier;

    /**
     * Quantite nb entier2.
     *
     * @var int
     */
    private $quantiteNbEntier2;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Reference fournisseur.
     *
     * @var string
     */
    private $referenceFournisseur;

    /**
     * Repartition ana.
     *
     * @var string
     */
    private $repartitionAna;

    /**
     * Repartition auto.
     *
     * @var bool
     */
    private $repartitionAuto;

    /**
     * Rubrique bilan1.
     *
     * @var string
     */
    private $rubriqueBilan1;

    /**
     * Rubrique bilan2.
     *
     * @var string
     */
    private $rubriqueBilan2;

    /**
     * Suivi devises.
     *
     * @var bool
     */
    private $suiviDevises;

    /**
     * Suivi quantite.
     *
     * @var bool
     */
    private $suiviQuantite;

    /**
     * Suivi quantite2.
     *
     * @var bool
     */
    private $suiviQuantite2;

    /**
     * Tva autres ope impos.
     *
     * @var bool
     */
    private $tvaAutresOpeImpos;

    /**
     * Tva d o m.
     *
     * @var bool
     */
    private $tvaDOM;

    /**
     * Tva encaissement.
     *
     * @var bool
     */
    private $tvaEncaissement;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Type collectif.
     *
     * @var bool
     */
    private $typeCollectif;

    /**
     * Type cpt tiers.
     *
     * @var string
     */
    private $typeCptTiers;

    /**
     * Type intra com.
     *
     * @var int
     */
    private $typeIntraCom;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a lettrer auto.
     *
     * @return bool Returns the a lettrer auto.
     */
    public function getALettrerAuto() {
        return $this->aLettrerAuto;
    }

    /**
     * Get the activer lot trace.
     *
     * @return bool Returns the activer lot trace.
     */
    public function getActiverLotTrace() {
        return $this->activerLotTrace;
    }

    /**
     * Get the bon a payer.
     *
     * @return bool Returns the bon a payer.
     */
    public function getBonAPayer() {
        return $this->bonAPayer;
    }

    /**
     * Get the centralise gd livre.
     *
     * @return bool Returns the centralise gd livre.
     */
    public function getCentraliseGdLivre() {
        return $this->centraliseGdLivre;
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
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
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
     * Get the code regroup1.
     *
     * @return string Returns the code regroup1.
     */
    public function getCodeRegroup1() {
        return $this->codeRegroup1;
    }

    /**
     * Get the code regroup2.
     *
     * @return string Returns the code regroup2.
     */
    public function getCodeRegroup2() {
        return $this->codeRegroup2;
    }

    /**
     * Get the code regroup3.
     *
     * @return string Returns the code regroup3.
     */
    public function getCodeRegroup3() {
        return $this->codeRegroup3;
    }

    /**
     * Get the code regroup4.
     *
     * @return string Returns the code regroup4.
     */
    public function getCodeRegroup4() {
        return $this->codeRegroup4;
    }

    /**
     * Get the code repartition ana.
     *
     * @return string Returns the code repartition ana.
     */
    public function getCodeRepartitionAna() {
        return $this->codeRepartitionAna;
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
     * Get the collectif.
     *
     * @return string Returns the collectif.
     */
    public function getCollectif() {
        return $this->collectif;
    }

    /**
     * Get the collectif_1.
     *
     * @return string Returns the collectif_1.
     */
    public function getCollectif_1() {
        return $this->collectif_1;
    }

    /**
     * Get the collectif_2.
     *
     * @return string Returns the collectif_2.
     */
    public function getCollectif_2() {
        return $this->collectif_2;
    }

    /**
     * Get the compte inactif.
     *
     * @return bool Returns the compte inactif.
     */
    public function getCompteInactif() {
        return $this->compteInactif;
    }

    /**
     * Get the contrepartie charge prod.
     *
     * @return string Returns the contrepartie charge prod.
     */
    public function getContrepartieChargeProd() {
        return $this->contrepartieChargeProd;
    }

    /**
     * Get the cpt particulier.
     *
     * @return bool Returns the cpt particulier.
     */
    public function getCptParticulier() {
        return $this->cptParticulier;
    }

    /**
     * Get the cpt tva contrep c p r.
     *
     * @return string Returns the cpt tva contrep c p r.
     */
    public function getCptTvaContrepCPR() {
        return $this->cptTvaContrepCPR;
    }

    /**
     * Get the credit.
     *
     * @return float Returns the credit.
     */
    public function getCredit() {
        return $this->credit;
    }

    /**
     * Get the credit hors ex.
     *
     * @return float Returns the credit hors ex.
     */
    public function getCreditHorsEx() {
        return $this->creditHorsEx;
    }

    /**
     * Get the credit_1.
     *
     * @return float Returns the credit_1.
     */
    public function getCredit_1() {
        return $this->credit_1;
    }

    /**
     * Get the credit_2.
     *
     * @return float Returns the credit_2.
     */
    public function getCredit_2() {
        return $this->credit_2;
    }

    /**
     * Get the cumul pied journal.
     *
     * @return bool Returns the cumul pied journal.
     */
    public function getCumulPiedJournal() {
        return $this->cumulPiedJournal;
    }

    /**
     * Get the date revision.
     *
     * @return DateTime Returns the date revision.
     */
    public function getDateRevision() {
        return $this->dateRevision;
    }

    /**
     * Get the date sys creation.
     *
     * @return DateTime Returns the date sys creation.
     */
    public function getDateSysCreation() {
        return $this->dateSysCreation;
    }

    /**
     * Get the debit.
     *
     * @return float Returns the debit.
     */
    public function getDebit() {
        return $this->debit;
    }

    /**
     * Get the debit hors ex.
     *
     * @return float Returns the debit hors ex.
     */
    public function getDebitHorsEx() {
        return $this->debitHorsEx;
    }

    /**
     * Get the debit_1.
     *
     * @return float Returns the debit_1.
     */
    public function getDebit_1() {
        return $this->debit_1;
    }

    /**
     * Get the debit_2.
     *
     * @return float Returns the debit_2.
     */
    public function getDebit_2() {
        return $this->debit_2;
    }

    /**
     * Get the detail cloture.
     *
     * @return bool Returns the detail cloture.
     */
    public function getDetailCloture() {
        return $this->detailCloture;
    }

    /**
     * Get the edit m2.
     *
     * @return bool Returns the edit m2.
     */
    public function getEditM2() {
        return $this->editM2;
    }

    /**
     * Get the etat revision.
     *
     * @return string Returns the etat revision.
     */
    public function getEtatRevision() {
        return $this->etatRevision;
    }

    /**
     * Get the famille.
     *
     * @return string Returns the famille.
     */
    public function getFamille() {
        return $this->famille;
    }

    /**
     * Get the franchise.
     *
     * @return bool Returns the franchise.
     */
    public function getFranchise() {
        return $this->franchise;
    }

    /**
     * Get the gerer int cpt cour.
     *
     * @return bool Returns the gerer int cpt cour.
     */
    public function getGererIntCptCour() {
        return $this->gererIntCptCour;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the intitule a l l.
     *
     * @return string Returns the intitule a l l.
     */
    public function getIntituleALL() {
        return $this->intituleALL;
    }

    /**
     * Get the intitule a n g.
     *
     * @return string Returns the intitule a n g.
     */
    public function getIntituleANG() {
        return $this->intituleANG;
    }

    /**
     * Get the intitule e s p.
     *
     * @return string Returns the intitule e s p.
     */
    public function getIntituleESP() {
        return $this->intituleESP;
    }

    /**
     * Get the intitule i t a.
     *
     * @return string Returns the intitule i t a.
     */
    public function getIntituleITA() {
        return $this->intituleITA;
    }

    /**
     * Get the intitule long.
     *
     * @return string Returns the intitule long.
     */
    public function getIntituleLong() {
        return $this->intituleLong;
    }

    /**
     * Get the intra com.
     *
     * @return bool Returns the intra com.
     */
    public function getIntraCom() {
        return $this->intraCom;
    }

    /**
     * Get the jal tre regl.
     *
     * @return string Returns the jal tre regl.
     */
    public function getJalTreRegl() {
        return $this->jalTreRegl;
    }

    /**
     * Get the libelle lot trace.
     *
     * @return string Returns the libelle lot trace.
     */
    public function getLibelleLotTrace() {
        return $this->libelleLotTrace;
    }

    /**
     * Get the marge theorique.
     *
     * @return float Returns the marge theorique.
     */
    public function getMargeTheorique() {
        return $this->margeTheorique;
    }

    /**
     * Get the methode t v a.
     *
     * @return string Returns the methode t v a.
     */
    public function getMethodeTVA() {
        return $this->methodeTVA;
    }

    /**
     * Get the nb ecritures.
     *
     * @return int Returns the nb ecritures.
     */
    public function getNbEcritures() {
        return $this->nbEcritures;
    }

    /**
     * Get the niveau droit.
     *
     * @return string Returns the niveau droit.
     */
    public function getNiveauDroit() {
        return $this->niveauDroit;
    }

    /**
     * Get the no doss reflechi.
     *
     * @return string Returns the no doss reflechi.
     */
    public function getNoDossReflechi() {
        return $this->noDossReflechi;
    }

    /**
     * Get the no prochain lettrage.
     *
     * @return int Returns the no prochain lettrage.
     */
    public function getNoProchainLettrage() {
        return $this->noProchainLettrage;
    }

    /**
     * Get the num cpt reflechi.
     *
     * @return string Returns the num cpt reflechi.
     */
    public function getNumCptReflechi() {
        return $this->numCptReflechi;
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
     * Get the periodicite.
     *
     * @return bool Returns the periodicite.
     */
    public function getPeriodicite() {
        return $this->periodicite;
    }

    /**
     * Get the personne morale.
     *
     * @return bool Returns the personne morale.
     */
    public function getPersonneMorale() {
        return $this->personneMorale;
    }

    /**
     * Get the presta tel.
     *
     * @return bool Returns the presta tel.
     */
    public function getPrestaTel() {
        return $this->prestaTel;
    }

    /**
     * Get the prestataire.
     *
     * @return int Returns the prestataire.
     */
    public function getPrestataire() {
        return $this->prestataire;
    }

    /**
     * Get the prix moyen nb dec.
     *
     * @return int Returns the prix moyen nb dec.
     */
    public function getPrixMoyenNbDec() {
        return $this->prixMoyenNbDec;
    }

    /**
     * Get the prix moyen nb dec2.
     *
     * @return int Returns the prix moyen nb dec2.
     */
    public function getPrixMoyenNbDec2() {
        return $this->prixMoyenNbDec2;
    }

    /**
     * Get the prix moyen nb entier.
     *
     * @return int Returns the prix moyen nb entier.
     */
    public function getPrixMoyenNbEntier() {
        return $this->prixMoyenNbEntier;
    }

    /**
     * Get the prix moyen nb entier2.
     *
     * @return int Returns the prix moyen nb entier2.
     */
    public function getPrixMoyenNbEntier2() {
        return $this->prixMoyenNbEntier2;
    }

    /**
     * Get the prochaine lettre.
     *
     * @return string Returns the prochaine lettre.
     */
    public function getProchaineLettre() {
        return $this->prochaineLettre;
    }

    /**
     * Get the prochaine lettre tiers.
     *
     * @return string Returns the prochaine lettre tiers.
     */
    public function getProchaineLettreTiers() {
        return $this->prochaineLettreTiers;
    }

    /**
     * Get the quantite libelle.
     *
     * @return string Returns the quantite libelle.
     */
    public function getQuantiteLibelle() {
        return $this->quantiteLibelle;
    }

    /**
     * Get the quantite libelle2.
     *
     * @return string Returns the quantite libelle2.
     */
    public function getQuantiteLibelle2() {
        return $this->quantiteLibelle2;
    }

    /**
     * Get the quantite nb dec.
     *
     * @return int Returns the quantite nb dec.
     */
    public function getQuantiteNbDec() {
        return $this->quantiteNbDec;
    }

    /**
     * Get the quantite nb dec2.
     *
     * @return int Returns the quantite nb dec2.
     */
    public function getQuantiteNbDec2() {
        return $this->quantiteNbDec2;
    }

    /**
     * Get the quantite nb entier.
     *
     * @return int Returns the quantite nb entier.
     */
    public function getQuantiteNbEntier() {
        return $this->quantiteNbEntier;
    }

    /**
     * Get the quantite nb entier2.
     *
     * @return int Returns the quantite nb entier2.
     */
    public function getQuantiteNbEntier2() {
        return $this->quantiteNbEntier2;
    }

    /**
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the reference fournisseur.
     *
     * @return string Returns the reference fournisseur.
     */
    public function getReferenceFournisseur() {
        return $this->referenceFournisseur;
    }

    /**
     * Get the repartition ana.
     *
     * @return string Returns the repartition ana.
     */
    public function getRepartitionAna() {
        return $this->repartitionAna;
    }

    /**
     * Get the repartition auto.
     *
     * @return bool Returns the repartition auto.
     */
    public function getRepartitionAuto() {
        return $this->repartitionAuto;
    }

    /**
     * Get the rubrique bilan1.
     *
     * @return string Returns the rubrique bilan1.
     */
    public function getRubriqueBilan1() {
        return $this->rubriqueBilan1;
    }

    /**
     * Get the rubrique bilan2.
     *
     * @return string Returns the rubrique bilan2.
     */
    public function getRubriqueBilan2() {
        return $this->rubriqueBilan2;
    }

    /**
     * Get the suivi devises.
     *
     * @return bool Returns the suivi devises.
     */
    public function getSuiviDevises() {
        return $this->suiviDevises;
    }

    /**
     * Get the suivi quantite.
     *
     * @return bool Returns the suivi quantite.
     */
    public function getSuiviQuantite() {
        return $this->suiviQuantite;
    }

    /**
     * Get the suivi quantite2.
     *
     * @return bool Returns the suivi quantite2.
     */
    public function getSuiviQuantite2() {
        return $this->suiviQuantite2;
    }

    /**
     * Get the tva autres ope impos.
     *
     * @return bool Returns the tva autres ope impos.
     */
    public function getTvaAutresOpeImpos() {
        return $this->tvaAutresOpeImpos;
    }

    /**
     * Get the tva d o m.
     *
     * @return bool Returns the tva d o m.
     */
    public function getTvaDOM() {
        return $this->tvaDOM;
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
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the type collectif.
     *
     * @return bool Returns the type collectif.
     */
    public function getTypeCollectif() {
        return $this->typeCollectif;
    }

    /**
     * Get the type cpt tiers.
     *
     * @return string Returns the type cpt tiers.
     */
    public function getTypeCptTiers() {
        return $this->typeCptTiers;
    }

    /**
     * Get the type intra com.
     *
     * @return int Returns the type intra com.
     */
    public function getTypeIntraCom() {
        return $this->typeIntraCom;
    }

    /**
     * Set the a lettrer auto.
     *
     * @param bool $aLettrerAuto The a lettrer auto.
     * @return Comptes Returns this comptes.
     */
    public function setALettrerAuto($aLettrerAuto) {
        $this->aLettrerAuto = $aLettrerAuto;
        return $this;
    }

    /**
     * Set the activer lot trace.
     *
     * @param bool $activerLotTrace The activer lot trace.
     * @return Comptes Returns this comptes.
     */
    public function setActiverLotTrace($activerLotTrace) {
        $this->activerLotTrace = $activerLotTrace;
        return $this;
    }

    /**
     * Set the bon a payer.
     *
     * @param bool $bonAPayer The bon a payer.
     * @return Comptes Returns this comptes.
     */
    public function setBonAPayer($bonAPayer) {
        $this->bonAPayer = $bonAPayer;
        return $this;
    }

    /**
     * Set the centralise gd livre.
     *
     * @param bool $centraliseGdLivre The centralise gd livre.
     * @return Comptes Returns this comptes.
     */
    public function setCentraliseGdLivre($centraliseGdLivre) {
        $this->centraliseGdLivre = $centraliseGdLivre;
        return $this;
    }

    /**
     * Set the cle deux.
     *
     * @param string $cleDeux The cle deux.
     * @return Comptes Returns this comptes.
     */
    public function setCleDeux($cleDeux) {
        $this->cleDeux = $cleDeux;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return Comptes Returns this comptes.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     * @return Comptes Returns this comptes.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code regroup1.
     *
     * @param string $codeRegroup1 The code regroup1.
     * @return Comptes Returns this comptes.
     */
    public function setCodeRegroup1($codeRegroup1) {
        $this->codeRegroup1 = $codeRegroup1;
        return $this;
    }

    /**
     * Set the code regroup2.
     *
     * @param string $codeRegroup2 The code regroup2.
     * @return Comptes Returns this comptes.
     */
    public function setCodeRegroup2($codeRegroup2) {
        $this->codeRegroup2 = $codeRegroup2;
        return $this;
    }

    /**
     * Set the code regroup3.
     *
     * @param string $codeRegroup3 The code regroup3.
     * @return Comptes Returns this comptes.
     */
    public function setCodeRegroup3($codeRegroup3) {
        $this->codeRegroup3 = $codeRegroup3;
        return $this;
    }

    /**
     * Set the code regroup4.
     *
     * @param string $codeRegroup4 The code regroup4.
     * @return Comptes Returns this comptes.
     */
    public function setCodeRegroup4($codeRegroup4) {
        $this->codeRegroup4 = $codeRegroup4;
        return $this;
    }

    /**
     * Set the code repartition ana.
     *
     * @param string $codeRepartitionAna The code repartition ana.
     * @return Comptes Returns this comptes.
     */
    public function setCodeRepartitionAna($codeRepartitionAna) {
        $this->codeRepartitionAna = $codeRepartitionAna;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     * @return Comptes Returns this comptes.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     * @return Comptes Returns this comptes.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
        return $this;
    }

    /**
     * Set the collectif_1.
     *
     * @param string $collectif_1 The collectif_1.
     * @return Comptes Returns this comptes.
     */
    public function setCollectif_1($collectif_1) {
        $this->collectif_1 = $collectif_1;
        return $this;
    }

    /**
     * Set the collectif_2.
     *
     * @param string $collectif_2 The collectif_2.
     * @return Comptes Returns this comptes.
     */
    public function setCollectif_2($collectif_2) {
        $this->collectif_2 = $collectif_2;
        return $this;
    }

    /**
     * Set the compte inactif.
     *
     * @param bool $compteInactif The compte inactif.
     * @return Comptes Returns this comptes.
     */
    public function setCompteInactif($compteInactif) {
        $this->compteInactif = $compteInactif;
        return $this;
    }

    /**
     * Set the contrepartie charge prod.
     *
     * @param string $contrepartieChargeProd The contrepartie charge prod.
     * @return Comptes Returns this comptes.
     */
    public function setContrepartieChargeProd($contrepartieChargeProd) {
        $this->contrepartieChargeProd = $contrepartieChargeProd;
        return $this;
    }

    /**
     * Set the cpt particulier.
     *
     * @param bool $cptParticulier The cpt particulier.
     * @return Comptes Returns this comptes.
     */
    public function setCptParticulier($cptParticulier) {
        $this->cptParticulier = $cptParticulier;
        return $this;
    }

    /**
     * Set the cpt tva contrep c p r.
     *
     * @param string $cptTvaContrepCPR The cpt tva contrep c p r.
     * @return Comptes Returns this comptes.
     */
    public function setCptTvaContrepCPR($cptTvaContrepCPR) {
        $this->cptTvaContrepCPR = $cptTvaContrepCPR;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float $credit The credit.
     * @return Comptes Returns this comptes.
     */
    public function setCredit($credit) {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the credit hors ex.
     *
     * @param float $creditHorsEx The credit hors ex.
     * @return Comptes Returns this comptes.
     */
    public function setCreditHorsEx($creditHorsEx) {
        $this->creditHorsEx = $creditHorsEx;
        return $this;
    }

    /**
     * Set the credit_1.
     *
     * @param float $credit_1 The credit_1.
     * @return Comptes Returns this comptes.
     */
    public function setCredit_1($credit_1) {
        $this->credit_1 = $credit_1;
        return $this;
    }

    /**
     * Set the credit_2.
     *
     * @param float $credit_2 The credit_2.
     * @return Comptes Returns this comptes.
     */
    public function setCredit_2($credit_2) {
        $this->credit_2 = $credit_2;
        return $this;
    }

    /**
     * Set the cumul pied journal.
     *
     * @param bool $cumulPiedJournal The cumul pied journal.
     * @return Comptes Returns this comptes.
     */
    public function setCumulPiedJournal($cumulPiedJournal) {
        $this->cumulPiedJournal = $cumulPiedJournal;
        return $this;
    }

    /**
     * Set the date revision.
     *
     * @param DateTime $dateRevision The date revision.
     * @return Comptes Returns this comptes.
     */
    public function setDateRevision(DateTime $dateRevision = null) {
        $this->dateRevision = $dateRevision;
        return $this;
    }

    /**
     * Set the date sys creation.
     *
     * @param DateTime $dateSysCreation The date sys creation.
     * @return Comptes Returns this comptes.
     */
    public function setDateSysCreation(DateTime $dateSysCreation = null) {
        $this->dateSysCreation = $dateSysCreation;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float $debit The debit.
     * @return Comptes Returns this comptes.
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the debit hors ex.
     *
     * @param float $debitHorsEx The debit hors ex.
     * @return Comptes Returns this comptes.
     */
    public function setDebitHorsEx($debitHorsEx) {
        $this->debitHorsEx = $debitHorsEx;
        return $this;
    }

    /**
     * Set the debit_1.
     *
     * @param float $debit_1 The debit_1.
     * @return Comptes Returns this comptes.
     */
    public function setDebit_1($debit_1) {
        $this->debit_1 = $debit_1;
        return $this;
    }

    /**
     * Set the debit_2.
     *
     * @param float $debit_2 The debit_2.
     * @return Comptes Returns this comptes.
     */
    public function setDebit_2($debit_2) {
        $this->debit_2 = $debit_2;
        return $this;
    }

    /**
     * Set the detail cloture.
     *
     * @param bool $detailCloture The detail cloture.
     * @return Comptes Returns this comptes.
     */
    public function setDetailCloture($detailCloture) {
        $this->detailCloture = $detailCloture;
        return $this;
    }

    /**
     * Set the edit m2.
     *
     * @param bool $editM2 The edit m2.
     * @return Comptes Returns this comptes.
     */
    public function setEditM2($editM2) {
        $this->editM2 = $editM2;
        return $this;
    }

    /**
     * Set the etat revision.
     *
     * @param string $etatRevision The etat revision.
     * @return Comptes Returns this comptes.
     */
    public function setEtatRevision($etatRevision) {
        $this->etatRevision = $etatRevision;
        return $this;
    }

    /**
     * Set the famille.
     *
     * @param string $famille The famille.
     * @return Comptes Returns this comptes.
     */
    public function setFamille($famille) {
        $this->famille = $famille;
        return $this;
    }

    /**
     * Set the franchise.
     *
     * @param bool $franchise The franchise.
     * @return Comptes Returns this comptes.
     */
    public function setFranchise($franchise) {
        $this->franchise = $franchise;
        return $this;
    }

    /**
     * Set the gerer int cpt cour.
     *
     * @param bool $gererIntCptCour The gerer int cpt cour.
     * @return Comptes Returns this comptes.
     */
    public function setGererIntCptCour($gererIntCptCour) {
        $this->gererIntCptCour = $gererIntCptCour;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Comptes Returns this comptes.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule a l l.
     *
     * @param string $intituleALL The intitule a l l.
     * @return Comptes Returns this comptes.
     */
    public function setIntituleALL($intituleALL) {
        $this->intituleALL = $intituleALL;
        return $this;
    }

    /**
     * Set the intitule a n g.
     *
     * @param string $intituleANG The intitule a n g.
     * @return Comptes Returns this comptes.
     */
    public function setIntituleANG($intituleANG) {
        $this->intituleANG = $intituleANG;
        return $this;
    }

    /**
     * Set the intitule e s p.
     *
     * @param string $intituleESP The intitule e s p.
     * @return Comptes Returns this comptes.
     */
    public function setIntituleESP($intituleESP) {
        $this->intituleESP = $intituleESP;
        return $this;
    }

    /**
     * Set the intitule i t a.
     *
     * @param string $intituleITA The intitule i t a.
     * @return Comptes Returns this comptes.
     */
    public function setIntituleITA($intituleITA) {
        $this->intituleITA = $intituleITA;
        return $this;
    }

    /**
     * Set the intitule long.
     *
     * @param string $intituleLong The intitule long.
     * @return Comptes Returns this comptes.
     */
    public function setIntituleLong($intituleLong) {
        $this->intituleLong = $intituleLong;
        return $this;
    }

    /**
     * Set the intra com.
     *
     * @param bool $intraCom The intra com.
     * @return Comptes Returns this comptes.
     */
    public function setIntraCom($intraCom) {
        $this->intraCom = $intraCom;
        return $this;
    }

    /**
     * Set the jal tre regl.
     *
     * @param string $jalTreRegl The jal tre regl.
     * @return Comptes Returns this comptes.
     */
    public function setJalTreRegl($jalTreRegl) {
        $this->jalTreRegl = $jalTreRegl;
        return $this;
    }

    /**
     * Set the libelle lot trace.
     *
     * @param string $libelleLotTrace The libelle lot trace.
     * @return Comptes Returns this comptes.
     */
    public function setLibelleLotTrace($libelleLotTrace) {
        $this->libelleLotTrace = $libelleLotTrace;
        return $this;
    }

    /**
     * Set the marge theorique.
     *
     * @param float $margeTheorique The marge theorique.
     * @return Comptes Returns this comptes.
     */
    public function setMargeTheorique($margeTheorique) {
        $this->margeTheorique = $margeTheorique;
        return $this;
    }

    /**
     * Set the methode t v a.
     *
     * @param string $methodeTVA The methode t v a.
     * @return Comptes Returns this comptes.
     */
    public function setMethodeTVA($methodeTVA) {
        $this->methodeTVA = $methodeTVA;
        return $this;
    }

    /**
     * Set the nb ecritures.
     *
     * @param int $nbEcritures The nb ecritures.
     * @return Comptes Returns this comptes.
     */
    public function setNbEcritures($nbEcritures) {
        $this->nbEcritures = $nbEcritures;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string $niveauDroit The niveau droit.
     * @return Comptes Returns this comptes.
     */
    public function setNiveauDroit($niveauDroit) {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }

    /**
     * Set the no doss reflechi.
     *
     * @param string $noDossReflechi The no doss reflechi.
     * @return Comptes Returns this comptes.
     */
    public function setNoDossReflechi($noDossReflechi) {
        $this->noDossReflechi = $noDossReflechi;
        return $this;
    }

    /**
     * Set the no prochain lettrage.
     *
     * @param int $noProchainLettrage The no prochain lettrage.
     * @return Comptes Returns this comptes.
     */
    public function setNoProchainLettrage($noProchainLettrage) {
        $this->noProchainLettrage = $noProchainLettrage;
        return $this;
    }

    /**
     * Set the num cpt reflechi.
     *
     * @param string $numCptReflechi The num cpt reflechi.
     * @return Comptes Returns this comptes.
     */
    public function setNumCptReflechi($numCptReflechi) {
        $this->numCptReflechi = $numCptReflechi;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string $numero The numero.
     * @return Comptes Returns this comptes.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param bool $periodicite The periodicite.
     * @return Comptes Returns this comptes.
     */
    public function setPeriodicite($periodicite) {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the personne morale.
     *
     * @param bool $personneMorale The personne morale.
     * @return Comptes Returns this comptes.
     */
    public function setPersonneMorale($personneMorale) {
        $this->personneMorale = $personneMorale;
        return $this;
    }

    /**
     * Set the presta tel.
     *
     * @param bool $prestaTel The presta tel.
     * @return Comptes Returns this comptes.
     */
    public function setPrestaTel($prestaTel) {
        $this->prestaTel = $prestaTel;
        return $this;
    }

    /**
     * Set the prestataire.
     *
     * @param int $prestataire The prestataire.
     * @return Comptes Returns this comptes.
     */
    public function setPrestataire($prestataire) {
        $this->prestataire = $prestataire;
        return $this;
    }

    /**
     * Set the prix moyen nb dec.
     *
     * @param int $prixMoyenNbDec The prix moyen nb dec.
     * @return Comptes Returns this comptes.
     */
    public function setPrixMoyenNbDec($prixMoyenNbDec) {
        $this->prixMoyenNbDec = $prixMoyenNbDec;
        return $this;
    }

    /**
     * Set the prix moyen nb dec2.
     *
     * @param int $prixMoyenNbDec2 The prix moyen nb dec2.
     * @return Comptes Returns this comptes.
     */
    public function setPrixMoyenNbDec2($prixMoyenNbDec2) {
        $this->prixMoyenNbDec2 = $prixMoyenNbDec2;
        return $this;
    }

    /**
     * Set the prix moyen nb entier.
     *
     * @param int $prixMoyenNbEntier The prix moyen nb entier.
     * @return Comptes Returns this comptes.
     */
    public function setPrixMoyenNbEntier($prixMoyenNbEntier) {
        $this->prixMoyenNbEntier = $prixMoyenNbEntier;
        return $this;
    }

    /**
     * Set the prix moyen nb entier2.
     *
     * @param int $prixMoyenNbEntier2 The prix moyen nb entier2.
     * @return Comptes Returns this comptes.
     */
    public function setPrixMoyenNbEntier2($prixMoyenNbEntier2) {
        $this->prixMoyenNbEntier2 = $prixMoyenNbEntier2;
        return $this;
    }

    /**
     * Set the prochaine lettre.
     *
     * @param string $prochaineLettre The prochaine lettre.
     * @return Comptes Returns this comptes.
     */
    public function setProchaineLettre($prochaineLettre) {
        $this->prochaineLettre = $prochaineLettre;
        return $this;
    }

    /**
     * Set the prochaine lettre tiers.
     *
     * @param string $prochaineLettreTiers The prochaine lettre tiers.
     * @return Comptes Returns this comptes.
     */
    public function setProchaineLettreTiers($prochaineLettreTiers) {
        $this->prochaineLettreTiers = $prochaineLettreTiers;
        return $this;
    }

    /**
     * Set the quantite libelle.
     *
     * @param string $quantiteLibelle The quantite libelle.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteLibelle($quantiteLibelle) {
        $this->quantiteLibelle = $quantiteLibelle;
        return $this;
    }

    /**
     * Set the quantite libelle2.
     *
     * @param string $quantiteLibelle2 The quantite libelle2.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteLibelle2($quantiteLibelle2) {
        $this->quantiteLibelle2 = $quantiteLibelle2;
        return $this;
    }

    /**
     * Set the quantite nb dec.
     *
     * @param int $quantiteNbDec The quantite nb dec.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteNbDec($quantiteNbDec) {
        $this->quantiteNbDec = $quantiteNbDec;
        return $this;
    }

    /**
     * Set the quantite nb dec2.
     *
     * @param int $quantiteNbDec2 The quantite nb dec2.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteNbDec2($quantiteNbDec2) {
        $this->quantiteNbDec2 = $quantiteNbDec2;
        return $this;
    }

    /**
     * Set the quantite nb entier.
     *
     * @param int $quantiteNbEntier The quantite nb entier.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteNbEntier($quantiteNbEntier) {
        $this->quantiteNbEntier = $quantiteNbEntier;
        return $this;
    }

    /**
     * Set the quantite nb entier2.
     *
     * @param int $quantiteNbEntier2 The quantite nb entier2.
     * @return Comptes Returns this comptes.
     */
    public function setQuantiteNbEntier2($quantiteNbEntier2) {
        $this->quantiteNbEntier2 = $quantiteNbEntier2;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return Comptes Returns this comptes.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the reference fournisseur.
     *
     * @param string $referenceFournisseur The reference fournisseur.
     * @return Comptes Returns this comptes.
     */
    public function setReferenceFournisseur($referenceFournisseur) {
        $this->referenceFournisseur = $referenceFournisseur;
        return $this;
    }

    /**
     * Set the repartition ana.
     *
     * @param string $repartitionAna The repartition ana.
     * @return Comptes Returns this comptes.
     */
    public function setRepartitionAna($repartitionAna) {
        $this->repartitionAna = $repartitionAna;
        return $this;
    }

    /**
     * Set the repartition auto.
     *
     * @param bool $repartitionAuto The repartition auto.
     * @return Comptes Returns this comptes.
     */
    public function setRepartitionAuto($repartitionAuto) {
        $this->repartitionAuto = $repartitionAuto;
        return $this;
    }

    /**
     * Set the rubrique bilan1.
     *
     * @param string $rubriqueBilan1 The rubrique bilan1.
     * @return Comptes Returns this comptes.
     */
    public function setRubriqueBilan1($rubriqueBilan1) {
        $this->rubriqueBilan1 = $rubriqueBilan1;
        return $this;
    }

    /**
     * Set the rubrique bilan2.
     *
     * @param string $rubriqueBilan2 The rubrique bilan2.
     * @return Comptes Returns this comptes.
     */
    public function setRubriqueBilan2($rubriqueBilan2) {
        $this->rubriqueBilan2 = $rubriqueBilan2;
        return $this;
    }

    /**
     * Set the suivi devises.
     *
     * @param bool $suiviDevises The suivi devises.
     * @return Comptes Returns this comptes.
     */
    public function setSuiviDevises($suiviDevises) {
        $this->suiviDevises = $suiviDevises;
        return $this;
    }

    /**
     * Set the suivi quantite.
     *
     * @param bool $suiviQuantite The suivi quantite.
     * @return Comptes Returns this comptes.
     */
    public function setSuiviQuantite($suiviQuantite) {
        $this->suiviQuantite = $suiviQuantite;
        return $this;
    }

    /**
     * Set the suivi quantite2.
     *
     * @param bool $suiviQuantite2 The suivi quantite2.
     * @return Comptes Returns this comptes.
     */
    public function setSuiviQuantite2($suiviQuantite2) {
        $this->suiviQuantite2 = $suiviQuantite2;
        return $this;
    }

    /**
     * Set the tva autres ope impos.
     *
     * @param bool $tvaAutresOpeImpos The tva autres ope impos.
     * @return Comptes Returns this comptes.
     */
    public function setTvaAutresOpeImpos($tvaAutresOpeImpos) {
        $this->tvaAutresOpeImpos = $tvaAutresOpeImpos;
        return $this;
    }

    /**
     * Set the tva d o m.
     *
     * @param bool $tvaDOM The tva d o m.
     * @return Comptes Returns this comptes.
     */
    public function setTvaDOM($tvaDOM) {
        $this->tvaDOM = $tvaDOM;
        return $this;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool $tvaEncaissement The tva encaissement.
     * @return Comptes Returns this comptes.
     */
    public function setTvaEncaissement($tvaEncaissement) {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Comptes Returns this comptes.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the type collectif.
     *
     * @param bool $typeCollectif The type collectif.
     * @return Comptes Returns this comptes.
     */
    public function setTypeCollectif($typeCollectif) {
        $this->typeCollectif = $typeCollectif;
        return $this;
    }

    /**
     * Set the type cpt tiers.
     *
     * @param string $typeCptTiers The type cpt tiers.
     * @return Comptes Returns this comptes.
     */
    public function setTypeCptTiers($typeCptTiers) {
        $this->typeCptTiers = $typeCptTiers;
        return $this;
    }

    /**
     * Set the type intra com.
     *
     * @param int $typeIntraCom The type intra com.
     * @return Comptes Returns this comptes.
     */
    public function setTypeIntraCom($typeIntraCom) {
        $this->typeIntraCom = $typeIntraCom;
        return $this;
    }
}
