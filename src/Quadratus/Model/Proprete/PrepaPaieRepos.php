<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Prepa paie repos model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PrepaPaieRepos {

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Cp pris.
	 *
	 * @var float
	 */
	private $cpPris;

	/**
	 * H effectives.
	 *
	 * @var float
	 */
	private $hEffectives;

	/**
	 * H prevues.
	 *
	 * @var float
	 */
	private $hPrevues;

	/**
	 * H realisees.
	 *
	 * @var float
	 */
	private $hRealisees;

	/**
	 * Num sem.
	 *
	 * @var string
	 */
	private $numSem;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Repos comp acquis.
	 *
	 * @var float
	 */
	private $reposCompAcquis;

	/**
	 * Repos comp pris.
	 *
	 * @var float
	 */
	private $reposCompPris;

	/**
	 * Repos rempl acquis.
	 *
	 * @var float
	 */
	private $reposRemplAcquis;

	/**
	 * Repos rempl pris.
	 *
	 * @var float
	 */
	private $reposRemplPris;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code employe.
	 *
	 * @return string Returns the code employe.
	 */
	public function getCodeEmploye() {
		return $this->codeEmploye;
	}

	/**
	 * Get the cp pris.
	 *
	 * @return float Returns the cp pris.
	 */
	public function getCpPris() {
		return $this->cpPris;
	}

	/**
	 * Get the h effectives.
	 *
	 * @return float Returns the h effectives.
	 */
	public function getHEffectives() {
		return $this->hEffectives;
	}

	/**
	 * Get the h prevues.
	 *
	 * @return float Returns the h prevues.
	 */
	public function getHPrevues() {
		return $this->hPrevues;
	}

	/**
	 * Get the h realisees.
	 *
	 * @return float Returns the h realisees.
	 */
	public function getHRealisees() {
		return $this->hRealisees;
	}

	/**
	 * Get the num sem.
	 *
	 * @return string Returns the num sem.
	 */
	public function getNumSem() {
		return $this->numSem;
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
	 * Get the repos comp acquis.
	 *
	 * @return float Returns the repos comp acquis.
	 */
	public function getReposCompAcquis() {
		return $this->reposCompAcquis;
	}

	/**
	 * Get the repos comp pris.
	 *
	 * @return float Returns the repos comp pris.
	 */
	public function getReposCompPris() {
		return $this->reposCompPris;
	}

	/**
	 * Get the repos rempl acquis.
	 *
	 * @return float Returns the repos rempl acquis.
	 */
	public function getReposRemplAcquis() {
		return $this->reposRemplAcquis;
	}

	/**
	 * Get the repos rempl pris.
	 *
	 * @return float Returns the repos rempl pris.
	 */
	public function getReposRemplPris() {
		return $this->reposRemplPris;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the cp pris.
	 *
	 * @param float $cpPris The cp pris.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setCpPris($cpPris) {
		$this->cpPris = $cpPris;
		return $this;
	}

	/**
	 * Set the h effectives.
	 *
	 * @param float $hEffectives The h effectives.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setHEffectives($hEffectives) {
		$this->hEffectives = $hEffectives;
		return $this;
	}

	/**
	 * Set the h prevues.
	 *
	 * @param float $hPrevues The h prevues.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setHPrevues($hPrevues) {
		$this->hPrevues = $hPrevues;
		return $this;
	}

	/**
	 * Set the h realisees.
	 *
	 * @param float $hRealisees The h realisees.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setHRealisees($hRealisees) {
		$this->hRealisees = $hRealisees;
		return $this;
	}

	/**
	 * Set the num sem.
	 *
	 * @param string $numSem The num sem.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setNumSem($numSem) {
		$this->numSem = $numSem;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the repos comp acquis.
	 *
	 * @param float $reposCompAcquis The repos comp acquis.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setReposCompAcquis($reposCompAcquis) {
		$this->reposCompAcquis = $reposCompAcquis;
		return $this;
	}

	/**
	 * Set the repos comp pris.
	 *
	 * @param float $reposCompPris The repos comp pris.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setReposCompPris($reposCompPris) {
		$this->reposCompPris = $reposCompPris;
		return $this;
	}

	/**
	 * Set the repos rempl acquis.
	 *
	 * @param float $reposRemplAcquis The repos rempl acquis.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setReposRemplAcquis($reposRemplAcquis) {
		$this->reposRemplAcquis = $reposRemplAcquis;
		return $this;
	}

	/**
	 * Set the repos rempl pris.
	 *
	 * @param float $reposRemplPris The repos rempl pris.
	 * @return PrepaPaieRepos Returns this prepa paie repos.
	 */
	public function setReposRemplPris($reposRemplPris) {
		$this->reposRemplPris = $reposRemplPris;
		return $this;
	}

}
