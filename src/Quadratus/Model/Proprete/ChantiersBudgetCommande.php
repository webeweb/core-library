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
 * Chantiers budget commande model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersBudgetCommande {

	/**
	 * Budget commande1.
	 *
	 * @var float
	 */
	private $budgetCommande1;

	/**
	 * Budget commande10.
	 *
	 * @var float
	 */
	private $budgetCommande10;

	/**
	 * Budget commande11.
	 *
	 * @var float
	 */
	private $budgetCommande11;

	/**
	 * Budget commande12.
	 *
	 * @var float
	 */
	private $budgetCommande12;

	/**
	 * Budget commande2.
	 *
	 * @var float
	 */
	private $budgetCommande2;

	/**
	 * Budget commande3.
	 *
	 * @var float
	 */
	private $budgetCommande3;

	/**
	 * Budget commande4.
	 *
	 * @var float
	 */
	private $budgetCommande4;

	/**
	 * Budget commande5.
	 *
	 * @var float
	 */
	private $budgetCommande5;

	/**
	 * Budget commande6.
	 *
	 * @var float
	 */
	private $budgetCommande6;

	/**
	 * Budget commande7.
	 *
	 * @var float
	 */
	private $budgetCommande7;

	/**
	 * Budget commande8.
	 *
	 * @var float
	 */
	private $budgetCommande8;

	/**
	 * Budget commande9.
	 *
	 * @var float
	 */
	private $budgetCommande9;

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
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the budget commande1.
	 *
	 * @return float Returns the budget commande1.
	 */
	public function getBudgetCommande1() {
		return $this->budgetCommande1;
	}

	/**
	 * Get the budget commande10.
	 *
	 * @return float Returns the budget commande10.
	 */
	public function getBudgetCommande10() {
		return $this->budgetCommande10;
	}

	/**
	 * Get the budget commande11.
	 *
	 * @return float Returns the budget commande11.
	 */
	public function getBudgetCommande11() {
		return $this->budgetCommande11;
	}

	/**
	 * Get the budget commande12.
	 *
	 * @return float Returns the budget commande12.
	 */
	public function getBudgetCommande12() {
		return $this->budgetCommande12;
	}

	/**
	 * Get the budget commande2.
	 *
	 * @return float Returns the budget commande2.
	 */
	public function getBudgetCommande2() {
		return $this->budgetCommande2;
	}

	/**
	 * Get the budget commande3.
	 *
	 * @return float Returns the budget commande3.
	 */
	public function getBudgetCommande3() {
		return $this->budgetCommande3;
	}

	/**
	 * Get the budget commande4.
	 *
	 * @return float Returns the budget commande4.
	 */
	public function getBudgetCommande4() {
		return $this->budgetCommande4;
	}

	/**
	 * Get the budget commande5.
	 *
	 * @return float Returns the budget commande5.
	 */
	public function getBudgetCommande5() {
		return $this->budgetCommande5;
	}

	/**
	 * Get the budget commande6.
	 *
	 * @return float Returns the budget commande6.
	 */
	public function getBudgetCommande6() {
		return $this->budgetCommande6;
	}

	/**
	 * Get the budget commande7.
	 *
	 * @return float Returns the budget commande7.
	 */
	public function getBudgetCommande7() {
		return $this->budgetCommande7;
	}

	/**
	 * Get the budget commande8.
	 *
	 * @return float Returns the budget commande8.
	 */
	public function getBudgetCommande8() {
		return $this->budgetCommande8;
	}

	/**
	 * Get the budget commande9.
	 *
	 * @return float Returns the budget commande9.
	 */
	public function getBudgetCommande9() {
		return $this->budgetCommande9;
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
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
	}

	/**
	 * Set the budget commande1.
	 *
	 * @param float $budgetCommande1 The budget commande1.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande1($budgetCommande1) {
		$this->budgetCommande1 = $budgetCommande1;
		return $this;
	}

	/**
	 * Set the budget commande10.
	 *
	 * @param float $budgetCommande10 The budget commande10.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande10($budgetCommande10) {
		$this->budgetCommande10 = $budgetCommande10;
		return $this;
	}

	/**
	 * Set the budget commande11.
	 *
	 * @param float $budgetCommande11 The budget commande11.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande11($budgetCommande11) {
		$this->budgetCommande11 = $budgetCommande11;
		return $this;
	}

	/**
	 * Set the budget commande12.
	 *
	 * @param float $budgetCommande12 The budget commande12.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande12($budgetCommande12) {
		$this->budgetCommande12 = $budgetCommande12;
		return $this;
	}

	/**
	 * Set the budget commande2.
	 *
	 * @param float $budgetCommande2 The budget commande2.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande2($budgetCommande2) {
		$this->budgetCommande2 = $budgetCommande2;
		return $this;
	}

	/**
	 * Set the budget commande3.
	 *
	 * @param float $budgetCommande3 The budget commande3.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande3($budgetCommande3) {
		$this->budgetCommande3 = $budgetCommande3;
		return $this;
	}

	/**
	 * Set the budget commande4.
	 *
	 * @param float $budgetCommande4 The budget commande4.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande4($budgetCommande4) {
		$this->budgetCommande4 = $budgetCommande4;
		return $this;
	}

	/**
	 * Set the budget commande5.
	 *
	 * @param float $budgetCommande5 The budget commande5.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande5($budgetCommande5) {
		$this->budgetCommande5 = $budgetCommande5;
		return $this;
	}

	/**
	 * Set the budget commande6.
	 *
	 * @param float $budgetCommande6 The budget commande6.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande6($budgetCommande6) {
		$this->budgetCommande6 = $budgetCommande6;
		return $this;
	}

	/**
	 * Set the budget commande7.
	 *
	 * @param float $budgetCommande7 The budget commande7.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande7($budgetCommande7) {
		$this->budgetCommande7 = $budgetCommande7;
		return $this;
	}

	/**
	 * Set the budget commande8.
	 *
	 * @param float $budgetCommande8 The budget commande8.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande8($budgetCommande8) {
		$this->budgetCommande8 = $budgetCommande8;
		return $this;
	}

	/**
	 * Set the budget commande9.
	 *
	 * @param float $budgetCommande9 The budget commande9.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setBudgetCommande9($budgetCommande9) {
		$this->budgetCommande9 = $budgetCommande9;
		return $this;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return ChantiersBudgetCommande Returns this chantiers budget commande.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

}
