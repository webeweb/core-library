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
 * Mensualisation tache model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class MensualisationTache {

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code chantier.
	 *
	 * @var string
	 */
	private $codeChantier;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collabo valid.
	 *
	 * @var string
	 */
	private $codeCollaboValid;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

	/**
	 * Date validation synchro.
	 *
	 * @var DateTime
	 */
	private $dateValidationSynchro;

	/**
	 * Etat.
	 *
	 * @var string
	 */
	private $etat;

	/**
	 * Histo mens saisi.
	 *
	 * @var boolean
	 */
	private $histoMensSaisi;

	/**
	 * Mensualisation calculee.
	 *
	 * @var float
	 */
	private $mensualisationCalculee;

	/**
	 * Mensualisation saisie.
	 *
	 * @var float
	 */
	private $mensualisationSaisie;

	/**
	 * Mt prime.
	 *
	 * @var float
	 */
	private $mtPrime;

	/**
	 * Nb paniers.
	 *
	 * @var float
	 */
	private $nbPaniers;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Periode debut validite.
	 *
	 * @var DateTime
	 */
	private $periodeDebutValidite;

	/**
	 * Uniq i d synchro.
	 *
	 * @var string
	 */
	private $uniqIDSynchro;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code affaire.
	 *
	 * @return string Returns the code affaire.
	 */
	public function getCodeAffaire() {
		return $this->codeAffaire;
	}

	/**
	 * Get the code chantier.
	 *
	 * @return string Returns the code chantier.
	 */
	public function getCodeChantier() {
		return $this->codeChantier;
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
	 * Get the code collabo valid.
	 *
	 * @return string Returns the code collabo valid.
	 */
	public function getCodeCollaboValid() {
		return $this->codeCollaboValid;
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
	 * Get the code employe.
	 *
	 * @return string Returns the code employe.
	 */
	public function getCodeEmploye() {
		return $this->codeEmploye;
	}

	/**
	 * Get the code tache.
	 *
	 * @return string Returns the code tache.
	 */
	public function getCodeTache() {
		return $this->codeTache;
	}

	/**
	 * Get the date validation synchro.
	 *
	 * @return DateTime Returns the date validation synchro.
	 */
	public function getDateValidationSynchro() {
		return $this->dateValidationSynchro;
	}

	/**
	 * Get the etat.
	 *
	 * @return string Returns the etat.
	 */
	public function getEtat() {
		return $this->etat;
	}

	/**
	 * Get the histo mens saisi.
	 *
	 * @return boolean Returns the histo mens saisi.
	 */
	public function getHistoMensSaisi() {
		return $this->histoMensSaisi;
	}

	/**
	 * Get the mensualisation calculee.
	 *
	 * @return float Returns the mensualisation calculee.
	 */
	public function getMensualisationCalculee() {
		return $this->mensualisationCalculee;
	}

	/**
	 * Get the mensualisation saisie.
	 *
	 * @return float Returns the mensualisation saisie.
	 */
	public function getMensualisationSaisie() {
		return $this->mensualisationSaisie;
	}

	/**
	 * Get the mt prime.
	 *
	 * @return float Returns the mt prime.
	 */
	public function getMtPrime() {
		return $this->mtPrime;
	}

	/**
	 * Get the nb paniers.
	 *
	 * @return float Returns the nb paniers.
	 */
	public function getNbPaniers() {
		return $this->nbPaniers;
	}

	/**
	 * Get the num b t.
	 *
	 * @return int Returns the num b t.
	 */
	public function getNumBT() {
		return $this->numBT;
	}

	/**
	 * Get the periode debut validite.
	 *
	 * @return DateTime Returns the periode debut validite.
	 */
	public function getPeriodeDebutValidite() {
		return $this->periodeDebutValidite;
	}

	/**
	 * Get the uniq i d synchro.
	 *
	 * @return string Returns the uniq i d synchro.
	 */
	public function getUniqIDSynchro() {
		return $this->uniqIDSynchro;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the histo mens saisi.
	 *
	 * @param boolean $histoMensSaisi The histo mens saisi.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setHistoMensSaisi($histoMensSaisi) {
		$this->histoMensSaisi = $histoMensSaisi;
		return $this;
	}

	/**
	 * Set the mensualisation calculee.
	 *
	 * @param float $mensualisationCalculee The mensualisation calculee.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setMensualisationCalculee($mensualisationCalculee) {
		$this->mensualisationCalculee = $mensualisationCalculee;
		return $this;
	}

	/**
	 * Set the mensualisation saisie.
	 *
	 * @param float $mensualisationSaisie The mensualisation saisie.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setMensualisationSaisie($mensualisationSaisie) {
		$this->mensualisationSaisie = $mensualisationSaisie;
		return $this;
	}

	/**
	 * Set the mt prime.
	 *
	 * @param float $mtPrime The mt prime.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setMtPrime($mtPrime) {
		$this->mtPrime = $mtPrime;
		return $this;
	}

	/**
	 * Set the nb paniers.
	 *
	 * @param float $nbPaniers The nb paniers.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setNbPaniers($nbPaniers) {
		$this->nbPaniers = $nbPaniers;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the periode debut validite.
	 *
	 * @param DateTime $periodeDebutValidite The periode debut validite.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setPeriodeDebutValidite(DateTime $periodeDebutValidite = null) {
		$this->periodeDebutValidite = $periodeDebutValidite;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return MensualisationTache Returns this mensualisation tache.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

}
