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

/**
 * Cumuls annee prec.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CumulsAnneePrec {

    /**
     * Annee.
     *
     * @var string
     */
    private $annee;

    /**
     * Cum30 ss.
     *
     * @var float
     */
    private $cum30Ss;

    /**
     * Cum base csg.
     *
     * @var float
     */
    private $cumBaseCsg;

    /**
     * Cum base gmp.
     *
     * @var float
     */
    private $cumBaseGmp;

    /**
     * Cum base ss.
     *
     * @var float
     */
    private $cumBaseSs;

    /**
     * Cum base tr2.
     *
     * @var float
     */
    private $cumBaseTr2;

    /**
     * Cum base tr a.
     *
     * @var float
     */
    private $cumBaseTrA;

    /**
     * Cum base tr a caisse1.
     *
     * @var float
     */
    private $cumBaseTrACaisse1;

    /**
     * Cum base tr a caisse2.
     *
     * @var float
     */
    private $cumBaseTrACaisse2;

    /**
     * Cum base tr a caisse3.
     *
     * @var float
     */
    private $cumBaseTrACaisse3;

    /**
     * Cum base tr b.
     *
     * @var float
     */
    private $cumBaseTrB;

    /**
     * Cum base tr b caisse1.
     *
     * @var float
     */
    private $cumBaseTrBCaisse1;

    /**
     * Cum base tr b caisse2.
     *
     * @var float
     */
    private $cumBaseTrBCaisse2;

    /**
     * Cum base tr b caisse3.
     *
     * @var float
     */
    private $cumBaseTrBCaisse3;

    /**
     * Cum base tr c.
     *
     * @var float
     */
    private $cumBaseTrC;

    /**
     * Cum base tr c caisse1.
     *
     * @var float
     */
    private $cumBaseTrCCaisse1;

    /**
     * Cum base tr c caisse2.
     *
     * @var float
     */
    private $cumBaseTrCCaisse2;

    /**
     * Cum base tr c caisse3.
     *
     * @var float
     */
    private $cumBaseTrCCaisse3;

    /**
     * Cum base tr d.
     *
     * @var float
     */
    private $cumBaseTrD;

    /**
     * Cum base tr d1.
     *
     * @var float
     */
    private $cumBaseTrD1;

    /**
     * Cum base tr d1 caisse1.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse1;

    /**
     * Cum base tr d1 caisse2.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse2;

    /**
     * Cum base tr d1 caisse3.
     *
     * @var float
     */
    private $cumBaseTrD1Caisse3;

    /**
     * Cum base tr d caisse1.
     *
     * @var float
     */
    private $cumBaseTrDCaisse1;

    /**
     * Cum base tr d caisse2.
     *
     * @var float
     */
    private $cumBaseTrDCaisse2;

    /**
     * Cum base tr d caisse3.
     *
     * @var float
     */
    private $cumBaseTrDCaisse3;

    /**
     * Cum brut abat non lim.
     *
     * @var float
     */
    private $cumBrutAbatNonLim;

    /**
     * Cum brut al.
     *
     * @var float
     */
    private $cumBrutAl;

    /**
     * Cum brut al sans si.
     *
     * @var float
     */
    private $cumBrutAlSansSi;

    /**
     * Cum brut caisse1.
     *
     * @var float
     */
    private $cumBrutCaisse1;

    /**
     * Cum brut caisse2.
     *
     * @var float
     */
    private $cumBrutCaisse2;

    /**
     * Cum brut caisse3.
     *
     * @var float
     */
    private $cumBrutCaisse3;

    /**
     * Cum brut non abattu.
     *
     * @var float
     */
    private $cumBrutNonAbattu;

    /**
     * Cum cp dus.
     *
     * @var float
     */
    private $cumCpDus;

    /**
     * Cum cp dus1.
     *
     * @var float
     */
    private $cumCpDus1;

    /**
     * Cum cp pris.
     *
     * @var float
     */
    private $cumCpPris;

    /**
     * Cum cp pris1.
     *
     * @var float
     */
    private $cumCpPris1;

    /**
     * Cum dif dus.
     *
     * @var float
     */
    private $cumDifDus;

    /**
     * Cum dif dus1.
     *
     * @var float
     */
    private $cumDifDus1;

    /**
     * Cum h bonifie.
     *
     * @var float
     */
    private $cumHBonifie;

    /**
     * Cum h repos remplace.
     *
     * @var float
     */
    private $cumHReposRemplace;

    /**
     * Cum h service.
     *
     * @var float
     */
    private $cumHService;

    /**
     * Cum h sup.
     *
     * @var float
     */
    private $cumHSup;

    /**
     * Cum h sup rcit.
     *
     * @var float
     */
    private $cumHSupRcit;

    /**
     * Cum heure paye.
     *
     * @var float
     */
    private $cumHeurePaye;

    /**
     * Cum heure trav.
     *
     * @var float
     */
    private $cumHeureTrav;

    /**
     * Cum j repos recup.
     *
     * @var float
     */
    private $cumJReposRecup;

    /**
     * Cum jour paye.
     *
     * @var float
     */
    private $cumJourPaye;

    /**
     * Cum jour trav.
     *
     * @var float
     */
    private $cumJourTrav;

    /**
     * Cum mt cp pris.
     *
     * @var float
     */
    private $cumMtCpPris;

    /**
     * Cum mt cp pris1.
     *
     * @var float
     */
    private $cumMtCpPris1;

    /**
     * Cum net a payer.
     *
     * @var float
     */
    private $cumNetAPayer;

    /**
     * Cum net imposable.
     *
     * @var float
     */
    private $cumNetImposable;

    /**
     * Cum plaf1 caisse1.
     *
     * @var float
     */
    private $cumPlaf1Caisse1;

    /**
     * Cum plaf1 caisse2.
     *
     * @var float
     */
    private $cumPlaf1Caisse2;

    /**
     * Cum plaf1 caisse3.
     *
     * @var float
     */
    private $cumPlaf1Caisse3;

    /**
     * Cum plaf2 caisse1.
     *
     * @var float
     */
    private $cumPlaf2Caisse1;

    /**
     * Cum plaf2 caisse2.
     *
     * @var float
     */
    private $cumPlaf2Caisse2;

    /**
     * Cum plaf2 caisse3.
     *
     * @var float
     */
    private $cumPlaf2Caisse3;

    /**
     * Cum plafond gmp.
     *
     * @var float
     */
    private $cumPlafondGmp;

    /**
     * Cum plafond ss1.
     *
     * @var float
     */
    private $cumPlafondSs1;

    /**
     * Cum plafond ss2.
     *
     * @var float
     */
    private $cumPlafondSs2;

    /**
     * Cum prov cp.
     *
     * @var float
     */
    private $cumProvCp;

    /**
     * Cum prov cp1.
     *
     * @var float
     */
    private $cumProvCp1;

    /**
     * Cum repos comp.
     *
     * @var float
     */
    private $cumReposComp;

    /**
     * Cum rtt dus.
     *
     * @var float
     */
    private $cumRttDus;

    /**
     * Cum rtt pris.
     *
     * @var float
     */
    private $cumRttPris;

    /**
     * Cum tot si.
     *
     * @var float
     */
    private $cumTotSi;

    /**
     * Cum tranche2 sans si.
     *
     * @var float
     */
    private $cumTranche2SansSi;

    /**
     * Cum tranche2 si.
     *
     * @var float
     */
    private $cumTranche2Si;

    /**
     * Cum tranche a sans si.
     *
     * @var float
     */
    private $cumTrancheASansSi;

    /**
     * Cum tranche asi.
     *
     * @var float
     */
    private $cumTrancheAsi;

    /**
     * Cum tranche b sans si.
     *
     * @var float
     */
    private $cumTrancheBSansSi;

    /**
     * Cum tranche bsi.
     *
     * @var float
     */
    private $cumTrancheBsi;

    /**
     * Cum tranche c sans si.
     *
     * @var float
     */
    private $cumTrancheCSansSi;

    /**
     * Cum tranche csi.
     *
     * @var float
     */
    private $cumTrancheCsi;

    /**
     * Cum tranche d1 sans si.
     *
     * @var float
     */
    private $cumTrancheD1SansSi;

    /**
     * Cum tranche d sans si.
     *
     * @var float
     */
    private $cumTrancheDSansSi;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee.
     *
     * @return string Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Get the cum30 ss.
     *
     * @return float Returns the cum30 ss.
     */
    public function getCum30Ss() {
        return $this->cum30Ss;
    }

    /**
     * Get the cum base csg.
     *
     * @return float Returns the cum base csg.
     */
    public function getCumBaseCsg() {
        return $this->cumBaseCsg;
    }

    /**
     * Get the cum base gmp.
     *
     * @return float Returns the cum base gmp.
     */
    public function getCumBaseGmp() {
        return $this->cumBaseGmp;
    }

    /**
     * Get the cum base ss.
     *
     * @return float Returns the cum base ss.
     */
    public function getCumBaseSs() {
        return $this->cumBaseSs;
    }

    /**
     * Get the cum base tr2.
     *
     * @return float Returns the cum base tr2.
     */
    public function getCumBaseTr2() {
        return $this->cumBaseTr2;
    }

    /**
     * Get the cum base tr a.
     *
     * @return float Returns the cum base tr a.
     */
    public function getCumBaseTrA() {
        return $this->cumBaseTrA;
    }

    /**
     * Get the cum base tr a caisse1.
     *
     * @return float Returns the cum base tr a caisse1.
     */
    public function getCumBaseTrACaisse1() {
        return $this->cumBaseTrACaisse1;
    }

    /**
     * Get the cum base tr a caisse2.
     *
     * @return float Returns the cum base tr a caisse2.
     */
    public function getCumBaseTrACaisse2() {
        return $this->cumBaseTrACaisse2;
    }

    /**
     * Get the cum base tr a caisse3.
     *
     * @return float Returns the cum base tr a caisse3.
     */
    public function getCumBaseTrACaisse3() {
        return $this->cumBaseTrACaisse3;
    }

    /**
     * Get the cum base tr b.
     *
     * @return float Returns the cum base tr b.
     */
    public function getCumBaseTrB() {
        return $this->cumBaseTrB;
    }

    /**
     * Get the cum base tr b caisse1.
     *
     * @return float Returns the cum base tr b caisse1.
     */
    public function getCumBaseTrBCaisse1() {
        return $this->cumBaseTrBCaisse1;
    }

    /**
     * Get the cum base tr b caisse2.
     *
     * @return float Returns the cum base tr b caisse2.
     */
    public function getCumBaseTrBCaisse2() {
        return $this->cumBaseTrBCaisse2;
    }

    /**
     * Get the cum base tr b caisse3.
     *
     * @return float Returns the cum base tr b caisse3.
     */
    public function getCumBaseTrBCaisse3() {
        return $this->cumBaseTrBCaisse3;
    }

    /**
     * Get the cum base tr c.
     *
     * @return float Returns the cum base tr c.
     */
    public function getCumBaseTrC() {
        return $this->cumBaseTrC;
    }

    /**
     * Get the cum base tr c caisse1.
     *
     * @return float Returns the cum base tr c caisse1.
     */
    public function getCumBaseTrCCaisse1() {
        return $this->cumBaseTrCCaisse1;
    }

    /**
     * Get the cum base tr c caisse2.
     *
     * @return float Returns the cum base tr c caisse2.
     */
    public function getCumBaseTrCCaisse2() {
        return $this->cumBaseTrCCaisse2;
    }

    /**
     * Get the cum base tr c caisse3.
     *
     * @return float Returns the cum base tr c caisse3.
     */
    public function getCumBaseTrCCaisse3() {
        return $this->cumBaseTrCCaisse3;
    }

    /**
     * Get the cum base tr d.
     *
     * @return float Returns the cum base tr d.
     */
    public function getCumBaseTrD() {
        return $this->cumBaseTrD;
    }

    /**
     * Get the cum base tr d1.
     *
     * @return float Returns the cum base tr d1.
     */
    public function getCumBaseTrD1() {
        return $this->cumBaseTrD1;
    }

    /**
     * Get the cum base tr d1 caisse1.
     *
     * @return float Returns the cum base tr d1 caisse1.
     */
    public function getCumBaseTrD1Caisse1() {
        return $this->cumBaseTrD1Caisse1;
    }

    /**
     * Get the cum base tr d1 caisse2.
     *
     * @return float Returns the cum base tr d1 caisse2.
     */
    public function getCumBaseTrD1Caisse2() {
        return $this->cumBaseTrD1Caisse2;
    }

    /**
     * Get the cum base tr d1 caisse3.
     *
     * @return float Returns the cum base tr d1 caisse3.
     */
    public function getCumBaseTrD1Caisse3() {
        return $this->cumBaseTrD1Caisse3;
    }

    /**
     * Get the cum base tr d caisse1.
     *
     * @return float Returns the cum base tr d caisse1.
     */
    public function getCumBaseTrDCaisse1() {
        return $this->cumBaseTrDCaisse1;
    }

    /**
     * Get the cum base tr d caisse2.
     *
     * @return float Returns the cum base tr d caisse2.
     */
    public function getCumBaseTrDCaisse2() {
        return $this->cumBaseTrDCaisse2;
    }

    /**
     * Get the cum base tr d caisse3.
     *
     * @return float Returns the cum base tr d caisse3.
     */
    public function getCumBaseTrDCaisse3() {
        return $this->cumBaseTrDCaisse3;
    }

    /**
     * Get the cum brut abat non lim.
     *
     * @return float Returns the cum brut abat non lim.
     */
    public function getCumBrutAbatNonLim() {
        return $this->cumBrutAbatNonLim;
    }

    /**
     * Get the cum brut al.
     *
     * @return float Returns the cum brut al.
     */
    public function getCumBrutAl() {
        return $this->cumBrutAl;
    }

    /**
     * Get the cum brut al sans si.
     *
     * @return float Returns the cum brut al sans si.
     */
    public function getCumBrutAlSansSi() {
        return $this->cumBrutAlSansSi;
    }

    /**
     * Get the cum brut caisse1.
     *
     * @return float Returns the cum brut caisse1.
     */
    public function getCumBrutCaisse1() {
        return $this->cumBrutCaisse1;
    }

    /**
     * Get the cum brut caisse2.
     *
     * @return float Returns the cum brut caisse2.
     */
    public function getCumBrutCaisse2() {
        return $this->cumBrutCaisse2;
    }

    /**
     * Get the cum brut caisse3.
     *
     * @return float Returns the cum brut caisse3.
     */
    public function getCumBrutCaisse3() {
        return $this->cumBrutCaisse3;
    }

    /**
     * Get the cum brut non abattu.
     *
     * @return float Returns the cum brut non abattu.
     */
    public function getCumBrutNonAbattu() {
        return $this->cumBrutNonAbattu;
    }

    /**
     * Get the cum cp dus.
     *
     * @return float Returns the cum cp dus.
     */
    public function getCumCpDus() {
        return $this->cumCpDus;
    }

    /**
     * Get the cum cp dus1.
     *
     * @return float Returns the cum cp dus1.
     */
    public function getCumCpDus1() {
        return $this->cumCpDus1;
    }

    /**
     * Get the cum cp pris.
     *
     * @return float Returns the cum cp pris.
     */
    public function getCumCpPris() {
        return $this->cumCpPris;
    }

    /**
     * Get the cum cp pris1.
     *
     * @return float Returns the cum cp pris1.
     */
    public function getCumCpPris1() {
        return $this->cumCpPris1;
    }

    /**
     * Get the cum dif dus.
     *
     * @return float Returns the cum dif dus.
     */
    public function getCumDifDus() {
        return $this->cumDifDus;
    }

    /**
     * Get the cum dif dus1.
     *
     * @return float Returns the cum dif dus1.
     */
    public function getCumDifDus1() {
        return $this->cumDifDus1;
    }

    /**
     * Get the cum h bonifie.
     *
     * @return float Returns the cum h bonifie.
     */
    public function getCumHBonifie() {
        return $this->cumHBonifie;
    }

    /**
     * Get the cum h repos remplace.
     *
     * @return float Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace() {
        return $this->cumHReposRemplace;
    }

    /**
     * Get the cum h service.
     *
     * @return float Returns the cum h service.
     */
    public function getCumHService() {
        return $this->cumHService;
    }

    /**
     * Get the cum h sup.
     *
     * @return float Returns the cum h sup.
     */
    public function getCumHSup() {
        return $this->cumHSup;
    }

    /**
     * Get the cum h sup rcit.
     *
     * @return float Returns the cum h sup rcit.
     */
    public function getCumHSupRcit() {
        return $this->cumHSupRcit;
    }

    /**
     * Get the cum heure paye.
     *
     * @return float Returns the cum heure paye.
     */
    public function getCumHeurePaye() {
        return $this->cumHeurePaye;
    }

    /**
     * Get the cum heure trav.
     *
     * @return float Returns the cum heure trav.
     */
    public function getCumHeureTrav() {
        return $this->cumHeureTrav;
    }

    /**
     * Get the cum j repos recup.
     *
     * @return float Returns the cum j repos recup.
     */
    public function getCumJReposRecup() {
        return $this->cumJReposRecup;
    }

    /**
     * Get the cum jour paye.
     *
     * @return float Returns the cum jour paye.
     */
    public function getCumJourPaye() {
        return $this->cumJourPaye;
    }

    /**
     * Get the cum jour trav.
     *
     * @return float Returns the cum jour trav.
     */
    public function getCumJourTrav() {
        return $this->cumJourTrav;
    }

    /**
     * Get the cum mt cp pris.
     *
     * @return float Returns the cum mt cp pris.
     */
    public function getCumMtCpPris() {
        return $this->cumMtCpPris;
    }

    /**
     * Get the cum mt cp pris1.
     *
     * @return float Returns the cum mt cp pris1.
     */
    public function getCumMtCpPris1() {
        return $this->cumMtCpPris1;
    }

    /**
     * Get the cum net a payer.
     *
     * @return float Returns the cum net a payer.
     */
    public function getCumNetAPayer() {
        return $this->cumNetAPayer;
    }

    /**
     * Get the cum net imposable.
     *
     * @return float Returns the cum net imposable.
     */
    public function getCumNetImposable() {
        return $this->cumNetImposable;
    }

    /**
     * Get the cum plaf1 caisse1.
     *
     * @return float Returns the cum plaf1 caisse1.
     */
    public function getCumPlaf1Caisse1() {
        return $this->cumPlaf1Caisse1;
    }

    /**
     * Get the cum plaf1 caisse2.
     *
     * @return float Returns the cum plaf1 caisse2.
     */
    public function getCumPlaf1Caisse2() {
        return $this->cumPlaf1Caisse2;
    }

    /**
     * Get the cum plaf1 caisse3.
     *
     * @return float Returns the cum plaf1 caisse3.
     */
    public function getCumPlaf1Caisse3() {
        return $this->cumPlaf1Caisse3;
    }

    /**
     * Get the cum plaf2 caisse1.
     *
     * @return float Returns the cum plaf2 caisse1.
     */
    public function getCumPlaf2Caisse1() {
        return $this->cumPlaf2Caisse1;
    }

    /**
     * Get the cum plaf2 caisse2.
     *
     * @return float Returns the cum plaf2 caisse2.
     */
    public function getCumPlaf2Caisse2() {
        return $this->cumPlaf2Caisse2;
    }

    /**
     * Get the cum plaf2 caisse3.
     *
     * @return float Returns the cum plaf2 caisse3.
     */
    public function getCumPlaf2Caisse3() {
        return $this->cumPlaf2Caisse3;
    }

    /**
     * Get the cum plafond gmp.
     *
     * @return float Returns the cum plafond gmp.
     */
    public function getCumPlafondGmp() {
        return $this->cumPlafondGmp;
    }

    /**
     * Get the cum plafond ss1.
     *
     * @return float Returns the cum plafond ss1.
     */
    public function getCumPlafondSs1() {
        return $this->cumPlafondSs1;
    }

    /**
     * Get the cum plafond ss2.
     *
     * @return float Returns the cum plafond ss2.
     */
    public function getCumPlafondSs2() {
        return $this->cumPlafondSs2;
    }

    /**
     * Get the cum prov cp.
     *
     * @return float Returns the cum prov cp.
     */
    public function getCumProvCp() {
        return $this->cumProvCp;
    }

    /**
     * Get the cum prov cp1.
     *
     * @return float Returns the cum prov cp1.
     */
    public function getCumProvCp1() {
        return $this->cumProvCp1;
    }

    /**
     * Get the cum repos comp.
     *
     * @return float Returns the cum repos comp.
     */
    public function getCumReposComp() {
        return $this->cumReposComp;
    }

    /**
     * Get the cum rtt dus.
     *
     * @return float Returns the cum rtt dus.
     */
    public function getCumRttDus() {
        return $this->cumRttDus;
    }

    /**
     * Get the cum rtt pris.
     *
     * @return float Returns the cum rtt pris.
     */
    public function getCumRttPris() {
        return $this->cumRttPris;
    }

    /**
     * Get the cum tot si.
     *
     * @return float Returns the cum tot si.
     */
    public function getCumTotSi() {
        return $this->cumTotSi;
    }

    /**
     * Get the cum tranche2 sans si.
     *
     * @return float Returns the cum tranche2 sans si.
     */
    public function getCumTranche2SansSi() {
        return $this->cumTranche2SansSi;
    }

    /**
     * Get the cum tranche2 si.
     *
     * @return float Returns the cum tranche2 si.
     */
    public function getCumTranche2Si() {
        return $this->cumTranche2Si;
    }

    /**
     * Get the cum tranche a sans si.
     *
     * @return float Returns the cum tranche a sans si.
     */
    public function getCumTrancheASansSi() {
        return $this->cumTrancheASansSi;
    }

    /**
     * Get the cum tranche asi.
     *
     * @return float Returns the cum tranche asi.
     */
    public function getCumTrancheAsi() {
        return $this->cumTrancheAsi;
    }

    /**
     * Get the cum tranche b sans si.
     *
     * @return float Returns the cum tranche b sans si.
     */
    public function getCumTrancheBSansSi() {
        return $this->cumTrancheBSansSi;
    }

    /**
     * Get the cum tranche bsi.
     *
     * @return float Returns the cum tranche bsi.
     */
    public function getCumTrancheBsi() {
        return $this->cumTrancheBsi;
    }

    /**
     * Get the cum tranche c sans si.
     *
     * @return float Returns the cum tranche c sans si.
     */
    public function getCumTrancheCSansSi() {
        return $this->cumTrancheCSansSi;
    }

    /**
     * Get the cum tranche csi.
     *
     * @return float Returns the cum tranche csi.
     */
    public function getCumTrancheCsi() {
        return $this->cumTrancheCsi;
    }

    /**
     * Get the cum tranche d1 sans si.
     *
     * @return float Returns the cum tranche d1 sans si.
     */
    public function getCumTrancheD1SansSi() {
        return $this->cumTrancheD1SansSi;
    }

    /**
     * Get the cum tranche d sans si.
     *
     * @return float Returns the cum tranche d sans si.
     */
    public function getCumTrancheDSansSi() {
        return $this->cumTrancheDSansSi;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Set the annee.
     *
     * @param string $annee The annee.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the cum30 ss.
     *
     * @param float $cum30Ss The cum30 ss.
     */
    public function setCum30Ss($cum30Ss) {
        $this->cum30Ss = $cum30Ss;
        return $this;
    }

    /**
     * Set the cum base csg.
     *
     * @param float $cumBaseCsg The cum base csg.
     */
    public function setCumBaseCsg($cumBaseCsg) {
        $this->cumBaseCsg = $cumBaseCsg;
        return $this;
    }

    /**
     * Set the cum base gmp.
     *
     * @param float $cumBaseGmp The cum base gmp.
     */
    public function setCumBaseGmp($cumBaseGmp) {
        $this->cumBaseGmp = $cumBaseGmp;
        return $this;
    }

    /**
     * Set the cum base ss.
     *
     * @param float $cumBaseSs The cum base ss.
     */
    public function setCumBaseSs($cumBaseSs) {
        $this->cumBaseSs = $cumBaseSs;
        return $this;
    }

    /**
     * Set the cum base tr2.
     *
     * @param float $cumBaseTr2 The cum base tr2.
     */
    public function setCumBaseTr2($cumBaseTr2) {
        $this->cumBaseTr2 = $cumBaseTr2;
        return $this;
    }

    /**
     * Set the cum base tr a.
     *
     * @param float $cumBaseTrA The cum base tr a.
     */
    public function setCumBaseTrA($cumBaseTrA) {
        $this->cumBaseTrA = $cumBaseTrA;
        return $this;
    }

    /**
     * Set the cum base tr a caisse1.
     *
     * @param float $cumBaseTrACaisse1 The cum base tr a caisse1.
     */
    public function setCumBaseTrACaisse1($cumBaseTrACaisse1) {
        $this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
        return $this;
    }

    /**
     * Set the cum base tr a caisse2.
     *
     * @param float $cumBaseTrACaisse2 The cum base tr a caisse2.
     */
    public function setCumBaseTrACaisse2($cumBaseTrACaisse2) {
        $this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
        return $this;
    }

    /**
     * Set the cum base tr a caisse3.
     *
     * @param float $cumBaseTrACaisse3 The cum base tr a caisse3.
     */
    public function setCumBaseTrACaisse3($cumBaseTrACaisse3) {
        $this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
        return $this;
    }

    /**
     * Set the cum base tr b.
     *
     * @param float $cumBaseTrB The cum base tr b.
     */
    public function setCumBaseTrB($cumBaseTrB) {
        $this->cumBaseTrB = $cumBaseTrB;
        return $this;
    }

    /**
     * Set the cum base tr b caisse1.
     *
     * @param float $cumBaseTrBCaisse1 The cum base tr b caisse1.
     */
    public function setCumBaseTrBCaisse1($cumBaseTrBCaisse1) {
        $this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr b caisse2.
     *
     * @param float $cumBaseTrBCaisse2 The cum base tr b caisse2.
     */
    public function setCumBaseTrBCaisse2($cumBaseTrBCaisse2) {
        $this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr b caisse3.
     *
     * @param float $cumBaseTrBCaisse3 The cum base tr b caisse3.
     */
    public function setCumBaseTrBCaisse3($cumBaseTrBCaisse3) {
        $this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr c.
     *
     * @param float $cumBaseTrC The cum base tr c.
     */
    public function setCumBaseTrC($cumBaseTrC) {
        $this->cumBaseTrC = $cumBaseTrC;
        return $this;
    }

    /**
     * Set the cum base tr c caisse1.
     *
     * @param float $cumBaseTrCCaisse1 The cum base tr c caisse1.
     */
    public function setCumBaseTrCCaisse1($cumBaseTrCCaisse1) {
        $this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr c caisse2.
     *
     * @param float $cumBaseTrCCaisse2 The cum base tr c caisse2.
     */
    public function setCumBaseTrCCaisse2($cumBaseTrCCaisse2) {
        $this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr c caisse3.
     *
     * @param float $cumBaseTrCCaisse3 The cum base tr c caisse3.
     */
    public function setCumBaseTrCCaisse3($cumBaseTrCCaisse3) {
        $this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
        return $this;
    }

    /**
     * Set the cum base tr d.
     *
     * @param float $cumBaseTrD The cum base tr d.
     */
    public function setCumBaseTrD($cumBaseTrD) {
        $this->cumBaseTrD = $cumBaseTrD;
        return $this;
    }

    /**
     * Set the cum base tr d1.
     *
     * @param float $cumBaseTrD1 The cum base tr d1.
     */
    public function setCumBaseTrD1($cumBaseTrD1) {
        $this->cumBaseTrD1 = $cumBaseTrD1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse1.
     *
     * @param float $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
     */
    public function setCumBaseTrD1Caisse1($cumBaseTrD1Caisse1) {
        $this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse2.
     *
     * @param float $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
     */
    public function setCumBaseTrD1Caisse2($cumBaseTrD1Caisse2) {
        $this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
        return $this;
    }

    /**
     * Set the cum base tr d1 caisse3.
     *
     * @param float $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
     */
    public function setCumBaseTrD1Caisse3($cumBaseTrD1Caisse3) {
        $this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
        return $this;
    }

    /**
     * Set the cum base tr d caisse1.
     *
     * @param float $cumBaseTrDCaisse1 The cum base tr d caisse1.
     */
    public function setCumBaseTrDCaisse1($cumBaseTrDCaisse1) {
        $this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
        return $this;
    }

    /**
     * Set the cum base tr d caisse2.
     *
     * @param float $cumBaseTrDCaisse2 The cum base tr d caisse2.
     */
    public function setCumBaseTrDCaisse2($cumBaseTrDCaisse2) {
        $this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
        return $this;
    }

    /**
     * Set the cum base tr d caisse3.
     *
     * @param float $cumBaseTrDCaisse3 The cum base tr d caisse3.
     */
    public function setCumBaseTrDCaisse3($cumBaseTrDCaisse3) {
        $this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
        return $this;
    }

    /**
     * Set the cum brut abat non lim.
     *
     * @param float $cumBrutAbatNonLim The cum brut abat non lim.
     */
    public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
        $this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
        return $this;
    }

    /**
     * Set the cum brut al.
     *
     * @param float $cumBrutAl The cum brut al.
     */
    public function setCumBrutAl($cumBrutAl) {
        $this->cumBrutAl = $cumBrutAl;
        return $this;
    }

    /**
     * Set the cum brut al sans si.
     *
     * @param float $cumBrutAlSansSi The cum brut al sans si.
     */
    public function setCumBrutAlSansSi($cumBrutAlSansSi) {
        $this->cumBrutAlSansSi = $cumBrutAlSansSi;
        return $this;
    }

    /**
     * Set the cum brut caisse1.
     *
     * @param float $cumBrutCaisse1 The cum brut caisse1.
     */
    public function setCumBrutCaisse1($cumBrutCaisse1) {
        $this->cumBrutCaisse1 = $cumBrutCaisse1;
        return $this;
    }

    /**
     * Set the cum brut caisse2.
     *
     * @param float $cumBrutCaisse2 The cum brut caisse2.
     */
    public function setCumBrutCaisse2($cumBrutCaisse2) {
        $this->cumBrutCaisse2 = $cumBrutCaisse2;
        return $this;
    }

    /**
     * Set the cum brut caisse3.
     *
     * @param float $cumBrutCaisse3 The cum brut caisse3.
     */
    public function setCumBrutCaisse3($cumBrutCaisse3) {
        $this->cumBrutCaisse3 = $cumBrutCaisse3;
        return $this;
    }

    /**
     * Set the cum brut non abattu.
     *
     * @param float $cumBrutNonAbattu The cum brut non abattu.
     */
    public function setCumBrutNonAbattu($cumBrutNonAbattu) {
        $this->cumBrutNonAbattu = $cumBrutNonAbattu;
        return $this;
    }

    /**
     * Set the cum cp dus.
     *
     * @param float $cumCpDus The cum cp dus.
     */
    public function setCumCpDus($cumCpDus) {
        $this->cumCpDus = $cumCpDus;
        return $this;
    }

    /**
     * Set the cum cp dus1.
     *
     * @param float $cumCpDus1 The cum cp dus1.
     */
    public function setCumCpDus1($cumCpDus1) {
        $this->cumCpDus1 = $cumCpDus1;
        return $this;
    }

    /**
     * Set the cum cp pris.
     *
     * @param float $cumCpPris The cum cp pris.
     */
    public function setCumCpPris($cumCpPris) {
        $this->cumCpPris = $cumCpPris;
        return $this;
    }

    /**
     * Set the cum cp pris1.
     *
     * @param float $cumCpPris1 The cum cp pris1.
     */
    public function setCumCpPris1($cumCpPris1) {
        $this->cumCpPris1 = $cumCpPris1;
        return $this;
    }

    /**
     * Set the cum dif dus.
     *
     * @param float $cumDifDus The cum dif dus.
     */
    public function setCumDifDus($cumDifDus) {
        $this->cumDifDus = $cumDifDus;
        return $this;
    }

    /**
     * Set the cum dif dus1.
     *
     * @param float $cumDifDus1 The cum dif dus1.
     */
    public function setCumDifDus1($cumDifDus1) {
        $this->cumDifDus1 = $cumDifDus1;
        return $this;
    }

    /**
     * Set the cum h bonifie.
     *
     * @param float $cumHBonifie The cum h bonifie.
     */
    public function setCumHBonifie($cumHBonifie) {
        $this->cumHBonifie = $cumHBonifie;
        return $this;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float $cumHReposRemplace The cum h repos remplace.
     */
    public function setCumHReposRemplace($cumHReposRemplace) {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }

    /**
     * Set the cum h service.
     *
     * @param float $cumHService The cum h service.
     */
    public function setCumHService($cumHService) {
        $this->cumHService = $cumHService;
        return $this;
    }

    /**
     * Set the cum h sup.
     *
     * @param float $cumHSup The cum h sup.
     */
    public function setCumHSup($cumHSup) {
        $this->cumHSup = $cumHSup;
        return $this;
    }

    /**
     * Set the cum h sup rcit.
     *
     * @param float $cumHSupRcit The cum h sup rcit.
     */
    public function setCumHSupRcit($cumHSupRcit) {
        $this->cumHSupRcit = $cumHSupRcit;
        return $this;
    }

    /**
     * Set the cum heure paye.
     *
     * @param float $cumHeurePaye The cum heure paye.
     */
    public function setCumHeurePaye($cumHeurePaye) {
        $this->cumHeurePaye = $cumHeurePaye;
        return $this;
    }

    /**
     * Set the cum heure trav.
     *
     * @param float $cumHeureTrav The cum heure trav.
     */
    public function setCumHeureTrav($cumHeureTrav) {
        $this->cumHeureTrav = $cumHeureTrav;
        return $this;
    }

    /**
     * Set the cum j repos recup.
     *
     * @param float $cumJReposRecup The cum j repos recup.
     */
    public function setCumJReposRecup($cumJReposRecup) {
        $this->cumJReposRecup = $cumJReposRecup;
        return $this;
    }

    /**
     * Set the cum jour paye.
     *
     * @param float $cumJourPaye The cum jour paye.
     */
    public function setCumJourPaye($cumJourPaye) {
        $this->cumJourPaye = $cumJourPaye;
        return $this;
    }

    /**
     * Set the cum jour trav.
     *
     * @param float $cumJourTrav The cum jour trav.
     */
    public function setCumJourTrav($cumJourTrav) {
        $this->cumJourTrav = $cumJourTrav;
        return $this;
    }

    /**
     * Set the cum mt cp pris.
     *
     * @param float $cumMtCpPris The cum mt cp pris.
     */
    public function setCumMtCpPris($cumMtCpPris) {
        $this->cumMtCpPris = $cumMtCpPris;
        return $this;
    }

    /**
     * Set the cum mt cp pris1.
     *
     * @param float $cumMtCpPris1 The cum mt cp pris1.
     */
    public function setCumMtCpPris1($cumMtCpPris1) {
        $this->cumMtCpPris1 = $cumMtCpPris1;
        return $this;
    }

    /**
     * Set the cum net a payer.
     *
     * @param float $cumNetAPayer The cum net a payer.
     */
    public function setCumNetAPayer($cumNetAPayer) {
        $this->cumNetAPayer = $cumNetAPayer;
        return $this;
    }

    /**
     * Set the cum net imposable.
     *
     * @param float $cumNetImposable The cum net imposable.
     */
    public function setCumNetImposable($cumNetImposable) {
        $this->cumNetImposable = $cumNetImposable;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse1.
     *
     * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
     */
    public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
        $this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse2.
     *
     * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
     */
    public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
        $this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf1 caisse3.
     *
     * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
     */
    public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
        $this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse1.
     *
     * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
     */
    public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
        $this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse2.
     *
     * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
     */
    public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
        $this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
        return $this;
    }

    /**
     * Set the cum plaf2 caisse3.
     *
     * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
     */
    public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
        $this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
        return $this;
    }

    /**
     * Set the cum plafond gmp.
     *
     * @param float $cumPlafondGmp The cum plafond gmp.
     */
    public function setCumPlafondGmp($cumPlafondGmp) {
        $this->cumPlafondGmp = $cumPlafondGmp;
        return $this;
    }

    /**
     * Set the cum plafond ss1.
     *
     * @param float $cumPlafondSs1 The cum plafond ss1.
     */
    public function setCumPlafondSs1($cumPlafondSs1) {
        $this->cumPlafondSs1 = $cumPlafondSs1;
        return $this;
    }

    /**
     * Set the cum plafond ss2.
     *
     * @param float $cumPlafondSs2 The cum plafond ss2.
     */
    public function setCumPlafondSs2($cumPlafondSs2) {
        $this->cumPlafondSs2 = $cumPlafondSs2;
        return $this;
    }

    /**
     * Set the cum prov cp.
     *
     * @param float $cumProvCp The cum prov cp.
     */
    public function setCumProvCp($cumProvCp) {
        $this->cumProvCp = $cumProvCp;
        return $this;
    }

    /**
     * Set the cum prov cp1.
     *
     * @param float $cumProvCp1 The cum prov cp1.
     */
    public function setCumProvCp1($cumProvCp1) {
        $this->cumProvCp1 = $cumProvCp1;
        return $this;
    }

    /**
     * Set the cum repos comp.
     *
     * @param float $cumReposComp The cum repos comp.
     */
    public function setCumReposComp($cumReposComp) {
        $this->cumReposComp = $cumReposComp;
        return $this;
    }

    /**
     * Set the cum rtt dus.
     *
     * @param float $cumRttDus The cum rtt dus.
     */
    public function setCumRttDus($cumRttDus) {
        $this->cumRttDus = $cumRttDus;
        return $this;
    }

    /**
     * Set the cum rtt pris.
     *
     * @param float $cumRttPris The cum rtt pris.
     */
    public function setCumRttPris($cumRttPris) {
        $this->cumRttPris = $cumRttPris;
        return $this;
    }

    /**
     * Set the cum tot si.
     *
     * @param float $cumTotSi The cum tot si.
     */
    public function setCumTotSi($cumTotSi) {
        $this->cumTotSi = $cumTotSi;
        return $this;
    }

    /**
     * Set the cum tranche2 sans si.
     *
     * @param float $cumTranche2SansSi The cum tranche2 sans si.
     */
    public function setCumTranche2SansSi($cumTranche2SansSi) {
        $this->cumTranche2SansSi = $cumTranche2SansSi;
        return $this;
    }

    /**
     * Set the cum tranche2 si.
     *
     * @param float $cumTranche2Si The cum tranche2 si.
     */
    public function setCumTranche2Si($cumTranche2Si) {
        $this->cumTranche2Si = $cumTranche2Si;
        return $this;
    }

    /**
     * Set the cum tranche a sans si.
     *
     * @param float $cumTrancheASansSi The cum tranche a sans si.
     */
    public function setCumTrancheASansSi($cumTrancheASansSi) {
        $this->cumTrancheASansSi = $cumTrancheASansSi;
        return $this;
    }

    /**
     * Set the cum tranche asi.
     *
     * @param float $cumTrancheAsi The cum tranche asi.
     */
    public function setCumTrancheAsi($cumTrancheAsi) {
        $this->cumTrancheAsi = $cumTrancheAsi;
        return $this;
    }

    /**
     * Set the cum tranche b sans si.
     *
     * @param float $cumTrancheBSansSi The cum tranche b sans si.
     */
    public function setCumTrancheBSansSi($cumTrancheBSansSi) {
        $this->cumTrancheBSansSi = $cumTrancheBSansSi;
        return $this;
    }

    /**
     * Set the cum tranche bsi.
     *
     * @param float $cumTrancheBsi The cum tranche bsi.
     */
    public function setCumTrancheBsi($cumTrancheBsi) {
        $this->cumTrancheBsi = $cumTrancheBsi;
        return $this;
    }

    /**
     * Set the cum tranche c sans si.
     *
     * @param float $cumTrancheCSansSi The cum tranche c sans si.
     */
    public function setCumTrancheCSansSi($cumTrancheCSansSi) {
        $this->cumTrancheCSansSi = $cumTrancheCSansSi;
        return $this;
    }

    /**
     * Set the cum tranche csi.
     *
     * @param float $cumTrancheCsi The cum tranche csi.
     */
    public function setCumTrancheCsi($cumTrancheCsi) {
        $this->cumTrancheCsi = $cumTrancheCsi;
        return $this;
    }

    /**
     * Set the cum tranche d1 sans si.
     *
     * @param float $cumTrancheD1SansSi The cum tranche d1 sans si.
     */
    public function setCumTrancheD1SansSi($cumTrancheD1SansSi) {
        $this->cumTrancheD1SansSi = $cumTrancheD1SansSi;
        return $this;
    }

    /**
     * Set the cum tranche d sans si.
     *
     * @param float $cumTrancheDSansSi The cum tranche d sans si.
     */
    public function setCumTrancheDSansSi($cumTrancheDSansSi) {
        $this->cumTrancheDSansSi = $cumTrancheDSansSi;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }
}
