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
 * Affectation materiel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class AffectationMateriel {

	/**
	 * Budget depense euro.
	 *
	 * @var float
	 */
	private $budgetDepenseEuro;

	/**
	 * Budget depense frf.
	 *
	 * @var float
	 */
	private $budgetDepenseFrf;

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
	 * Code materiel.
	 *
	 * @var string
	 */
	private $codeMateriel;

	/**
	 * Code tache.
	 *
	 * @var string
	 */
	private $codeTache;

	/**
	 * Debut affect.
	 *
	 * @var DateTime
	 */
	private $debutAffect;

	/**
	 * Fin affect.
	 *
	 * @var DateTime
	 */
	private $finAffect;

	/**
	 * Pourcent utilise.
	 *
	 * @var float
	 */
	private $pourcentUtilise;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the budget depense euro.
	 *
	 * @return float Returns the budget depense euro.
	 */
	public function getBudgetDepenseEuro() {
		return $this->budgetDepenseEuro;
	}

	/**
	 * Get the budget depense frf.
	 *
	 * @return float Returns the budget depense frf.
	 */
	public function getBudgetDepenseFrf() {
		return $this->budgetDepenseFrf;
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
	 * Get the code materiel.
	 *
	 * @return string Returns the code materiel.
	 */
	public function getCodeMateriel() {
		return $this->codeMateriel;
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
	 * Get the debut affect.
	 *
	 * @return DateTime Returns the debut affect.
	 */
	public function getDebutAffect() {
		return $this->debutAffect;
	}

	/**
	 * Get the fin affect.
	 *
	 * @return DateTime Returns the fin affect.
	 */
	public function getFinAffect() {
		return $this->finAffect;
	}

	/**
	 * Get the pourcent utilise.
	 *
	 * @return float Returns the pourcent utilise.
	 */
	public function getPourcentUtilise() {
		return $this->pourcentUtilise;
	}

	/**
	 * Set the budget depense euro.
	 *
	 * @param float $budgetDepenseEuro The budget depense euro.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setBudgetDepenseEuro($budgetDepenseEuro) {
		$this->budgetDepenseEuro = $budgetDepenseEuro;
		return $this;
	}

	/**
	 * Set the budget depense frf.
	 *
	 * @param float $budgetDepenseFrf The budget depense frf.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setBudgetDepenseFrf($budgetDepenseFrf) {
		$this->budgetDepenseFrf = $budgetDepenseFrf;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code materiel.
	 *
	 * @param string $codeMateriel The code materiel.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setCodeMateriel($codeMateriel) {
		$this->codeMateriel = $codeMateriel;
		return $this;
	}

	/**
	 * Set the code tache.
	 *
	 * @param string $codeTache The code tache.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setCodeTache($codeTache) {
		$this->codeTache = $codeTache;
		return $this;
	}

	/**
	 * Set the debut affect.
	 *
	 * @param DateTime $debutAffect The debut affect.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setDebutAffect(DateTime $debutAffect = null) {
		$this->debutAffect = $debutAffect;
		return $this;
	}

	/**
	 * Set the fin affect.
	 *
	 * @param DateTime $finAffect The fin affect.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setFinAffect(DateTime $finAffect = null) {
		$this->finAffect = $finAffect;
		return $this;
	}

	/**
	 * Set the pourcent utilise.
	 *
	 * @param float $pourcentUtilise The pourcent utilise.
	 * @return AffectationMateriel Returns this affectation materiel.
	 */
	public function setPourcentUtilise($pourcentUtilise) {
		$this->pourcentUtilise = $pourcentUtilise;
		return $this;
	}

}
