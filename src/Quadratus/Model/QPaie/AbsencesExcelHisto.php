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
 * Absences excel histo model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class AbsencesExcelHisto {

	/**
	 * Date added.
	 *
	 * @var DateTime
	 */
	private $dateAdded;

	/**
	 * I d.
	 *
	 * @var string
	 */
	private $iD;

	/**
	 * Nbh sais.
	 *
	 * @var float
	 */
	private $nbhSais;

	/**
	 * Nbh sais corr.
	 *
	 * @var float
	 */
	private $nbhSaisCorr;

	/**
	 * Nbj sais.
	 *
	 * @var float
	 */
	private $nbjSais;

	/**
	 * Nbj sais corr.
	 *
	 * @var float
	 */
	private $nbjSaisCorr;

	/**
	 * Num evenement.
	 *
	 * @var int
	 */
	private $numEvenement;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Per paie.
	 *
	 * @var DateTime
	 */
	private $perPaie;

	/**
	 * Periode deb.
	 *
	 * @var DateTime
	 */
	private $periodeDeb;

	/**
	 * Periode deb corr.
	 *
	 * @var DateTime
	 */
	private $periodeDebCorr;

	/**
	 * Periode fin.
	 *
	 * @var DateTime
	 */
	private $periodeFin;

	/**
	 * Periode fin corr.
	 *
	 * @var DateTime
	 */
	private $periodeFinCorr;

	/**
	 * Transfert abs.
	 *
	 * @var boolean
	 */
	private $transfertAbs;

	/**
	 * Type abs cp.
	 *
	 * @var string
	 */
	private $typeAbsCp;

	/**
	 * Type abs cp corr.
	 *
	 * @var string
	 */
	private $typeAbsCpCorr;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the date added.
	 *
	 * @return DateTime Returns the date added.
	 */
	public function getDateAdded() {
		return $this->dateAdded;
	}

	/**
	 * Get the i d.
	 *
	 * @return string Returns the i d.
	 */
	public function getID() {
		return $this->iD;
	}

	/**
	 * Get the nbh sais.
	 *
	 * @return float Returns the nbh sais.
	 */
	public function getNbhSais() {
		return $this->nbhSais;
	}

	/**
	 * Get the nbh sais corr.
	 *
	 * @return float Returns the nbh sais corr.
	 */
	public function getNbhSaisCorr() {
		return $this->nbhSaisCorr;
	}

	/**
	 * Get the nbj sais.
	 *
	 * @return float Returns the nbj sais.
	 */
	public function getNbjSais() {
		return $this->nbjSais;
	}

	/**
	 * Get the nbj sais corr.
	 *
	 * @return float Returns the nbj sais corr.
	 */
	public function getNbjSaisCorr() {
		return $this->nbjSaisCorr;
	}

	/**
	 * Get the num evenement.
	 *
	 * @return int Returns the num evenement.
	 */
	public function getNumEvenement() {
		return $this->numEvenement;
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
	 * Get the per paie.
	 *
	 * @return DateTime Returns the per paie.
	 */
	public function getPerPaie() {
		return $this->perPaie;
	}

	/**
	 * Get the periode deb.
	 *
	 * @return DateTime Returns the periode deb.
	 */
	public function getPeriodeDeb() {
		return $this->periodeDeb;
	}

	/**
	 * Get the periode deb corr.
	 *
	 * @return DateTime Returns the periode deb corr.
	 */
	public function getPeriodeDebCorr() {
		return $this->periodeDebCorr;
	}

	/**
	 * Get the periode fin.
	 *
	 * @return DateTime Returns the periode fin.
	 */
	public function getPeriodeFin() {
		return $this->periodeFin;
	}

	/**
	 * Get the periode fin corr.
	 *
	 * @return DateTime Returns the periode fin corr.
	 */
	public function getPeriodeFinCorr() {
		return $this->periodeFinCorr;
	}

	/**
	 * Get the transfert abs.
	 *
	 * @return boolean Returns the transfert abs.
	 */
	public function getTransfertAbs() {
		return $this->transfertAbs;
	}

	/**
	 * Get the type abs cp.
	 *
	 * @return string Returns the type abs cp.
	 */
	public function getTypeAbsCp() {
		return $this->typeAbsCp;
	}

	/**
	 * Get the type abs cp corr.
	 *
	 * @return string Returns the type abs cp corr.
	 */
	public function getTypeAbsCpCorr() {
		return $this->typeAbsCpCorr;
	}

	/**
	 * Set the date added.
	 *
	 * @param DateTime $dateAdded The date added.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setDateAdded(DateTime $dateAdded = null) {
		$this->dateAdded = $dateAdded;
		return $this;
	}

	/**
	 * Set the i d.
	 *
	 * @param string $iD The i d.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setID($iD) {
		$this->iD = $iD;
		return $this;
	}

	/**
	 * Set the nbh sais.
	 *
	 * @param float $nbhSais The nbh sais.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNbhSais($nbhSais) {
		$this->nbhSais = $nbhSais;
		return $this;
	}

	/**
	 * Set the nbh sais corr.
	 *
	 * @param float $nbhSaisCorr The nbh sais corr.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNbhSaisCorr($nbhSaisCorr) {
		$this->nbhSaisCorr = $nbhSaisCorr;
		return $this;
	}

	/**
	 * Set the nbj sais.
	 *
	 * @param float $nbjSais The nbj sais.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNbjSais($nbjSais) {
		$this->nbjSais = $nbjSais;
		return $this;
	}

	/**
	 * Set the nbj sais corr.
	 *
	 * @param float $nbjSaisCorr The nbj sais corr.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNbjSaisCorr($nbjSaisCorr) {
		$this->nbjSaisCorr = $nbjSaisCorr;
		return $this;
	}

	/**
	 * Set the num evenement.
	 *
	 * @param int $numEvenement The num evenement.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNumEvenement($numEvenement) {
		$this->numEvenement = $numEvenement;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the per paie.
	 *
	 * @param DateTime $perPaie The per paie.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setPerPaie(DateTime $perPaie = null) {
		$this->perPaie = $perPaie;
		return $this;
	}

	/**
	 * Set the periode deb.
	 *
	 * @param DateTime $periodeDeb The periode deb.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setPeriodeDeb(DateTime $periodeDeb = null) {
		$this->periodeDeb = $periodeDeb;
		return $this;
	}

	/**
	 * Set the periode deb corr.
	 *
	 * @param DateTime $periodeDebCorr The periode deb corr.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setPeriodeDebCorr(DateTime $periodeDebCorr = null) {
		$this->periodeDebCorr = $periodeDebCorr;
		return $this;
	}

	/**
	 * Set the periode fin.
	 *
	 * @param DateTime $periodeFin The periode fin.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setPeriodeFin(DateTime $periodeFin = null) {
		$this->periodeFin = $periodeFin;
		return $this;
	}

	/**
	 * Set the periode fin corr.
	 *
	 * @param DateTime $periodeFinCorr The periode fin corr.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setPeriodeFinCorr(DateTime $periodeFinCorr = null) {
		$this->periodeFinCorr = $periodeFinCorr;
		return $this;
	}

	/**
	 * Set the transfert abs.
	 *
	 * @param boolean $transfertAbs The transfert abs.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setTransfertAbs($transfertAbs) {
		$this->transfertAbs = $transfertAbs;
		return $this;
	}

	/**
	 * Set the type abs cp.
	 *
	 * @param string $typeAbsCp The type abs cp.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setTypeAbsCp($typeAbsCp) {
		$this->typeAbsCp = $typeAbsCp;
		return $this;
	}

	/**
	 * Set the type abs cp corr.
	 *
	 * @param string $typeAbsCpCorr The type abs cp corr.
	 * @return AbsencesExcelHisto Returns this absences excel histo.
	 */
	public function setTypeAbsCpCorr($typeAbsCpCorr) {
		$this->typeAbsCpCorr = $typeAbsCpCorr;
		return $this;
	}

}
