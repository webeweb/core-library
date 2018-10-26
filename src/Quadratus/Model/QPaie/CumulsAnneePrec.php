<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;


/**
 * Cumuls annee prec model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class CumulsAnneePrec {

	/**
	 * Annee.
	 *
	 * @var string
	 */
	private $annee;

	/**
	 * Cum30 s s.
	 *
	 * @var float
	 */
	private $cum30SS;

	/**
	 * Cum base csg.
	 *
	 * @var float
	 */
	private $cumBaseCsg;

	/**
	 * Cum base g m p.
	 *
	 * @var float
	 */
	private $cumBaseGMP;

	/**
	 * Cum base s s.
	 *
	 * @var float
	 */
	private $cumBaseSS;

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
	 * Cum brutal.
	 *
	 * @var float
	 */
	private $cumBrutal;

	/**
	 * Cum brutal sans s i.
	 *
	 * @var float
	 */
	private $cumBrutalSansSI;

	/**
	 * Cum cp dus.
	 *
	 * @var float
	 */
	private $cumCpDus;

	/**
	 * Cum cp dus_1.
	 *
	 * @var float
	 */
	private $cumCpDus_1;

	/**
	 * Cum cp pris.
	 *
	 * @var float
	 */
	private $cumCpPris;

	/**
	 * Cum cp pris_1.
	 *
	 * @var float
	 */
	private $cumCpPris_1;

	/**
	 * Cum d i f dus.
	 *
	 * @var float
	 */
	private $cumDIFDus;

	/**
	 * Cum d i f dus_1.
	 *
	 * @var float
	 */
	private $cumDIFDus_1;

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
	 * Cum h sup r c i t.
	 *
	 * @var float
	 */
	private $cumHSupRCIT;

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
	 * Cum mt cp pris_1.
	 *
	 * @var float
	 */
	private $cumMtCpPris_1;

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
	 * Cum plafond g m p.
	 *
	 * @var float
	 */
	private $cumPlafondGMP;

	/**
	 * Cum plafond s s1.
	 *
	 * @var float
	 */
	private $cumPlafondSS1;

	/**
	 * Cum plafond s s2.
	 *
	 * @var float
	 */
	private $cumPlafondSS2;

	/**
	 * Cum prov cp.
	 *
	 * @var float
	 */
	private $cumProvCp;

	/**
	 * Cum prov cp_1.
	 *
	 * @var float
	 */
	private $cumProvCp_1;

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
	 * Cum tot s i.
	 *
	 * @var float
	 */
	private $cumTotSI;

	/**
	 * Cum tranche2 s i.
	 *
	 * @var float
	 */
	private $cumTranche2SI;

	/**
	 * Cum tranche2 sans s i.
	 *
	 * @var float
	 */
	private $cumTranche2SansSI;

	/**
	 * Cum tranche a s i.
	 *
	 * @var float
	 */
	private $cumTrancheASI;

	/**
	 * Cum tranche a sans s i.
	 *
	 * @var float
	 */
	private $cumTrancheASansSI;

	/**
	 * Cum tranche b s i.
	 *
	 * @var float
	 */
	private $cumTrancheBSI;

	/**
	 * Cum tranche b sans s i.
	 *
	 * @var float
	 */
	private $cumTrancheBSansSI;

	/**
	 * Cum tranche c s i.
	 *
	 * @var float
	 */
	private $cumTrancheCSI;

	/**
	 * Cum tranche c sans s i.
	 *
	 * @var float
	 */
	private $cumTrancheCSansSI;

	/**
	 * Cum tranche d1 sans s i.
	 *
	 * @var float
	 */
	private $cumTrancheD1SansSI;

	/**
	 * Cum tranche d sans s i.
	 *
	 * @var float
	 */
	private $cumTrancheDSansSI;

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
	 * Get the cum30 s s.
	 *
	 * @return float Returns the cum30 s s.
	 */
	public function getCum30SS() {
		return $this->cum30SS;
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
	 * Get the cum base g m p.
	 *
	 * @return float Returns the cum base g m p.
	 */
	public function getCumBaseGMP() {
		return $this->cumBaseGMP;
	}

	/**
	 * Get the cum base s s.
	 *
	 * @return float Returns the cum base s s.
	 */
	public function getCumBaseSS() {
		return $this->cumBaseSS;
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
	 * Get the cum brutal.
	 *
	 * @return float Returns the cum brutal.
	 */
	public function getCumBrutal() {
		return $this->cumBrutal;
	}

	/**
	 * Get the cum brutal sans s i.
	 *
	 * @return float Returns the cum brutal sans s i.
	 */
	public function getCumBrutalSansSI() {
		return $this->cumBrutalSansSI;
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
	 * Get the cum cp dus_1.
	 *
	 * @return float Returns the cum cp dus_1.
	 */
	public function getCumCpDus_1() {
		return $this->cumCpDus_1;
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
	 * Get the cum cp pris_1.
	 *
	 * @return float Returns the cum cp pris_1.
	 */
	public function getCumCpPris_1() {
		return $this->cumCpPris_1;
	}

	/**
	 * Get the cum d i f dus.
	 *
	 * @return float Returns the cum d i f dus.
	 */
	public function getCumDIFDus() {
		return $this->cumDIFDus;
	}

	/**
	 * Get the cum d i f dus_1.
	 *
	 * @return float Returns the cum d i f dus_1.
	 */
	public function getCumDIFDus_1() {
		return $this->cumDIFDus_1;
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
	 * Get the cum h sup r c i t.
	 *
	 * @return float Returns the cum h sup r c i t.
	 */
	public function getCumHSupRCIT() {
		return $this->cumHSupRCIT;
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
	 * Get the cum mt cp pris_1.
	 *
	 * @return float Returns the cum mt cp pris_1.
	 */
	public function getCumMtCpPris_1() {
		return $this->cumMtCpPris_1;
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
	 * Get the cum plafond g m p.
	 *
	 * @return float Returns the cum plafond g m p.
	 */
	public function getCumPlafondGMP() {
		return $this->cumPlafondGMP;
	}

	/**
	 * Get the cum plafond s s1.
	 *
	 * @return float Returns the cum plafond s s1.
	 */
	public function getCumPlafondSS1() {
		return $this->cumPlafondSS1;
	}

	/**
	 * Get the cum plafond s s2.
	 *
	 * @return float Returns the cum plafond s s2.
	 */
	public function getCumPlafondSS2() {
		return $this->cumPlafondSS2;
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
	 * Get the cum prov cp_1.
	 *
	 * @return float Returns the cum prov cp_1.
	 */
	public function getCumProvCp_1() {
		return $this->cumProvCp_1;
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
	 * Get the cum tot s i.
	 *
	 * @return float Returns the cum tot s i.
	 */
	public function getCumTotSI() {
		return $this->cumTotSI;
	}

	/**
	 * Get the cum tranche2 s i.
	 *
	 * @return float Returns the cum tranche2 s i.
	 */
	public function getCumTranche2SI() {
		return $this->cumTranche2SI;
	}

	/**
	 * Get the cum tranche2 sans s i.
	 *
	 * @return float Returns the cum tranche2 sans s i.
	 */
	public function getCumTranche2SansSI() {
		return $this->cumTranche2SansSI;
	}

	/**
	 * Get the cum tranche a s i.
	 *
	 * @return float Returns the cum tranche a s i.
	 */
	public function getCumTrancheASI() {
		return $this->cumTrancheASI;
	}

	/**
	 * Get the cum tranche a sans s i.
	 *
	 * @return float Returns the cum tranche a sans s i.
	 */
	public function getCumTrancheASansSI() {
		return $this->cumTrancheASansSI;
	}

	/**
	 * Get the cum tranche b s i.
	 *
	 * @return float Returns the cum tranche b s i.
	 */
	public function getCumTrancheBSI() {
		return $this->cumTrancheBSI;
	}

	/**
	 * Get the cum tranche b sans s i.
	 *
	 * @return float Returns the cum tranche b sans s i.
	 */
	public function getCumTrancheBSansSI() {
		return $this->cumTrancheBSansSI;
	}

	/**
	 * Get the cum tranche c s i.
	 *
	 * @return float Returns the cum tranche c s i.
	 */
	public function getCumTrancheCSI() {
		return $this->cumTrancheCSI;
	}

	/**
	 * Get the cum tranche c sans s i.
	 *
	 * @return float Returns the cum tranche c sans s i.
	 */
	public function getCumTrancheCSansSI() {
		return $this->cumTrancheCSansSI;
	}

	/**
	 * Get the cum tranche d1 sans s i.
	 *
	 * @return float Returns the cum tranche d1 sans s i.
	 */
	public function getCumTrancheD1SansSI() {
		return $this->cumTrancheD1SansSI;
	}

	/**
	 * Get the cum tranche d sans s i.
	 *
	 * @return float Returns the cum tranche d sans s i.
	 */
	public function getCumTrancheDSansSI() {
		return $this->cumTrancheDSansSI;
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
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setAnnee($annee) {
		$this->annee = $annee;
		return $this;
	}

	/**
	 * Set the cum30 s s.
	 *
	 * @param float $cum30SS The cum30 s s.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCum30SS($cum30SS) {
		$this->cum30SS = $cum30SS;
		return $this;
	}

	/**
	 * Set the cum base csg.
	 *
	 * @param float $cumBaseCsg The cum base csg.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseCsg($cumBaseCsg) {
		$this->cumBaseCsg = $cumBaseCsg;
		return $this;
	}

	/**
	 * Set the cum base g m p.
	 *
	 * @param float $cumBaseGMP The cum base g m p.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseGMP($cumBaseGMP) {
		$this->cumBaseGMP = $cumBaseGMP;
		return $this;
	}

	/**
	 * Set the cum base s s.
	 *
	 * @param float $cumBaseSS The cum base s s.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseSS($cumBaseSS) {
		$this->cumBaseSS = $cumBaseSS;
		return $this;
	}

	/**
	 * Set the cum base tr2.
	 *
	 * @param float $cumBaseTr2 The cum base tr2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTr2($cumBaseTr2) {
		$this->cumBaseTr2 = $cumBaseTr2;
		return $this;
	}

	/**
	 * Set the cum base tr a.
	 *
	 * @param float $cumBaseTrA The cum base tr a.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrA($cumBaseTrA) {
		$this->cumBaseTrA = $cumBaseTrA;
		return $this;
	}

	/**
	 * Set the cum base tr a caisse1.
	 *
	 * @param float $cumBaseTrACaisse1 The cum base tr a caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrACaisse1($cumBaseTrACaisse1) {
		$this->cumBaseTrACaisse1 = $cumBaseTrACaisse1;
		return $this;
	}

	/**
	 * Set the cum base tr a caisse2.
	 *
	 * @param float $cumBaseTrACaisse2 The cum base tr a caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrACaisse2($cumBaseTrACaisse2) {
		$this->cumBaseTrACaisse2 = $cumBaseTrACaisse2;
		return $this;
	}

	/**
	 * Set the cum base tr a caisse3.
	 *
	 * @param float $cumBaseTrACaisse3 The cum base tr a caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrACaisse3($cumBaseTrACaisse3) {
		$this->cumBaseTrACaisse3 = $cumBaseTrACaisse3;
		return $this;
	}

	/**
	 * Set the cum base tr b.
	 *
	 * @param float $cumBaseTrB The cum base tr b.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrB($cumBaseTrB) {
		$this->cumBaseTrB = $cumBaseTrB;
		return $this;
	}

	/**
	 * Set the cum base tr b caisse1.
	 *
	 * @param float $cumBaseTrBCaisse1 The cum base tr b caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrBCaisse1($cumBaseTrBCaisse1) {
		$this->cumBaseTrBCaisse1 = $cumBaseTrBCaisse1;
		return $this;
	}

	/**
	 * Set the cum base tr b caisse2.
	 *
	 * @param float $cumBaseTrBCaisse2 The cum base tr b caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrBCaisse2($cumBaseTrBCaisse2) {
		$this->cumBaseTrBCaisse2 = $cumBaseTrBCaisse2;
		return $this;
	}

	/**
	 * Set the cum base tr b caisse3.
	 *
	 * @param float $cumBaseTrBCaisse3 The cum base tr b caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrBCaisse3($cumBaseTrBCaisse3) {
		$this->cumBaseTrBCaisse3 = $cumBaseTrBCaisse3;
		return $this;
	}

	/**
	 * Set the cum base tr c.
	 *
	 * @param float $cumBaseTrC The cum base tr c.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrC($cumBaseTrC) {
		$this->cumBaseTrC = $cumBaseTrC;
		return $this;
	}

	/**
	 * Set the cum base tr c caisse1.
	 *
	 * @param float $cumBaseTrCCaisse1 The cum base tr c caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrCCaisse1($cumBaseTrCCaisse1) {
		$this->cumBaseTrCCaisse1 = $cumBaseTrCCaisse1;
		return $this;
	}

	/**
	 * Set the cum base tr c caisse2.
	 *
	 * @param float $cumBaseTrCCaisse2 The cum base tr c caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrCCaisse2($cumBaseTrCCaisse2) {
		$this->cumBaseTrCCaisse2 = $cumBaseTrCCaisse2;
		return $this;
	}

	/**
	 * Set the cum base tr c caisse3.
	 *
	 * @param float $cumBaseTrCCaisse3 The cum base tr c caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrCCaisse3($cumBaseTrCCaisse3) {
		$this->cumBaseTrCCaisse3 = $cumBaseTrCCaisse3;
		return $this;
	}

	/**
	 * Set the cum base tr d.
	 *
	 * @param float $cumBaseTrD The cum base tr d.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrD($cumBaseTrD) {
		$this->cumBaseTrD = $cumBaseTrD;
		return $this;
	}

	/**
	 * Set the cum base tr d1.
	 *
	 * @param float $cumBaseTrD1 The cum base tr d1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrD1($cumBaseTrD1) {
		$this->cumBaseTrD1 = $cumBaseTrD1;
		return $this;
	}

	/**
	 * Set the cum base tr d1 caisse1.
	 *
	 * @param float $cumBaseTrD1Caisse1 The cum base tr d1 caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrD1Caisse1($cumBaseTrD1Caisse1) {
		$this->cumBaseTrD1Caisse1 = $cumBaseTrD1Caisse1;
		return $this;
	}

	/**
	 * Set the cum base tr d1 caisse2.
	 *
	 * @param float $cumBaseTrD1Caisse2 The cum base tr d1 caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrD1Caisse2($cumBaseTrD1Caisse2) {
		$this->cumBaseTrD1Caisse2 = $cumBaseTrD1Caisse2;
		return $this;
	}

	/**
	 * Set the cum base tr d1 caisse3.
	 *
	 * @param float $cumBaseTrD1Caisse3 The cum base tr d1 caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrD1Caisse3($cumBaseTrD1Caisse3) {
		$this->cumBaseTrD1Caisse3 = $cumBaseTrD1Caisse3;
		return $this;
	}

	/**
	 * Set the cum base tr d caisse1.
	 *
	 * @param float $cumBaseTrDCaisse1 The cum base tr d caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrDCaisse1($cumBaseTrDCaisse1) {
		$this->cumBaseTrDCaisse1 = $cumBaseTrDCaisse1;
		return $this;
	}

	/**
	 * Set the cum base tr d caisse2.
	 *
	 * @param float $cumBaseTrDCaisse2 The cum base tr d caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrDCaisse2($cumBaseTrDCaisse2) {
		$this->cumBaseTrDCaisse2 = $cumBaseTrDCaisse2;
		return $this;
	}

	/**
	 * Set the cum base tr d caisse3.
	 *
	 * @param float $cumBaseTrDCaisse3 The cum base tr d caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBaseTrDCaisse3($cumBaseTrDCaisse3) {
		$this->cumBaseTrDCaisse3 = $cumBaseTrDCaisse3;
		return $this;
	}

	/**
	 * Set the cum brut abat non lim.
	 *
	 * @param float $cumBrutAbatNonLim The cum brut abat non lim.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutAbatNonLim($cumBrutAbatNonLim) {
		$this->cumBrutAbatNonLim = $cumBrutAbatNonLim;
		return $this;
	}

	/**
	 * Set the cum brut caisse1.
	 *
	 * @param float $cumBrutCaisse1 The cum brut caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutCaisse1($cumBrutCaisse1) {
		$this->cumBrutCaisse1 = $cumBrutCaisse1;
		return $this;
	}

	/**
	 * Set the cum brut caisse2.
	 *
	 * @param float $cumBrutCaisse2 The cum brut caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutCaisse2($cumBrutCaisse2) {
		$this->cumBrutCaisse2 = $cumBrutCaisse2;
		return $this;
	}

	/**
	 * Set the cum brut caisse3.
	 *
	 * @param float $cumBrutCaisse3 The cum brut caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutCaisse3($cumBrutCaisse3) {
		$this->cumBrutCaisse3 = $cumBrutCaisse3;
		return $this;
	}

	/**
	 * Set the cum brut non abattu.
	 *
	 * @param float $cumBrutNonAbattu The cum brut non abattu.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutNonAbattu($cumBrutNonAbattu) {
		$this->cumBrutNonAbattu = $cumBrutNonAbattu;
		return $this;
	}

	/**
	 * Set the cum brutal.
	 *
	 * @param float $cumBrutal The cum brutal.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutal($cumBrutal) {
		$this->cumBrutal = $cumBrutal;
		return $this;
	}

	/**
	 * Set the cum brutal sans s i.
	 *
	 * @param float $cumBrutalSansSI The cum brutal sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumBrutalSansSI($cumBrutalSansSI) {
		$this->cumBrutalSansSI = $cumBrutalSansSI;
		return $this;
	}

	/**
	 * Set the cum cp dus.
	 *
	 * @param float $cumCpDus The cum cp dus.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumCpDus($cumCpDus) {
		$this->cumCpDus = $cumCpDus;
		return $this;
	}

	/**
	 * Set the cum cp dus_1.
	 *
	 * @param float $cumCpDus_1 The cum cp dus_1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumCpDus_1($cumCpDus_1) {
		$this->cumCpDus_1 = $cumCpDus_1;
		return $this;
	}

	/**
	 * Set the cum cp pris.
	 *
	 * @param float $cumCpPris The cum cp pris.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumCpPris($cumCpPris) {
		$this->cumCpPris = $cumCpPris;
		return $this;
	}

	/**
	 * Set the cum cp pris_1.
	 *
	 * @param float $cumCpPris_1 The cum cp pris_1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumCpPris_1($cumCpPris_1) {
		$this->cumCpPris_1 = $cumCpPris_1;
		return $this;
	}

	/**
	 * Set the cum d i f dus.
	 *
	 * @param float $cumDIFDus The cum d i f dus.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumDIFDus($cumDIFDus) {
		$this->cumDIFDus = $cumDIFDus;
		return $this;
	}

	/**
	 * Set the cum d i f dus_1.
	 *
	 * @param float $cumDIFDus_1 The cum d i f dus_1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumDIFDus_1($cumDIFDus_1) {
		$this->cumDIFDus_1 = $cumDIFDus_1;
		return $this;
	}

	/**
	 * Set the cum h bonifie.
	 *
	 * @param float $cumHBonifie The cum h bonifie.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHBonifie($cumHBonifie) {
		$this->cumHBonifie = $cumHBonifie;
		return $this;
	}

	/**
	 * Set the cum h repos remplace.
	 *
	 * @param float $cumHReposRemplace The cum h repos remplace.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHReposRemplace($cumHReposRemplace) {
		$this->cumHReposRemplace = $cumHReposRemplace;
		return $this;
	}

	/**
	 * Set the cum h service.
	 *
	 * @param float $cumHService The cum h service.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHService($cumHService) {
		$this->cumHService = $cumHService;
		return $this;
	}

	/**
	 * Set the cum h sup.
	 *
	 * @param float $cumHSup The cum h sup.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHSup($cumHSup) {
		$this->cumHSup = $cumHSup;
		return $this;
	}

	/**
	 * Set the cum h sup r c i t.
	 *
	 * @param float $cumHSupRCIT The cum h sup r c i t.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHSupRCIT($cumHSupRCIT) {
		$this->cumHSupRCIT = $cumHSupRCIT;
		return $this;
	}

	/**
	 * Set the cum heure paye.
	 *
	 * @param float $cumHeurePaye The cum heure paye.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHeurePaye($cumHeurePaye) {
		$this->cumHeurePaye = $cumHeurePaye;
		return $this;
	}

	/**
	 * Set the cum heure trav.
	 *
	 * @param float $cumHeureTrav The cum heure trav.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumHeureTrav($cumHeureTrav) {
		$this->cumHeureTrav = $cumHeureTrav;
		return $this;
	}

	/**
	 * Set the cum j repos recup.
	 *
	 * @param float $cumJReposRecup The cum j repos recup.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumJReposRecup($cumJReposRecup) {
		$this->cumJReposRecup = $cumJReposRecup;
		return $this;
	}

	/**
	 * Set the cum jour paye.
	 *
	 * @param float $cumJourPaye The cum jour paye.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumJourPaye($cumJourPaye) {
		$this->cumJourPaye = $cumJourPaye;
		return $this;
	}

	/**
	 * Set the cum jour trav.
	 *
	 * @param float $cumJourTrav The cum jour trav.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumJourTrav($cumJourTrav) {
		$this->cumJourTrav = $cumJourTrav;
		return $this;
	}

	/**
	 * Set the cum mt cp pris.
	 *
	 * @param float $cumMtCpPris The cum mt cp pris.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumMtCpPris($cumMtCpPris) {
		$this->cumMtCpPris = $cumMtCpPris;
		return $this;
	}

	/**
	 * Set the cum mt cp pris_1.
	 *
	 * @param float $cumMtCpPris_1 The cum mt cp pris_1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumMtCpPris_1($cumMtCpPris_1) {
		$this->cumMtCpPris_1 = $cumMtCpPris_1;
		return $this;
	}

	/**
	 * Set the cum net a payer.
	 *
	 * @param float $cumNetAPayer The cum net a payer.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumNetAPayer($cumNetAPayer) {
		$this->cumNetAPayer = $cumNetAPayer;
		return $this;
	}

	/**
	 * Set the cum net imposable.
	 *
	 * @param float $cumNetImposable The cum net imposable.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumNetImposable($cumNetImposable) {
		$this->cumNetImposable = $cumNetImposable;
		return $this;
	}

	/**
	 * Set the cum plaf1 caisse1.
	 *
	 * @param float $cumPlaf1Caisse1 The cum plaf1 caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf1Caisse1($cumPlaf1Caisse1) {
		$this->cumPlaf1Caisse1 = $cumPlaf1Caisse1;
		return $this;
	}

	/**
	 * Set the cum plaf1 caisse2.
	 *
	 * @param float $cumPlaf1Caisse2 The cum plaf1 caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf1Caisse2($cumPlaf1Caisse2) {
		$this->cumPlaf1Caisse2 = $cumPlaf1Caisse2;
		return $this;
	}

	/**
	 * Set the cum plaf1 caisse3.
	 *
	 * @param float $cumPlaf1Caisse3 The cum plaf1 caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf1Caisse3($cumPlaf1Caisse3) {
		$this->cumPlaf1Caisse3 = $cumPlaf1Caisse3;
		return $this;
	}

	/**
	 * Set the cum plaf2 caisse1.
	 *
	 * @param float $cumPlaf2Caisse1 The cum plaf2 caisse1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf2Caisse1($cumPlaf2Caisse1) {
		$this->cumPlaf2Caisse1 = $cumPlaf2Caisse1;
		return $this;
	}

	/**
	 * Set the cum plaf2 caisse2.
	 *
	 * @param float $cumPlaf2Caisse2 The cum plaf2 caisse2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf2Caisse2($cumPlaf2Caisse2) {
		$this->cumPlaf2Caisse2 = $cumPlaf2Caisse2;
		return $this;
	}

	/**
	 * Set the cum plaf2 caisse3.
	 *
	 * @param float $cumPlaf2Caisse3 The cum plaf2 caisse3.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlaf2Caisse3($cumPlaf2Caisse3) {
		$this->cumPlaf2Caisse3 = $cumPlaf2Caisse3;
		return $this;
	}

	/**
	 * Set the cum plafond g m p.
	 *
	 * @param float $cumPlafondGMP The cum plafond g m p.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlafondGMP($cumPlafondGMP) {
		$this->cumPlafondGMP = $cumPlafondGMP;
		return $this;
	}

	/**
	 * Set the cum plafond s s1.
	 *
	 * @param float $cumPlafondSS1 The cum plafond s s1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlafondSS1($cumPlafondSS1) {
		$this->cumPlafondSS1 = $cumPlafondSS1;
		return $this;
	}

	/**
	 * Set the cum plafond s s2.
	 *
	 * @param float $cumPlafondSS2 The cum plafond s s2.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumPlafondSS2($cumPlafondSS2) {
		$this->cumPlafondSS2 = $cumPlafondSS2;
		return $this;
	}

	/**
	 * Set the cum prov cp.
	 *
	 * @param float $cumProvCp The cum prov cp.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumProvCp($cumProvCp) {
		$this->cumProvCp = $cumProvCp;
		return $this;
	}

	/**
	 * Set the cum prov cp_1.
	 *
	 * @param float $cumProvCp_1 The cum prov cp_1.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumProvCp_1($cumProvCp_1) {
		$this->cumProvCp_1 = $cumProvCp_1;
		return $this;
	}

	/**
	 * Set the cum repos comp.
	 *
	 * @param float $cumReposComp The cum repos comp.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumReposComp($cumReposComp) {
		$this->cumReposComp = $cumReposComp;
		return $this;
	}

	/**
	 * Set the cum rtt dus.
	 *
	 * @param float $cumRttDus The cum rtt dus.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumRttDus($cumRttDus) {
		$this->cumRttDus = $cumRttDus;
		return $this;
	}

	/**
	 * Set the cum rtt pris.
	 *
	 * @param float $cumRttPris The cum rtt pris.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumRttPris($cumRttPris) {
		$this->cumRttPris = $cumRttPris;
		return $this;
	}

	/**
	 * Set the cum tot s i.
	 *
	 * @param float $cumTotSI The cum tot s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTotSI($cumTotSI) {
		$this->cumTotSI = $cumTotSI;
		return $this;
	}

	/**
	 * Set the cum tranche2 s i.
	 *
	 * @param float $cumTranche2SI The cum tranche2 s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTranche2SI($cumTranche2SI) {
		$this->cumTranche2SI = $cumTranche2SI;
		return $this;
	}

	/**
	 * Set the cum tranche2 sans s i.
	 *
	 * @param float $cumTranche2SansSI The cum tranche2 sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTranche2SansSI($cumTranche2SansSI) {
		$this->cumTranche2SansSI = $cumTranche2SansSI;
		return $this;
	}

	/**
	 * Set the cum tranche a s i.
	 *
	 * @param float $cumTrancheASI The cum tranche a s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheASI($cumTrancheASI) {
		$this->cumTrancheASI = $cumTrancheASI;
		return $this;
	}

	/**
	 * Set the cum tranche a sans s i.
	 *
	 * @param float $cumTrancheASansSI The cum tranche a sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheASansSI($cumTrancheASansSI) {
		$this->cumTrancheASansSI = $cumTrancheASansSI;
		return $this;
	}

	/**
	 * Set the cum tranche b s i.
	 *
	 * @param float $cumTrancheBSI The cum tranche b s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheBSI($cumTrancheBSI) {
		$this->cumTrancheBSI = $cumTrancheBSI;
		return $this;
	}

	/**
	 * Set the cum tranche b sans s i.
	 *
	 * @param float $cumTrancheBSansSI The cum tranche b sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheBSansSI($cumTrancheBSansSI) {
		$this->cumTrancheBSansSI = $cumTrancheBSansSI;
		return $this;
	}

	/**
	 * Set the cum tranche c s i.
	 *
	 * @param float $cumTrancheCSI The cum tranche c s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheCSI($cumTrancheCSI) {
		$this->cumTrancheCSI = $cumTrancheCSI;
		return $this;
	}

	/**
	 * Set the cum tranche c sans s i.
	 *
	 * @param float $cumTrancheCSansSI The cum tranche c sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheCSansSI($cumTrancheCSansSI) {
		$this->cumTrancheCSansSI = $cumTrancheCSansSI;
		return $this;
	}

	/**
	 * Set the cum tranche d1 sans s i.
	 *
	 * @param float $cumTrancheD1SansSI The cum tranche d1 sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheD1SansSI($cumTrancheD1SansSI) {
		$this->cumTrancheD1SansSI = $cumTrancheD1SansSI;
		return $this;
	}

	/**
	 * Set the cum tranche d sans s i.
	 *
	 * @param float $cumTrancheDSansSI The cum tranche d sans s i.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setCumTrancheDSansSI($cumTrancheDSansSI) {
		$this->cumTrancheDSansSI = $cumTrancheDSansSI;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return CumulsAnneePrec Returns this cumuls annee prec.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

}
