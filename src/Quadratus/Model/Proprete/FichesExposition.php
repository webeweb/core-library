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
 * Fiches exposition model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class FichesExposition {

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Code prestation.
	 *
	 * @var string
	 */
	private $codePrestation;

	/**
	 * Code produit.
	 *
	 * @var string
	 */
	private $codeProduit;

	/**
	 * Date ctrl.
	 *
	 * @var DateTime
	 */
	private $dateCtrl;

	/**
	 * Date deb expo.
	 *
	 * @var DateTime
	 */
	private $dateDebExpo;

	/**
	 * Date fiche.
	 *
	 * @var DateTime
	 */
	private $dateFiche;

	/**
	 * Date fin expo.
	 *
	 * @var DateTime
	 */
	private $dateFinExpo;

	/**
	 * Lst code phase.
	 *
	 * @var string
	 */
	private $lstCodePhase;

	/**
	 * Lst code prev.
	 *
	 * @var string
	 */
	private $lstCodePrev;

	/**
	 * Resu ctrl.
	 *
	 * @var string
	 */
	private $resuCtrl;

	/**
	 * Temps exposition.
	 *
	 * @var float
	 */
	private $tempsExposition;

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
	 * Get the code prestation.
	 *
	 * @return string Returns the code prestation.
	 */
	public function getCodePrestation() {
		return $this->codePrestation;
	}

	/**
	 * Get the code produit.
	 *
	 * @return string Returns the code produit.
	 */
	public function getCodeProduit() {
		return $this->codeProduit;
	}

	/**
	 * Get the date ctrl.
	 *
	 * @return DateTime Returns the date ctrl.
	 */
	public function getDateCtrl() {
		return $this->dateCtrl;
	}

	/**
	 * Get the date deb expo.
	 *
	 * @return DateTime Returns the date deb expo.
	 */
	public function getDateDebExpo() {
		return $this->dateDebExpo;
	}

	/**
	 * Get the date fiche.
	 *
	 * @return DateTime Returns the date fiche.
	 */
	public function getDateFiche() {
		return $this->dateFiche;
	}

	/**
	 * Get the date fin expo.
	 *
	 * @return DateTime Returns the date fin expo.
	 */
	public function getDateFinExpo() {
		return $this->dateFinExpo;
	}

	/**
	 * Get the lst code phase.
	 *
	 * @return string Returns the lst code phase.
	 */
	public function getLstCodePhase() {
		return $this->lstCodePhase;
	}

	/**
	 * Get the lst code prev.
	 *
	 * @return string Returns the lst code prev.
	 */
	public function getLstCodePrev() {
		return $this->lstCodePrev;
	}

	/**
	 * Get the resu ctrl.
	 *
	 * @return string Returns the resu ctrl.
	 */
	public function getResuCtrl() {
		return $this->resuCtrl;
	}

	/**
	 * Get the temps exposition.
	 *
	 * @return float Returns the temps exposition.
	 */
	public function getTempsExposition() {
		return $this->tempsExposition;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code prestation.
	 *
	 * @param string $codePrestation The code prestation.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setCodePrestation($codePrestation) {
		$this->codePrestation = $codePrestation;
		return $this;
	}

	/**
	 * Set the code produit.
	 *
	 * @param string $codeProduit The code produit.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setCodeProduit($codeProduit) {
		$this->codeProduit = $codeProduit;
		return $this;
	}

	/**
	 * Set the date ctrl.
	 *
	 * @param DateTime $dateCtrl The date ctrl.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setDateCtrl(DateTime $dateCtrl = null) {
		$this->dateCtrl = $dateCtrl;
		return $this;
	}

	/**
	 * Set the date deb expo.
	 *
	 * @param DateTime $dateDebExpo The date deb expo.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setDateDebExpo(DateTime $dateDebExpo = null) {
		$this->dateDebExpo = $dateDebExpo;
		return $this;
	}

	/**
	 * Set the date fiche.
	 *
	 * @param DateTime $dateFiche The date fiche.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setDateFiche(DateTime $dateFiche = null) {
		$this->dateFiche = $dateFiche;
		return $this;
	}

	/**
	 * Set the date fin expo.
	 *
	 * @param DateTime $dateFinExpo The date fin expo.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setDateFinExpo(DateTime $dateFinExpo = null) {
		$this->dateFinExpo = $dateFinExpo;
		return $this;
	}

	/**
	 * Set the lst code phase.
	 *
	 * @param string $lstCodePhase The lst code phase.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setLstCodePhase($lstCodePhase) {
		$this->lstCodePhase = $lstCodePhase;
		return $this;
	}

	/**
	 * Set the lst code prev.
	 *
	 * @param string $lstCodePrev The lst code prev.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setLstCodePrev($lstCodePrev) {
		$this->lstCodePrev = $lstCodePrev;
		return $this;
	}

	/**
	 * Set the resu ctrl.
	 *
	 * @param string $resuCtrl The resu ctrl.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setResuCtrl($resuCtrl) {
		$this->resuCtrl = $resuCtrl;
		return $this;
	}

	/**
	 * Set the temps exposition.
	 *
	 * @param float $tempsExposition The temps exposition.
	 * @return FichesExposition Returns this fiches exposition.
	 */
	public function setTempsExposition($tempsExposition) {
		$this->tempsExposition = $tempsExposition;
		return $this;
	}

}
