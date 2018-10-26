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
 * Prefacturation model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Prefacturation {

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
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Code mission.
	 *
	 * @var string
	 */
	private $codeMission;

	/**
	 * Code phase.
	 *
	 * @var string
	 */
	private $codePhase;

	/**
	 * Code regroupement.
	 *
	 * @var string
	 */
	private $codeRegroupement;

	/**
	 * Date saisie.
	 *
	 * @var DateTime
	 */
	private $dateSaisie;

	/**
	 * Date sys saisie.
	 *
	 * @var DateTime
	 */
	private $dateSysSaisie;

	/**
	 * Facturable.
	 *
	 * @var boolean
	 */
	private $facturable;

	/**
	 * I d prefacturation.
	 *
	 * @var int
	 */
	private $iDPrefacturation;

	/**
	 * Is transf.
	 *
	 * @var boolean
	 */
	private $isTransf;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Monnaie.
	 *
	 * @var string
	 */
	private $monnaie;

	/**
	 * P u.
	 *
	 * @var float
	 */
	private $pU;

	/**
	 * Qte.
	 *
	 * @var float
	 */
	private $qte;

	/**
	 * Uniq i d facture.
	 *
	 * @var string
	 */
	private $uniqIDFacture;

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
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
	}

	/**
	 * Get the code mission.
	 *
	 * @return string Returns the code mission.
	 */
	public function getCodeMission() {
		return $this->codeMission;
	}

	/**
	 * Get the code phase.
	 *
	 * @return string Returns the code phase.
	 */
	public function getCodePhase() {
		return $this->codePhase;
	}

	/**
	 * Get the code regroupement.
	 *
	 * @return string Returns the code regroupement.
	 */
	public function getCodeRegroupement() {
		return $this->codeRegroupement;
	}

	/**
	 * Get the date saisie.
	 *
	 * @return DateTime Returns the date saisie.
	 */
	public function getDateSaisie() {
		return $this->dateSaisie;
	}

	/**
	 * Get the date sys saisie.
	 *
	 * @return DateTime Returns the date sys saisie.
	 */
	public function getDateSysSaisie() {
		return $this->dateSysSaisie;
	}

	/**
	 * Get the facturable.
	 *
	 * @return boolean Returns the facturable.
	 */
	public function getFacturable() {
		return $this->facturable;
	}

	/**
	 * Get the i d prefacturation.
	 *
	 * @return int Returns the i d prefacturation.
	 */
	public function getIDPrefacturation() {
		return $this->iDPrefacturation;
	}

	/**
	 * Get the is transf.
	 *
	 * @return boolean Returns the is transf.
	 */
	public function getIsTransf() {
		return $this->isTransf;
	}

	/**
	 * Get the libelle.
	 *
	 * @return string Returns the libelle.
	 */
	public function getLibelle() {
		return $this->libelle;
	}

	/**
	 * Get the monnaie.
	 *
	 * @return string Returns the monnaie.
	 */
	public function getMonnaie() {
		return $this->monnaie;
	}

	/**
	 * Get the p u.
	 *
	 * @return float Returns the p u.
	 */
	public function getPU() {
		return $this->pU;
	}

	/**
	 * Get the qte.
	 *
	 * @return float Returns the qte.
	 */
	public function getQte() {
		return $this->qte;
	}

	/**
	 * Get the uniq i d facture.
	 *
	 * @return string Returns the uniq i d facture.
	 */
	public function getUniqIDFacture() {
		return $this->uniqIDFacture;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code mission.
	 *
	 * @param string $codeMission The code mission.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodeMission($codeMission) {
		$this->codeMission = $codeMission;
		return $this;
	}

	/**
	 * Set the code phase.
	 *
	 * @param string $codePhase The code phase.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodePhase($codePhase) {
		$this->codePhase = $codePhase;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the date saisie.
	 *
	 * @param DateTime $dateSaisie The date saisie.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setDateSaisie(DateTime $dateSaisie = null) {
		$this->dateSaisie = $dateSaisie;
		return $this;
	}

	/**
	 * Set the date sys saisie.
	 *
	 * @param DateTime $dateSysSaisie The date sys saisie.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setDateSysSaisie(DateTime $dateSysSaisie = null) {
		$this->dateSysSaisie = $dateSysSaisie;
		return $this;
	}

	/**
	 * Set the facturable.
	 *
	 * @param boolean $facturable The facturable.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setFacturable($facturable) {
		$this->facturable = $facturable;
		return $this;
	}

	/**
	 * Set the i d prefacturation.
	 *
	 * @param int $iDPrefacturation The i d prefacturation.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setIDPrefacturation($iDPrefacturation) {
		$this->iDPrefacturation = $iDPrefacturation;
		return $this;
	}

	/**
	 * Set the is transf.
	 *
	 * @param boolean $isTransf The is transf.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setIsTransf($isTransf) {
		$this->isTransf = $isTransf;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the monnaie.
	 *
	 * @param string $monnaie The monnaie.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setMonnaie($monnaie) {
		$this->monnaie = $monnaie;
		return $this;
	}

	/**
	 * Set the p u.
	 *
	 * @param float $pU The p u.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setPU($pU) {
		$this->pU = $pU;
		return $this;
	}

	/**
	 * Set the qte.
	 *
	 * @param float $qte The qte.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setQte($qte) {
		$this->qte = $qte;
		return $this;
	}

	/**
	 * Set the uniq i d facture.
	 *
	 * @param string $uniqIDFacture The uniq i d facture.
	 * @return Prefacturation Returns this prefacturation.
	 */
	public function setUniqIDFacture($uniqIDFacture) {
		$this->uniqIDFacture = $uniqIDFacture;
		return $this;
	}

}
