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
 * Tarifs model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Tarifs {

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code article.
	 *
	 * @var string
	 */
	private $codeArticle;

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
	 * Code col creation.
	 *
	 * @var string
	 */
	private $codeColCreation;

	/**
	 * Code col modification.
	 *
	 * @var string
	 */
	private $codeColModification;

	/**
	 * Coeff_ tr1.
	 *
	 * @var float
	 */
	private $coeff_Tr1;

	/**
	 * Coeff_ tr2.
	 *
	 * @var float
	 */
	private $coeff_Tr2;

	/**
	 * Coeff_ tr3.
	 *
	 * @var float
	 */
	private $coeff_Tr3;

	/**
	 * Coeff_ tr4.
	 *
	 * @var float
	 */
	private $coeff_Tr4;

	/**
	 * Coeff_ tr5.
	 *
	 * @var float
	 */
	private $coeff_Tr5;

	/**
	 * Date creation.
	 *
	 * @var DateTime
	 */
	private $dateCreation;

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
	 * Date modification.
	 *
	 * @var DateTime
	 */
	private $dateModification;

	/**
	 * Fam article.
	 *
	 * @var string
	 */
	private $famArticle;

	/**
	 * Fam client.
	 *
	 * @var string
	 */
	private $famClient;

	/**
	 * P u article.
	 *
	 * @var boolean
	 */
	private $pUArticle;

	/**
	 * P u base.
	 *
	 * @var float
	 */
	private $pUBase;

	/**
	 * P u_ tr1.
	 *
	 * @var float
	 */
	private $pU_Tr1;

	/**
	 * P u_ tr2.
	 *
	 * @var float
	 */
	private $pU_Tr2;

	/**
	 * P u_ tr3.
	 *
	 * @var float
	 */
	private $pU_Tr3;

	/**
	 * P u_ tr4.
	 *
	 * @var float
	 */
	private $pU_Tr4;

	/**
	 * P u_ tr5.
	 *
	 * @var float
	 */
	private $pU_Tr5;

	/**
	 * Prix net_ tr1.
	 *
	 * @var boolean
	 */
	private $prixNet_Tr1;

	/**
	 * Prix net_ tr2.
	 *
	 * @var boolean
	 */
	private $prixNet_Tr2;

	/**
	 * Prix net_ tr3.
	 *
	 * @var boolean
	 */
	private $prixNet_Tr3;

	/**
	 * Prix net_ tr4.
	 *
	 * @var boolean
	 */
	private $prixNet_Tr4;

	/**
	 * Prix net_ tr5.
	 *
	 * @var boolean
	 */
	private $prixNet_Tr5;

	/**
	 * Qte_ tr1.
	 *
	 * @var float
	 */
	private $qte_Tr1;

	/**
	 * Qte_ tr2.
	 *
	 * @var float
	 */
	private $qte_Tr2;

	/**
	 * Qte_ tr3.
	 *
	 * @var float
	 */
	private $qte_Tr3;

	/**
	 * Qte_ tr4.
	 *
	 * @var float
	 */
	private $qte_Tr4;

	/**
	 * Qte_ tr5.
	 *
	 * @var float
	 */
	private $qte_Tr5;

	/**
	 * Sous fam client.
	 *
	 * @var string
	 */
	private $sousFamClient;

	/**
	 * Type appli coef.
	 *
	 * @var string
	 */
	private $typeAppliCoef;

	/**
	 * Type article.
	 *
	 * @var string
	 */
	private $typeArticle;

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
	 * Get the code article.
	 *
	 * @return string Returns the code article.
	 */
	public function getCodeArticle() {
		return $this->codeArticle;
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
	 * Get the code col creation.
	 *
	 * @return string Returns the code col creation.
	 */
	public function getCodeColCreation() {
		return $this->codeColCreation;
	}

	/**
	 * Get the code col modification.
	 *
	 * @return string Returns the code col modification.
	 */
	public function getCodeColModification() {
		return $this->codeColModification;
	}

	/**
	 * Get the coeff_ tr1.
	 *
	 * @return float Returns the coeff_ tr1.
	 */
	public function getCoeff_Tr1() {
		return $this->coeff_Tr1;
	}

	/**
	 * Get the coeff_ tr2.
	 *
	 * @return float Returns the coeff_ tr2.
	 */
	public function getCoeff_Tr2() {
		return $this->coeff_Tr2;
	}

	/**
	 * Get the coeff_ tr3.
	 *
	 * @return float Returns the coeff_ tr3.
	 */
	public function getCoeff_Tr3() {
		return $this->coeff_Tr3;
	}

	/**
	 * Get the coeff_ tr4.
	 *
	 * @return float Returns the coeff_ tr4.
	 */
	public function getCoeff_Tr4() {
		return $this->coeff_Tr4;
	}

	/**
	 * Get the coeff_ tr5.
	 *
	 * @return float Returns the coeff_ tr5.
	 */
	public function getCoeff_Tr5() {
		return $this->coeff_Tr5;
	}

	/**
	 * Get the date creation.
	 *
	 * @return DateTime Returns the date creation.
	 */
	public function getDateCreation() {
		return $this->dateCreation;
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
	 * Get the date modification.
	 *
	 * @return DateTime Returns the date modification.
	 */
	public function getDateModification() {
		return $this->dateModification;
	}

	/**
	 * Get the fam article.
	 *
	 * @return string Returns the fam article.
	 */
	public function getFamArticle() {
		return $this->famArticle;
	}

	/**
	 * Get the fam client.
	 *
	 * @return string Returns the fam client.
	 */
	public function getFamClient() {
		return $this->famClient;
	}

	/**
	 * Get the p u article.
	 *
	 * @return boolean Returns the p u article.
	 */
	public function getPUArticle() {
		return $this->pUArticle;
	}

	/**
	 * Get the p u base.
	 *
	 * @return float Returns the p u base.
	 */
	public function getPUBase() {
		return $this->pUBase;
	}

	/**
	 * Get the p u_ tr1.
	 *
	 * @return float Returns the p u_ tr1.
	 */
	public function getPU_Tr1() {
		return $this->pU_Tr1;
	}

	/**
	 * Get the p u_ tr2.
	 *
	 * @return float Returns the p u_ tr2.
	 */
	public function getPU_Tr2() {
		return $this->pU_Tr2;
	}

	/**
	 * Get the p u_ tr3.
	 *
	 * @return float Returns the p u_ tr3.
	 */
	public function getPU_Tr3() {
		return $this->pU_Tr3;
	}

	/**
	 * Get the p u_ tr4.
	 *
	 * @return float Returns the p u_ tr4.
	 */
	public function getPU_Tr4() {
		return $this->pU_Tr4;
	}

	/**
	 * Get the p u_ tr5.
	 *
	 * @return float Returns the p u_ tr5.
	 */
	public function getPU_Tr5() {
		return $this->pU_Tr5;
	}

	/**
	 * Get the prix net_ tr1.
	 *
	 * @return boolean Returns the prix net_ tr1.
	 */
	public function getPrixNet_Tr1() {
		return $this->prixNet_Tr1;
	}

	/**
	 * Get the prix net_ tr2.
	 *
	 * @return boolean Returns the prix net_ tr2.
	 */
	public function getPrixNet_Tr2() {
		return $this->prixNet_Tr2;
	}

	/**
	 * Get the prix net_ tr3.
	 *
	 * @return boolean Returns the prix net_ tr3.
	 */
	public function getPrixNet_Tr3() {
		return $this->prixNet_Tr3;
	}

	/**
	 * Get the prix net_ tr4.
	 *
	 * @return boolean Returns the prix net_ tr4.
	 */
	public function getPrixNet_Tr4() {
		return $this->prixNet_Tr4;
	}

	/**
	 * Get the prix net_ tr5.
	 *
	 * @return boolean Returns the prix net_ tr5.
	 */
	public function getPrixNet_Tr5() {
		return $this->prixNet_Tr5;
	}

	/**
	 * Get the qte_ tr1.
	 *
	 * @return float Returns the qte_ tr1.
	 */
	public function getQte_Tr1() {
		return $this->qte_Tr1;
	}

	/**
	 * Get the qte_ tr2.
	 *
	 * @return float Returns the qte_ tr2.
	 */
	public function getQte_Tr2() {
		return $this->qte_Tr2;
	}

	/**
	 * Get the qte_ tr3.
	 *
	 * @return float Returns the qte_ tr3.
	 */
	public function getQte_Tr3() {
		return $this->qte_Tr3;
	}

	/**
	 * Get the qte_ tr4.
	 *
	 * @return float Returns the qte_ tr4.
	 */
	public function getQte_Tr4() {
		return $this->qte_Tr4;
	}

	/**
	 * Get the qte_ tr5.
	 *
	 * @return float Returns the qte_ tr5.
	 */
	public function getQte_Tr5() {
		return $this->qte_Tr5;
	}

	/**
	 * Get the sous fam client.
	 *
	 * @return string Returns the sous fam client.
	 */
	public function getSousFamClient() {
		return $this->sousFamClient;
	}

	/**
	 * Get the type appli coef.
	 *
	 * @return string Returns the type appli coef.
	 */
	public function getTypeAppliCoef() {
		return $this->typeAppliCoef;
	}

	/**
	 * Get the type article.
	 *
	 * @return string Returns the type article.
	 */
	public function getTypeArticle() {
		return $this->typeArticle;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code col creation.
	 *
	 * @param string $codeColCreation The code col creation.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeColCreation($codeColCreation) {
		$this->codeColCreation = $codeColCreation;
		return $this;
	}

	/**
	 * Set the code col modification.
	 *
	 * @param string $codeColModification The code col modification.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCodeColModification($codeColModification) {
		$this->codeColModification = $codeColModification;
		return $this;
	}

	/**
	 * Set the coeff_ tr1.
	 *
	 * @param float $coeff_Tr1 The coeff_ tr1.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCoeff_Tr1($coeff_Tr1) {
		$this->coeff_Tr1 = $coeff_Tr1;
		return $this;
	}

	/**
	 * Set the coeff_ tr2.
	 *
	 * @param float $coeff_Tr2 The coeff_ tr2.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCoeff_Tr2($coeff_Tr2) {
		$this->coeff_Tr2 = $coeff_Tr2;
		return $this;
	}

	/**
	 * Set the coeff_ tr3.
	 *
	 * @param float $coeff_Tr3 The coeff_ tr3.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCoeff_Tr3($coeff_Tr3) {
		$this->coeff_Tr3 = $coeff_Tr3;
		return $this;
	}

	/**
	 * Set the coeff_ tr4.
	 *
	 * @param float $coeff_Tr4 The coeff_ tr4.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCoeff_Tr4($coeff_Tr4) {
		$this->coeff_Tr4 = $coeff_Tr4;
		return $this;
	}

	/**
	 * Set the coeff_ tr5.
	 *
	 * @param float $coeff_Tr5 The coeff_ tr5.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setCoeff_Tr5($coeff_Tr5) {
		$this->coeff_Tr5 = $coeff_Tr5;
		return $this;
	}

	/**
	 * Set the date creation.
	 *
	 * @param DateTime $dateCreation The date creation.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setDateCreation(DateTime $dateCreation = null) {
		$this->dateCreation = $dateCreation;
		return $this;
	}

	/**
	 * Set the date debut.
	 *
	 * @param DateTime $dateDebut The date debut.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setDateDebut(DateTime $dateDebut = null) {
		$this->dateDebut = $dateDebut;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the date modification.
	 *
	 * @param DateTime $dateModification The date modification.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setDateModification(DateTime $dateModification = null) {
		$this->dateModification = $dateModification;
		return $this;
	}

	/**
	 * Set the fam article.
	 *
	 * @param string $famArticle The fam article.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setFamArticle($famArticle) {
		$this->famArticle = $famArticle;
		return $this;
	}

	/**
	 * Set the fam client.
	 *
	 * @param string $famClient The fam client.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setFamClient($famClient) {
		$this->famClient = $famClient;
		return $this;
	}

	/**
	 * Set the p u article.
	 *
	 * @param boolean $pUArticle The p u article.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPUArticle($pUArticle) {
		$this->pUArticle = $pUArticle;
		return $this;
	}

	/**
	 * Set the p u base.
	 *
	 * @param float $pUBase The p u base.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPUBase($pUBase) {
		$this->pUBase = $pUBase;
		return $this;
	}

	/**
	 * Set the p u_ tr1.
	 *
	 * @param float $pU_Tr1 The p u_ tr1.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPU_Tr1($pU_Tr1) {
		$this->pU_Tr1 = $pU_Tr1;
		return $this;
	}

	/**
	 * Set the p u_ tr2.
	 *
	 * @param float $pU_Tr2 The p u_ tr2.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPU_Tr2($pU_Tr2) {
		$this->pU_Tr2 = $pU_Tr2;
		return $this;
	}

	/**
	 * Set the p u_ tr3.
	 *
	 * @param float $pU_Tr3 The p u_ tr3.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPU_Tr3($pU_Tr3) {
		$this->pU_Tr3 = $pU_Tr3;
		return $this;
	}

	/**
	 * Set the p u_ tr4.
	 *
	 * @param float $pU_Tr4 The p u_ tr4.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPU_Tr4($pU_Tr4) {
		$this->pU_Tr4 = $pU_Tr4;
		return $this;
	}

	/**
	 * Set the p u_ tr5.
	 *
	 * @param float $pU_Tr5 The p u_ tr5.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPU_Tr5($pU_Tr5) {
		$this->pU_Tr5 = $pU_Tr5;
		return $this;
	}

	/**
	 * Set the prix net_ tr1.
	 *
	 * @param boolean $prixNet_Tr1 The prix net_ tr1.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPrixNet_Tr1($prixNet_Tr1) {
		$this->prixNet_Tr1 = $prixNet_Tr1;
		return $this;
	}

	/**
	 * Set the prix net_ tr2.
	 *
	 * @param boolean $prixNet_Tr2 The prix net_ tr2.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPrixNet_Tr2($prixNet_Tr2) {
		$this->prixNet_Tr2 = $prixNet_Tr2;
		return $this;
	}

	/**
	 * Set the prix net_ tr3.
	 *
	 * @param boolean $prixNet_Tr3 The prix net_ tr3.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPrixNet_Tr3($prixNet_Tr3) {
		$this->prixNet_Tr3 = $prixNet_Tr3;
		return $this;
	}

	/**
	 * Set the prix net_ tr4.
	 *
	 * @param boolean $prixNet_Tr4 The prix net_ tr4.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPrixNet_Tr4($prixNet_Tr4) {
		$this->prixNet_Tr4 = $prixNet_Tr4;
		return $this;
	}

	/**
	 * Set the prix net_ tr5.
	 *
	 * @param boolean $prixNet_Tr5 The prix net_ tr5.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setPrixNet_Tr5($prixNet_Tr5) {
		$this->prixNet_Tr5 = $prixNet_Tr5;
		return $this;
	}

	/**
	 * Set the qte_ tr1.
	 *
	 * @param float $qte_Tr1 The qte_ tr1.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setQte_Tr1($qte_Tr1) {
		$this->qte_Tr1 = $qte_Tr1;
		return $this;
	}

	/**
	 * Set the qte_ tr2.
	 *
	 * @param float $qte_Tr2 The qte_ tr2.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setQte_Tr2($qte_Tr2) {
		$this->qte_Tr2 = $qte_Tr2;
		return $this;
	}

	/**
	 * Set the qte_ tr3.
	 *
	 * @param float $qte_Tr3 The qte_ tr3.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setQte_Tr3($qte_Tr3) {
		$this->qte_Tr3 = $qte_Tr3;
		return $this;
	}

	/**
	 * Set the qte_ tr4.
	 *
	 * @param float $qte_Tr4 The qte_ tr4.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setQte_Tr4($qte_Tr4) {
		$this->qte_Tr4 = $qte_Tr4;
		return $this;
	}

	/**
	 * Set the qte_ tr5.
	 *
	 * @param float $qte_Tr5 The qte_ tr5.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setQte_Tr5($qte_Tr5) {
		$this->qte_Tr5 = $qte_Tr5;
		return $this;
	}

	/**
	 * Set the sous fam client.
	 *
	 * @param string $sousFamClient The sous fam client.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setSousFamClient($sousFamClient) {
		$this->sousFamClient = $sousFamClient;
		return $this;
	}

	/**
	 * Set the type appli coef.
	 *
	 * @param string $typeAppliCoef The type appli coef.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setTypeAppliCoef($typeAppliCoef) {
		$this->typeAppliCoef = $typeAppliCoef;
		return $this;
	}

	/**
	 * Set the type article.
	 *
	 * @param string $typeArticle The type article.
	 * @return Tarifs Returns this tarifs.
	 */
	public function setTypeArticle($typeArticle) {
		$this->typeArticle = $typeArticle;
		return $this;
	}

}
