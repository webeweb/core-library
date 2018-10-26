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

use DateTime;

/**
 * Emp t d s calcul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpTDSCalcul {

	/**
	 * Base calc t d s142.
	 *
	 * @var float
	 */
	private $baseCalcTDS142;

	/**
	 * Code a t per.
	 *
	 * @var int
	 */
	private $codeATPer;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Cum net impos.
	 *
	 * @var float
	 */
	private $cumNetImpos;

	/**
	 * Debut periode decl.
	 *
	 * @var DateTime
	 */
	private $debutPeriodeDecl;

	/**
	 * Derniere periode annee.
	 *
	 * @var boolean
	 */
	private $dernierePeriodeAnnee;

	/**
	 * Fin periode decl.
	 *
	 * @var DateTime
	 */
	private $finPeriodeDecl;

	/**
	 * Indemn impat.
	 *
	 * @var float
	 */
	private $indemnImpat;

	/**
	 * Montant h sup compl exo.
	 *
	 * @var float
	 */
	private $montantHSupComplExo;

	/**
	 * Nb heure sal.
	 *
	 * @var float
	 */
	private $nbHeureSal;

	/**
	 * Nb heure trav.
	 *
	 * @var float
	 */
	private $nbHeureTrav;

	/**
	 * Nb per paie.
	 *
	 * @var int
	 */
	private $nbPerPaie;

	/**
	 * Numero.
	 *
	 * @var string
	 */
	private $numero;

	/**
	 * Numero ordre.
	 *
	 * @var int
	 */
	private $numeroOrdre;

	/**
	 * Particip serv pers.
	 *
	 * @var float
	 */
	private $participServPers;

	/**
	 * Premiere periode annee.
	 *
	 * @var boolean
	 */
	private $premierePeriodeAnnee;

	/**
	 * T d s100.
	 *
	 * @var float
	 */
	private $tDS100;

	/**
	 * T d s102.
	 *
	 * @var float
	 */
	private $tDS102;

	/**
	 * T d s103.
	 *
	 * @var float
	 */
	private $tDS103;

	/**
	 * T d s105.
	 *
	 * @var float
	 */
	private $tDS105;

	/**
	 * T d s107.
	 *
	 * @var boolean
	 */
	private $tDS107;

	/**
	 * T d s108.
	 *
	 * @var boolean
	 */
	private $tDS108;

	/**
	 * T d s109.
	 *
	 * @var boolean
	 */
	private $tDS109;

	/**
	 * T d s110.
	 *
	 * @var boolean
	 */
	private $tDS110;

	/**
	 * T d s111.
	 *
	 * @var boolean
	 */
	private $tDS111;

	/**
	 * T d s112.
	 *
	 * @var float
	 */
	private $tDS112;

	/**
	 * T d s113.
	 *
	 * @var boolean
	 */
	private $tDS113;

	/**
	 * T d s117.
	 *
	 * @var float
	 */
	private $tDS117;

	/**
	 * T d s119.
	 *
	 * @var boolean
	 */
	private $tDS119;

	/**
	 * T d s120.
	 *
	 * @var boolean
	 */
	private $tDS120;

	/**
	 * T d s121.
	 *
	 * @var boolean
	 */
	private $tDS121;

	/**
	 * T d s122.
	 *
	 * @var boolean
	 */
	private $tDS122;

	/**
	 * T d s125.
	 *
	 * @var float
	 */
	private $tDS125;

	/**
	 * T d s127.
	 *
	 * @var float
	 */
	private $tDS127;

	/**
	 * T d s128.
	 *
	 * @var string
	 */
	private $tDS128;

	/**
	 * T d s132.
	 *
	 * @var float
	 */
	private $tDS132;

	/**
	 * T d s133.
	 *
	 * @var string
	 */
	private $tDS133;

	/**
	 * T d s134.
	 *
	 * @var float
	 */
	private $tDS134;

	/**
	 * T d s135.
	 *
	 * @var float
	 */
	private $tDS135;

	/**
	 * T d s136.
	 *
	 * @var float
	 */
	private $tDS136;

	/**
	 * T d s137.
	 *
	 * @var float
	 */
	private $tDS137;

	/**
	 * T d s139.
	 *
	 * @var string
	 */
	private $tDS139;

	/**
	 * T d s141.
	 *
	 * @var float
	 */
	private $tDS141;

	/**
	 * T d s75.
	 *
	 * @var int
	 */
	private $tDS75;

	/**
	 * T d s77.
	 *
	 * @var string
	 */
	private $tDS77;

	/**
	 * T d s78.
	 *
	 * @var boolean
	 */
	private $tDS78;

	/**
	 * T d s81.
	 *
	 * @var float
	 */
	private $tDS81;

	/**
	 * T d s82.
	 *
	 * @var float
	 */
	private $tDS82;

	/**
	 * T d s84.
	 *
	 * @var float
	 */
	private $tDS84;

	/**
	 * T d s85.
	 *
	 * @var float
	 */
	private $tDS85;

	/**
	 * T d s86.
	 *
	 * @var float
	 */
	private $tDS86;

	/**
	 * T d s87.
	 *
	 * @var float
	 */
	private $tDS87;

	/**
	 * T d s88.
	 *
	 * @var float
	 */
	private $tDS88;

	/**
	 * T d s89.
	 *
	 * @var float
	 */
	private $tDS89;

	/**
	 * T d s90.
	 *
	 * @var float
	 */
	private $tDS90;

	/**
	 * T d s91.
	 *
	 * @var float
	 */
	private $tDS91;

	/**
	 * T d s92.
	 *
	 * @var float
	 */
	private $tDS92;

	/**
	 * T d s93.
	 *
	 * @var float
	 */
	private $tDS93;

	/**
	 * T d s94.
	 *
	 * @var float
	 */
	private $tDS94;

	/**
	 * T d s95.
	 *
	 * @var float
	 */
	private $tDS95;

	/**
	 * T d s sup120.
	 *
	 * @var string
	 */
	private $tDSSup120;

	/**
	 * T d s sup1200.
	 *
	 * @var string
	 */
	private $tDSSup1200;

	/**
	 * Tds142.
	 *
	 * @var float
	 */
	private $tds142;

	/**
	 * Tds142 deja calcule.
	 *
	 * @var boolean
	 */
	private $tds142DejaCalcule;

	/**
	 * Tds abatt frais pro.
	 *
	 * @var float
	 */
	private $tdsAbattFraisPro;

	/**
	 * Tds alloc chom.
	 *
	 * @var float
	 */
	private $tdsAllocChom;

	/**
	 * Tds alloc compl ijss.
	 *
	 * @var float
	 */
	private $tdsAllocComplIjss;

	/**
	 * Tds alloc retraite.
	 *
	 * @var float
	 */
	private $tdsAllocRetraite;

	/**
	 * Tds contrib c e cheques vac.
	 *
	 * @var float
	 */
	private $tdsContribCEChequesVac;

	/**
	 * Tds cumul n.
	 *
	 * @var float
	 */
	private $tdsCumulN;

	/**
	 * Tds flag raz.
	 *
	 * @var int
	 */
	private $tdsFlagRaz;

	/**
	 * Tds indemn depart retraite.
	 *
	 * @var float
	 */
	private $tdsIndemnDepartRetraite;

	/**
	 * Tds indemn imposables.
	 *
	 * @var float
	 */
	private $tdsIndemnImposables;

	/**
	 * Tds remb frais pro.
	 *
	 * @var float
	 */
	private $tdsRembFraisPro;

	/**
	 * Tds somme exo taxe sal.
	 *
	 * @var float
	 */
	private $tdsSommeExoTaxeSal;

	/**
	 * Total plaf.
	 *
	 * @var float
	 */
	private $totalPlaf;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the base calc t d s142.
	 *
	 * @return float Returns the base calc t d s142.
	 */
	public function getBaseCalcTDS142() {
		return $this->baseCalcTDS142;
	}

	/**
	 * Get the code a t per.
	 *
	 * @return int Returns the code a t per.
	 */
	public function getCodeATPer() {
		return $this->codeATPer;
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
	 * Get the cum net impos.
	 *
	 * @return float Returns the cum net impos.
	 */
	public function getCumNetImpos() {
		return $this->cumNetImpos;
	}

	/**
	 * Get the debut periode decl.
	 *
	 * @return DateTime Returns the debut periode decl.
	 */
	public function getDebutPeriodeDecl() {
		return $this->debutPeriodeDecl;
	}

	/**
	 * Get the derniere periode annee.
	 *
	 * @return boolean Returns the derniere periode annee.
	 */
	public function getDernierePeriodeAnnee() {
		return $this->dernierePeriodeAnnee;
	}

	/**
	 * Get the fin periode decl.
	 *
	 * @return DateTime Returns the fin periode decl.
	 */
	public function getFinPeriodeDecl() {
		return $this->finPeriodeDecl;
	}

	/**
	 * Get the indemn impat.
	 *
	 * @return float Returns the indemn impat.
	 */
	public function getIndemnImpat() {
		return $this->indemnImpat;
	}

	/**
	 * Get the montant h sup compl exo.
	 *
	 * @return float Returns the montant h sup compl exo.
	 */
	public function getMontantHSupComplExo() {
		return $this->montantHSupComplExo;
	}

	/**
	 * Get the nb heure sal.
	 *
	 * @return float Returns the nb heure sal.
	 */
	public function getNbHeureSal() {
		return $this->nbHeureSal;
	}

	/**
	 * Get the nb heure trav.
	 *
	 * @return float Returns the nb heure trav.
	 */
	public function getNbHeureTrav() {
		return $this->nbHeureTrav;
	}

	/**
	 * Get the nb per paie.
	 *
	 * @return int Returns the nb per paie.
	 */
	public function getNbPerPaie() {
		return $this->nbPerPaie;
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
	 * Get the numero ordre.
	 *
	 * @return int Returns the numero ordre.
	 */
	public function getNumeroOrdre() {
		return $this->numeroOrdre;
	}

	/**
	 * Get the particip serv pers.
	 *
	 * @return float Returns the particip serv pers.
	 */
	public function getParticipServPers() {
		return $this->participServPers;
	}

	/**
	 * Get the premiere periode annee.
	 *
	 * @return boolean Returns the premiere periode annee.
	 */
	public function getPremierePeriodeAnnee() {
		return $this->premierePeriodeAnnee;
	}

	/**
	 * Get the t d s100.
	 *
	 * @return float Returns the t d s100.
	 */
	public function getTDS100() {
		return $this->tDS100;
	}

	/**
	 * Get the t d s102.
	 *
	 * @return float Returns the t d s102.
	 */
	public function getTDS102() {
		return $this->tDS102;
	}

	/**
	 * Get the t d s103.
	 *
	 * @return float Returns the t d s103.
	 */
	public function getTDS103() {
		return $this->tDS103;
	}

	/**
	 * Get the t d s105.
	 *
	 * @return float Returns the t d s105.
	 */
	public function getTDS105() {
		return $this->tDS105;
	}

	/**
	 * Get the t d s107.
	 *
	 * @return boolean Returns the t d s107.
	 */
	public function getTDS107() {
		return $this->tDS107;
	}

	/**
	 * Get the t d s108.
	 *
	 * @return boolean Returns the t d s108.
	 */
	public function getTDS108() {
		return $this->tDS108;
	}

	/**
	 * Get the t d s109.
	 *
	 * @return boolean Returns the t d s109.
	 */
	public function getTDS109() {
		return $this->tDS109;
	}

	/**
	 * Get the t d s110.
	 *
	 * @return boolean Returns the t d s110.
	 */
	public function getTDS110() {
		return $this->tDS110;
	}

	/**
	 * Get the t d s111.
	 *
	 * @return boolean Returns the t d s111.
	 */
	public function getTDS111() {
		return $this->tDS111;
	}

	/**
	 * Get the t d s112.
	 *
	 * @return float Returns the t d s112.
	 */
	public function getTDS112() {
		return $this->tDS112;
	}

	/**
	 * Get the t d s113.
	 *
	 * @return boolean Returns the t d s113.
	 */
	public function getTDS113() {
		return $this->tDS113;
	}

	/**
	 * Get the t d s117.
	 *
	 * @return float Returns the t d s117.
	 */
	public function getTDS117() {
		return $this->tDS117;
	}

	/**
	 * Get the t d s119.
	 *
	 * @return boolean Returns the t d s119.
	 */
	public function getTDS119() {
		return $this->tDS119;
	}

	/**
	 * Get the t d s120.
	 *
	 * @return boolean Returns the t d s120.
	 */
	public function getTDS120() {
		return $this->tDS120;
	}

	/**
	 * Get the t d s121.
	 *
	 * @return boolean Returns the t d s121.
	 */
	public function getTDS121() {
		return $this->tDS121;
	}

	/**
	 * Get the t d s122.
	 *
	 * @return boolean Returns the t d s122.
	 */
	public function getTDS122() {
		return $this->tDS122;
	}

	/**
	 * Get the t d s125.
	 *
	 * @return float Returns the t d s125.
	 */
	public function getTDS125() {
		return $this->tDS125;
	}

	/**
	 * Get the t d s127.
	 *
	 * @return float Returns the t d s127.
	 */
	public function getTDS127() {
		return $this->tDS127;
	}

	/**
	 * Get the t d s128.
	 *
	 * @return string Returns the t d s128.
	 */
	public function getTDS128() {
		return $this->tDS128;
	}

	/**
	 * Get the t d s132.
	 *
	 * @return float Returns the t d s132.
	 */
	public function getTDS132() {
		return $this->tDS132;
	}

	/**
	 * Get the t d s133.
	 *
	 * @return string Returns the t d s133.
	 */
	public function getTDS133() {
		return $this->tDS133;
	}

	/**
	 * Get the t d s134.
	 *
	 * @return float Returns the t d s134.
	 */
	public function getTDS134() {
		return $this->tDS134;
	}

	/**
	 * Get the t d s135.
	 *
	 * @return float Returns the t d s135.
	 */
	public function getTDS135() {
		return $this->tDS135;
	}

	/**
	 * Get the t d s136.
	 *
	 * @return float Returns the t d s136.
	 */
	public function getTDS136() {
		return $this->tDS136;
	}

	/**
	 * Get the t d s137.
	 *
	 * @return float Returns the t d s137.
	 */
	public function getTDS137() {
		return $this->tDS137;
	}

	/**
	 * Get the t d s139.
	 *
	 * @return string Returns the t d s139.
	 */
	public function getTDS139() {
		return $this->tDS139;
	}

	/**
	 * Get the t d s141.
	 *
	 * @return float Returns the t d s141.
	 */
	public function getTDS141() {
		return $this->tDS141;
	}

	/**
	 * Get the t d s75.
	 *
	 * @return int Returns the t d s75.
	 */
	public function getTDS75() {
		return $this->tDS75;
	}

	/**
	 * Get the t d s77.
	 *
	 * @return string Returns the t d s77.
	 */
	public function getTDS77() {
		return $this->tDS77;
	}

	/**
	 * Get the t d s78.
	 *
	 * @return boolean Returns the t d s78.
	 */
	public function getTDS78() {
		return $this->tDS78;
	}

	/**
	 * Get the t d s81.
	 *
	 * @return float Returns the t d s81.
	 */
	public function getTDS81() {
		return $this->tDS81;
	}

	/**
	 * Get the t d s82.
	 *
	 * @return float Returns the t d s82.
	 */
	public function getTDS82() {
		return $this->tDS82;
	}

	/**
	 * Get the t d s84.
	 *
	 * @return float Returns the t d s84.
	 */
	public function getTDS84() {
		return $this->tDS84;
	}

	/**
	 * Get the t d s85.
	 *
	 * @return float Returns the t d s85.
	 */
	public function getTDS85() {
		return $this->tDS85;
	}

	/**
	 * Get the t d s86.
	 *
	 * @return float Returns the t d s86.
	 */
	public function getTDS86() {
		return $this->tDS86;
	}

	/**
	 * Get the t d s87.
	 *
	 * @return float Returns the t d s87.
	 */
	public function getTDS87() {
		return $this->tDS87;
	}

	/**
	 * Get the t d s88.
	 *
	 * @return float Returns the t d s88.
	 */
	public function getTDS88() {
		return $this->tDS88;
	}

	/**
	 * Get the t d s89.
	 *
	 * @return float Returns the t d s89.
	 */
	public function getTDS89() {
		return $this->tDS89;
	}

	/**
	 * Get the t d s90.
	 *
	 * @return float Returns the t d s90.
	 */
	public function getTDS90() {
		return $this->tDS90;
	}

	/**
	 * Get the t d s91.
	 *
	 * @return float Returns the t d s91.
	 */
	public function getTDS91() {
		return $this->tDS91;
	}

	/**
	 * Get the t d s92.
	 *
	 * @return float Returns the t d s92.
	 */
	public function getTDS92() {
		return $this->tDS92;
	}

	/**
	 * Get the t d s93.
	 *
	 * @return float Returns the t d s93.
	 */
	public function getTDS93() {
		return $this->tDS93;
	}

	/**
	 * Get the t d s94.
	 *
	 * @return float Returns the t d s94.
	 */
	public function getTDS94() {
		return $this->tDS94;
	}

	/**
	 * Get the t d s95.
	 *
	 * @return float Returns the t d s95.
	 */
	public function getTDS95() {
		return $this->tDS95;
	}

	/**
	 * Get the t d s sup120.
	 *
	 * @return string Returns the t d s sup120.
	 */
	public function getTDSSup120() {
		return $this->tDSSup120;
	}

	/**
	 * Get the t d s sup1200.
	 *
	 * @return string Returns the t d s sup1200.
	 */
	public function getTDSSup1200() {
		return $this->tDSSup1200;
	}

	/**
	 * Get the tds142.
	 *
	 * @return float Returns the tds142.
	 */
	public function getTds142() {
		return $this->tds142;
	}

	/**
	 * Get the tds142 deja calcule.
	 *
	 * @return boolean Returns the tds142 deja calcule.
	 */
	public function getTds142DejaCalcule() {
		return $this->tds142DejaCalcule;
	}

	/**
	 * Get the tds abatt frais pro.
	 *
	 * @return float Returns the tds abatt frais pro.
	 */
	public function getTdsAbattFraisPro() {
		return $this->tdsAbattFraisPro;
	}

	/**
	 * Get the tds alloc chom.
	 *
	 * @return float Returns the tds alloc chom.
	 */
	public function getTdsAllocChom() {
		return $this->tdsAllocChom;
	}

	/**
	 * Get the tds alloc compl ijss.
	 *
	 * @return float Returns the tds alloc compl ijss.
	 */
	public function getTdsAllocComplIjss() {
		return $this->tdsAllocComplIjss;
	}

	/**
	 * Get the tds alloc retraite.
	 *
	 * @return float Returns the tds alloc retraite.
	 */
	public function getTdsAllocRetraite() {
		return $this->tdsAllocRetraite;
	}

	/**
	 * Get the tds contrib c e cheques vac.
	 *
	 * @return float Returns the tds contrib c e cheques vac.
	 */
	public function getTdsContribCEChequesVac() {
		return $this->tdsContribCEChequesVac;
	}

	/**
	 * Get the tds cumul n.
	 *
	 * @return float Returns the tds cumul n.
	 */
	public function getTdsCumulN() {
		return $this->tdsCumulN;
	}

	/**
	 * Get the tds flag raz.
	 *
	 * @return int Returns the tds flag raz.
	 */
	public function getTdsFlagRaz() {
		return $this->tdsFlagRaz;
	}

	/**
	 * Get the tds indemn depart retraite.
	 *
	 * @return float Returns the tds indemn depart retraite.
	 */
	public function getTdsIndemnDepartRetraite() {
		return $this->tdsIndemnDepartRetraite;
	}

	/**
	 * Get the tds indemn imposables.
	 *
	 * @return float Returns the tds indemn imposables.
	 */
	public function getTdsIndemnImposables() {
		return $this->tdsIndemnImposables;
	}

	/**
	 * Get the tds remb frais pro.
	 *
	 * @return float Returns the tds remb frais pro.
	 */
	public function getTdsRembFraisPro() {
		return $this->tdsRembFraisPro;
	}

	/**
	 * Get the tds somme exo taxe sal.
	 *
	 * @return float Returns the tds somme exo taxe sal.
	 */
	public function getTdsSommeExoTaxeSal() {
		return $this->tdsSommeExoTaxeSal;
	}

	/**
	 * Get the total plaf.
	 *
	 * @return float Returns the total plaf.
	 */
	public function getTotalPlaf() {
		return $this->totalPlaf;
	}

	/**
	 * Set the base calc t d s142.
	 *
	 * @param float $baseCalcTDS142 The base calc t d s142.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setBaseCalcTDS142($baseCalcTDS142) {
		$this->baseCalcTDS142 = $baseCalcTDS142;
		return $this;
	}

	/**
	 * Set the code a t per.
	 *
	 * @param int $codeATPer The code a t per.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setCodeATPer($codeATPer) {
		$this->codeATPer = $codeATPer;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the cum net impos.
	 *
	 * @param float $cumNetImpos The cum net impos.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setCumNetImpos($cumNetImpos) {
		$this->cumNetImpos = $cumNetImpos;
		return $this;
	}

	/**
	 * Set the debut periode decl.
	 *
	 * @param DateTime $debutPeriodeDecl The debut periode decl.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setDebutPeriodeDecl(DateTime $debutPeriodeDecl = null) {
		$this->debutPeriodeDecl = $debutPeriodeDecl;
		return $this;
	}

	/**
	 * Set the derniere periode annee.
	 *
	 * @param boolean $dernierePeriodeAnnee The derniere periode annee.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setDernierePeriodeAnnee($dernierePeriodeAnnee) {
		$this->dernierePeriodeAnnee = $dernierePeriodeAnnee;
		return $this;
	}

	/**
	 * Set the fin periode decl.
	 *
	 * @param DateTime $finPeriodeDecl The fin periode decl.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setFinPeriodeDecl(DateTime $finPeriodeDecl = null) {
		$this->finPeriodeDecl = $finPeriodeDecl;
		return $this;
	}

	/**
	 * Set the indemn impat.
	 *
	 * @param float $indemnImpat The indemn impat.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setIndemnImpat($indemnImpat) {
		$this->indemnImpat = $indemnImpat;
		return $this;
	}

	/**
	 * Set the montant h sup compl exo.
	 *
	 * @param float $montantHSupComplExo The montant h sup compl exo.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setMontantHSupComplExo($montantHSupComplExo) {
		$this->montantHSupComplExo = $montantHSupComplExo;
		return $this;
	}

	/**
	 * Set the nb heure sal.
	 *
	 * @param float $nbHeureSal The nb heure sal.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setNbHeureSal($nbHeureSal) {
		$this->nbHeureSal = $nbHeureSal;
		return $this;
	}

	/**
	 * Set the nb heure trav.
	 *
	 * @param float $nbHeureTrav The nb heure trav.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setNbHeureTrav($nbHeureTrav) {
		$this->nbHeureTrav = $nbHeureTrav;
		return $this;
	}

	/**
	 * Set the nb per paie.
	 *
	 * @param int $nbPerPaie The nb per paie.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setNbPerPaie($nbPerPaie) {
		$this->nbPerPaie = $nbPerPaie;
		return $this;
	}

	/**
	 * Set the numero.
	 *
	 * @param string $numero The numero.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * Set the numero ordre.
	 *
	 * @param int $numeroOrdre The numero ordre.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setNumeroOrdre($numeroOrdre) {
		$this->numeroOrdre = $numeroOrdre;
		return $this;
	}

	/**
	 * Set the particip serv pers.
	 *
	 * @param float $participServPers The particip serv pers.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setParticipServPers($participServPers) {
		$this->participServPers = $participServPers;
		return $this;
	}

	/**
	 * Set the premiere periode annee.
	 *
	 * @param boolean $premierePeriodeAnnee The premiere periode annee.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setPremierePeriodeAnnee($premierePeriodeAnnee) {
		$this->premierePeriodeAnnee = $premierePeriodeAnnee;
		return $this;
	}

	/**
	 * Set the t d s100.
	 *
	 * @param float $tDS100 The t d s100.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS100($tDS100) {
		$this->tDS100 = $tDS100;
		return $this;
	}

	/**
	 * Set the t d s102.
	 *
	 * @param float $tDS102 The t d s102.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS102($tDS102) {
		$this->tDS102 = $tDS102;
		return $this;
	}

	/**
	 * Set the t d s103.
	 *
	 * @param float $tDS103 The t d s103.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS103($tDS103) {
		$this->tDS103 = $tDS103;
		return $this;
	}

	/**
	 * Set the t d s105.
	 *
	 * @param float $tDS105 The t d s105.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS105($tDS105) {
		$this->tDS105 = $tDS105;
		return $this;
	}

	/**
	 * Set the t d s107.
	 *
	 * @param boolean $tDS107 The t d s107.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS107($tDS107) {
		$this->tDS107 = $tDS107;
		return $this;
	}

	/**
	 * Set the t d s108.
	 *
	 * @param boolean $tDS108 The t d s108.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS108($tDS108) {
		$this->tDS108 = $tDS108;
		return $this;
	}

	/**
	 * Set the t d s109.
	 *
	 * @param boolean $tDS109 The t d s109.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS109($tDS109) {
		$this->tDS109 = $tDS109;
		return $this;
	}

	/**
	 * Set the t d s110.
	 *
	 * @param boolean $tDS110 The t d s110.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS110($tDS110) {
		$this->tDS110 = $tDS110;
		return $this;
	}

	/**
	 * Set the t d s111.
	 *
	 * @param boolean $tDS111 The t d s111.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS111($tDS111) {
		$this->tDS111 = $tDS111;
		return $this;
	}

	/**
	 * Set the t d s112.
	 *
	 * @param float $tDS112 The t d s112.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS112($tDS112) {
		$this->tDS112 = $tDS112;
		return $this;
	}

	/**
	 * Set the t d s113.
	 *
	 * @param boolean $tDS113 The t d s113.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS113($tDS113) {
		$this->tDS113 = $tDS113;
		return $this;
	}

	/**
	 * Set the t d s117.
	 *
	 * @param float $tDS117 The t d s117.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS117($tDS117) {
		$this->tDS117 = $tDS117;
		return $this;
	}

	/**
	 * Set the t d s119.
	 *
	 * @param boolean $tDS119 The t d s119.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS119($tDS119) {
		$this->tDS119 = $tDS119;
		return $this;
	}

	/**
	 * Set the t d s120.
	 *
	 * @param boolean $tDS120 The t d s120.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS120($tDS120) {
		$this->tDS120 = $tDS120;
		return $this;
	}

	/**
	 * Set the t d s121.
	 *
	 * @param boolean $tDS121 The t d s121.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS121($tDS121) {
		$this->tDS121 = $tDS121;
		return $this;
	}

	/**
	 * Set the t d s122.
	 *
	 * @param boolean $tDS122 The t d s122.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS122($tDS122) {
		$this->tDS122 = $tDS122;
		return $this;
	}

	/**
	 * Set the t d s125.
	 *
	 * @param float $tDS125 The t d s125.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS125($tDS125) {
		$this->tDS125 = $tDS125;
		return $this;
	}

	/**
	 * Set the t d s127.
	 *
	 * @param float $tDS127 The t d s127.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS127($tDS127) {
		$this->tDS127 = $tDS127;
		return $this;
	}

	/**
	 * Set the t d s128.
	 *
	 * @param string $tDS128 The t d s128.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS128($tDS128) {
		$this->tDS128 = $tDS128;
		return $this;
	}

	/**
	 * Set the t d s132.
	 *
	 * @param float $tDS132 The t d s132.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS132($tDS132) {
		$this->tDS132 = $tDS132;
		return $this;
	}

	/**
	 * Set the t d s133.
	 *
	 * @param string $tDS133 The t d s133.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS133($tDS133) {
		$this->tDS133 = $tDS133;
		return $this;
	}

	/**
	 * Set the t d s134.
	 *
	 * @param float $tDS134 The t d s134.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS134($tDS134) {
		$this->tDS134 = $tDS134;
		return $this;
	}

	/**
	 * Set the t d s135.
	 *
	 * @param float $tDS135 The t d s135.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS135($tDS135) {
		$this->tDS135 = $tDS135;
		return $this;
	}

	/**
	 * Set the t d s136.
	 *
	 * @param float $tDS136 The t d s136.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS136($tDS136) {
		$this->tDS136 = $tDS136;
		return $this;
	}

	/**
	 * Set the t d s137.
	 *
	 * @param float $tDS137 The t d s137.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS137($tDS137) {
		$this->tDS137 = $tDS137;
		return $this;
	}

	/**
	 * Set the t d s139.
	 *
	 * @param string $tDS139 The t d s139.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS139($tDS139) {
		$this->tDS139 = $tDS139;
		return $this;
	}

	/**
	 * Set the t d s141.
	 *
	 * @param float $tDS141 The t d s141.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS141($tDS141) {
		$this->tDS141 = $tDS141;
		return $this;
	}

	/**
	 * Set the t d s75.
	 *
	 * @param int $tDS75 The t d s75.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS75($tDS75) {
		$this->tDS75 = $tDS75;
		return $this;
	}

	/**
	 * Set the t d s77.
	 *
	 * @param string $tDS77 The t d s77.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS77($tDS77) {
		$this->tDS77 = $tDS77;
		return $this;
	}

	/**
	 * Set the t d s78.
	 *
	 * @param boolean $tDS78 The t d s78.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS78($tDS78) {
		$this->tDS78 = $tDS78;
		return $this;
	}

	/**
	 * Set the t d s81.
	 *
	 * @param float $tDS81 The t d s81.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS81($tDS81) {
		$this->tDS81 = $tDS81;
		return $this;
	}

	/**
	 * Set the t d s82.
	 *
	 * @param float $tDS82 The t d s82.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS82($tDS82) {
		$this->tDS82 = $tDS82;
		return $this;
	}

	/**
	 * Set the t d s84.
	 *
	 * @param float $tDS84 The t d s84.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS84($tDS84) {
		$this->tDS84 = $tDS84;
		return $this;
	}

	/**
	 * Set the t d s85.
	 *
	 * @param float $tDS85 The t d s85.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS85($tDS85) {
		$this->tDS85 = $tDS85;
		return $this;
	}

	/**
	 * Set the t d s86.
	 *
	 * @param float $tDS86 The t d s86.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS86($tDS86) {
		$this->tDS86 = $tDS86;
		return $this;
	}

	/**
	 * Set the t d s87.
	 *
	 * @param float $tDS87 The t d s87.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS87($tDS87) {
		$this->tDS87 = $tDS87;
		return $this;
	}

	/**
	 * Set the t d s88.
	 *
	 * @param float $tDS88 The t d s88.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS88($tDS88) {
		$this->tDS88 = $tDS88;
		return $this;
	}

	/**
	 * Set the t d s89.
	 *
	 * @param float $tDS89 The t d s89.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS89($tDS89) {
		$this->tDS89 = $tDS89;
		return $this;
	}

	/**
	 * Set the t d s90.
	 *
	 * @param float $tDS90 The t d s90.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS90($tDS90) {
		$this->tDS90 = $tDS90;
		return $this;
	}

	/**
	 * Set the t d s91.
	 *
	 * @param float $tDS91 The t d s91.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS91($tDS91) {
		$this->tDS91 = $tDS91;
		return $this;
	}

	/**
	 * Set the t d s92.
	 *
	 * @param float $tDS92 The t d s92.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS92($tDS92) {
		$this->tDS92 = $tDS92;
		return $this;
	}

	/**
	 * Set the t d s93.
	 *
	 * @param float $tDS93 The t d s93.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS93($tDS93) {
		$this->tDS93 = $tDS93;
		return $this;
	}

	/**
	 * Set the t d s94.
	 *
	 * @param float $tDS94 The t d s94.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS94($tDS94) {
		$this->tDS94 = $tDS94;
		return $this;
	}

	/**
	 * Set the t d s95.
	 *
	 * @param float $tDS95 The t d s95.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDS95($tDS95) {
		$this->tDS95 = $tDS95;
		return $this;
	}

	/**
	 * Set the t d s sup120.
	 *
	 * @param string $tDSSup120 The t d s sup120.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDSSup120($tDSSup120) {
		$this->tDSSup120 = $tDSSup120;
		return $this;
	}

	/**
	 * Set the t d s sup1200.
	 *
	 * @param string $tDSSup1200 The t d s sup1200.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTDSSup1200($tDSSup1200) {
		$this->tDSSup1200 = $tDSSup1200;
		return $this;
	}

	/**
	 * Set the tds142.
	 *
	 * @param float $tds142 The tds142.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTds142($tds142) {
		$this->tds142 = $tds142;
		return $this;
	}

	/**
	 * Set the tds142 deja calcule.
	 *
	 * @param boolean $tds142DejaCalcule The tds142 deja calcule.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTds142DejaCalcule($tds142DejaCalcule) {
		$this->tds142DejaCalcule = $tds142DejaCalcule;
		return $this;
	}

	/**
	 * Set the tds abatt frais pro.
	 *
	 * @param float $tdsAbattFraisPro The tds abatt frais pro.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsAbattFraisPro($tdsAbattFraisPro) {
		$this->tdsAbattFraisPro = $tdsAbattFraisPro;
		return $this;
	}

	/**
	 * Set the tds alloc chom.
	 *
	 * @param float $tdsAllocChom The tds alloc chom.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsAllocChom($tdsAllocChom) {
		$this->tdsAllocChom = $tdsAllocChom;
		return $this;
	}

	/**
	 * Set the tds alloc compl ijss.
	 *
	 * @param float $tdsAllocComplIjss The tds alloc compl ijss.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsAllocComplIjss($tdsAllocComplIjss) {
		$this->tdsAllocComplIjss = $tdsAllocComplIjss;
		return $this;
	}

	/**
	 * Set the tds alloc retraite.
	 *
	 * @param float $tdsAllocRetraite The tds alloc retraite.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsAllocRetraite($tdsAllocRetraite) {
		$this->tdsAllocRetraite = $tdsAllocRetraite;
		return $this;
	}

	/**
	 * Set the tds contrib c e cheques vac.
	 *
	 * @param float $tdsContribCEChequesVac The tds contrib c e cheques vac.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsContribCEChequesVac($tdsContribCEChequesVac) {
		$this->tdsContribCEChequesVac = $tdsContribCEChequesVac;
		return $this;
	}

	/**
	 * Set the tds cumul n.
	 *
	 * @param float $tdsCumulN The tds cumul n.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsCumulN($tdsCumulN) {
		$this->tdsCumulN = $tdsCumulN;
		return $this;
	}

	/**
	 * Set the tds flag raz.
	 *
	 * @param int $tdsFlagRaz The tds flag raz.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsFlagRaz($tdsFlagRaz) {
		$this->tdsFlagRaz = $tdsFlagRaz;
		return $this;
	}

	/**
	 * Set the tds indemn depart retraite.
	 *
	 * @param float $tdsIndemnDepartRetraite The tds indemn depart retraite.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsIndemnDepartRetraite($tdsIndemnDepartRetraite) {
		$this->tdsIndemnDepartRetraite = $tdsIndemnDepartRetraite;
		return $this;
	}

	/**
	 * Set the tds indemn imposables.
	 *
	 * @param float $tdsIndemnImposables The tds indemn imposables.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsIndemnImposables($tdsIndemnImposables) {
		$this->tdsIndemnImposables = $tdsIndemnImposables;
		return $this;
	}

	/**
	 * Set the tds remb frais pro.
	 *
	 * @param float $tdsRembFraisPro The tds remb frais pro.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsRembFraisPro($tdsRembFraisPro) {
		$this->tdsRembFraisPro = $tdsRembFraisPro;
		return $this;
	}

	/**
	 * Set the tds somme exo taxe sal.
	 *
	 * @param float $tdsSommeExoTaxeSal The tds somme exo taxe sal.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTdsSommeExoTaxeSal($tdsSommeExoTaxeSal) {
		$this->tdsSommeExoTaxeSal = $tdsSommeExoTaxeSal;
		return $this;
	}

	/**
	 * Set the total plaf.
	 *
	 * @param float $totalPlaf The total plaf.
	 * @return EmpTDSCalcul Returns this emp t d s calcul.
	 */
	public function setTotalPlaf($totalPlaf) {
		$this->totalPlaf = $totalPlaf;
		return $this;
	}

}
