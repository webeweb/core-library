<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dossier4.
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
     * Arch imp3519 tva.
     *
     * @var bool
     */
    private $archImp3519Tva;

    /**
     * Archive decl tva.
     *
     * @var int
     */
    private $archiveDeclTva;

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
     * Categorie pme.
     *
     * @var int
     */
    private $categoriePme;

    /**
     * Cdi btq.
     *
     * @var string
     */
    private $cdiBtq;

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
     * @var DateTime|null
     */
    private $datePlafondInterets;

    /**
     * Date plafond interets2.
     *
     * @var DateTime|null
     */
    private $datePlafondInterets2;

    /**
     * Date transf lot cvae.
     *
     * @var DateTime|null
     */
    private $dateTransfLotCvae;

    /**
     * Date transf lot is.
     *
     * @var DateTime|null
     */
    private $dateTransfLotIs;

    /**
     * Date transfert interets.
     *
     * @var DateTime|null
     */
    private $dateTransfertInterets;

    /**
     * Date transfert interets2.
     *
     * @var DateTime|null
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
     * Ftis contrib mtt.
     *
     * @var float
     */
    private $ftisContribMtt;

    /**
     * Ftis credit impot.
     *
     * @var float
     */
    private $ftisCreditImpot;

    /**
     * Ftis deficits reportables.
     *
     * @var float
     */
    private $ftisDeficitsReportables;

    /**
     * Ftis num cpt1.
     *
     * @var string
     */
    private $ftisNumCpt1;

    /**
     * Ftis num cpt2.
     *
     * @var string
     */
    private $ftisNumCpt2;

    /**
     * Ftiscice.
     *
     * @var float
     */
    private $ftiscice;

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
     * Interets cap.
     *
     * @var string
     */
    private $interetsCap;

    /**
     * Interets cap2.
     *
     * @var string
     */
    private $interetsCap2;

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
     * Interets pca.
     *
     * @var string
     */
    private $interetsPca;

    /**
     * Interets pca2.
     *
     * @var string
     */
    private $interetsPca2;

    /**
     * No lot cpt recip.
     *
     * @var int
     */
    private $noLotCptRecip;

    /**
     * No lot credit is.
     *
     * @var int
     */
    private $noLotCreditIs;

    /**
     * No lot cvae.
     *
     * @var int
     */
    private $noLotCvae;

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
     * No lot is.
     *
     * @var int
     */
    private $noLotIs;

    /**
     * No lot paiement is.
     *
     * @var int
     */
    private $noLotPaiementIs;

    /**
     * Periode transfert stock.
     *
     * @var DateTime|null
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
     * Rof tva.
     *
     * @var string
     */
    private $rofTva;

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
     * Tva ca12 ae.
     *
     * @var string
     */
    private $tvaCa12Ae;

    /**
     * Tva cadtm.
     *
     * @var DateTime|null
     */
    private $tvaCadtm;

    /**
     * Tva cascade.
     *
     * @var bool
     */
    private $tvaCascade;

    /**
     * Tva cloture faite.
     *
     * @var bool
     */
    private $tvaClotureFaite;

    /**
     * Tva code cabinet.
     *
     * @var string
     */
    private $tvaCodeCabinet;

    /**
     * Tva code int emetteur.
     *
     * @var string
     */
    private $tvaCodeIntEmetteur;

    /**
     * Tva code int recepteur.
     *
     * @var string
     */
    private $tvaCodeIntRecepteur;

    /**
     * Tva code journal bq.
     *
     * @var string
     */
    private $tvaCodeJournalBq;

    /**
     * Tva code journal od.
     *
     * @var string
     */
    private $tvaCodeJournalOd;

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
     * Tva cpt difference.
     *
     * @var string
     */
    private $tvaCptDifference;

    /**
     * Tva cpt dom.
     *
     * @var string
     */
    private $tvaCptDom;

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
     * Tva deb3 jrn exclure.
     *
     * @var string
     */
    private $tvaDeb3JrnExclure;

    /**
     * Tva dest attn.
     *
     * @var string
     */
    private $tvaDestAttn;

    /**
     * Tva dest fax.
     *
     * @var string
     */
    private $tvaDestFax;

    /**
     * Tva dest nom.
     *
     * @var string
     */
    private $tvaDestNom;

    /**
     * Tva e4 dbs.
     *
     * @var string
     */
    private $tvaE4Dbs;

    /**
     * Tva e4 di.
     *
     * @var string
     */
    private $tvaE4Di;

    /**
     * Tva e4 r jrn od.
     *
     * @var string
     */
    private $tvaE4RJrnOd;

    /**
     * Tva e4 rbs.
     *
     * @var string
     */
    private $tvaE4Rbs;

    /**
     * Tva e4 ri.
     *
     * @var string
     */
    private $tvaE4Ri;

    /**
     * Tva emetteur is cab.
     *
     * @var bool
     */
    private $tvaEmetteurIsCab;

    /**
     * Tva enc3 der per rech da.
     *
     * @var DateTime|null
     */
    private $tvaEnc3DerPerRechDa;

    /**
     * Tva envoyer mail.
     *
     * @var bool
     */
    private $tvaEnvoyerMail;

    /**
     * Tva etab btq.
     *
     * @var string
     */
    private $tvaEtabBtq;

    /**
     * Tva etab bureau distributeur.
     *
     * @var string
     */
    private $tvaEtabBureauDistributeur;

    /**
     * Tva etab code postal.
     *
     * @var string
     */
    private $tvaEtabCodePostal;

    /**
     * Tva etab complement.
     *
     * @var string
     */
    private $tvaEtabComplement;

    /**
     * Tva etab nom.
     *
     * @var string
     */
    private $tvaEtabNom;

    /**
     * Tva etab nom voie.
     *
     * @var string
     */
    private $tvaEtabNomVoie;

    /**
     * Tva etab num voie.
     *
     * @var string
     */
    private $tvaEtabNumVoie;

    /**
     * Tva exp nom.
     *
     * @var string
     */
    private $tvaExpNom;

    /**
     * Tva jour decla.
     *
     * @var string
     */
    private $tvaJourDecla;

    /**
     * Tva mail pj.
     *
     * @var bool
     */
    private $tvaMailPj;

    /**
     * Tva methode.
     *
     * @var string
     */
    private $tvaMethode;

    /**
     * Tva moyen paiement.
     *
     * @var int
     */
    private $tvaMoyenPaiement;

    /**
     * Tva nom vir.
     *
     * @var string
     */
    private $tvaNomVir;

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
     * Tva recepteur je declare.
     *
     * @var bool
     */
    private $tvaRecepteurJeDeclare;

    /**
     * Tva regime.
     *
     * @var string
     */
    private $tvaRegime;

    /**
     * Tva signataire.
     *
     * @var string
     */
    private $tvaSignataire;

    /**
     * Tva type.
     *
     * @var string
     */
    private $tvaType;

    /**
     * Tva vire crlf.
     *
     * @var bool
     */
    private $tvaVireCrlf;

    /**
     * Tvabic vir.
     *
     * @var string
     */
    private $tvabicVir;

    /**
     * Tvaedi edition.
     *
     * @var bool
     */
    private $tvaediEdition;

    /**
     * Tvaiban vir.
     *
     * @var string
     */
    private $tvaibanVir;

    /**
     * Tvarib vir.
     *
     * @var string
     */
    private $tvaribVir;

    /**
     * Tvatlra bic1.
     *
     * @var string
     */
    private $tvatlraBic1;

    /**
     * Tvatlra bic2.
     *
     * @var string
     */
    private $tvatlraBic2;

    /**
     * Tvatlra bic3.
     *
     * @var string
     */
    private $tvatlraBic3;

    /**
     * Tvatlra iban1.
     *
     * @var string
     */
    private $tvatlraIban1;

    /**
     * Tvatlra iban2.
     *
     * @var string
     */
    private $tvatlraIban2;

    /**
     * Tvatlra iban3.
     *
     * @var string
     */
    private $tvatlraIban3;

    /**
     * Tvatlra rib1.
     *
     * @var string
     */
    private $tvatlraRib1;

    /**
     * Tvatlra rib2.
     *
     * @var string
     */
    private $tvatlraRib2;

    /**
     * Tvatlra rib3.
     *
     * @var string
     */
    private $tvatlraRib3;

    /**
     * Vmp code jrn pmv.
     *
     * @var string
     */
    private $vmpCodeJrnPmv;

    /**
     * Vmp cpt moins value.
     *
     * @var string
     */
    private $vmpCptMoinsValue;

    /**
     * Vmp cpt plus value.
     *
     * @var string
     */
    private $vmpCptPlusValue;

    /**
     * Vmp gest ecr pmv.
     *
     * @var int
     */
    private $vmpGestEcrPmv;

    /**
     * Vmp gestion en saisie.
     *
     * @var bool
     */
    private $vmpGestionEnSaisie;

    /**
     * Ya reprise cice.
     *
     * @var bool
     */
    private $yaRepriseCice;

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
     * Get the arch imp3519 tva.
     *
     * @return bool Returns the arch imp3519 tva.
     */
    public function getArchImp3519Tva() {
        return $this->archImp3519Tva;
    }

    /**
     * Get the archive decl tva.
     *
     * @return int Returns the archive decl tva.
     */
    public function getArchiveDeclTva() {
        return $this->archiveDeclTva;
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
     * Get the categorie pme.
     *
     * @return int Returns the categorie pme.
     */
    public function getCategoriePme() {
        return $this->categoriePme;
    }

    /**
     * Get the cdi btq.
     *
     * @return string Returns the cdi btq.
     */
    public function getCdiBtq() {
        return $this->cdiBtq;
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
     * @return DateTime|null Returns the date plafond interets.
     */
    public function getDatePlafondInterets() {
        return $this->datePlafondInterets;
    }

    /**
     * Get the date plafond interets2.
     *
     * @return DateTime|null Returns the date plafond interets2.
     */
    public function getDatePlafondInterets2() {
        return $this->datePlafondInterets2;
    }

    /**
     * Get the date transf lot cvae.
     *
     * @return DateTime|null Returns the date transf lot cvae.
     */
    public function getDateTransfLotCvae() {
        return $this->dateTransfLotCvae;
    }

    /**
     * Get the date transf lot is.
     *
     * @return DateTime|null Returns the date transf lot is.
     */
    public function getDateTransfLotIs() {
        return $this->dateTransfLotIs;
    }

    /**
     * Get the date transfert interets.
     *
     * @return DateTime|null Returns the date transfert interets.
     */
    public function getDateTransfertInterets() {
        return $this->dateTransfertInterets;
    }

    /**
     * Get the date transfert interets2.
     *
     * @return DateTime|null Returns the date transfert interets2.
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
     * Get the ftis contrib mtt.
     *
     * @return float Returns the ftis contrib mtt.
     */
    public function getFtisContribMtt() {
        return $this->ftisContribMtt;
    }

    /**
     * Get the ftis credit impot.
     *
     * @return float Returns the ftis credit impot.
     */
    public function getFtisCreditImpot() {
        return $this->ftisCreditImpot;
    }

    /**
     * Get the ftis deficits reportables.
     *
     * @return float Returns the ftis deficits reportables.
     */
    public function getFtisDeficitsReportables() {
        return $this->ftisDeficitsReportables;
    }

    /**
     * Get the ftis num cpt1.
     *
     * @return string Returns the ftis num cpt1.
     */
    public function getFtisNumCpt1() {
        return $this->ftisNumCpt1;
    }

    /**
     * Get the ftis num cpt2.
     *
     * @return string Returns the ftis num cpt2.
     */
    public function getFtisNumCpt2() {
        return $this->ftisNumCpt2;
    }

    /**
     * Get the ftiscice.
     *
     * @return float Returns the ftiscice.
     */
    public function getFtiscice() {
        return $this->ftiscice;
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
     * Get the interets cap.
     *
     * @return string Returns the interets cap.
     */
    public function getInteretsCap() {
        return $this->interetsCap;
    }

    /**
     * Get the interets cap2.
     *
     * @return string Returns the interets cap2.
     */
    public function getInteretsCap2() {
        return $this->interetsCap2;
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
     * Get the interets pca.
     *
     * @return string Returns the interets pca.
     */
    public function getInteretsPca() {
        return $this->interetsPca;
    }

    /**
     * Get the interets pca2.
     *
     * @return string Returns the interets pca2.
     */
    public function getInteretsPca2() {
        return $this->interetsPca2;
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
     * Get the no lot credit is.
     *
     * @return int Returns the no lot credit is.
     */
    public function getNoLotCreditIs() {
        return $this->noLotCreditIs;
    }

    /**
     * Get the no lot cvae.
     *
     * @return int Returns the no lot cvae.
     */
    public function getNoLotCvae() {
        return $this->noLotCvae;
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
     * Get the no lot is.
     *
     * @return int Returns the no lot is.
     */
    public function getNoLotIs() {
        return $this->noLotIs;
    }

    /**
     * Get the no lot paiement is.
     *
     * @return int Returns the no lot paiement is.
     */
    public function getNoLotPaiementIs() {
        return $this->noLotPaiementIs;
    }

    /**
     * Get the periode transfert stock.
     *
     * @return DateTime|null Returns the periode transfert stock.
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
     * Get the rof tva.
     *
     * @return string Returns the rof tva.
     */
    public function getRofTva() {
        return $this->rofTva;
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
     * Get the tva ca12 ae.
     *
     * @return string Returns the tva ca12 ae.
     */
    public function getTvaCa12Ae() {
        return $this->tvaCa12Ae;
    }

    /**
     * Get the tva cadtm.
     *
     * @return DateTime|null Returns the tva cadtm.
     */
    public function getTvaCadtm() {
        return $this->tvaCadtm;
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
     * Get the tva cloture faite.
     *
     * @return bool Returns the tva cloture faite.
     */
    public function getTvaClotureFaite() {
        return $this->tvaClotureFaite;
    }

    /**
     * Get the tva code cabinet.
     *
     * @return string Returns the tva code cabinet.
     */
    public function getTvaCodeCabinet() {
        return $this->tvaCodeCabinet;
    }

    /**
     * Get the tva code int emetteur.
     *
     * @return string Returns the tva code int emetteur.
     */
    public function getTvaCodeIntEmetteur() {
        return $this->tvaCodeIntEmetteur;
    }

    /**
     * Get the tva code int recepteur.
     *
     * @return string Returns the tva code int recepteur.
     */
    public function getTvaCodeIntRecepteur() {
        return $this->tvaCodeIntRecepteur;
    }

    /**
     * Get the tva code journal bq.
     *
     * @return string Returns the tva code journal bq.
     */
    public function getTvaCodeJournalBq() {
        return $this->tvaCodeJournalBq;
    }

    /**
     * Get the tva code journal od.
     *
     * @return string Returns the tva code journal od.
     */
    public function getTvaCodeJournalOd() {
        return $this->tvaCodeJournalOd;
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
     * Get the tva cpt difference.
     *
     * @return string Returns the tva cpt difference.
     */
    public function getTvaCptDifference() {
        return $this->tvaCptDifference;
    }

    /**
     * Get the tva cpt dom.
     *
     * @return string Returns the tva cpt dom.
     */
    public function getTvaCptDom() {
        return $this->tvaCptDom;
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
     * Get the tva deb3 jrn exclure.
     *
     * @return string Returns the tva deb3 jrn exclure.
     */
    public function getTvaDeb3JrnExclure() {
        return $this->tvaDeb3JrnExclure;
    }

    /**
     * Get the tva dest attn.
     *
     * @return string Returns the tva dest attn.
     */
    public function getTvaDestAttn() {
        return $this->tvaDestAttn;
    }

    /**
     * Get the tva dest fax.
     *
     * @return string Returns the tva dest fax.
     */
    public function getTvaDestFax() {
        return $this->tvaDestFax;
    }

    /**
     * Get the tva dest nom.
     *
     * @return string Returns the tva dest nom.
     */
    public function getTvaDestNom() {
        return $this->tvaDestNom;
    }

    /**
     * Get the tva e4 dbs.
     *
     * @return string Returns the tva e4 dbs.
     */
    public function getTvaE4Dbs() {
        return $this->tvaE4Dbs;
    }

    /**
     * Get the tva e4 di.
     *
     * @return string Returns the tva e4 di.
     */
    public function getTvaE4Di() {
        return $this->tvaE4Di;
    }

    /**
     * Get the tva e4 r jrn od.
     *
     * @return string Returns the tva e4 r jrn od.
     */
    public function getTvaE4RJrnOd() {
        return $this->tvaE4RJrnOd;
    }

    /**
     * Get the tva e4 rbs.
     *
     * @return string Returns the tva e4 rbs.
     */
    public function getTvaE4Rbs() {
        return $this->tvaE4Rbs;
    }

    /**
     * Get the tva e4 ri.
     *
     * @return string Returns the tva e4 ri.
     */
    public function getTvaE4Ri() {
        return $this->tvaE4Ri;
    }

    /**
     * Get the tva emetteur is cab.
     *
     * @return bool Returns the tva emetteur is cab.
     */
    public function getTvaEmetteurIsCab() {
        return $this->tvaEmetteurIsCab;
    }

    /**
     * Get the tva enc3 der per rech da.
     *
     * @return DateTime|null Returns the tva enc3 der per rech da.
     */
    public function getTvaEnc3DerPerRechDa() {
        return $this->tvaEnc3DerPerRechDa;
    }

    /**
     * Get the tva envoyer mail.
     *
     * @return bool Returns the tva envoyer mail.
     */
    public function getTvaEnvoyerMail() {
        return $this->tvaEnvoyerMail;
    }

    /**
     * Get the tva etab btq.
     *
     * @return string Returns the tva etab btq.
     */
    public function getTvaEtabBtq() {
        return $this->tvaEtabBtq;
    }

    /**
     * Get the tva etab bureau distributeur.
     *
     * @return string Returns the tva etab bureau distributeur.
     */
    public function getTvaEtabBureauDistributeur() {
        return $this->tvaEtabBureauDistributeur;
    }

    /**
     * Get the tva etab code postal.
     *
     * @return string Returns the tva etab code postal.
     */
    public function getTvaEtabCodePostal() {
        return $this->tvaEtabCodePostal;
    }

    /**
     * Get the tva etab complement.
     *
     * @return string Returns the tva etab complement.
     */
    public function getTvaEtabComplement() {
        return $this->tvaEtabComplement;
    }

    /**
     * Get the tva etab nom.
     *
     * @return string Returns the tva etab nom.
     */
    public function getTvaEtabNom() {
        return $this->tvaEtabNom;
    }

    /**
     * Get the tva etab nom voie.
     *
     * @return string Returns the tva etab nom voie.
     */
    public function getTvaEtabNomVoie() {
        return $this->tvaEtabNomVoie;
    }

    /**
     * Get the tva etab num voie.
     *
     * @return string Returns the tva etab num voie.
     */
    public function getTvaEtabNumVoie() {
        return $this->tvaEtabNumVoie;
    }

    /**
     * Get the tva exp nom.
     *
     * @return string Returns the tva exp nom.
     */
    public function getTvaExpNom() {
        return $this->tvaExpNom;
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
     * Get the tva mail pj.
     *
     * @return bool Returns the tva mail pj.
     */
    public function getTvaMailPj() {
        return $this->tvaMailPj;
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
     * Get the tva moyen paiement.
     *
     * @return int Returns the tva moyen paiement.
     */
    public function getTvaMoyenPaiement() {
        return $this->tvaMoyenPaiement;
    }

    /**
     * Get the tva nom vir.
     *
     * @return string Returns the tva nom vir.
     */
    public function getTvaNomVir() {
        return $this->tvaNomVir;
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
     * Get the tva recepteur je declare.
     *
     * @return bool Returns the tva recepteur je declare.
     */
    public function getTvaRecepteurJeDeclare() {
        return $this->tvaRecepteurJeDeclare;
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
     * Get the tva signataire.
     *
     * @return string Returns the tva signataire.
     */
    public function getTvaSignataire() {
        return $this->tvaSignataire;
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
     * Get the tva vire crlf.
     *
     * @return bool Returns the tva vire crlf.
     */
    public function getTvaVireCrlf() {
        return $this->tvaVireCrlf;
    }

    /**
     * Get the tvabic vir.
     *
     * @return string Returns the tvabic vir.
     */
    public function getTvabicVir() {
        return $this->tvabicVir;
    }

    /**
     * Get the tvaedi edition.
     *
     * @return bool Returns the tvaedi edition.
     */
    public function getTvaediEdition() {
        return $this->tvaediEdition;
    }

    /**
     * Get the tvaiban vir.
     *
     * @return string Returns the tvaiban vir.
     */
    public function getTvaibanVir() {
        return $this->tvaibanVir;
    }

    /**
     * Get the tvarib vir.
     *
     * @return string Returns the tvarib vir.
     */
    public function getTvaribVir() {
        return $this->tvaribVir;
    }

    /**
     * Get the tvatlra bic1.
     *
     * @return string Returns the tvatlra bic1.
     */
    public function getTvatlraBic1() {
        return $this->tvatlraBic1;
    }

    /**
     * Get the tvatlra bic2.
     *
     * @return string Returns the tvatlra bic2.
     */
    public function getTvatlraBic2() {
        return $this->tvatlraBic2;
    }

    /**
     * Get the tvatlra bic3.
     *
     * @return string Returns the tvatlra bic3.
     */
    public function getTvatlraBic3() {
        return $this->tvatlraBic3;
    }

    /**
     * Get the tvatlra iban1.
     *
     * @return string Returns the tvatlra iban1.
     */
    public function getTvatlraIban1() {
        return $this->tvatlraIban1;
    }

    /**
     * Get the tvatlra iban2.
     *
     * @return string Returns the tvatlra iban2.
     */
    public function getTvatlraIban2() {
        return $this->tvatlraIban2;
    }

    /**
     * Get the tvatlra iban3.
     *
     * @return string Returns the tvatlra iban3.
     */
    public function getTvatlraIban3() {
        return $this->tvatlraIban3;
    }

    /**
     * Get the tvatlra rib1.
     *
     * @return string Returns the tvatlra rib1.
     */
    public function getTvatlraRib1() {
        return $this->tvatlraRib1;
    }

    /**
     * Get the tvatlra rib2.
     *
     * @return string Returns the tvatlra rib2.
     */
    public function getTvatlraRib2() {
        return $this->tvatlraRib2;
    }

    /**
     * Get the tvatlra rib3.
     *
     * @return string Returns the tvatlra rib3.
     */
    public function getTvatlraRib3() {
        return $this->tvatlraRib3;
    }

    /**
     * Get the vmp code jrn pmv.
     *
     * @return string Returns the vmp code jrn pmv.
     */
    public function getVmpCodeJrnPmv() {
        return $this->vmpCodeJrnPmv;
    }

    /**
     * Get the vmp cpt moins value.
     *
     * @return string Returns the vmp cpt moins value.
     */
    public function getVmpCptMoinsValue() {
        return $this->vmpCptMoinsValue;
    }

    /**
     * Get the vmp cpt plus value.
     *
     * @return string Returns the vmp cpt plus value.
     */
    public function getVmpCptPlusValue() {
        return $this->vmpCptPlusValue;
    }

    /**
     * Get the vmp gest ecr pmv.
     *
     * @return int Returns the vmp gest ecr pmv.
     */
    public function getVmpGestEcrPmv() {
        return $this->vmpGestEcrPmv;
    }

    /**
     * Get the vmp gestion en saisie.
     *
     * @return bool Returns the vmp gestion en saisie.
     */
    public function getVmpGestionEnSaisie() {
        return $this->vmpGestionEnSaisie;
    }

    /**
     * Get the ya reprise cice.
     *
     * @return bool Returns the ya reprise cice.
     */
    public function getYaRepriseCice() {
        return $this->yaRepriseCice;
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
     */
    public function setAcompte1($acompte1) {
        $this->acompte1 = $acompte1;
        return $this;
    }

    /**
     * Set the acompte2.
     *
     * @param float $acompte2 The acompte2.
     */
    public function setAcompte2($acompte2) {
        $this->acompte2 = $acompte2;
        return $this;
    }

    /**
     * Set the acompte3.
     *
     * @param float $acompte3 The acompte3.
     */
    public function setAcompte3($acompte3) {
        $this->acompte3 = $acompte3;
        return $this;
    }

    /**
     * Set the acompte4.
     *
     * @param float $acompte4 The acompte4.
     */
    public function setAcompte4($acompte4) {
        $this->acompte4 = $acompte4;
        return $this;
    }

    /**
     * Set the arch imp3519 tva.
     *
     * @param bool $archImp3519Tva The arch imp3519 tva.
     */
    public function setArchImp3519Tva($archImp3519Tva) {
        $this->archImp3519Tva = $archImp3519Tva;
        return $this;
    }

    /**
     * Set the archive decl tva.
     *
     * @param int $archiveDeclTva The archive decl tva.
     */
    public function setArchiveDeclTva($archiveDeclTva) {
        $this->archiveDeclTva = $archiveDeclTva;
        return $this;
    }

    /**
     * Set the bal agee nb jours int1.
     *
     * @param int $balAgeeNbJoursInt1 The bal agee nb jours int1.
     */
    public function setBalAgeeNbJoursInt1($balAgeeNbJoursInt1) {
        $this->balAgeeNbJoursInt1 = $balAgeeNbJoursInt1;
        return $this;
    }

    /**
     * Set the bal agee nb jours int2.
     *
     * @param int $balAgeeNbJoursInt2 The bal agee nb jours int2.
     */
    public function setBalAgeeNbJoursInt2($balAgeeNbJoursInt2) {
        $this->balAgeeNbJoursInt2 = $balAgeeNbJoursInt2;
        return $this;
    }

    /**
     * Set the bal agee nb jours int3.
     *
     * @param int $balAgeeNbJoursInt3 The bal agee nb jours int3.
     */
    public function setBalAgeeNbJoursInt3($balAgeeNbJoursInt3) {
        $this->balAgeeNbJoursInt3 = $balAgeeNbJoursInt3;
        return $this;
    }

    /**
     * Set the bal agee nb jours int4.
     *
     * @param int $balAgeeNbJoursInt4 The bal agee nb jours int4.
     */
    public function setBalAgeeNbJoursInt4($balAgeeNbJoursInt4) {
        $this->balAgeeNbJoursInt4 = $balAgeeNbJoursInt4;
        return $this;
    }

    /**
     * Set the base15pcent.
     *
     * @param float $base15pcent The base15pcent.
     */
    public function setBase15pcent($base15pcent) {
        $this->base15pcent = $base15pcent;
        return $this;
    }

    /**
     * Set the base33pcent.
     *
     * @param float $base33pcent The base33pcent.
     */
    public function setBase33pcent($base33pcent) {
        $this->base33pcent = $base33pcent;
        return $this;
    }

    /**
     * Set the base t npcent.
     *
     * @param float $baseTNpcent The base t npcent.
     */
    public function setBaseTNpcent($baseTNpcent) {
        $this->baseTNpcent = $baseTNpcent;
        return $this;
    }

    /**
     * Set the categorie pme.
     *
     * @param int $categoriePme The categorie pme.
     */
    public function setCategoriePme($categoriePme) {
        $this->categoriePme = $categoriePme;
        return $this;
    }

    /**
     * Set the cdi btq.
     *
     * @param string $cdiBtq The cdi btq.
     */
    public function setCdiBtq($cdiBtq) {
        $this->cdiBtq = $cdiBtq;
        return $this;
    }

    /**
     * Set the cdi bureau distributeur.
     *
     * @param string $cdiBureauDistributeur The cdi bureau distributeur.
     */
    public function setCdiBureauDistributeur($cdiBureauDistributeur) {
        $this->cdiBureauDistributeur = $cdiBureauDistributeur;
        return $this;
    }

    /**
     * Set the cdi code officiel commune.
     *
     * @param string $cdiCodeOfficielCommune The cdi code officiel commune.
     */
    public function setCdiCodeOfficielCommune($cdiCodeOfficielCommune) {
        $this->cdiCodeOfficielCommune = $cdiCodeOfficielCommune;
        return $this;
    }

    /**
     * Set the cdi code postal.
     *
     * @param string $cdiCodePostal The cdi code postal.
     */
    public function setCdiCodePostal($cdiCodePostal) {
        $this->cdiCodePostal = $cdiCodePostal;
        return $this;
    }

    /**
     * Set the cdi complement.
     *
     * @param string $cdiComplement The cdi complement.
     */
    public function setCdiComplement($cdiComplement) {
        $this->cdiComplement = $cdiComplement;
        return $this;
    }

    /**
     * Set the cdi nom.
     *
     * @param string $cdiNom The cdi nom.
     */
    public function setCdiNom($cdiNom) {
        $this->cdiNom = $cdiNom;
        return $this;
    }

    /**
     * Set the cdi nom ville.
     *
     * @param string $cdiNomVille The cdi nom ville.
     */
    public function setCdiNomVille($cdiNomVille) {
        $this->cdiNomVille = $cdiNomVille;
        return $this;
    }

    /**
     * Set the cdi nom voie.
     *
     * @param string $cdiNomVoie The cdi nom voie.
     */
    public function setCdiNomVoie($cdiNomVoie) {
        $this->cdiNomVoie = $cdiNomVoie;
        return $this;
    }

    /**
     * Set the cdi num voie.
     *
     * @param string $cdiNumVoie The cdi num voie.
     */
    public function setCdiNumVoie($cdiNumVoie) {
        $this->cdiNumVoie = $cdiNumVoie;
        return $this;
    }

    /**
     * Set the cdi tel1.
     *
     * @param string $cdiTel1 The cdi tel1.
     */
    public function setCdiTel1($cdiTel1) {
        $this->cdiTel1 = $cdiTel1;
        return $this;
    }

    /**
     * Set the date plafond interets.
     *
     * @param DateTime|null $datePlafondInterets The date plafond interets.
     */
    public function setDatePlafondInterets(DateTime $datePlafondInterets = null) {
        $this->datePlafondInterets = $datePlafondInterets;
        return $this;
    }

    /**
     * Set the date plafond interets2.
     *
     * @param DateTime|null $datePlafondInterets2 The date plafond interets2.
     */
    public function setDatePlafondInterets2(DateTime $datePlafondInterets2 = null) {
        $this->datePlafondInterets2 = $datePlafondInterets2;
        return $this;
    }

    /**
     * Set the date transf lot cvae.
     *
     * @param DateTime|null $dateTransfLotCvae The date transf lot cvae.
     */
    public function setDateTransfLotCvae(DateTime $dateTransfLotCvae = null) {
        $this->dateTransfLotCvae = $dateTransfLotCvae;
        return $this;
    }

    /**
     * Set the date transf lot is.
     *
     * @param DateTime|null $dateTransfLotIs The date transf lot is.
     */
    public function setDateTransfLotIs(DateTime $dateTransfLotIs = null) {
        $this->dateTransfLotIs = $dateTransfLotIs;
        return $this;
    }

    /**
     * Set the date transfert interets.
     *
     * @param DateTime|null $dateTransfertInterets The date transfert interets.
     */
    public function setDateTransfertInterets(DateTime $dateTransfertInterets = null) {
        $this->dateTransfertInterets = $dateTransfertInterets;
        return $this;
    }

    /**
     * Set the date transfert interets2.
     *
     * @param DateTime|null $dateTransfertInterets2 The date transfert interets2.
     */
    public function setDateTransfertInterets2(DateTime $dateTransfertInterets2 = null) {
        $this->dateTransfertInterets2 = $dateTransfertInterets2;
        return $this;
    }

    /**
     * Set the dec tva type reglement.
     *
     * @param int $decTvaTypeReglement The dec tva type reglement.
     */
    public function setDecTvaTypeReglement($decTvaTypeReglement) {
        $this->decTvaTypeReglement = $decTvaTypeReglement;
        return $this;
    }

    /**
     * Set the decalage quinzaine.
     *
     * @param bool $decalageQuinzaine The decalage quinzaine.
     */
    public function setDecalageQuinzaine($decalageQuinzaine) {
        $this->decalageQuinzaine = $decalageQuinzaine;
        return $this;
    }

    /**
     * Set the decl reference paiement.
     *
     * @param string $declReferencePaiement The decl reference paiement.
     */
    public function setDeclReferencePaiement($declReferencePaiement) {
        $this->declReferencePaiement = $declReferencePaiement;
        return $this;
    }

    /**
     * Set the decl tva cdi.
     *
     * @param string $declTvaCdi The decl tva cdi.
     */
    public function setDeclTvaCdi($declTvaCdi) {
        $this->declTvaCdi = $declTvaCdi;
        return $this;
    }

    /**
     * Set the decl tva insp.
     *
     * @param string $declTvaInsp The decl tva insp.
     */
    public function setDeclTvaInsp($declTvaInsp) {
        $this->declTvaInsp = $declTvaInsp;
        return $this;
    }

    /**
     * Set the decl tva regime.
     *
     * @param string $declTvaRegime The decl tva regime.
     */
    public function setDeclTvaRegime($declTvaRegime) {
        $this->declTvaRegime = $declTvaRegime;
        return $this;
    }

    /**
     * Set the ftis contrib mtt.
     *
     * @param float $ftisContribMtt The ftis contrib mtt.
     */
    public function setFtisContribMtt($ftisContribMtt) {
        $this->ftisContribMtt = $ftisContribMtt;
        return $this;
    }

    /**
     * Set the ftis credit impot.
     *
     * @param float $ftisCreditImpot The ftis credit impot.
     */
    public function setFtisCreditImpot($ftisCreditImpot) {
        $this->ftisCreditImpot = $ftisCreditImpot;
        return $this;
    }

    /**
     * Set the ftis deficits reportables.
     *
     * @param float $ftisDeficitsReportables The ftis deficits reportables.
     */
    public function setFtisDeficitsReportables($ftisDeficitsReportables) {
        $this->ftisDeficitsReportables = $ftisDeficitsReportables;
        return $this;
    }

    /**
     * Set the ftis num cpt1.
     *
     * @param string $ftisNumCpt1 The ftis num cpt1.
     */
    public function setFtisNumCpt1($ftisNumCpt1) {
        $this->ftisNumCpt1 = $ftisNumCpt1;
        return $this;
    }

    /**
     * Set the ftis num cpt2.
     *
     * @param string $ftisNumCpt2 The ftis num cpt2.
     */
    public function setFtisNumCpt2($ftisNumCpt2) {
        $this->ftisNumCpt2 = $ftisNumCpt2;
        return $this;
    }

    /**
     * Set the ftiscice.
     *
     * @param float $ftiscice The ftiscice.
     */
    public function setFtiscice($ftiscice) {
        $this->ftiscice = $ftiscice;
        return $this;
    }

    /**
     * Set the immo realloc.
     *
     * @param int $immoRealloc The immo realloc.
     */
    public function setImmoRealloc($immoRealloc) {
        $this->immoRealloc = $immoRealloc;
        return $this;
    }

    /**
     * Set the interet base.
     *
     * @param float $interetBase The interet base.
     */
    public function setInteretBase($interetBase) {
        $this->interetBase = $interetBase;
        return $this;
    }

    /**
     * Set the interets cap.
     *
     * @param string $interetsCap The interets cap.
     */
    public function setInteretsCap($interetsCap) {
        $this->interetsCap = $interetsCap;
        return $this;
    }

    /**
     * Set the interets cap2.
     *
     * @param string $interetsCap2 The interets cap2.
     */
    public function setInteretsCap2($interetsCap2) {
        $this->interetsCap2 = $interetsCap2;
        return $this;
    }

    /**
     * Set the interets contrepartie.
     *
     * @param string $interetsContrepartie The interets contrepartie.
     */
    public function setInteretsContrepartie($interetsContrepartie) {
        $this->interetsContrepartie = $interetsContrepartie;
        return $this;
    }

    /**
     * Set the interets contrepartie2.
     *
     * @param string $interetsContrepartie2 The interets contrepartie2.
     */
    public function setInteretsContrepartie2($interetsContrepartie2) {
        $this->interetsContrepartie2 = $interetsContrepartie2;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc.
     *
     * @param string $interetsContrepartieDeduc The interets contrepartie deduc.
     */
    public function setInteretsContrepartieDeduc($interetsContrepartieDeduc) {
        $this->interetsContrepartieDeduc = $interetsContrepartieDeduc;
        return $this;
    }

    /**
     * Set the interets contrepartie deduc2.
     *
     * @param string $interetsContrepartieDeduc2 The interets contrepartie deduc2.
     */
    public function setInteretsContrepartieDeduc2($interetsContrepartieDeduc2) {
        $this->interetsContrepartieDeduc2 = $interetsContrepartieDeduc2;
        return $this;
    }

    /**
     * Set the interets pca.
     *
     * @param string $interetsPca The interets pca.
     */
    public function setInteretsPca($interetsPca) {
        $this->interetsPca = $interetsPca;
        return $this;
    }

    /**
     * Set the interets pca2.
     *
     * @param string $interetsPca2 The interets pca2.
     */
    public function setInteretsPca2($interetsPca2) {
        $this->interetsPca2 = $interetsPca2;
        return $this;
    }

    /**
     * Set the no lot cpt recip.
     *
     * @param int $noLotCptRecip The no lot cpt recip.
     */
    public function setNoLotCptRecip($noLotCptRecip) {
        $this->noLotCptRecip = $noLotCptRecip;
        return $this;
    }

    /**
     * Set the no lot credit is.
     *
     * @param int $noLotCreditIs The no lot credit is.
     */
    public function setNoLotCreditIs($noLotCreditIs) {
        $this->noLotCreditIs = $noLotCreditIs;
        return $this;
    }

    /**
     * Set the no lot cvae.
     *
     * @param int $noLotCvae The no lot cvae.
     */
    public function setNoLotCvae($noLotCvae) {
        $this->noLotCvae = $noLotCvae;
        return $this;
    }

    /**
     * Set the no lot interets.
     *
     * @param int $noLotInterets The no lot interets.
     */
    public function setNoLotInterets($noLotInterets) {
        $this->noLotInterets = $noLotInterets;
        return $this;
    }

    /**
     * Set the no lot interets2.
     *
     * @param int $noLotInterets2 The no lot interets2.
     */
    public function setNoLotInterets2($noLotInterets2) {
        $this->noLotInterets2 = $noLotInterets2;
        return $this;
    }

    /**
     * Set the no lot is.
     *
     * @param int $noLotIs The no lot is.
     */
    public function setNoLotIs($noLotIs) {
        $this->noLotIs = $noLotIs;
        return $this;
    }

    /**
     * Set the no lot paiement is.
     *
     * @param int $noLotPaiementIs The no lot paiement is.
     */
    public function setNoLotPaiementIs($noLotPaiementIs) {
        $this->noLotPaiementIs = $noLotPaiementIs;
        return $this;
    }

    /**
     * Set the periode transfert stock.
     *
     * @param DateTime|null $periodeTransfertStock The periode transfert stock.
     */
    public function setPeriodeTransfertStock(DateTime $periodeTransfertStock = null) {
        $this->periodeTransfertStock = $periodeTransfertStock;
        return $this;
    }

    /**
     * Set the precedent num lot stock.
     *
     * @param int $precedentNumLotStock The precedent num lot stock.
     */
    public function setPrecedentNumLotStock($precedentNumLotStock) {
        $this->precedentNumLotStock = $precedentNumLotStock;
        return $this;
    }

    /**
     * Set the regime agricole.
     *
     * @param bool $regimeAgricole The regime agricole.
     */
    public function setRegimeAgricole($regimeAgricole) {
        $this->regimeAgricole = $regimeAgricole;
        return $this;
    }

    /**
     * Set the resultat net cpt.
     *
     * @param float $resultatNetCpt The resultat net cpt.
     */
    public function setResultatNetCpt($resultatNetCpt) {
        $this->resultatNetCpt = $resultatNetCpt;
        return $this;
    }

    /**
     * Set the rof tva.
     *
     * @param string $rofTva The rof tva.
     */
    public function setRofTva($rofTva) {
        $this->rofTva = $rofTva;
        return $this;
    }

    /**
     * Set the taux plafond interets.
     *
     * @param float $tauxPlafondInterets The taux plafond interets.
     */
    public function setTauxPlafondInterets($tauxPlafondInterets) {
        $this->tauxPlafondInterets = $tauxPlafondInterets;
        return $this;
    }

    /**
     * Set the taux plafond interets2.
     *
     * @param float $tauxPlafondInterets2 The taux plafond interets2.
     */
    public function setTauxPlafondInterets2($tauxPlafondInterets2) {
        $this->tauxPlafondInterets2 = $tauxPlafondInterets2;
        return $this;
    }

    /**
     * Set the tva achats enc.
     *
     * @param bool $tvaAchatsEnc The tva achats enc.
     */
    public function setTvaAchatsEnc($tvaAchatsEnc) {
        $this->tvaAchatsEnc = $tvaAchatsEnc;
        return $this;
    }

    /**
     * Set the tva ca12 ae.
     *
     * @param string $tvaCa12Ae The tva ca12 ae.
     */
    public function setTvaCa12Ae($tvaCa12Ae) {
        $this->tvaCa12Ae = $tvaCa12Ae;
        return $this;
    }

    /**
     * Set the tva cadtm.
     *
     * @param DateTime|null $tvaCadtm The tva cadtm.
     */
    public function setTvaCadtm(DateTime $tvaCadtm = null) {
        $this->tvaCadtm = $tvaCadtm;
        return $this;
    }

    /**
     * Set the tva cascade.
     *
     * @param bool $tvaCascade The tva cascade.
     */
    public function setTvaCascade($tvaCascade) {
        $this->tvaCascade = $tvaCascade;
        return $this;
    }

    /**
     * Set the tva cloture faite.
     *
     * @param bool $tvaClotureFaite The tva cloture faite.
     */
    public function setTvaClotureFaite($tvaClotureFaite) {
        $this->tvaClotureFaite = $tvaClotureFaite;
        return $this;
    }

    /**
     * Set the tva code cabinet.
     *
     * @param string $tvaCodeCabinet The tva code cabinet.
     */
    public function setTvaCodeCabinet($tvaCodeCabinet) {
        $this->tvaCodeCabinet = $tvaCodeCabinet;
        return $this;
    }

    /**
     * Set the tva code int emetteur.
     *
     * @param string $tvaCodeIntEmetteur The tva code int emetteur.
     */
    public function setTvaCodeIntEmetteur($tvaCodeIntEmetteur) {
        $this->tvaCodeIntEmetteur = $tvaCodeIntEmetteur;
        return $this;
    }

    /**
     * Set the tva code int recepteur.
     *
     * @param string $tvaCodeIntRecepteur The tva code int recepteur.
     */
    public function setTvaCodeIntRecepteur($tvaCodeIntRecepteur) {
        $this->tvaCodeIntRecepteur = $tvaCodeIntRecepteur;
        return $this;
    }

    /**
     * Set the tva code journal bq.
     *
     * @param string $tvaCodeJournalBq The tva code journal bq.
     */
    public function setTvaCodeJournalBq($tvaCodeJournalBq) {
        $this->tvaCodeJournalBq = $tvaCodeJournalBq;
        return $this;
    }

    /**
     * Set the tva code journal od.
     *
     * @param string $tvaCodeJournalOd The tva code journal od.
     */
    public function setTvaCodeJournalOd($tvaCodeJournalOd) {
        $this->tvaCodeJournalOd = $tvaCodeJournalOd;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter.
     *
     * @param string $tvaCptAAjouter The tva cpt a ajouter.
     */
    public function setTvaCptAAjouter($tvaCptAAjouter) {
        $this->tvaCptAAjouter = $tvaCptAAjouter;
        return $this;
    }

    /**
     * Set the tva cpt a ajouter g.
     *
     * @param string $tvaCptAAjouterG The tva cpt a ajouter g.
     */
    public function setTvaCptAAjouterG($tvaCptAAjouterG) {
        $this->tvaCptAAjouterG = $tvaCptAAjouterG;
        return $this;
    }

    /**
     * Set the tva cpt a deduire.
     *
     * @param string $tvaCptADeduire The tva cpt a deduire.
     */
    public function setTvaCptADeduire($tvaCptADeduire) {
        $this->tvaCptADeduire = $tvaCptADeduire;
        return $this;
    }

    /**
     * Set the tva cpt a imputer.
     *
     * @param string $tvaCptAImputer The tva cpt a imputer.
     */
    public function setTvaCptAImputer($tvaCptAImputer) {
        $this->tvaCptAImputer = $tvaCptAImputer;
        return $this;
    }

    /**
     * Set the tva cpt a imputer g.
     *
     * @param string $tvaCptAImputerG The tva cpt a imputer g.
     */
    public function setTvaCptAImputerG($tvaCptAImputerG) {
        $this->tvaCptAImputerG = $tvaCptAImputerG;
        return $this;
    }

    /**
     * Set the tva cpt a payer.
     *
     * @param string $tvaCptAPayer The tva cpt a payer.
     */
    public function setTvaCptAPayer($tvaCptAPayer) {
        $this->tvaCptAPayer = $tvaCptAPayer;
        return $this;
    }

    /**
     * Set the tva cpt a payer g.
     *
     * @param string $tvaCptAPayerG The tva cpt a payer g.
     */
    public function setTvaCptAPayerG($tvaCptAPayerG) {
        $this->tvaCptAPayerG = $tvaCptAPayerG;
        return $this;
    }

    /**
     * Set the tva cpt acq intra com.
     *
     * @param string $tvaCptAcqIntraCom The tva cpt acq intra com.
     */
    public function setTvaCptAcqIntraCom($tvaCptAcqIntraCom) {
        $this->tvaCptAcqIntraCom = $tvaCptAcqIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt anc taux.
     *
     * @param string $tvaCptAncTaux The tva cpt anc taux.
     */
    public function setTvaCptAncTaux($tvaCptAncTaux) {
        $this->tvaCptAncTaux = $tvaCptAncTaux;
        return $this;
    }

    /**
     * Set the tva cpt ante deduit.
     *
     * @param string $tvaCptAnteDeduit The tva cpt ante deduit.
     */
    public function setTvaCptAnteDeduit($tvaCptAnteDeduit) {
        $this->tvaCptAnteDeduit = $tvaCptAnteDeduit;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310.
     *
     * @param string $tvaCptAssimil3310 The tva cpt assimil3310.
     */
    public function setTvaCptAssimil3310($tvaCptAssimil3310) {
        $this->tvaCptAssimil3310 = $tvaCptAssimil3310;
        return $this;
    }

    /**
     * Set the tva cpt assimil3310 g.
     *
     * @param string $tvaCptAssimil3310G The tva cpt assimil3310 g.
     */
    public function setTvaCptAssimil3310G($tvaCptAssimil3310G) {
        $this->tvaCptAssimil3310G = $tvaCptAssimil3310G;
        return $this;
    }

    /**
     * Set the tva cpt biens.
     *
     * @param string $tvaCptBiens The tva cpt biens.
     */
    public function setTvaCptBiens($tvaCptBiens) {
        $this->tvaCptBiens = $tvaCptBiens;
        return $this;
    }

    /**
     * Set the tva cpt biens intra com.
     *
     * @param string $tvaCptBiensIntraCom The tva cpt biens intra com.
     */
    public function setTvaCptBiensIntraCom($tvaCptBiensIntraCom) {
        $this->tvaCptBiensIntraCom = $tvaCptBiensIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt difference.
     *
     * @param string $tvaCptDifference The tva cpt difference.
     */
    public function setTvaCptDifference($tvaCptDifference) {
        $this->tvaCptDifference = $tvaCptDifference;
        return $this;
    }

    /**
     * Set the tva cpt dom.
     *
     * @param string $tvaCptDom The tva cpt dom.
     */
    public function setTvaCptDom($tvaCptDom) {
        $this->tvaCptDom = $tvaCptDom;
        return $this;
    }

    /**
     * Set the tva cpt groupe.
     *
     * @param string $tvaCptGroupe The tva cpt groupe.
     */
    public function setTvaCptGroupe($tvaCptGroupe) {
        $this->tvaCptGroupe = $tvaCptGroupe;
        return $this;
    }

    /**
     * Set the tva cpt immos.
     *
     * @param string $tvaCptImmos The tva cpt immos.
     */
    public function setTvaCptImmos($tvaCptImmos) {
        $this->tvaCptImmos = $tvaCptImmos;
        return $this;
    }

    /**
     * Set the tva cpt immos intra com.
     *
     * @param string $tvaCptImmosIntraCom The tva cpt immos intra com.
     */
    public function setTvaCptImmosIntraCom($tvaCptImmosIntraCom) {
        $this->tvaCptImmosIntraCom = $tvaCptImmosIntraCom;
        return $this;
    }

    /**
     * Set the tva cpt regul.
     *
     * @param string $tvaCptRegul The tva cpt regul.
     */
    public function setTvaCptRegul($tvaCptRegul) {
        $this->tvaCptRegul = $tvaCptRegul;
        return $this;
    }

    /**
     * Set the tva cpt rembours.
     *
     * @param string $tvaCptRembours The tva cpt rembours.
     */
    public function setTvaCptRembours($tvaCptRembours) {
        $this->tvaCptRembours = $tvaCptRembours;
        return $this;
    }

    /**
     * Set the tva cpt rembours g.
     *
     * @param string $tvaCptRemboursG The tva cpt rembours g.
     */
    public function setTvaCptRemboursG($tvaCptRemboursG) {
        $this->tvaCptRemboursG = $tvaCptRemboursG;
        return $this;
    }

    /**
     * Set the tva cpt report.
     *
     * @param string $tvaCptReport The tva cpt report.
     */
    public function setTvaCptReport($tvaCptReport) {
        $this->tvaCptReport = $tvaCptReport;
        return $this;
    }

    /**
     * Set the tva cpt report g.
     *
     * @param string $tvaCptReportG The tva cpt report g.
     */
    public function setTvaCptReportG($tvaCptReportG) {
        $this->tvaCptReportG = $tvaCptReportG;
        return $this;
    }

    /**
     * Set the tva cpt taux part.
     *
     * @param string $tvaCptTauxPart The tva cpt taux part.
     */
    public function setTvaCptTauxPart($tvaCptTauxPart) {
        $this->tvaCptTauxPart = $tvaCptTauxPart;
        return $this;
    }

    /**
     * Set the tva cpt vente.
     *
     * @param string $tvaCptVente The tva cpt vente.
     */
    public function setTvaCptVente($tvaCptVente) {
        $this->tvaCptVente = $tvaCptVente;
        return $this;
    }

    /**
     * Set the tva deb3 jrn exclure.
     *
     * @param string $tvaDeb3JrnExclure The tva deb3 jrn exclure.
     */
    public function setTvaDeb3JrnExclure($tvaDeb3JrnExclure) {
        $this->tvaDeb3JrnExclure = $tvaDeb3JrnExclure;
        return $this;
    }

    /**
     * Set the tva dest attn.
     *
     * @param string $tvaDestAttn The tva dest attn.
     */
    public function setTvaDestAttn($tvaDestAttn) {
        $this->tvaDestAttn = $tvaDestAttn;
        return $this;
    }

    /**
     * Set the tva dest fax.
     *
     * @param string $tvaDestFax The tva dest fax.
     */
    public function setTvaDestFax($tvaDestFax) {
        $this->tvaDestFax = $tvaDestFax;
        return $this;
    }

    /**
     * Set the tva dest nom.
     *
     * @param string $tvaDestNom The tva dest nom.
     */
    public function setTvaDestNom($tvaDestNom) {
        $this->tvaDestNom = $tvaDestNom;
        return $this;
    }

    /**
     * Set the tva e4 dbs.
     *
     * @param string $tvaE4Dbs The tva e4 dbs.
     */
    public function setTvaE4Dbs($tvaE4Dbs) {
        $this->tvaE4Dbs = $tvaE4Dbs;
        return $this;
    }

    /**
     * Set the tva e4 di.
     *
     * @param string $tvaE4Di The tva e4 di.
     */
    public function setTvaE4Di($tvaE4Di) {
        $this->tvaE4Di = $tvaE4Di;
        return $this;
    }

    /**
     * Set the tva e4 r jrn od.
     *
     * @param string $tvaE4RJrnOd The tva e4 r jrn od.
     */
    public function setTvaE4RJrnOd($tvaE4RJrnOd) {
        $this->tvaE4RJrnOd = $tvaE4RJrnOd;
        return $this;
    }

    /**
     * Set the tva e4 rbs.
     *
     * @param string $tvaE4Rbs The tva e4 rbs.
     */
    public function setTvaE4Rbs($tvaE4Rbs) {
        $this->tvaE4Rbs = $tvaE4Rbs;
        return $this;
    }

    /**
     * Set the tva e4 ri.
     *
     * @param string $tvaE4Ri The tva e4 ri.
     */
    public function setTvaE4Ri($tvaE4Ri) {
        $this->tvaE4Ri = $tvaE4Ri;
        return $this;
    }

    /**
     * Set the tva emetteur is cab.
     *
     * @param bool $tvaEmetteurIsCab The tva emetteur is cab.
     */
    public function setTvaEmetteurIsCab($tvaEmetteurIsCab) {
        $this->tvaEmetteurIsCab = $tvaEmetteurIsCab;
        return $this;
    }

    /**
     * Set the tva enc3 der per rech da.
     *
     * @param DateTime|null $tvaEnc3DerPerRechDa The tva enc3 der per rech da.
     */
    public function setTvaEnc3DerPerRechDa(DateTime $tvaEnc3DerPerRechDa = null) {
        $this->tvaEnc3DerPerRechDa = $tvaEnc3DerPerRechDa;
        return $this;
    }

    /**
     * Set the tva envoyer mail.
     *
     * @param bool $tvaEnvoyerMail The tva envoyer mail.
     */
    public function setTvaEnvoyerMail($tvaEnvoyerMail) {
        $this->tvaEnvoyerMail = $tvaEnvoyerMail;
        return $this;
    }

    /**
     * Set the tva etab btq.
     *
     * @param string $tvaEtabBtq The tva etab btq.
     */
    public function setTvaEtabBtq($tvaEtabBtq) {
        $this->tvaEtabBtq = $tvaEtabBtq;
        return $this;
    }

    /**
     * Set the tva etab bureau distributeur.
     *
     * @param string $tvaEtabBureauDistributeur The tva etab bureau distributeur.
     */
    public function setTvaEtabBureauDistributeur($tvaEtabBureauDistributeur) {
        $this->tvaEtabBureauDistributeur = $tvaEtabBureauDistributeur;
        return $this;
    }

    /**
     * Set the tva etab code postal.
     *
     * @param string $tvaEtabCodePostal The tva etab code postal.
     */
    public function setTvaEtabCodePostal($tvaEtabCodePostal) {
        $this->tvaEtabCodePostal = $tvaEtabCodePostal;
        return $this;
    }

    /**
     * Set the tva etab complement.
     *
     * @param string $tvaEtabComplement The tva etab complement.
     */
    public function setTvaEtabComplement($tvaEtabComplement) {
        $this->tvaEtabComplement = $tvaEtabComplement;
        return $this;
    }

    /**
     * Set the tva etab nom.
     *
     * @param string $tvaEtabNom The tva etab nom.
     */
    public function setTvaEtabNom($tvaEtabNom) {
        $this->tvaEtabNom = $tvaEtabNom;
        return $this;
    }

    /**
     * Set the tva etab nom voie.
     *
     * @param string $tvaEtabNomVoie The tva etab nom voie.
     */
    public function setTvaEtabNomVoie($tvaEtabNomVoie) {
        $this->tvaEtabNomVoie = $tvaEtabNomVoie;
        return $this;
    }

    /**
     * Set the tva etab num voie.
     *
     * @param string $tvaEtabNumVoie The tva etab num voie.
     */
    public function setTvaEtabNumVoie($tvaEtabNumVoie) {
        $this->tvaEtabNumVoie = $tvaEtabNumVoie;
        return $this;
    }

    /**
     * Set the tva exp nom.
     *
     * @param string $tvaExpNom The tva exp nom.
     */
    public function setTvaExpNom($tvaExpNom) {
        $this->tvaExpNom = $tvaExpNom;
        return $this;
    }

    /**
     * Set the tva jour decla.
     *
     * @param string $tvaJourDecla The tva jour decla.
     */
    public function setTvaJourDecla($tvaJourDecla) {
        $this->tvaJourDecla = $tvaJourDecla;
        return $this;
    }

    /**
     * Set the tva mail pj.
     *
     * @param bool $tvaMailPj The tva mail pj.
     */
    public function setTvaMailPj($tvaMailPj) {
        $this->tvaMailPj = $tvaMailPj;
        return $this;
    }

    /**
     * Set the tva methode.
     *
     * @param string $tvaMethode The tva methode.
     */
    public function setTvaMethode($tvaMethode) {
        $this->tvaMethode = $tvaMethode;
        return $this;
    }

    /**
     * Set the tva moyen paiement.
     *
     * @param int $tvaMoyenPaiement The tva moyen paiement.
     */
    public function setTvaMoyenPaiement($tvaMoyenPaiement) {
        $this->tvaMoyenPaiement = $tvaMoyenPaiement;
        return $this;
    }

    /**
     * Set the tva nom vir.
     *
     * @param string $tvaNomVir The tva nom vir.
     */
    public function setTvaNomVir($tvaNomVir) {
        $this->tvaNomVir = $tvaNomVir;
        return $this;
    }

    /**
     * Set the tva parametrage ok.
     *
     * @param bool $tvaParametrageOk The tva parametrage ok.
     */
    public function setTvaParametrageOk($tvaParametrageOk) {
        $this->tvaParametrageOk = $tvaParametrageOk;
        return $this;
    }

    /**
     * Set the tva periodicite.
     *
     * @param string $tvaPeriodicite The tva periodicite.
     */
    public function setTvaPeriodicite($tvaPeriodicite) {
        $this->tvaPeriodicite = $tvaPeriodicite;
        return $this;
    }

    /**
     * Set the tva prefixe intracom.
     *
     * @param string $tvaPrefixeIntracom The tva prefixe intracom.
     */
    public function setTvaPrefixeIntracom($tvaPrefixeIntracom) {
        $this->tvaPrefixeIntracom = $tvaPrefixeIntracom;
        return $this;
    }

    /**
     * Set the tva recepteur je declare.
     *
     * @param bool $tvaRecepteurJeDeclare The tva recepteur je declare.
     */
    public function setTvaRecepteurJeDeclare($tvaRecepteurJeDeclare) {
        $this->tvaRecepteurJeDeclare = $tvaRecepteurJeDeclare;
        return $this;
    }

    /**
     * Set the tva regime.
     *
     * @param string $tvaRegime The tva regime.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }

    /**
     * Set the tva signataire.
     *
     * @param string $tvaSignataire The tva signataire.
     */
    public function setTvaSignataire($tvaSignataire) {
        $this->tvaSignataire = $tvaSignataire;
        return $this;
    }

    /**
     * Set the tva type.
     *
     * @param string $tvaType The tva type.
     */
    public function setTvaType($tvaType) {
        $this->tvaType = $tvaType;
        return $this;
    }

    /**
     * Set the tva vire crlf.
     *
     * @param bool $tvaVireCrlf The tva vire crlf.
     */
    public function setTvaVireCrlf($tvaVireCrlf) {
        $this->tvaVireCrlf = $tvaVireCrlf;
        return $this;
    }

    /**
     * Set the tvabic vir.
     *
     * @param string $tvabicVir The tvabic vir.
     */
    public function setTvabicVir($tvabicVir) {
        $this->tvabicVir = $tvabicVir;
        return $this;
    }

    /**
     * Set the tvaedi edition.
     *
     * @param bool $tvaediEdition The tvaedi edition.
     */
    public function setTvaediEdition($tvaediEdition) {
        $this->tvaediEdition = $tvaediEdition;
        return $this;
    }

    /**
     * Set the tvaiban vir.
     *
     * @param string $tvaibanVir The tvaiban vir.
     */
    public function setTvaibanVir($tvaibanVir) {
        $this->tvaibanVir = $tvaibanVir;
        return $this;
    }

    /**
     * Set the tvarib vir.
     *
     * @param string $tvaribVir The tvarib vir.
     */
    public function setTvaribVir($tvaribVir) {
        $this->tvaribVir = $tvaribVir;
        return $this;
    }

    /**
     * Set the tvatlra bic1.
     *
     * @param string $tvatlraBic1 The tvatlra bic1.
     */
    public function setTvatlraBic1($tvatlraBic1) {
        $this->tvatlraBic1 = $tvatlraBic1;
        return $this;
    }

    /**
     * Set the tvatlra bic2.
     *
     * @param string $tvatlraBic2 The tvatlra bic2.
     */
    public function setTvatlraBic2($tvatlraBic2) {
        $this->tvatlraBic2 = $tvatlraBic2;
        return $this;
    }

    /**
     * Set the tvatlra bic3.
     *
     * @param string $tvatlraBic3 The tvatlra bic3.
     */
    public function setTvatlraBic3($tvatlraBic3) {
        $this->tvatlraBic3 = $tvatlraBic3;
        return $this;
    }

    /**
     * Set the tvatlra iban1.
     *
     * @param string $tvatlraIban1 The tvatlra iban1.
     */
    public function setTvatlraIban1($tvatlraIban1) {
        $this->tvatlraIban1 = $tvatlraIban1;
        return $this;
    }

    /**
     * Set the tvatlra iban2.
     *
     * @param string $tvatlraIban2 The tvatlra iban2.
     */
    public function setTvatlraIban2($tvatlraIban2) {
        $this->tvatlraIban2 = $tvatlraIban2;
        return $this;
    }

    /**
     * Set the tvatlra iban3.
     *
     * @param string $tvatlraIban3 The tvatlra iban3.
     */
    public function setTvatlraIban3($tvatlraIban3) {
        $this->tvatlraIban3 = $tvatlraIban3;
        return $this;
    }

    /**
     * Set the tvatlra rib1.
     *
     * @param string $tvatlraRib1 The tvatlra rib1.
     */
    public function setTvatlraRib1($tvatlraRib1) {
        $this->tvatlraRib1 = $tvatlraRib1;
        return $this;
    }

    /**
     * Set the tvatlra rib2.
     *
     * @param string $tvatlraRib2 The tvatlra rib2.
     */
    public function setTvatlraRib2($tvatlraRib2) {
        $this->tvatlraRib2 = $tvatlraRib2;
        return $this;
    }

    /**
     * Set the tvatlra rib3.
     *
     * @param string $tvatlraRib3 The tvatlra rib3.
     */
    public function setTvatlraRib3($tvatlraRib3) {
        $this->tvatlraRib3 = $tvatlraRib3;
        return $this;
    }

    /**
     * Set the vmp code jrn pmv.
     *
     * @param string $vmpCodeJrnPmv The vmp code jrn pmv.
     */
    public function setVmpCodeJrnPmv($vmpCodeJrnPmv) {
        $this->vmpCodeJrnPmv = $vmpCodeJrnPmv;
        return $this;
    }

    /**
     * Set the vmp cpt moins value.
     *
     * @param string $vmpCptMoinsValue The vmp cpt moins value.
     */
    public function setVmpCptMoinsValue($vmpCptMoinsValue) {
        $this->vmpCptMoinsValue = $vmpCptMoinsValue;
        return $this;
    }

    /**
     * Set the vmp cpt plus value.
     *
     * @param string $vmpCptPlusValue The vmp cpt plus value.
     */
    public function setVmpCptPlusValue($vmpCptPlusValue) {
        $this->vmpCptPlusValue = $vmpCptPlusValue;
        return $this;
    }

    /**
     * Set the vmp gest ecr pmv.
     *
     * @param int $vmpGestEcrPmv The vmp gest ecr pmv.
     */
    public function setVmpGestEcrPmv($vmpGestEcrPmv) {
        $this->vmpGestEcrPmv = $vmpGestEcrPmv;
        return $this;
    }

    /**
     * Set the vmp gestion en saisie.
     *
     * @param bool $vmpGestionEnSaisie The vmp gestion en saisie.
     */
    public function setVmpGestionEnSaisie($vmpGestionEnSaisie) {
        $this->vmpGestionEnSaisie = $vmpGestionEnSaisie;
        return $this;
    }

    /**
     * Set the ya reprise cice.
     *
     * @param bool $yaRepriseCice The ya reprise cice.
     */
    public function setYaRepriseCice($yaRepriseCice) {
        $this->yaRepriseCice = $yaRepriseCice;
        return $this;
    }

    /**
     * Set the ya taux reduit.
     *
     * @param bool $yaTauxReduit The ya taux reduit.
     */
    public function setYaTauxReduit($yaTauxReduit) {
        $this->yaTauxReduit = $yaTauxReduit;
        return $this;
    }

    /**
     * Set the b ca12 t.
     *
     * @param bool $bCa12T The b ca12 t.
     */
    public function setbCa12T($bCa12T) {
        $this->bCa12T = $bCa12T;
        return $this;
    }
}
