<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Tarifs tranches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TarifsTranches {

	/**
	 * Code article.
	 *
	 * @var string
	 */
	private $codeArticle;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code devise.
	 *
	 * @var string
	 */
	private $codeDevise;

	/**
	 * Code nature.
	 *
	 * @var string
	 */
	private $codeNature;

	/**
	 * Coeff.
	 *
	 * @var float
	 */
	private $coeff;

	/**
	 * Date debut.
	 *
	 * @var DateTime
	 */
	private $dateDebut;

	/**
	 * Date fin.
	 *
	 * @var DateTime
	 */
	private $dateFin;

	/**
	 * Num tranche.
	 *
	 * @var string
	 */
	private $numTranche;

	/**
	 * Prix net.
	 *
	 * @var boolean
	 */
	private $prixNet;

	/**
	 * Prix unit.
	 *
	 * @var float
	 */
	private $prixUnit;

	/**
	 * Qte mini.
	 *
	 * @var float
	 */
	private $qteMini;

	/**
	 * Type code article.
	 *
	 * @var string
	 */
	private $typeCodeArticle;

	/**
	 * Type code client.
	 *
	 * @var string
	 */
	private $typeCodeClient;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code article.
	 *
	 * @return string Returns the code article.
	 */
	public function getCodeArticle() {
		return $this->codeArticle;
	}

	/**
	 * Get the code client.
	 *
	 * @return string Returns the code client.
	 */
	public function getCodeClient() {
		return $this->codeClient;
	}

	/**
	 * Get the code devise.
	 *
	 * @return string Returns the code devise.
	 */
	public function getCodeDevise() {
		return $this->codeDevise;
	}

	/**
	 * Get the code nature.
	 *
	 * @return string Returns the code nature.
	 */
	public function getCodeNature() {
		return $this->codeNature;
	}

	/**
	 * Get the coeff.
	 *
	 * @return float Returns the coeff.
	 */
	public function getCoeff() {
		return $this->coeff;
	}

	/**
	 * Get the date debut.
	 *
	 * @return DateTime Returns the date debut.
	 */
	public function getDateDebut() {
		return $this->dateDebut;
	}

	/**
	 * Get the date fin.
	 *
	 * @return DateTime Returns the date fin.
	 */
	public function getDateFin() {
		return $this->dateFin;
	}

	/**
	 * Get the num tranche.
	 *
	 * @return string Returns the num tranche.
	 */
	public function getNumTranche() {
		return $this->numTranche;
	}

	/**
	 * Get the prix net.
	 *
	 * @return boolean Returns the prix net.
	 */
	public function getPrixNet() {
		return $this->prixNet;
	}

	/**
	 * Get the prix unit.
	 *
	 * @return float Returns the prix unit.
	 */
	public function getPrixUnit() {
		return $this->prixUnit;
	}

	/**
	 * Get the qte mini.
	 *
	 * @return float Returns the qte mini.
	 */
	public function getQteMini() {
		return $this->qteMini;
	}

	/**
	 * Get the type code article.
	 *
	 * @return string Returns the type code article.
	 */
	public function getTypeCodeArticle() {
		return $this->typeCodeArticle;
	}

	/**
	 * Get the type code client.
	 *
	 * @return string Returns the type code client.
	 */
	public function getTypeCodeClient() {
		return $this->typeCodeClient;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code devise.
	 *
	 * @param string $codeDevise The code devise.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setCodeDevise($codeDevise) {
		$this->codeDevise = $codeDevise;
		return $this;
	}

	/**
	 * Set the code nature.
	 *
	 * @param string $codeNature The code nature.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setCodeNature($codeNature) {
		$this->codeNature = $codeNature;
		return $this;
	}

	/**
	 * Set the coeff.
	 *
	 * @param float $coeff The coeff.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setCoeff($coeff) {
		$this->coeff = $coeff;
		return $this;
	}

	/**
	 * Set the date debut.
	 *
	 * @param DateTime $dateDebut The date debut.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setDateDebut(DateTime $dateDebut = null) {
		$this->dateDebut = $dateDebut;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the num tranche.
	 *
	 * @param string $numTranche The num tranche.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setNumTranche($numTranche) {
		$this->numTranche = $numTranche;
		return $this;
	}

	/**
	 * Set the prix net.
	 *
	 * @param boolean $prixNet The prix net.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setPrixNet($prixNet) {
		$this->prixNet = $prixNet;
		return $this;
	}

	/**
	 * Set the prix unit.
	 *
	 * @param float $prixUnit The prix unit.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setPrixUnit($prixUnit) {
		$this->prixUnit = $prixUnit;
		return $this;
	}

	/**
	 * Set the qte mini.
	 *
	 * @param float $qteMini The qte mini.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setQteMini($qteMini) {
		$this->qteMini = $qteMini;
		return $this;
	}

	/**
	 * Set the type code article.
	 *
	 * @param string $typeCodeArticle The type code article.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setTypeCodeArticle($typeCodeArticle) {
		$this->typeCodeArticle = $typeCodeArticle;
		return $this;
	}

	/**
	 * Set the type code client.
	 *
	 * @param string $typeCodeClient The type code client.
	 * @return TarifsTranches Returns this tarifs tranches.
	 */
	public function setTypeCodeClient($typeCodeClient) {
		$this->typeCodeClient = $typeCodeClient;
		return $this;
	}

}
