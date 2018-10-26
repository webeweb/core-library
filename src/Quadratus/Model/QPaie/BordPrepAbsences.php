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
 * Bord prep absences model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class BordPrepAbsences {

	/**
	 * I d.
	 *
	 * @var int
	 */
	private $iD;

	/**
	 * Nbh sais.
	 *
	 * @var float
	 */
	private $nbhSais;

	/**
	 * Nbj sais.
	 *
	 * @var float
	 */
	private $nbjSais;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Periode deb.
	 *
	 * @var DateTime
	 */
	private $periodeDeb;

	/**
	 * Periode fin.
	 *
	 * @var DateTime
	 */
	private $periodeFin;

	/**
	 * Type abs cp.
	 *
	 * @var string
	 */
	private $typeAbsCp;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the i d.
	 *
	 * @return int Returns the i d.
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
	 * Get the nbj sais.
	 *
	 * @return float Returns the nbj sais.
	 */
	public function getNbjSais() {
		return $this->nbjSais;
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
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
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
	 * Get the periode fin.
	 *
	 * @return DateTime Returns the periode fin.
	 */
	public function getPeriodeFin() {
		return $this->periodeFin;
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
	 * Set the i d.
	 *
	 * @param int $iD The i d.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setID($iD) {
		$this->iD = $iD;
		return $this;
	}

	/**
	 * Set the nbh sais.
	 *
	 * @param float $nbhSais The nbh sais.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setNbhSais($nbhSais) {
		$this->nbhSais = $nbhSais;
		return $this;
	}

	/**
	 * Set the nbj sais.
	 *
	 * @param float $nbjSais The nbj sais.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setNbjSais($nbjSais) {
		$this->nbjSais = $nbjSais;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the periode deb.
	 *
	 * @param DateTime $periodeDeb The periode deb.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setPeriodeDeb(DateTime $periodeDeb = null) {
		$this->periodeDeb = $periodeDeb;
		return $this;
	}

	/**
	 * Set the periode fin.
	 *
	 * @param DateTime $periodeFin The periode fin.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setPeriodeFin(DateTime $periodeFin = null) {
		$this->periodeFin = $periodeFin;
		return $this;
	}

	/**
	 * Set the type abs cp.
	 *
	 * @param string $typeAbsCp The type abs cp.
	 * @return BordPrepAbsences Returns this bord prep absences.
	 */
	public function setTypeAbsCp($typeAbsCp) {
		$this->typeAbsCp = $typeAbsCp;
		return $this;
	}

}
