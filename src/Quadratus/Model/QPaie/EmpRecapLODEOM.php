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
 * Emp recap l o d e o m model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class EmpRecapLODEOM {

	/**
	 * Brut.
	 *
	 * @var float
	 */
	private $brut;

	/**
	 * Code centre.
	 *
	 * @var string
	 */
	private $codeCentre;

	/**
	 * Code etablissement.
	 *
	 * @var string
	 */
	private $codeEtablissement;

	/**
	 * Code organisme.
	 *
	 * @var string
	 */
	private $codeOrganisme;

	/**
	 * Difference.
	 *
	 * @var float
	 */
	private $difference;

	/**
	 * Indice periode.
	 *
	 * @var int
	 */
	private $indicePeriode;

	/**
	 * N b h r.
	 *
	 * @var float
	 */
	private $nBHR;

	/**
	 * Nom employe.
	 *
	 * @var string
	 */
	private $nomEmploye;

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
	 * Reduc bul.
	 *
	 * @var float
	 */
	private $reducBul;

	/**
	 * Reduc recalc.
	 *
	 * @var float
	 */
	private $reducRecalc;

	/**
	 * S h b.
	 *
	 * @var float
	 */
	private $sHB;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the brut.
	 *
	 * @return float Returns the brut.
	 */
	public function getBrut() {
		return $this->brut;
	}

	/**
	 * Get the code centre.
	 *
	 * @return string Returns the code centre.
	 */
	public function getCodeCentre() {
		return $this->codeCentre;
	}

	/**
	 * Get the code etablissement.
	 *
	 * @return string Returns the code etablissement.
	 */
	public function getCodeEtablissement() {
		return $this->codeEtablissement;
	}

	/**
	 * Get the code organisme.
	 *
	 * @return string Returns the code organisme.
	 */
	public function getCodeOrganisme() {
		return $this->codeOrganisme;
	}

	/**
	 * Get the difference.
	 *
	 * @return float Returns the difference.
	 */
	public function getDifference() {
		return $this->difference;
	}

	/**
	 * Get the indice periode.
	 *
	 * @return int Returns the indice periode.
	 */
	public function getIndicePeriode() {
		return $this->indicePeriode;
	}

	/**
	 * Get the n b h r.
	 *
	 * @return float Returns the n b h r.
	 */
	public function getNBHR() {
		return $this->nBHR;
	}

	/**
	 * Get the nom employe.
	 *
	 * @return string Returns the nom employe.
	 */
	public function getNomEmploye() {
		return $this->nomEmploye;
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
	 * Get the reduc bul.
	 *
	 * @return float Returns the reduc bul.
	 */
	public function getReducBul() {
		return $this->reducBul;
	}

	/**
	 * Get the reduc recalc.
	 *
	 * @return float Returns the reduc recalc.
	 */
	public function getReducRecalc() {
		return $this->reducRecalc;
	}

	/**
	 * Get the s h b.
	 *
	 * @return float Returns the s h b.
	 */
	public function getSHB() {
		return $this->sHB;
	}

	/**
	 * Set the brut.
	 *
	 * @param float $brut The brut.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setBrut($brut) {
		$this->brut = $brut;
		return $this;
	}

	/**
	 * Set the code centre.
	 *
	 * @param string $codeCentre The code centre.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setCodeCentre($codeCentre) {
		$this->codeCentre = $codeCentre;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param string $codeEtablissement The code etablissement.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the code organisme.
	 *
	 * @param string $codeOrganisme The code organisme.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setCodeOrganisme($codeOrganisme) {
		$this->codeOrganisme = $codeOrganisme;
		return $this;
	}

	/**
	 * Set the difference.
	 *
	 * @param float $difference The difference.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setDifference($difference) {
		$this->difference = $difference;
		return $this;
	}

	/**
	 * Set the indice periode.
	 *
	 * @param int $indicePeriode The indice periode.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setIndicePeriode($indicePeriode) {
		$this->indicePeriode = $indicePeriode;
		return $this;
	}

	/**
	 * Set the n b h r.
	 *
	 * @param float $nBHR The n b h r.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setNBHR($nBHR) {
		$this->nBHR = $nBHR;
		return $this;
	}

	/**
	 * Set the nom employe.
	 *
	 * @param string $nomEmploye The nom employe.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setNomEmploye($nomEmploye) {
		$this->nomEmploye = $nomEmploye;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the reduc bul.
	 *
	 * @param float $reducBul The reduc bul.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setReducBul($reducBul) {
		$this->reducBul = $reducBul;
		return $this;
	}

	/**
	 * Set the reduc recalc.
	 *
	 * @param float $reducRecalc The reduc recalc.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setReducRecalc($reducRecalc) {
		$this->reducRecalc = $reducRecalc;
		return $this;
	}

	/**
	 * Set the s h b.
	 *
	 * @param float $sHB The s h b.
	 * @return EmpRecapLODEOM Returns this emp recap l o d e o m.
	 */
	public function setSHB($sHB) {
		$this->sHB = $sHB;
		return $this;
	}

}
