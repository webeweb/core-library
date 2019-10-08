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
 * Dossier4 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier4 {

    /**
     * Acompte1.
     *
     * @var float
     */
    private $acompte1;

    /**
     * Acompte2.
     *
     * @var float
     */
    private $acompte2;

    /**
     * Acompte3.
     *
     * @var float
     */
    private $acompte3;

    /**
     * Acompte4.
     *
     * @var float
     */
    private $acompte4;

    /**
     * Arch imp3519 t v a.
     *
     * @var bool
     */
    private $archImp3519TVA;

    /**
     * Archive decl t v a.
     *
     * @var int
     */
    private $archiveDeclTVA;

    /**
     * b ca12 t.
     *
     * @var bool
     */
    private $bCa12T;

    /**
     * Bal agee nb jours int1.
     *
     * @var int
     */
    private $balAgeeNbJoursInt1;

    /**
     * Bal agee nb jours int2.
     *
     * @var int
     */
    private $balAgeeNbJoursInt2;

    /**
     * Bal agee nb jours int3.
     *
     * @var int
     */
    private $balAgeeNbJoursInt3;

    /**
     * Bal agee nb jours int4.
     *
     * @var int
     */
    private $balAgeeNbJoursInt4;

    /**
     * Base15pcent.
     *
     * @var float
     */
    private $base15pcent;

    /**
     * Base33pcent.
     *
     * @var float
     */
    private $base33pcent;

    /**
     * Base t npcent.
     *
     * @var float
     */
    private $baseTNpcent;

    /**
     * Categorie p m e.
     *
     * @var int
     */
    private $categoriePME;

    /**
     * Cdi b t q.
     *
     * @var string
     */
    private $cdiBTQ;

    /**
     * Cdi bureau distributeur.
     *
     * @var string
     */
    private $cdiBureauDistributeur;

    /**
     * Cdi code officiel commune.
     *
     * @var string
     */
    private $cdiCodeOfficielCommune;

    /**
     * Cdi code postal.
     *
     * @var string
     */
    private $cdiCodePostal;

    /**
     * Cdi complement.
     *
     * @var string
     */
    private $cdiComplement;

    /**
     * Cdi nom.
     *
     * @var string
     */
    private $cdiNom;

    /**
     * Cdi nom ville.
     *
     * @var string
     */
    private $cdiNomVille;

    /**
     * Cdi nom voie.
     *
     * @var string
     */
    private $cdiNomVoie;

    /**
     * Cdi num voie.
     *
     * @var string
     */
    private $cdiNumVoie;

    /**
     * Cdi tel1.
     *
     * @var string
     */
    private $cdiTel1;

    /**
     * Date plafond interets.
     *
     * @var DateTime
     */
    private $datePlafondInterets;

    /**
     * Date plafond interets2.
     *
     * @var DateTime
     */
    private $datePlafondInterets2;

    /**
     * Date transf lot c v a e.
     *
     * @var DateTime
     */
    private $dateTransfLotCVAE;

    /**
     * Date transf lot i s.
     *
     * @var DateTime
     */
    private $dateTransfLotIS;

    /**
     * Date transfert interets.
     *
     * @var DateTime
     */
    private $dateTransfertInterets;

    /**
     * Date transfert interets2.
     *
     * @var DateTime
     */
    private $dateTransfertInterets2;

    /**
     * Dec tva type reglement.
     *
     * @var int
     */
    private $decTvaTypeReglement;

    /**
     * Decalage quinzaine.
     *
     * @var bool
     */
    private $decalageQuinzaine;

    /**
     * Decl reference paiement.
     *
     * @var string
     */
    private $declReferencePaiement;

    /**
     * Decl tva cdi.
     *
     * @var string
     */
    private $declTvaCdi;

    /**
     * Decl tva insp.
     *
     * @var string
     */
    private $declTvaInsp;

    /**
     * Decl tva regime.
     *
     * @var string
     */
    private $declTvaRegime;

    /**
     * F t i s c i c e.
     *
     * @var float
     */
    private $fTISCICE;

    /**
     * F t i s contrib mtt.
     *
     * @var float
     */
    private $fTISContribMtt;

    /**
     * F t i s credit impot.
     *
     * @var float
     */
    private $fTISCreditImpot;

    /**
     * F t i s deficits reportables.
     *
     * @var float
     */
    private $fTISDeficitsReportables;

    /**
     * F t i s num cpt1.
     *
     * @var string
     */
    private $fTISNumCpt1;

    /**
     * F t i s num cpt2.
     *
     * @var string
     */
    private $fTISNumCpt2;

    /**
     * Immo realloc.
     *
     * @var int
     */
    private $immoRealloc;

    /**
     * Interet base.
     *
     * @var float
     */
    private $interetBase;

    /**
     * Interets c a p.
     *
     * @var string
     */
    private $interetsCAP;

    /**
     * Interets c a p2.
     *
     * @var string
     */
    private $interetsCAP2;

    /**
     * Interets contrepartie.
     *
     * @var string
     */
    private $interetsContrepartie;

    /**
     * Interets contrepartie2.
     *
     * @var string
     */
    private $interetsContrepartie2;

    /**
     * Interets contrepartie deduc.
     *
     * @var string
     */
    private $interetsContrepartieDeduc;

    /**
     * Interets contrepartie deduc2.
     *
     * @var string
     */
    private $interetsContrepartieDeduc2;

    /**
     * Interets p c a.
     *
     * @var string
     */
    private $interetsPCA;

    /**
     * Interets p c a2.
     *
     * @var string
     */
    private $interetsPCA2;

    /**
     * No lot c v a e.
     *
     * @var int
     */
    private $noLotCVAE;

    /**
     * No lot cpt recip.
     *
     * @var int
     */
    private $noLotCptRecip;

    /**
     * No lot credit i s.
     *
     * @var int
     */
    private $noLotCreditIS;

    /**
     * No lot i s.
     *
     * @var int
     */
    private $noLotIS;

    /**
     * No lot interets.
     *
     * @var int
     */
    private $noLotInterets;

    /**
     * No lot interets2.
     *
     * @var int
     */
    private $noLotInterets2;

    /**
     * No lot paiement i s.
     *
     * @var int
     */
    private $noLotPaiementIS;

    /**
     * Periode transfert stock.
     *
     * @var DateTime
     */
    private $periodeTransfertStock;

    /**
     * Precedent num lot stock.
     *
     * @var int
     */
    private $precedentNumLotStock;

    /**
     * Regime agricole.
     *
     * @var bool
     */
    private $regimeAgricole;

    /**
     * Resultat net cpt.
     *
     * @var float
     */
    private $resultatNetCpt;

    /**
     * Rof t v a.
     *
     * @var string
     */
    private $rofTVA;

    /**
     * T v a b i c vir.
     *
     * @var string
     */
    private $tVABICVir;

    /**
     * T v a cloture faite.
     *
     * @var bool
     */
    private $tVAClotureFaite;

    /**
     * T v a code cabinet.
     *
     * @var string
     */
    private $tVACodeCabinet;

    /**
     * T v a code int emetteur.
     *
     * @var string
     */
    private $tVACodeIntEmetteur;

    /**
     * T v a code int recepteur.
     *
     * @var string
     */
    private $tVACodeIntRecepteur;

    /**
     * T v a cpt difference.
     *
     * @var string
     */
    private $tVACptDifference;

    /**
     * T v a deb3 jrn exclure.
     *
     * @var string
     */
    private $tVADeb3JrnExclure;

    /**
     * T v a dest attn.
     *
     * @var string
     */
    private $tVADestAttn;

    /**
     * T v a dest fax.
     *
     * @var string
     */
    private $tVADestFax;

    /**
     * T v a dest nom.
     *
     * @var string
     */
    private $tVADestNom;

    /**
     * T v a e d i edition.
     *
     * @var bool
     */
    private $tVAEDIEdition;

    /**
     * T v a emetteur is cab.
     *
     * @var bool
     */
    private $tVAEmetteurIsCab;

    /**
     * T v a envoyer mail.
     *
     * @var bool
     */
    private $tVAEnvoyerMail;

    /**
     * T v a etab_ b t q.
     *
     * @var string
     */
    private $tVAEtab_BTQ;

    /**
     * T v a etab_ bureau distributeur.
     *
     * @var string
     */
    private $tVAEtab_BureauDistributeur;

    /**
     * T v a etab_ code postal.
     *
     * @var string
     */
    private $tVAEtab_CodePostal;

    /**
     * T v a etab_ complement.
     *
     * @var string
     */
    private $tVAEtab_Complement;

    /**
     * T v a etab_ nom.
     *
     * @var string
     */
    private $tVAEtab_Nom;

    /**
     * T v a etab_ nom voie.
     *
     * @var string
     */
    private $tVAEtab_NomVoie;

    /**
     * T v a etab_ num voie.
     *
     * @var string
     */
    private $tVAEtab_NumVoie;

    /**
     * T v a exp nom.
     *
     * @var string
     */
    private $tVAExpNom;

    /**
     * T v a i b a n vir.
     *
     * @var string
     */
    private $tVAIBANVir;

    /**
     * T v a mail p j.
     *
     * @var bool
     */
    private $tVAMailPJ;

    /**
     * T v a moyen paiement.
     *
     * @var int
     */
    private $tVAMoyenPaiement;

    /**
     * T v a nom vir.
     *
     * @var string
     */
    private $tVANomVir;

    /**
     * T v a r i b vir.
     *
     * @var string
     */
    private $tVARIBVir;

    /**
     * T v a recepteur je declare.
     *
     * @var bool
     */
    private $tVARecepteurJeDeclare;

    /**
     * T v a signataire.
     *
     * @var string
     */
    private $tVASignataire;

    /**
     * T v a t l r a bic1.
     *
     * @var string
     */
    private $tVATLRABic1;

    /**
     * T v a t l r a bic2.
     *
     * @var string
     */
    private $tVATLRABic2;

    /**
     * T v a t l r a bic3.
     *
     * @var string
     */
    private $tVATLRABic3;

    /**
     * T v a t l r a iban1.
     *
     * @var string
     */
    private $tVATLRAIban1;

    /**
     * T v a t l r a iban2.
     *
     * @var string
     */
    private $tVATLRAIban2;

    /**
     * T v a t l r a iban3.
     *
     * @var string
     */
    private $tVATLRAIban3;

    /**
     * T v a t l r a rib1.
     *
     * @var string
     */
    private $tVATLRARib1;

    /**
     * T v a t l r a rib2.
     *
     * @var string
     */
    private $tVATLRARib2;

    /**
     * T v a t l r a rib3.
     *
     * @var string
     */
    private $tVATLRARib3;

    /**
     * T v a vire c r l f.
     *
     * @var bool
     */
    private $tVAVireCRLF;

    /**
     * Taux plafond interets.
     *
     * @var float
     */
    private $tauxPlafondInterets;

    /**
     * Taux plafond interets2.
     *
     * @var float
     */
    private $tauxPlafondInterets2;

    /**
     * Tva achats enc.
     *
     * @var bool
     */
    private $tvaAchatsEnc;

    /**
     * Tva c a12 a e.
     *
     * @var string
     */
    private $tvaCA12AE;

    /**
     * Tva c a d t m.
     *
     * @var DateTime
     */
    private $tvaCADTM;

    /**
     * Tva cascade.
     *
     * @var bool
     */
    private $tvaCascade;

    /**
     * Tva code journal b q.
     *
     * @var string
     */
    private $tvaCodeJournalBQ;

    /**
     * Tva code journal o d.
     *
     * @var string
     */
    private $tvaCodeJournalOD;

    /**
     * Tva cpt a ajouter.
     *
     * @var string
     */
    private $tvaCptAAjouter;

    /**
     * Tva cpt a ajouter g.
     *
     * @var string
     */
    private $tvaCptAAjouterG;

    /**
     * Tva cpt a deduire.
     *
     * @var string
     */
    private $tvaCptADeduire;

    /**
     * Tva cpt a imputer.
     *
     * @var string
     */
    private $tvaCptAImputer;

    /**
     * Tva cpt a imputer g.
     *
     * @var string
     */
    private $tvaCptAImputerG;

    /**
     * Tva cpt a payer.
     *
     * @var string
     */
    private $tvaCptAPayer;

    /**
     * Tva cpt a payer g.
     *
     * @var string
     */
    private $tvaCptAPayerG;

    /**
     * Tva cpt acq intra com.
     *
     * @var string
     */
    private $tvaCptAcqIntraCom;

    /**
     * Tva cpt anc taux.
     *
     * @var string
     */
    private $tvaCptAncTaux;

    /**
     * Tva cpt ante deduit.
     *
     * @var string
     */
    private $tvaCptAnteDeduit;

    /**
     * Tva cpt assimil3310.
     *
     * @var string
     */
    private $tvaCptAssimil3310;

    /**
     * Tva cpt assimil3310 g.
     *
     * @var string
     */
    private $tvaCptAssimil3310G;

    /**
     * Tva cpt biens.
     *
     * @var string
     */
    private $tvaCptBiens;

    /**
     * Tva cpt biens intra com.
     *
     * @var string
     */
    private $tvaCptBiensIntraCom;

    /**
     * Tva cpt d o m.
     *
     * @var string
     */
    private $tvaCptDOM;

    /**
     * Tva cpt groupe.
     *
     * @var string
     */
    private $tvaCptGroupe;

    /**
     * Tva cpt immos.
     *
     * @var string
     */
    private $tvaCptImmos;

    /**
     * Tva cpt immos intra com.
     *
     * @var string
     */
    private $tvaCptImmosIntraCom;

    /**
     * Tva cpt regul.
     *
     * @var string
     */
    private $tvaCptRegul;

    /**
     * Tva cpt rembours.
     *
     * @var string
     */
    private $tvaCptRembours;

    /**
     * Tva cpt rembours g.
     *
     * @var string
     */
    private $tvaCptRemboursG;

    /**
     * Tva cpt report.
     *
     * @var string
     */
    private $tvaCptReport;

    /**
     * Tva cpt report g.
     *
     * @var string
     */
    private $tvaCptReportG;

    /**
     * Tva cpt taux part.
     *
     * @var string
     */
    private $tvaCptTauxPart;

    /**
     * Tva cpt vente.
     *
     * @var string
     */
    private $tvaCptVente;

    /**
     * Tva e4 d b s.
     *
     * @var string
     */
    private $tvaE4DBS;

    /**
     * Tva e4 d i.
     *
     * @var string
     */
    private $tvaE4DI;

    /**
     * Tva e4 r b s.
     *
     * @var string
     */
    private $tvaE4RBS;

    /**
     * Tva e4 r i.
     *
     * @var string
     */
    private $tvaE4RI;

    /**
     * Tva e4 r jrn o d.
     *
     * @var string
     */
    private $tvaE4RJrnOD;

    /**
     * Tva enc3 der per rech d a.
     *
     * @var DateTime
     */
    private $tvaEnc3DerPerRechDA;

    /**
     * Tva jour decla.
     *
     * @var string
     */
    private $tvaJourDecla;

    /**
     * Tva methode.
     *
     * @var string
     */
    private $tvaMethode;

    /**
     * Tva parametrage ok.
     *
     * @var bool
     */
    private $tvaParametrageOk;

    /**
     * Tva periodicite.
     *
     * @var string
     */
    private $tvaPeriodicite;

    /**
     * Tva prefixe intracom.
     *
     * @var string
     */
    private $tvaPrefixeIntracom;

    /**
     * Tva regime.
     *
     * @var string
     */
    private $tvaRegime;

    /**
     * Tva type.
     *
     * @var string
     */
    private $tvaType;

    /**
     * V m p code jrn p m v.
     *
     * @var string
     */
    private $vMPCodeJrnPMV;

    /**
     * V m p cpt moins value.
     *
     * @var string
     */
    private $vMPCptMoinsValue;

    /**
     * V m p cpt plus value.
     *
     * @var string
     */
    private $vMPCptPlusValue;

    /**
     * V m p gest ecr p m v.
     *
     * @var int
     */
    private $vMPGestEcrPMV;

    /**
     * V m p gestion en saisie.
     *
     * @var bool
     */
    private $vMPGestionEnSaisie;

    /**
     * Ya reprise c i c e.
     *
     * @var bool
     */
    private $yaRepriseCICE;

    /**
     * Ya taux reduit.
     *
     * @var bool
     */
    private $yaTauxReduit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acompte1.
     *
     * @return float Returns the acompte1.
     */
    public function getAcompte1() {
        return $this->acompte1;
    }

    /**
     * Get the acompte2.
     *
     * @return float Returns the acompte2.
     */
    public function getAcompte2() {
        return $this->acompte2;
    }

    /**
     * Get the acompte3.
     *
     * @return float Returns the acompte3.
     */
    public function getAcompte3() {
        return $this->acompte3;
    }

    /**
     * Get the acompte4.
     *
     * @return float Returns the acompte4.
     */
    public function getAcompte4() {
        return $this->acompte4;
    }

    /**
     * Get the arch imp3519 t v a.
     *
     * @return bool Returns the arch imp3519 t v a.
     */
    public function getArchImp3519TVA() {
        return $this->archImp3519TVA;
    }

    /**
     * Get the archive decl t v a.
     *
     * @return int Returns the archive decl t v a.
     */
    public function getArchiveDeclTVA() {
        return $this->archiveDeclTVA;
    }

    /**
     * Get the bal agee nb jours int1.
     *
     * @return int Returns the bal agee nb jours int1.
     */
    public function getBalAgeeNbJoursInt1() {
        return $this->balAgeeNbJoursInt1;
    }

    /**
     * Get the bal agee nb jours int2.
     *
     * @return int Returns the bal agee nb jours int2.
     */
    public function getBalAgeeNbJoursInt2() {
        return $this->balAgeeNbJoursInt2;
    }

    /**
     * Get the bal agee nb jours int3.
     *
     * @return int Returns the bal agee nb jours int3.
     */
    public function getBalAgeeNbJoursInt3() {
        return $this->balAgeeNbJoursInt3;
    }

    /**
     * Get the bal agee nb jours int4.
     *
     * @return int Returns the bal agee nb jours int4.
     */
    public function getBalAgeeNbJoursInt4() {
        return $this->balAgeeNbJoursInt4;
    }

    /**
     * Get the base15pcent.
     *
     * @return float Returns the base15pcent.
     */
    public function getBase15pcent() {
        return $this->base15pcent;
    }

    /**
     * Get the base33pcent.
     *
     * @return float Returns the base33pcent.
     */
    public function getBase33pcent() {
        return $this->base33pcent;
    }

    /**
     * Get the base t npcent.
     *
     * @return float Returns the base t npcent.
     */
    public function getBaseTNpcent() {
        return $this->baseTNpcent;
    }

    /**
     * Get the categorie p m e.
     *
     * @return int Returns the categorie p m e.
     */
    public function getCategoriePME() {
        return $this->categoriePME;
    }

    /**
     * Get the cdi b t q.
     *
     * @return string Returns the cdi b t q.
     */
    public function getCdiBTQ() {
        return $this->cdiBTQ;
    }

    /**
     * Get the cdi bureau distributeur.
     *
     * @return string Returns the cdi bureau distributeur.
     */
    public function getCdiBureauDistributeur() {
        return $this->cdiBureauDistributeur;
    }

    /**
     * Get the cdi code officiel commune.
     *
     * @return string Returns the cdi code officiel commune.
     */
    public function getCdiCodeOfficielCommune() {
        return $this->cdiCodeOfficielCommune;
    }

    /**
     * Get the cdi code postal.
     *
     * @return string Returns the cdi code postal.
     */
    public function getCdiCodePostal() {
        return $this->cdiCodePostal;
    }

    /**
     * Get the cdi complement.
     *
     * @return string Returns the cdi complement.
     */
    public function getCdiComplement() {
        return $this->cdiComplement;
    }

    /**
     * Get the cdi nom.
     *
     * @return string Returns the cdi nom.
     */
    public function getCdiNom() {
        return $this->cdiNom;
    }

    /**
     * Get the cdi nom ville.
     *
     * @return string Returns the cdi nom ville.
     */
    public function getCdiNomVille() {
        return $this->cdiNomVille;
    }

    /**
     * Get the cdi nom voie.
     *
     * @return string Returns the cdi nom voie.
     */
    public function getCdiNomVoie() {
        return $this->cdiNomVoie;
    }

    /**
     * Get the cdi num voie.
     *
     * @return string Returns the cdi num voie.
     */
    public function getCdiNumVoie() {
        return $this->cdiNumVoie;
    }

    /**
     * Get the cdi tel1.
     *
     * @return string Returns the cdi tel1.
     */
    public function getCdiTel1() {
        return $this->cdiTel1;
    }

    /**
     * Get the date plafond interets.
     *
     * @return DateTime Returns the date plafond interets.
     */
    public function getDatePlafondInterets() {
        return $this->datePlafondInterets;
    }

    /**
     * Get the date plafond interets2.
     *
     * @return DateTime Returns the date plafond interets2.
     */
    public function getDatePlafondInterets2() {
        return $this->datePlafondInterets2;
    }

    /**
     * Get the date transf lot c v a e.
     *
     * @return DateTime Returns the date transf lot c v a e.
     */
    public function getDateTransfLotCVAE() {
        return $this->dateTransfLotCVAE;
    }

    /**
     * Get the date transf lot i s.
     *
     * @return DateTime Returns the date transf lot i s.
     */
    public function getDateTransfLotIS() {
        return $this->dateTransfLotIS;
    }

    /**
     * Get the date transfert interets.
     *
     * @return DateTime Returns the date transfert interets.
     */
    public function getDateTransfertInterets() {
        return $this->dateTransfertInterets;
    }

    /**
     * Get the date transfert interets2.
     *
     * @return DateTime Returns the date transfert interets2.
     */
    public function getDateTransfertInterets2() {
        return $this->dateTransfertInterets2;
    }

    /**
     * Get the dec tva type reglement.
     *
     * @return int Returns the dec tva type reglement.
     */
    public function getDecTvaTypeReglement() {
        return $this->decTvaTypeReglement;
    }

    /**
     * Get the decalage quinzaine.
     *
     * @return bool Returns the decalage quinzaine.
     */
    public function getDecalageQuinzaine() {
        return $this->decalageQuinzaine;
    }

    /**
     * Get the decl reference paiement.
     *
     * @return string Returns the decl reference paiement.
     */
    public function getDeclReferencePaiement() {
        return $this->declReferencePaiement;
    }

    /**
     * Get the decl tva cdi.
     *
     * @return string Returns the decl tva cdi.
     */
    public function getDeclTvaCdi() {
        return $this->declTvaCdi;
    }

    /**
     * Get the decl tva insp.
     *
     * @return string Returns the decl tva insp.
     */
    public function getDeclTvaInsp() {
        return $this->declTvaInsp;
    }

    /**
     * Get the decl tva regime.
     *
     * @return string Returns the decl tva regime.
     */
    public function getDeclTvaRegime() {
        return $this->declTvaRegime;
    }

    /**
     * Get the f t i s c i c e.
     *
     * @return float Returns the f t i s c i c e.
     */
    public function getFTISCICE() {
        return $this->fTISCICE;
    }

    /**
     * Get the f t i s contrib mtt.
     *
     * @return float Returns the f t i s contrib mtt.
     */
    public function getFTISContribMtt() {
        return $this->fTISContribMtt;
    }

    /**
     * Get the f t i s credit impot.
     *
     * @return float Returns the f t i s credit impot.
     */
    public function getFTISCreditImpot() {
        return $this->fTISCreditImpot;
    }

    /**
     * Get the f t i s deficits reportables.
     *
     * @return float Returns the f t i s deficits reportables.
     */
    public function getFTISDeficitsReportables() {
        return $this->fTISDeficitsReportables;
    }

    /**
     * Get the f t i s num cpt1.
     *
     * @return string Returns the f t i s num cpt1.
     */
    public function getFTISNumCpt1() {
        return $this->fTISNumCpt1;
    }

    /**
     * Get the f t i s num cpt2.
     *
     * @return string Returns the f t i s num cpt2.
     */
    public function getFTISNumCpt2() {
        return $this->fTISNumCpt2;
    }

    /**
     * Get the immo realloc.
     *
     * @return int Returns the immo realloc.
     */
    public function getImmoRealloc() {
        return $this->immoRealloc;
    }

    /**
     * Get the interet base.
     *
     * @return float Returns the interet base.
     */
    public function getInteretBase() {
        return $this->interetBase;
    }

    /**
     * Get the interets c a p.
     *
     * @return string Returns the interets c a p.
     */
    public function getInteretsCAP() {
        return $this->interetsCAP;
    }

    /**
     * Get the interets c a p2.
     *
     * @return string Returns the interets c a p2.
     */
    public function getInteretsCAP2() {
        return $this->interetsCAP2;
    }

    /**
     * Get the interets contrepartie.
     *
     * @return string Returns the interets contrepartie.
     */
    public function getInteretsContrepartie() {
        return $this->interetsContrepartie;
    }

    /**
     * Get the interets contrepartie2.
     *
     * @return string Returns the interets contrepartie2.
     */
    public function getInteretsContrepartie2() {
        return $this->interetsContrepartie2;
    }

    /**
     * Get the interets contrepartie deduc.
     *
     * @return string Returns the interets contrepartie deduc.
     */
    public function getInteretsContrepartieDeduc() {
        return $this->interetsContrepartieDeduc;
    }

    /**
     * Get the interets contrepartie deduc2.
     *
     * @return string Returns the interets contrepartie deduc2.
     */
    public function getInteretsContrepartieDeduc2() {
        return $this->interetsContrepartieDeduc2;
    }

    /**
     * Get the interets p c a.
     *
     * @return string Returns the interets p c a.
     */
    public function getInteretsPCA() {
        return $this->interetsPCA;
    }

    /**
     * Get the interets p c a2.
     *
     * @return string Returns the interets p c a2.
     */
    public function getInteretsPCA2() {
        return $this->interetsPCA2;
    }

    /**
     * Get the no lot c v a e.
     *
     * @return int Returns the no lot c v a e.
     */
    public function getNoLotCVAE() {
        return $this->noLotCVAE;
    }

    /**
     * Get the no lot cpt recip.
     *
     * @return int Returns the no lot cpt recip.
     */
    public function getNoLotCptRecip() {
        return $this->noLotCptRecip;
    }

    /**
     * Get the no lot credit i s.
     *
     * @return int Returns the no lot credit i s.
     */
    public function getNoLotCreditIS() {
        return $this->noLotCreditIS;
    }

    /**
     * Get the no lot i s.
     *
     * @return int Returns the no lot i s.
     */
    public function getNoLotIS() {
        return $this->noLotIS;
    }

    /**
     * Get the no lot interets.
     *
     * @return int Returns the no lot interets.
     */
    public function getNoLotInterets() {
        return $this->noLotInterets;
    }

    /**
     * Get the no lot interets2.
     *
     * @return int Returns the no lot interets2.
     */
    public function getNoLotInterets2() {
        return $this->noLotInterets2;
    }

    /**
     * Get the no lot paiement i s.
     *
     * @return int Returns the no lot paiement i s.
     */
    public function getNoLotPaiementIS() {
        return $this->noLotPaiementIS;
    }

    /**
     * Get the periode transfert stock.
     *
     * @return DateTime Returns the periode transfert stock.
     */
    public function getPeriodeTransfertStock() {
        return $this->periodeTransfertStock;
    }

    /**
     * Get the precedent num lot stock.
     *
     * @return int Returns the precedent num lot stock.
     */
    public function getPrecedentNumLotStock() {
        return $this->precedentNumLotStock;
    }

    /**
     * Get the regime agricole.
     *
     * @return bool Returns the regime agricole.
     */
    public function getRegimeAgricole() {
        return $this->regimeAgricole;
    }

    /**
     * Get the resultat net cpt.
     *
     * @return float Returns the resultat net cpt.
     */
    public function getResultatNetCpt() {
        return $this->resultatNetCpt;
    }

    /**
     * Get the rof t v a.
     *
     * @return string Returns the rof t v a.
     */
    public function getRofTVA() {
        return $this->rofTVA;
    }

    /**
     * Get the t v a b i c vir.
     *
     * @return string Returns the t v a b i c vir.
     */
    public function getTVABICVir() {
        return $this->tVABICVir;
    }

    /**
     * Get the t v a cloture faite.
     *
     * @return bool Returns the t v a cloture faite.
     */
    public function getTVAClotureFaite() {
        return $this->tVAClotureFaite;
    }

    /**
     * Get the t v a code cabinet.
     *
     * @return string Returns the t v a code cabinet.
     */
    public function getTVACodeCabinet() {
        return $this->tVACodeCabinet;
    }

    /**
     * Get the t v a code int emetteur.
     *
     * @return string Returns the t v a code int emetteur.
     */
    public function getTVACodeIntEmetteur() {
        return $this->tVACodeIntEmetteur;
    }

    /**
     * Get the t v a code int recepteur.
     *
     * @return string Returns the t v a code int recepteur.
     */
    public function getTVACodeIntRecepteur() {
        return $this->tVACodeIntRecepteur;
    }

    /**
     * Get the t v a cpt difference.
     *
     * @return string Returns the t v a cpt difference.
     */
    public function getTVACptDifference() {
        return $this->tVACptDifference;
    }

    /**
     * Get the t v a deb3 jrn exclure.
     *
     * @return string Returns the t v a deb3 jrn exclure.
     */
    public function getTVADeb3JrnExclure() {
        return $this->tVADeb3JrnExclure;
    }

    /**
     * Get the t v a dest attn.
     *
     * @return string Returns the t v a dest attn.
     */
    public function getTVADestAttn() {
        return $this->tVADestAttn;
    }

    /**
     * Get the t v a dest fax.
     *
     * @return string Returns the t v a dest fax.
     */
    public function getTVADestFax() {
        return $this->tVADestFax;
    }

    /**
     * Get the t v a dest nom.
     *
     * @return string Returns the t v a dest nom.
     */
    public function getTVADestNom() {
        return $this->tVADestNom;
    }

    /**
     * Get the t v a e d i edition.
     *
     * @return bool Returns the t v a e d i edition.
     */
    public function getTVAEDIEdition() {
        return $this->tVAEDIEdition;
    }

    /**
     * Get the t v a emetteur is cab.
     *
     * @return bool Returns the t v a emetteur is cab.
     */
    public function getTVAEmetteurIsCab() {
        return $this->tVAEmetteurIsCab;
    }

    /**
     * Get the t v a envoyer mail.
     *
     * @return bool Returns the t v a envoyer mail.
     */
    public function getTVAEnvoyerMail() {
        return $this->tVAEnvoyerMail;
    }

    /**
     * Get the t v a etab_ b t q.
     *
     * @return string Returns the t v a etab_ b t q.
     */
    public function getTVAEtab_BTQ() {
        return $this->tVAEtab_BTQ;
    }

    /**
     * Get the t v a etab_ bureau distributeur.
     *
     * @return string Returns the t v a etab_ bureau distributeur.
     */
    public function getTVAEtab_BureauDistributeur() {
        return $this->tVAEtab_BureauDistributeur;
    }

    /**
     * Get the t v a etab_ code postal.
     *
     * @return string Returns the t v a etab_ code postal.
     */
    public function getTVAEtab_CodePostal() {
        return $this->tVAEtab_CodePostal;
    }

    /**
     * Get the t v a etab_ complement.
     *
     * @return string Returns the t v a etab_ complement.
     */
    public function getTVAEtab_Complement() {
        return $this->tVAEtab_Complement;
    }

    /**
     * Get the t v a etab_ nom.
     *
     * @return string Returns the t v a etab_ nom.
     */
    public function getTVAEtab_Nom() {
        return $this->tVAEtab_Nom;
    }

    /**
     * Get the t v a etab_ nom voie.
     *
     * @return string Returns the t v a etab_ nom voie.
     */
    public function getTVAEtab_NomVoie() {
        return $this->tVAEtab_NomVoie;
    }

    /**
     * Get the t v a etab_ num voie.
     *
     * @return string Returns the t v a etab_ num voie.
     */
    public function getTVAEtab_NumVoie() {
        return $this->tVAEtab_NumVoie;
    }

    /**
     * Get the t v a exp nom.
     *
     * @return string Returns the t v a exp nom.
     */
    public function getTVAExpNom() {
        return $this->tVAExpNom;
    }

    /**
     * Get the t v a i b a n vir.
     *
     * @return string Returns the t v a i b a n vir.
     */
    public function getTVAIBANVir() {
        return $this->tVAIBANVir;
    }

    /**
     * Get the t v a mail p j.
     *
     * @return bool Returns the t v a mail p j.
     */
    public function getTVAMailPJ() {
        return $this->tVAMailPJ;
    }

    /**
     * Get the t v a moyen paiement.
     *
     * @return int Returns the t v a moyen paiement.
     */
    public function getTVAMoyenPaiement() {
        return $this->tVAMoyenPaiement;
    }

    /**
     * Get the t v a nom vir.
     *
     * @return string Returns the t v a nom vir.
     */
    public function getTVANomVir() {
        return $this->tVANomVir;
    }

    /**
     * Get the t v a r i b vir.
     *
     * @return string Returns the t v a r i b vir.
     */
    public function getTVARIBVir() {
        return $this->tVARIBVir;
    }

    /**
     * Get the t v a recepteur je declare.
     *
     * @return bool Returns the t v a recepteur je declare.
     */
    public function getTVARecepteurJeDeclare() {
        return $this->tVARecepteurJeDeclare;
    }

    /**
     * Get the t v a signataire.
     *
     * @return string Returns the t v a signataire.
     */
    public function getTVASignataire() {
        return $this->tVASignataire;
    }

    /**
     * Get the t v a t l r a bic1.
     *
     * @return string Returns the t v a t l r a bic1.
     */
    public function getTVATLRABic1() {
        return $this->tVATLRABic1;
    }

    /**
     * Get the t v a t l r a bic2.
     *
     * @return string Returns the t v a t l r a bic2.
     */
    public function getTVATLRABic2() {
        return $this->tVATLRABic2;
    }

    /**
     * Get the t v a t l r a bic3.
     *
     * @return string Returns the t v a t l r a bic3.
     */
    public function getTVATLRABic3() {
        return $this->tVATLRABic3;
    }

    /**
     * Get the t v a t l r a iban1.
     *
     * @return string Returns the t v a t l r a iban1.
     */
    public function getTVATLRAIban1() {
        return $this->tVATLRAIban1;
    }

    /**
     * Get the t v a t l r a iban2.
     *
     * @return string Returns the t v a t l r a iban2.
     */
    public function getTVATLRAIban2() {
        return $this->tVATLRAIban2;
    }

    /**
     * Get the t v a t l r a iban3.
     *
     * @return string Returns the t v a t l r a iban3.
     */
    public function getTVATLRAIban3() {
        return $this->tVATLRAIban3;
    }

    /**
     * Get the t v a t l r a rib1.
     *
     * @return string Returns the t v a t l r a rib1.
     */
    public function getTVATLRARib1() {
        return $this->tVATLRARib1;
    }

    /**
     * Get the t v a t l r a rib2.
     *
     * @return string Returns the t v a t l r a rib2.
     */
    public function getTVATLRARib2() {
        return $this->tVATLRARib2;
    }

    /**
     * Get the t v a t l r a rib3.
     *
     * @return string Returns the t v a t l r a rib3.
     */
    public function getTVATLRARib3() {
        return $this->tVATLRARib3;
    }

    /**
     * Get the t v a vire c r l f.
     *
     * @return bool Returns the t v a vire c r l f.
     */
    public function getTVAVireCRLF() {
        return $this->tVAVireCRLF;
    }

    /**
     * Get the taux plafond interets.
     *
     * @return float Returns the taux plafond interets.
     */
    public function getTauxPlafondInterets() {
        return $this->tauxPlafondInterets;
    }

    /**
     * Get the taux plafond interets2.
     *
     * @return float Returns the taux plafond interets2.
     */
    public function getTauxPlafondInterets2() {
        return $this->tauxPlafondInterets2;
    }

    /**
     * Get the tva achats enc.
     *
     * @return bool Returns the tva achats enc.
     */
    public function getTvaAchatsEnc() {
        return $this->tvaAchatsEnc;
    }

    /**
     * Get the tva c a12 a e.
     *
     * @return string Returns the tva c a12 a e.
     */
    public function getTvaCA12AE() {
        return $this->tvaCA12AE;
    }

    /**
     * Get the tva c a d t m.
     *
     * @return DateTime Returns the tva c a d t m.
     */
    public function getTvaCADTM() {
        return $this->tvaCADTM;
    }

    /**
     * Get the tva cascade.
     *
     * @return bool Returns the tva cascade.
     */
    public function getTvaCascade() {
        return $this->tvaCascade;
    }

    /**
     * Get the tva code journal b q.
     *
     * @return string Returns the tva code journal b q.
     */
    public function getTvaCodeJournalBQ() {
        return $this->tvaCodeJournalBQ;
    }

    /**
     * Get the tva code journal o d.
     *
     * @return string Returns the tva code journal o d.
     */
    public function getTvaCodeJournalOD() {
        return $this->tvaCodeJournalOD;
    }

    /**
     * Get the tva cpt a ajouter.
     *
     * @return string Returns the tva cpt a ajouter.
     */
    public function getTvaCptAAjouter() {
        return $this->tvaCptAAjouter;
    }

    /**
     * Get the tva cpt a ajouter g.
     *
     * @return string Returns the tva cpt a ajouter g.
     */
    public function getTvaCptAAjouterG() {
        return $this->tvaCptAAjouterG;
    }

    /**
     * Get the tva cpt a deduire.
     *
     * @return string Returns the tva cpt a deduire.
     */
    public function getTvaCptADeduire() {
        return $this->tvaCptADeduire;
    }

    /**
     * Get the tva cpt a imputer.
     *
     * @return string Returns the tva cpt a imputer.
     */
    public function getTvaCptAImputer() {
        return $this->tvaCptAImputer;
    }

    /**
     * Get the tva cpt a imputer g.
     *
     * @return string Returns the tva cpt a imputer g.
     */
    public function getTvaCptAImputerG() {
        return $this->tvaCptAImputerG;
    }

    /**
     * Get the tva cpt a payer.
     *
     * @return string Returns the tva cpt a payer.
     */
    public function getTvaCptAPayer() {
        return $this->tvaCptAPayer;
    }

    /**
     * Get the tva cpt a payer g.
     *
     * @return string Returns the tva cpt a payer g.
     */
    public function getTvaCptAPayerG() {
        return $this->tvaCptAPayerG;
    }

    /**
     * Get the tva cpt acq intra com.
     *
     * @return string Returns the tva cpt acq intra com.
     */
    public function getTvaCptAcqIntraCom() {
        return $this->tvaCptAcqIntraCom;
    }

    /**
     * Get the tva cpt anc taux.
     *
     * @return string Returns the tva cpt anc taux.
     */
    public function getTvaCptAncTaux() {
        return $this->tvaCptAncTaux;
    }

    /**
     * Get the tva cpt ante deduit.
     *
     * @return string Returns the tva cpt ante deduit.
     */
    public function getTvaCptAnteDeduit() {
        return $this->tvaCptAnteDeduit;
    }

    /**
     * Get the tva cpt assimil3310.
     *
     * @return string Returns the tva cpt assimil3310.
     */
    public function getTvaCptAssimil3310() {
        return $this->tvaCptAssimil3310;
    }

    /**
     * Get the tva cpt assimil3310 g.
     *
     * @return string Returns the tva cpt assimil3310 g.
     */
    public function getTvaCptAssimil3310G() {
        return $this->tvaCptAssimil3310G;
    }

    /**
     * Get the tva cpt biens.
     *
     * @return string Returns the tva cpt biens.
     */
    public function getTvaCptBiens() {
        return $this->tvaCptBiens;
    }

    /**
     * Get the tva cpt biens intra com.
     *
     * @return string Returns the tva cpt biens intra com.
     */
    public function getTvaCptBiensIntraCom() {
        return $this->tvaCptBiensIntraCom;
    }

    /**
     * Get the tva cpt d o m.
     *
     * @return string Returns the tva cpt d o m.
     */
    public function getTvaCptDOM() {
        return $this->tvaCptDOM;
    }

    /**
     * Get the tva cpt groupe.
     *
     * @return string Returns the tva cpt groupe.
     */
    public function getTvaCptGroupe() {
        return $this->tvaCptGroupe;
    }

    /**
     * Get the tva cpt immos.
     *
     * @return string Returns the tva cpt immos.
     */
    public function getTvaCptImmos() {
        return $this->tvaCptImmos;
    }

    /**
     * Get the tva cpt immos intra com.
     *
     * @return string Returns the tva cpt immos intra com.
     */
    public function getTvaCptImmosIntraCom() {
        return $this->tvaCptImmosIntraCom;
    }

    /**
     * Get the tva cpt regul.
     *
     * @return string Returns the tva cpt regul.
     */
    public function getTvaCptRegul() {
        return $this->tvaCptRegul;
    }

    /**
     * Get the tva cpt rembours.
     *
     * @return string Returns the tva cpt rembours.
     */
    public function getTvaCptRembours() {
        return $this->tvaCptRembours;
    }

    /**
     * Get the tva cpt rembours g.
     *
     * @return string Returns the tva cpt rembours g.
     */
    public function getTvaCptRemboursG() {
        return $this->tvaCptRemboursG;
    }

    /**
     * Get the tva cpt report.
     *
     * @return string Returns the tva cpt report.
     */
    public function getTvaCptReport() {
        return $this->tvaCptReport;
    }

    /**
     * Get the tva cpt report g.
     *
     * @return string Returns the tva cpt report g.
     */
    public function getTvaCptReportG() {
        return $this->tvaCptReportG;
    }

    /**
     * Get the tva cpt taux part.
     *
     * @return string Returns the tva cpt taux part.
     */
    public function getTvaCptTauxPart() {
        return $this->tvaCptTauxPart;
    }

    /**
     * Get the tva cpt vente.
     *
     * @return string Returns the tva cpt vente.
     */
    public function getTvaCptVente() {
        return $this->tvaCptVente;
    }

    /**
     * Get the tva e4 d b s.
     *
     * @return string Returns the tva e4 d b s.
     */
    public function getTvaE4DBS() {
        return $this->tvaE4DBS;
    }

    /**
     * Get the tva e4 d i.
     *
     * @return string Returns the tva e4 d i.
     */
    public function getTvaE4DI() {
        return $this->tvaE4DI;
    }

    /**
     * Get the tva e4 r b s.
     *
     * @return string Returns the tva e4 r b s.
     */
    public function getTvaE4RBS() {
        return $this->tvaE4RBS;
    }

    /**
     * Get the tva e4 r i.
     *
     * @return string Returns the tva e4 r i.
     */
    public function getTvaE4RI() {
        return $this->tvaE4RI;
    }

    /**
     * Get the tva e4 r jrn o d.
     *
     * @return string Returns the tva e4 r jrn o d.
     */
    public function getTvaE4RJrnOD() {
        return $this->tvaE4RJrnOD;
    }

    /**
     * Get the tva enc3 der per rech d a.
     *
     * @return DateTime Returns the tva enc3 der per rech d a.
     */
    public function getTvaEnc3DerPerRechDA() {
        return $this->tvaEnc3DerPerRechDA;
    }

    /**
     * Get the tva jour decla.
     *
     * @return string Returns the tva jour decla.
     */
    public function getTvaJourDecla() {
        return $this->tvaJourDecla;
    }

    /**
     * Get the tva methode.
     *
     * @return string Returns the tva methode.
     */
    public function getTvaMethode() {
        return $this->tvaMethode;
    }

    /**
     * Get the tva parametrage ok.
     *
     * @return bool Returns the tva parametrage ok.
     */
    public function getTvaParametrageOk() {
        return $this->tvaParametrageOk;
    }

    /**
     * Get the tva periodicite.
     *
     * @return string Returns the tva periodicite.
     */
    public function getTvaPeriodicite() {
        return $this->tvaPeriodicite;
    }

    /**
     * Get the tva prefixe intracom.
     *
     * @return string Returns the tva prefixe intracom.
     */
    public function getTvaPrefixeIntracom() {
        return $this->tvaPrefixeIntracom;
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
     * Get the tva type.
     *
     * @return string Returns the tva type.
     */
    public function getTvaType() {
        return $this->tvaType;
    }

    /**
     * Get the v m p code jrn p m v.
     *
     * @return string Returns the v m p code jrn p m v.
     */
    public function getVMPCodeJrnPMV() {
        return $this->vMPCodeJrnPMV;
    }

    /**
     * Get the v m p cpt moins value.
     *
     * @return string Returns the v m p cpt moins value.
     */
    public function getVMPCptMoinsValue() {
        return $this->vMPCptMoinsValue;
    }

    /**
     * Get the v m p cpt plus value.
     *
     * @return string Returns the v m p cpt plus value.
     */
    public function getVMPCptPlusValue() {
        return $this->vMPCptPlusValue;
    }

    /**
     * Get the v m p gest ecr p m v.
     *
     * @return int Returns the v m p gest ecr p m v.
     */
    public function getVMPGestEcrPMV() {
        return $this->vMPGestEcrPMV;
    }

    /**
     * Get the v m p gestion en saisie.
     *
     * @return bool Returns the v m p gestion en saisie.
     */
    public function getVMPGestionEnSaisie() {
        return $this->vMPGestionEnSaisie;
    }

    /**
     * Get the ya reprise c i c e.
     *
     * @return bool Returns the ya reprise c i c e.
     */
    public function getYaRepriseCICE() {
        return $this->yaRepriseCICE;
    }

    /**
     * Get the ya taux reduit.
     *
     * @return bool Returns the ya taux reduit.
     */
    public function getYaTauxReduit() {
        return $this->yaTauxReduit;
    }

    /**
     * Get the b ca12 t.
     *
     * @return bool Returns the b ca12 t.
     */
    public function getbCa12T() {
        return $this->bCa12T;
    }

    /**
     * Set the acompte1.
     *
     * @param float $acompte1 The acompte1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setAcompte1($acompte1) {
        $this->acompte1 = $acompte1;
        return $this;
    }

    /**
     * Set the acompte2.
     *
     * @param float $acompte2 The acompte2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setAcompte2($acompte2) {
        $this->acompte2 = $acompte2;
        return $this;
    }

    /**
     * Set the acompte3.
     *
     * @param float $acompte3 The acompte3.
     * @return Dossier4 Returns this dossier4.
     */
    public function setAcompte3($acompte3) {
        $this->acompte3 = $acompte3;
        return $this;
    }

    /**
     * Set the acompte4.
     *
     * @param float $acompte4 The acompte4.
     * @return Dossier4 Returns this dossier4.
     */
    public function setAcompte4($acompte4) {
        $this->acompte4 = $acompte4;
        return $this;
    }

    /**
     * Set the arch imp3519 t v a.
     *
     * @param bool $archImp3519TVA The arch imp3519 t v a.
     * @return Dossier4 Returns this dossier4.
     */
    public function setArchImp3519TVA($archImp3519TVA) {
        $this->archImp3519TVA = $archImp3519TVA;
        return $this;
    }

    /**
     * Set the archive decl t v a.
     *
     * @param int $archiveDeclTVA The archive decl t v a.
     * @return Dossier4 Returns this dossier4.
     */
    public function setArchiveDeclTVA($archiveDeclTVA) {
        $this->archiveDeclTVA = $archiveDeclTVA;
        return $this;
    }

    /**
     * Set the bal agee nb jours int1.
     *
     * @param int $balAgeeNbJoursInt1 The bal agee nb jours int1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBalAgeeNbJoursInt1($balAgeeNbJoursInt1) {
        $this->balAgeeNbJoursInt1 = $balAgeeNbJoursInt1;
        return $this;
    }

    /**
     * Set the bal agee nb jours int2.
     *
     * @param int $balAgeeNbJoursInt2 The bal agee nb jours int2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBalAgeeNbJoursInt2($balAgeeNbJoursInt2) {
        $this->balAgeeNbJoursInt2 = $balAgeeNbJoursInt2;
        return $this;
    }

    /**
     * Set the bal agee nb jours int3.
     *
     * @param int $balAgeeNbJoursInt3 The bal agee nb jours int3.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBalAgeeNbJoursInt3($balAgeeNbJoursInt3) {
        $this->balAgeeNbJoursInt3 = $balAgeeNbJoursInt3;
        return $this;
    }

    /**
     * Set the bal agee nb jours int4.
     *
     * @param int $balAgeeNbJoursInt4 The bal agee nb jours int4.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBalAgeeNbJoursInt4($balAgeeNbJoursInt4) {
        $this->balAgeeNbJoursInt4 = $balAgeeNbJoursInt4;
        return $this;
    }

    /**
     * Set the base15pcent.
     *
     * @param float $base15pcent The base15pcent.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBase15pcent($base15pcent) {
        $this->base15pcent = $base15pcent;
        return $this;
    }

    /**
     * Set the base33pcent.
     *
     * @param float $base33pcent The base33pcent.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBase33pcent($base33pcent) {
        $this->base33pcent = $base33pcent;
        return $this;
    }

    /**
     * Set the base t npcent.
     *
     * @param float $baseTNpcent The base t npcent.
     * @return Dossier4 Returns this dossier4.
     */
    public function setBaseTNpcent($baseTNpcent) {
        $this->baseTNpcent = $baseTNpcent;
        return $this;
    }

    /**
     * Set the categorie p m e.
     *
     * @param int $categoriePME The categorie p m e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCategoriePME($categoriePME) {
        $this->categoriePME = $categoriePME;
        return $this;
    }

    /**
     * Set the cdi b t q.
     *
     * @param string $cdiBTQ The cdi b t q.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiBTQ($cdiBTQ) {
        $this->cdiBTQ = $cdiBTQ;
        return $this;
    }

    /**
     * Set the cdi bureau distributeur.
     *
     * @param string $cdiBureauDistributeur The cdi bureau distributeur.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiBureauDistributeur($cdiBureauDistributeur) {
        $this->cdiBureauDistributeur = $cdiBureauDistributeur;
        return $this;
    }

    /**
     * Set the cdi code officiel commune.
     *
     * @param string $cdiCodeOfficielCommune The cdi code officiel commune.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiCodeOfficielCommune($cdiCodeOfficielCommune) {
        $this->cdiCodeOfficielCommune = $cdiCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the cdi code postal.
     *
     * @param string $cdiCodePostal The cdi code postal.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiCodePostal($cdiCodePostal) {
        $this->cdiCodePostal = $cdiCodePostal;
        return $this;
    }

    /**
     * Set the cdi complement.
     *
     * @param string $cdiComplement The cdi complement.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiComplement($cdiComplement) {
        $this->cdiComplement = $cdiComplement;
        return $this;
    }

    /**
     * Set the cdi nom.
     *
     * @param string $cdiNom The cdi nom.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiNom($cdiNom) {
        $this->cdiNom = $cdiNom;
        return $this;
    }

    /**
     * Set the cdi nom ville.
     *
     * @param string $cdiNomVille The cdi nom ville.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiNomVille($cdiNomVille) {
        $this->cdiNomVille = $cdiNomVille;
        return $this;
    }

    /**
     * Set the cdi nom voie.
     *
     * @param string $cdiNomVoie The cdi nom voie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiNomVoie($cdiNomVoie) {
        $this->cdiNomVoie = $cdiNomVoie;
        return $this;
    }

    /**
     * Set the cdi num voie.
     *
     * @param string $cdiNumVoie The cdi num voie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiNumVoie($cdiNumVoie) {
        $this->cdiNumVoie = $cdiNumVoie;
        return $this;
    }

    /**
     * Set the cdi tel1.
     *
     * @param string $cdiTel1 The cdi tel1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setCdiTel1($cdiTel1) {
        $this->cdiTel1 = $cdiTel1;
        return $this;
    }

    /**
     * Set the date plafond interets.
     *
     * @param DateTime $datePlafondInterets The date plafond interets.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDatePlafondInterets(DateTime $datePlafondInterets = null) {
        $this->datePlafondInterets = $datePlafondInterets;
        return $this;
    }

    /**
     * Set the date plafond interets2.
     *
     * @param DateTime $datePlafondInterets2 The date plafond interets2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDatePlafondInterets2(DateTime $datePlafondInterets2 = null) {
        $this->datePlafondInterets2 = $datePlafondInterets2;
        return $this;
    }

    /**
     * Set the date transf lot c v a e.
     *
     * @param DateTime $dateTransfLotCVAE The date transf lot c v a e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDateTransfLotCVAE(DateTime $dateTransfLotCVAE = null) {
        $this->dateTransfLotCVAE = $dateTransfLotCVAE;
        return $this;
    }

    /**
     * Set the date transf lot i s.
     *
     * @param DateTime $dateTransfLotIS The date transf lot i s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDateTransfLotIS(DateTime $dateTransfLotIS = null) {
        $this->dateTransfLotIS = $dateTransfLotIS;
        return $this;
    }

    /**
     * Set the date transfert interets.
     *
     * @param DateTime $dateTransfertInterets The date transfert interets.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDateTransfertInterets(DateTime $dateTransfertInterets = null) {
        $this->dateTransfertInterets = $dateTransfertInterets;
        return $this;
    }

    /**
     * Set the date transfert interets2.
     *
     * @param DateTime $dateTransfertInterets2 The date transfert interets2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDateTransfertInterets2(DateTime $dateTransfertInterets2 = null) {
        $this->dateTransfertInterets2 = $dateTransfertInterets2;
        return $this;
    }

    /**
     * Set the dec tva type reglement.
     *
     * @param int $decTvaTypeReglement The dec tva type reglement.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDecTvaTypeReglement($decTvaTypeReglement) {
        $this->decTvaTypeReglement = $decTvaTypeReglement;
        return $this;
    }

    /**
     * Set the decalage quinzaine.
     *
     * @param bool $decalageQuinzaine The decalage quinzaine.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDecalageQuinzaine($decalageQuinzaine) {
        $this->decalageQuinzaine = $decalageQuinzaine;
        return $this;
    }

    /**
     * Set the decl reference paiement.
     *
     * @param string $declReferencePaiement The decl reference paiement.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDeclReferencePaiement($declReferencePaiement) {
        $this->declReferencePaiement = $declReferencePaiement;
        return $this;
    }

    /**
     * Set the decl tva cdi.
     *
     * @param string $declTvaCdi The decl tva cdi.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDeclTvaCdi($declTvaCdi) {
        $this->declTvaCdi = $declTvaCdi;
        return $this;
    }

    /**
     * Set the decl tva insp.
     *
     * @param string $declTvaInsp The decl tva insp.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDeclTvaInsp($declTvaInsp) {
        $this->declTvaInsp = $declTvaInsp;
        return $this;
    }

    /**
     * Set the decl tva regime.
     *
     * @param string $declTvaRegime The decl tva regime.
     * @return Dossier4 Returns this dossier4.
     */
    public function setDeclTvaRegime($declTvaRegime) {
        $this->declTvaRegime = $declTvaRegime;
        return $this;
    }

    /**
     * Set the f t i s c i c e.
     *
     * @param float $fTISCICE The f t i s c i c e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISCICE($fTISCICE) {
        $this->fTISCICE = $fTISCICE;
        return $this;
    }

    /**
     * Set the f t i s contrib mtt.
     *
     * @param float $fTISContribMtt The f t i s contrib mtt.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISContribMtt($fTISContribMtt) {
        $this->fTISContribMtt = $fTISContribMtt;
        return $this;
    }

    /**
     * Set the f t i s credit impot.
     *
     * @param float $fTISCreditImpot The f t i s credit impot.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISCreditImpot($fTISCreditImpot) {
        $this->fTISCreditImpot = $fTISCreditImpot;
        return $this;
    }

    /**
     * Set the f t i s deficits reportables.
     *
     * @param float $fTISDeficitsReportables The f t i s deficits reportables.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISDeficitsReportables($fTISDeficitsReportables) {
        $this->fTISDeficitsReportables = $fTISDeficitsReportables;
        return $this;
    }

    /**
     * Set the f t i s num cpt1.
     *
     * @param string $fTISNumCpt1 The f t i s num cpt1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISNumCpt1($fTISNumCpt1) {
        $this->fTISNumCpt1 = $fTISNumCpt1;
        return $this;
    }

    /**
     * Set the f t i s num cpt2.
     *
     * @param string $fTISNumCpt2 The f t i s num cpt2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setFTISNumCpt2($fTISNumCpt2) {
        $this->fTISNumCpt2 = $fTISNumCpt2;
        return $this;
    }

    /**
     * Set the immo realloc.
     *
     * @param int $immoRealloc The immo realloc.
     * @return Dossier4 Returns this dossier4.
     */
    public function setImmoRealloc($immoRealloc) {
        $this->immoRealloc = $immoRealloc;
        return $this;
    }

    /**
     * Set the interet base.
     *
     * @param float $interetBase The interet base.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretBase($interetBase) {
        $this->interetBase = $interetBase;
        return $this;
    }

    /**
     * Set the interets c a p.
     *
     * @param string $interetsCAP The interets c a p.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsCAP($interetsCAP) {
        $this->interetsCAP = $interetsCAP;
        return $this;
    }

    /**
     * Set the interets c a p2.
     *
     * @param string $interetsCAP2 The interets c a p2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsCAP2($interetsCAP2) {
        $this->interetsCAP2 = $interetsCAP2;
        return $this;
    }

    /**
     * Set the interets contrepartie.
     *
     * @param string $interetsContrepartie The interets contrepartie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsContrepartie($interetsContrepartie) {
        $this->interetsContrepartie = $interetsContrepartie;
        return $this;
    }

    /**
     * Set the interets contrepartie2.
     *
     * @param string $interetsContrepartie2 The interets contrepartie2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsContrepartie2($interetsContrepartie2) {
        $this->interetsContrepartie2 = $interetsContrepartie2;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc.
     *
     * @param string $interetsContrepartieDeduc The interets contrepartie deduc.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsContrepartieDeduc($interetsContrepartieDeduc) {
        $this->interetsContrepartieDeduc = $interetsContrepartieDeduc;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc2.
     *
     * @param string $interetsContrepartieDeduc2 The interets contrepartie deduc2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsContrepartieDeduc2($interetsContrepartieDeduc2) {
        $this->interetsContrepartieDeduc2 = $interetsContrepartieDeduc2;
        return $this;
    }

    /**
     * Set the interets p c a.
     *
     * @param string $interetsPCA The interets p c a.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsPCA($interetsPCA) {
        $this->interetsPCA = $interetsPCA;
        return $this;
    }

    /**
     * Set the interets p c a2.
     *
     * @param string $interetsPCA2 The interets p c a2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setInteretsPCA2($interetsPCA2) {
        $this->interetsPCA2 = $interetsPCA2;
        return $this;
    }

    /**
     * Set the no lot c v a e.
     *
     * @param int $noLotCVAE The no lot c v a e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotCVAE($noLotCVAE) {
        $this->noLotCVAE = $noLotCVAE;
        return $this;
    }

    /**
     * Set the no lot cpt recip.
     *
     * @param int $noLotCptRecip The no lot cpt recip.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotCptRecip($noLotCptRecip) {
        $this->noLotCptRecip = $noLotCptRecip;
        return $this;
    }

    /**
     * Set the no lot credit i s.
     *
     * @param int $noLotCreditIS The no lot credit i s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotCreditIS($noLotCreditIS) {
        $this->noLotCreditIS = $noLotCreditIS;
        return $this;
    }

    /**
     * Set the no lot i s.
     *
     * @param int $noLotIS The no lot i s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotIS($noLotIS) {
        $this->noLotIS = $noLotIS;
        return $this;
    }

    /**
     * Set the no lot interets.
     *
     * @param int $noLotInterets The no lot interets.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotInterets($noLotInterets) {
        $this->noLotInterets = $noLotInterets;
        return $this;
    }

    /**
     * Set the no lot interets2.
     *
     * @param int $noLotInterets2 The no lot interets2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotInterets2($noLotInterets2) {
        $this->noLotInterets2 = $noLotInterets2;
        return $this;
    }

    /**
     * Set the no lot paiement i s.
     *
     * @param int $noLotPaiementIS The no lot paiement i s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setNoLotPaiementIS($noLotPaiementIS) {
        $this->noLotPaiementIS = $noLotPaiementIS;
        return $this;
    }

    /**
     * Set the periode transfert stock.
     *
     * @param DateTime $periodeTransfertStock The periode transfert stock.
     * @return Dossier4 Returns this dossier4.
     */
    public function setPeriodeTransfertStock(DateTime $periodeTransfertStock = null) {
        $this->periodeTransfertStock = $periodeTransfertStock;
        return $this;
    }

    /**
     * Set the precedent num lot stock.
     *
     * @param int $precedentNumLotStock The precedent num lot stock.
     * @return Dossier4 Returns this dossier4.
     */
    public function setPrecedentNumLotStock($precedentNumLotStock) {
        $this->precedentNumLotStock = $precedentNumLotStock;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool $regimeAgricole The regime agricole.
     * @return Dossier4 Returns this dossier4.
     */
    public function setRegimeAgricole($regimeAgricole) {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the resultat net cpt.
     *
     * @param float $resultatNetCpt The resultat net cpt.
     * @return Dossier4 Returns this dossier4.
     */
    public function setResultatNetCpt($resultatNetCpt) {
        $this->resultatNetCpt = $resultatNetCpt;
        return $this;
    }

    /**
     * Set the rof t v a.
     *
     * @param string $rofTVA The rof t v a.
     * @return Dossier4 Returns this dossier4.
     */
    public function setRofTVA($rofTVA) {
        $this->rofTVA = $rofTVA;
        return $this;
    }

    /**
     * Set the t v a b i c vir.
     *
     * @param string $tVABICVir The t v a b i c vir.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVABICVir($tVABICVir) {
        $this->tVABICVir = $tVABICVir;
        return $this;
    }

    /**
     * Set the t v a cloture faite.
     *
     * @param bool $tVAClotureFaite The t v a cloture faite.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAClotureFaite($tVAClotureFaite) {
        $this->tVAClotureFaite = $tVAClotureFaite;
        return $this;
    }

    /**
     * Set the t v a code cabinet.
     *
     * @param string $tVACodeCabinet The t v a code cabinet.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVACodeCabinet($tVACodeCabinet) {
        $this->tVACodeCabinet = $tVACodeCabinet;
        return $this;
    }

    /**
     * Set the t v a code int emetteur.
     *
     * @param string $tVACodeIntEmetteur The t v a code int emetteur.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVACodeIntEmetteur($tVACodeIntEmetteur) {
        $this->tVACodeIntEmetteur = $tVACodeIntEmetteur;
        return $this;
    }

    /**
     * Set the t v a code int recepteur.
     *
     * @param string $tVACodeIntRecepteur The t v a code int recepteur.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVACodeIntRecepteur($tVACodeIntRecepteur) {
        $this->tVACodeIntRecepteur = $tVACodeIntRecepteur;
        return $this;
    }

    /**
     * Set the t v a cpt difference.
     *
     * @param string $tVACptDifference The t v a cpt difference.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVACptDifference($tVACptDifference) {
        $this->tVACptDifference = $tVACptDifference;
        return $this;
    }

    /**
     * Set the t v a deb3 jrn exclure.
     *
     * @param string $tVADeb3JrnExclure The t v a deb3 jrn exclure.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVADeb3JrnExclure($tVADeb3JrnExclure) {
        $this->tVADeb3JrnExclure = $tVADeb3JrnExclure;
        return $this;
    }

    /**
     * Set the t v a dest attn.
     *
     * @param string $tVADestAttn The t v a dest attn.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVADestAttn($tVADestAttn) {
        $this->tVADestAttn = $tVADestAttn;
        return $this;
    }

    /**
     * Set the t v a dest fax.
     *
     * @param string $tVADestFax The t v a dest fax.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVADestFax($tVADestFax) {
        $this->tVADestFax = $tVADestFax;
        return $this;
    }

    /**
     * Set the t v a dest nom.
     *
     * @param string $tVADestNom The t v a dest nom.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVADestNom($tVADestNom) {
        $this->tVADestNom = $tVADestNom;
        return $this;
    }

    /**
     * Set the t v a e d i edition.
     *
     * @param bool $tVAEDIEdition The t v a e d i edition.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEDIEdition($tVAEDIEdition) {
        $this->tVAEDIEdition = $tVAEDIEdition;
        return $this;
    }

    /**
     * Set the t v a emetteur is cab.
     *
     * @param bool $tVAEmetteurIsCab The t v a emetteur is cab.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEmetteurIsCab($tVAEmetteurIsCab) {
        $this->tVAEmetteurIsCab = $tVAEmetteurIsCab;
        return $this;
    }

    /**
     * Set the t v a envoyer mail.
     *
     * @param bool $tVAEnvoyerMail The t v a envoyer mail.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEnvoyerMail($tVAEnvoyerMail) {
        $this->tVAEnvoyerMail = $tVAEnvoyerMail;
        return $this;
    }

    /**
     * Set the t v a etab_ b t q.
     *
     * @param string $tVAEtab_BTQ The t v a etab_ b t q.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_BTQ($tVAEtab_BTQ) {
        $this->tVAEtab_BTQ = $tVAEtab_BTQ;
        return $this;
    }

    /**
     * Set the t v a etab_ bureau distributeur.
     *
     * @param string $tVAEtab_BureauDistributeur The t v a etab_ bureau distributeur.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_BureauDistributeur($tVAEtab_BureauDistributeur) {
        $this->tVAEtab_BureauDistributeur = $tVAEtab_BureauDistributeur;
        return $this;
    }

    /**
     * Set the t v a etab_ code postal.
     *
     * @param string $tVAEtab_CodePostal The t v a etab_ code postal.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_CodePostal($tVAEtab_CodePostal) {
        $this->tVAEtab_CodePostal = $tVAEtab_CodePostal;
        return $this;
    }

    /**
     * Set the t v a etab_ complement.
     *
     * @param string $tVAEtab_Complement The t v a etab_ complement.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_Complement($tVAEtab_Complement) {
        $this->tVAEtab_Complement = $tVAEtab_Complement;
        return $this;
    }

    /**
     * Set the t v a etab_ nom.
     *
     * @param string $tVAEtab_Nom The t v a etab_ nom.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_Nom($tVAEtab_Nom) {
        $this->tVAEtab_Nom = $tVAEtab_Nom;
        return $this;
    }

    /**
     * Set the t v a etab_ nom voie.
     *
     * @param string $tVAEtab_NomVoie The t v a etab_ nom voie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_NomVoie($tVAEtab_NomVoie) {
        $this->tVAEtab_NomVoie = $tVAEtab_NomVoie;
        return $this;
    }

    /**
     * Set the t v a etab_ num voie.
     *
     * @param string $tVAEtab_NumVoie The t v a etab_ num voie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAEtab_NumVoie($tVAEtab_NumVoie) {
        $this->tVAEtab_NumVoie = $tVAEtab_NumVoie;
        return $this;
    }

    /**
     * Set the t v a exp nom.
     *
     * @param string $tVAExpNom The t v a exp nom.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAExpNom($tVAExpNom) {
        $this->tVAExpNom = $tVAExpNom;
        return $this;
    }

    /**
     * Set the t v a i b a n vir.
     *
     * @param string $tVAIBANVir The t v a i b a n vir.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAIBANVir($tVAIBANVir) {
        $this->tVAIBANVir = $tVAIBANVir;
        return $this;
    }

    /**
     * Set the t v a mail p j.
     *
     * @param bool $tVAMailPJ The t v a mail p j.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAMailPJ($tVAMailPJ) {
        $this->tVAMailPJ = $tVAMailPJ;
        return $this;
    }

    /**
     * Set the t v a moyen paiement.
     *
     * @param int $tVAMoyenPaiement The t v a moyen paiement.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAMoyenPaiement($tVAMoyenPaiement) {
        $this->tVAMoyenPaiement = $tVAMoyenPaiement;
        return $this;
    }

    /**
     * Set the t v a nom vir.
     *
     * @param string $tVANomVir The t v a nom vir.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVANomVir($tVANomVir) {
        $this->tVANomVir = $tVANomVir;
        return $this;
    }

    /**
     * Set the t v a r i b vir.
     *
     * @param string $tVARIBVir The t v a r i b vir.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVARIBVir($tVARIBVir) {
        $this->tVARIBVir = $tVARIBVir;
        return $this;
    }

    /**
     * Set the t v a recepteur je declare.
     *
     * @param bool $tVARecepteurJeDeclare The t v a recepteur je declare.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVARecepteurJeDeclare($tVARecepteurJeDeclare) {
        $this->tVARecepteurJeDeclare = $tVARecepteurJeDeclare;
        return $this;
    }

    /**
     * Set the t v a signataire.
     *
     * @param string $tVASignataire The t v a signataire.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVASignataire($tVASignataire) {
        $this->tVASignataire = $tVASignataire;
        return $this;
    }

    /**
     * Set the t v a t l r a bic1.
     *
     * @param string $tVATLRABic1 The t v a t l r a bic1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRABic1($tVATLRABic1) {
        $this->tVATLRABic1 = $tVATLRABic1;
        return $this;
    }

    /**
     * Set the t v a t l r a bic2.
     *
     * @param string $tVATLRABic2 The t v a t l r a bic2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRABic2($tVATLRABic2) {
        $this->tVATLRABic2 = $tVATLRABic2;
        return $this;
    }

    /**
     * Set the t v a t l r a bic3.
     *
     * @param string $tVATLRABic3 The t v a t l r a bic3.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRABic3($tVATLRABic3) {
        $this->tVATLRABic3 = $tVATLRABic3;
        return $this;
    }

    /**
     * Set the t v a t l r a iban1.
     *
     * @param string $tVATLRAIban1 The t v a t l r a iban1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRAIban1($tVATLRAIban1) {
        $this->tVATLRAIban1 = $tVATLRAIban1;
        return $this;
    }

    /**
     * Set the t v a t l r a iban2.
     *
     * @param string $tVATLRAIban2 The t v a t l r a iban2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRAIban2($tVATLRAIban2) {
        $this->tVATLRAIban2 = $tVATLRAIban2;
        return $this;
    }

    /**
     * Set the t v a t l r a iban3.
     *
     * @param string $tVATLRAIban3 The t v a t l r a iban3.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRAIban3($tVATLRAIban3) {
        $this->tVATLRAIban3 = $tVATLRAIban3;
        return $this;
    }

    /**
     * Set the t v a t l r a rib1.
     *
     * @param string $tVATLRARib1 The t v a t l r a rib1.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRARib1($tVATLRARib1) {
        $this->tVATLRARib1 = $tVATLRARib1;
        return $this;
    }

    /**
     * Set the t v a t l r a rib2.
     *
     * @param string $tVATLRARib2 The t v a t l r a rib2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRARib2($tVATLRARib2) {
        $this->tVATLRARib2 = $tVATLRARib2;
        return $this;
    }

    /**
     * Set the t v a t l r a rib3.
     *
     * @param string $tVATLRARib3 The t v a t l r a rib3.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVATLRARib3($tVATLRARib3) {
        $this->tVATLRARib3 = $tVATLRARib3;
        return $this;
    }

    /**
     * Set the t v a vire c r l f.
     *
     * @param bool $tVAVireCRLF The t v a vire c r l f.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTVAVireCRLF($tVAVireCRLF) {
        $this->tVAVireCRLF = $tVAVireCRLF;
        return $this;
    }

    /**
     * Set the taux plafond interets.
     *
     * @param float $tauxPlafondInterets The taux plafond interets.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTauxPlafondInterets($tauxPlafondInterets) {
        $this->tauxPlafondInterets = $tauxPlafondInterets;
        return $this;
    }

    /**
     * Set the taux plafond interets2.
     *
     * @param float $tauxPlafondInterets2 The taux plafond interets2.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTauxPlafondInterets2($tauxPlafondInterets2) {
        $this->tauxPlafondInterets2 = $tauxPlafondInterets2;
        return $this;
    }

    /**
     * Set the tva achats enc.
     *
     * @param bool $tvaAchatsEnc The tva achats enc.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaAchatsEnc($tvaAchatsEnc) {
        $this->tvaAchatsEnc = $tvaAchatsEnc;
        return $this;
    }

    /**
     * Set the tva c a12 a e.
     *
     * @param string $tvaCA12AE The tva c a12 a e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCA12AE($tvaCA12AE) {
        $this->tvaCA12AE = $tvaCA12AE;
        return $this;
    }

    /**
     * Set the tva c a d t m.
     *
     * @param DateTime $tvaCADTM The tva c a d t m.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCADTM(DateTime $tvaCADTM = null) {
        $this->tvaCADTM = $tvaCADTM;
        return $this;
    }

    /**
     * Set the tva cascade.
     *
     * @param bool $tvaCascade The tva cascade.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCascade($tvaCascade) {
        $this->tvaCascade = $tvaCascade;
        return $this;
    }

    /**
     * Set the tva code journal b q.
     *
     * @param string $tvaCodeJournalBQ The tva code journal b q.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCodeJournalBQ($tvaCodeJournalBQ) {
        $this->tvaCodeJournalBQ = $tvaCodeJournalBQ;
        return $this;
    }

    /**
     * Set the tva code journal o d.
     *
     * @param string $tvaCodeJournalOD The tva code journal o d.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCodeJournalOD($tvaCodeJournalOD) {
        $this->tvaCodeJournalOD = $tvaCodeJournalOD;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter.
     *
     * @param string $tvaCptAAjouter The tva cpt a ajouter.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAAjouter($tvaCptAAjouter) {
        $this->tvaCptAAjouter = $tvaCptAAjouter;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter g.
     *
     * @param string $tvaCptAAjouterG The tva cpt a ajouter g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAAjouterG($tvaCptAAjouterG) {
        $this->tvaCptAAjouterG = $tvaCptAAjouterG;
        return $this;
    }

    /**
     * Set the tva cpt a deduire.
     *
     * @param string $tvaCptADeduire The tva cpt a deduire.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptADeduire($tvaCptADeduire) {
        $this->tvaCptADeduire = $tvaCptADeduire;
        return $this;
    }

    /**
     * Set the tva cpt a imputer.
     *
     * @param string $tvaCptAImputer The tva cpt a imputer.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAImputer($tvaCptAImputer) {
        $this->tvaCptAImputer = $tvaCptAImputer;
        return $this;
    }

    /**
     * Set the tva cpt a imputer g.
     *
     * @param string $tvaCptAImputerG The tva cpt a imputer g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAImputerG($tvaCptAImputerG) {
        $this->tvaCptAImputerG = $tvaCptAImputerG;
        return $this;
    }

    /**
     * Set the tva cpt a payer.
     *
     * @param string $tvaCptAPayer The tva cpt a payer.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAPayer($tvaCptAPayer) {
        $this->tvaCptAPayer = $tvaCptAPayer;
        return $this;
    }

    /**
     * Set the tva cpt a payer g.
     *
     * @param string $tvaCptAPayerG The tva cpt a payer g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAPayerG($tvaCptAPayerG) {
        $this->tvaCptAPayerG = $tvaCptAPayerG;
        return $this;
    }

    /**
     * Set the tva cpt acq intra com.
     *
     * @param string $tvaCptAcqIntraCom The tva cpt acq intra com.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAcqIntraCom($tvaCptAcqIntraCom) {
        $this->tvaCptAcqIntraCom = $tvaCptAcqIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt anc taux.
     *
     * @param string $tvaCptAncTaux The tva cpt anc taux.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAncTaux($tvaCptAncTaux) {
        $this->tvaCptAncTaux = $tvaCptAncTaux;
        return $this;
    }

    /**
     * Set the tva cpt ante deduit.
     *
     * @param string $tvaCptAnteDeduit The tva cpt ante deduit.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAnteDeduit($tvaCptAnteDeduit) {
        $this->tvaCptAnteDeduit = $tvaCptAnteDeduit;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310.
     *
     * @param string $tvaCptAssimil3310 The tva cpt assimil3310.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAssimil3310($tvaCptAssimil3310) {
        $this->tvaCptAssimil3310 = $tvaCptAssimil3310;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310 g.
     *
     * @param string $tvaCptAssimil3310G The tva cpt assimil3310 g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptAssimil3310G($tvaCptAssimil3310G) {
        $this->tvaCptAssimil3310G = $tvaCptAssimil3310G;
        return $this;
    }

    /**
     * Set the tva cpt biens.
     *
     * @param string $tvaCptBiens The tva cpt biens.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptBiens($tvaCptBiens) {
        $this->tvaCptBiens = $tvaCptBiens;
        return $this;
    }

    /**
     * Set the tva cpt biens intra com.
     *
     * @param string $tvaCptBiensIntraCom The tva cpt biens intra com.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptBiensIntraCom($tvaCptBiensIntraCom) {
        $this->tvaCptBiensIntraCom = $tvaCptBiensIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt d o m.
     *
     * @param string $tvaCptDOM The tva cpt d o m.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptDOM($tvaCptDOM) {
        $this->tvaCptDOM = $tvaCptDOM;
        return $this;
    }

    /**
     * Set the tva cpt groupe.
     *
     * @param string $tvaCptGroupe The tva cpt groupe.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptGroupe($tvaCptGroupe) {
        $this->tvaCptGroupe = $tvaCptGroupe;
        return $this;
    }

    /**
     * Set the tva cpt immos.
     *
     * @param string $tvaCptImmos The tva cpt immos.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptImmos($tvaCptImmos) {
        $this->tvaCptImmos = $tvaCptImmos;
        return $this;
    }

    /**
     * Set the tva cpt immos intra com.
     *
     * @param string $tvaCptImmosIntraCom The tva cpt immos intra com.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptImmosIntraCom($tvaCptImmosIntraCom) {
        $this->tvaCptImmosIntraCom = $tvaCptImmosIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt regul.
     *
     * @param string $tvaCptRegul The tva cpt regul.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptRegul($tvaCptRegul) {
        $this->tvaCptRegul = $tvaCptRegul;
        return $this;
    }

    /**
     * Set the tva cpt rembours.
     *
     * @param string $tvaCptRembours The tva cpt rembours.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptRembours($tvaCptRembours) {
        $this->tvaCptRembours = $tvaCptRembours;
        return $this;
    }

    /**
     * Set the tva cpt rembours g.
     *
     * @param string $tvaCptRemboursG The tva cpt rembours g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptRemboursG($tvaCptRemboursG) {
        $this->tvaCptRemboursG = $tvaCptRemboursG;
        return $this;
    }

    /**
     * Set the tva cpt report.
     *
     * @param string $tvaCptReport The tva cpt report.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptReport($tvaCptReport) {
        $this->tvaCptReport = $tvaCptReport;
        return $this;
    }

    /**
     * Set the tva cpt report g.
     *
     * @param string $tvaCptReportG The tva cpt report g.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptReportG($tvaCptReportG) {
        $this->tvaCptReportG = $tvaCptReportG;
        return $this;
    }

    /**
     * Set the tva cpt taux part.
     *
     * @param string $tvaCptTauxPart The tva cpt taux part.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptTauxPart($tvaCptTauxPart) {
        $this->tvaCptTauxPart = $tvaCptTauxPart;
        return $this;
    }

    /**
     * Set the tva cpt vente.
     *
     * @param string $tvaCptVente The tva cpt vente.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaCptVente($tvaCptVente) {
        $this->tvaCptVente = $tvaCptVente;
        return $this;
    }

    /**
     * Set the tva e4 d b s.
     *
     * @param string $tvaE4DBS The tva e4 d b s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaE4DBS($tvaE4DBS) {
        $this->tvaE4DBS = $tvaE4DBS;
        return $this;
    }

    /**
     * Set the tva e4 d i.
     *
     * @param string $tvaE4DI The tva e4 d i.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaE4DI($tvaE4DI) {
        $this->tvaE4DI = $tvaE4DI;
        return $this;
    }

    /**
     * Set the tva e4 r b s.
     *
     * @param string $tvaE4RBS The tva e4 r b s.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaE4RBS($tvaE4RBS) {
        $this->tvaE4RBS = $tvaE4RBS;
        return $this;
    }

    /**
     * Set the tva e4 r i.
     *
     * @param string $tvaE4RI The tva e4 r i.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaE4RI($tvaE4RI) {
        $this->tvaE4RI = $tvaE4RI;
        return $this;
    }

    /**
     * Set the tva e4 r jrn o d.
     *
     * @param string $tvaE4RJrnOD The tva e4 r jrn o d.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaE4RJrnOD($tvaE4RJrnOD) {
        $this->tvaE4RJrnOD = $tvaE4RJrnOD;
        return $this;
    }

    /**
     * Set the tva enc3 der per rech d a.
     *
     * @param DateTime $tvaEnc3DerPerRechDA The tva enc3 der per rech d a.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaEnc3DerPerRechDA(DateTime $tvaEnc3DerPerRechDA = null) {
        $this->tvaEnc3DerPerRechDA = $tvaEnc3DerPerRechDA;
        return $this;
    }

    /**
     * Set the tva jour decla.
     *
     * @param string $tvaJourDecla The tva jour decla.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaJourDecla($tvaJourDecla) {
        $this->tvaJourDecla = $tvaJourDecla;
        return $this;
    }

    /**
     * Set the tva methode.
     *
     * @param string $tvaMethode The tva methode.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaMethode($tvaMethode) {
        $this->tvaMethode = $tvaMethode;
        return $this;
    }

    /**
     * Set the tva parametrage ok.
     *
     * @param bool $tvaParametrageOk The tva parametrage ok.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaParametrageOk($tvaParametrageOk) {
        $this->tvaParametrageOk = $tvaParametrageOk;
        return $this;
    }

    /**
     * Set the tva periodicite.
     *
     * @param string $tvaPeriodicite The tva periodicite.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaPeriodicite($tvaPeriodicite) {
        $this->tvaPeriodicite = $tvaPeriodicite;
        return $this;
    }

    /**
     * Set the tva prefixe intracom.
     *
     * @param string $tvaPrefixeIntracom The tva prefixe intracom.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaPrefixeIntracom($tvaPrefixeIntracom) {
        $this->tvaPrefixeIntracom = $tvaPrefixeIntracom;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string $tvaRegime The tva regime.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tva type.
     *
     * @param string $tvaType The tva type.
     * @return Dossier4 Returns this dossier4.
     */
    public function setTvaType($tvaType) {
        $this->tvaType = $tvaType;
        return $this;
    }

    /**
     * Set the v m p code jrn p m v.
     *
     * @param string $vMPCodeJrnPMV The v m p code jrn p m v.
     * @return Dossier4 Returns this dossier4.
     */
    public function setVMPCodeJrnPMV($vMPCodeJrnPMV) {
        $this->vMPCodeJrnPMV = $vMPCodeJrnPMV;
        return $this;
    }

    /**
     * Set the v m p cpt moins value.
     *
     * @param string $vMPCptMoinsValue The v m p cpt moins value.
     * @return Dossier4 Returns this dossier4.
     */
    public function setVMPCptMoinsValue($vMPCptMoinsValue) {
        $this->vMPCptMoinsValue = $vMPCptMoinsValue;
        return $this;
    }

    /**
     * Set the v m p cpt plus value.
     *
     * @param string $vMPCptPlusValue The v m p cpt plus value.
     * @return Dossier4 Returns this dossier4.
     */
    public function setVMPCptPlusValue($vMPCptPlusValue) {
        $this->vMPCptPlusValue = $vMPCptPlusValue;
        return $this;
    }

    /**
     * Set the v m p gest ecr p m v.
     *
     * @param int $vMPGestEcrPMV The v m p gest ecr p m v.
     * @return Dossier4 Returns this dossier4.
     */
    public function setVMPGestEcrPMV($vMPGestEcrPMV) {
        $this->vMPGestEcrPMV = $vMPGestEcrPMV;
        return $this;
    }

    /**
     * Set the v m p gestion en saisie.
     *
     * @param bool $vMPGestionEnSaisie The v m p gestion en saisie.
     * @return Dossier4 Returns this dossier4.
     */
    public function setVMPGestionEnSaisie($vMPGestionEnSaisie) {
        $this->vMPGestionEnSaisie = $vMPGestionEnSaisie;
        return $this;
    }

    /**
     * Set the ya reprise c i c e.
     *
     * @param bool $yaRepriseCICE The ya reprise c i c e.
     * @return Dossier4 Returns this dossier4.
     */
    public function setYaRepriseCICE($yaRepriseCICE) {
        $this->yaRepriseCICE = $yaRepriseCICE;
        return $this;
    }

    /**
     * Set the ya taux reduit.
     *
     * @param bool $yaTauxReduit The ya taux reduit.
     * @return Dossier4 Returns this dossier4.
     */
    public function setYaTauxReduit($yaTauxReduit) {
        $this->yaTauxReduit = $yaTauxReduit;
        return $this;
    }

    /**
     * Set the b ca12 t.
     *
     * @param bool $bCa12T The b ca12 t.
     * @return Dossier4 Returns this dossier4.
     */
    public function setbCa12T($bCa12T) {
        $this->bCa12T = $bCa12T;
        return $this;
    }
}
