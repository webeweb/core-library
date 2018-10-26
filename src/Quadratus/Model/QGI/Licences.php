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
 * Licences model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Licences {

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code client distr.
	 *
	 * @var string
	 */
	private $codeClientDistr;

	/**
	 * Code produit.
	 *
	 * @var string
	 */
	private $codeProduit;

	/**
	 * Commentaire.
	 *
	 * @var string
	 */
	private $commentaire;

	/**
	 * Cp ville.
	 *
	 * @var string
	 */
	private $cpVille;

	/**
	 * Date creation.
	 *
	 * @var DateTime
	 */
	private $dateCreation;

	/**
	 * Demo.
	 *
	 * @var boolean
	 */
	private $demo;

	/**
	 * Licence.
	 *
	 * @var string
	 */
	private $licence;

	/**
	 * Nom client.
	 *
	 * @var string
	 */
	private $nomClient;

	/**
	 * Nombre postes.
	 *
	 * @var int
	 */
	private $nombrePostes;

	/**
	 * Option1.
	 *
	 * @var string
	 */
	private $option1;

	/**
	 * Option2.
	 *
	 * @var string
	 */
	private $option2;

	/**
	 * Option3.
	 *
	 * @var string
	 */
	private $option3;

	/**
	 * Option4.
	 *
	 * @var string
	 */
	private $option4;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Support.
	 *
	 * @var string
	 */
	private $support;

	/**
	 * Type reseau.
	 *
	 * @var string
	 */
	private $typeReseau;

	/**
	 * Version.
	 *
	 * @var string
	 */
	private $version;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the code client distr.
	 *
	 * @return string Returns the code client distr.
	 */
	public function getCodeClientDistr() {
		return $this->codeClientDistr;
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
	 * Get the commentaire.
	 *
	 * @return string Returns the commentaire.
	 */
	public function getCommentaire() {
		return $this->commentaire;
	}

	/**
	 * Get the cp ville.
	 *
	 * @return string Returns the cp ville.
	 */
	public function getCpVille() {
		return $this->cpVille;
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
	 * Get the demo.
	 *
	 * @return boolean Returns the demo.
	 */
	public function getDemo() {
		return $this->demo;
	}

	/**
	 * Get the licence.
	 *
	 * @return string Returns the licence.
	 */
	public function getLicence() {
		return $this->licence;
	}

	/**
	 * Get the nom client.
	 *
	 * @return string Returns the nom client.
	 */
	public function getNomClient() {
		return $this->nomClient;
	}

	/**
	 * Get the nombre postes.
	 *
	 * @return int Returns the nombre postes.
	 */
	public function getNombrePostes() {
		return $this->nombrePostes;
	}

	/**
	 * Get the option1.
	 *
	 * @return string Returns the option1.
	 */
	public function getOption1() {
		return $this->option1;
	}

	/**
	 * Get the option2.
	 *
	 * @return string Returns the option2.
	 */
	public function getOption2() {
		return $this->option2;
	}

	/**
	 * Get the option3.
	 *
	 * @return string Returns the option3.
	 */
	public function getOption3() {
		return $this->option3;
	}

	/**
	 * Get the option4.
	 *
	 * @return string Returns the option4.
	 */
	public function getOption4() {
		return $this->option4;
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
	 * Get the support.
	 *
	 * @return string Returns the support.
	 */
	public function getSupport() {
		return $this->support;
	}

	/**
	 * Get the type reseau.
	 *
	 * @return string Returns the type reseau.
	 */
	public function getTypeReseau() {
		return $this->typeReseau;
	}

	/**
	 * Get the version.
	 *
	 * @return string Returns the version.
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Licences Returns this licences.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code client distr.
	 *
	 * @param string $codeClientDistr The code client distr.
	 * @return Licences Returns this licences.
	 */
	public function setCodeClientDistr($codeClientDistr) {
		$this->codeClientDistr = $codeClientDistr;
		return $this;
	}

	/**
	 * Set the code produit.
	 *
	 * @param string $codeProduit The code produit.
	 * @return Licences Returns this licences.
	 */
	public function setCodeProduit($codeProduit) {
		$this->codeProduit = $codeProduit;
		return $this;
	}

	/**
	 * Set the commentaire.
	 *
	 * @param string $commentaire The commentaire.
	 * @return Licences Returns this licences.
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
		return $this;
	}

	/**
	 * Set the cp ville.
	 *
	 * @param string $cpVille The cp ville.
	 * @return Licences Returns this licences.
	 */
	public function setCpVille($cpVille) {
		$this->cpVille = $cpVille;
		return $this;
	}

	/**
	 * Set the date creation.
	 *
	 * @param DateTime $dateCreation The date creation.
	 * @return Licences Returns this licences.
	 */
	public function setDateCreation(DateTime $dateCreation = null) {
		$this->dateCreation = $dateCreation;
		return $this;
	}

	/**
	 * Set the demo.
	 *
	 * @param boolean $demo The demo.
	 * @return Licences Returns this licences.
	 */
	public function setDemo($demo) {
		$this->demo = $demo;
		return $this;
	}

	/**
	 * Set the licence.
	 *
	 * @param string $licence The licence.
	 * @return Licences Returns this licences.
	 */
	public function setLicence($licence) {
		$this->licence = $licence;
		return $this;
	}

	/**
	 * Set the nom client.
	 *
	 * @param string $nomClient The nom client.
	 * @return Licences Returns this licences.
	 */
	public function setNomClient($nomClient) {
		$this->nomClient = $nomClient;
		return $this;
	}

	/**
	 * Set the nombre postes.
	 *
	 * @param int $nombrePostes The nombre postes.
	 * @return Licences Returns this licences.
	 */
	public function setNombrePostes($nombrePostes) {
		$this->nombrePostes = $nombrePostes;
		return $this;
	}

	/**
	 * Set the option1.
	 *
	 * @param string $option1 The option1.
	 * @return Licences Returns this licences.
	 */
	public function setOption1($option1) {
		$this->option1 = $option1;
		return $this;
	}

	/**
	 * Set the option2.
	 *
	 * @param string $option2 The option2.
	 * @return Licences Returns this licences.
	 */
	public function setOption2($option2) {
		$this->option2 = $option2;
		return $this;
	}

	/**
	 * Set the option3.
	 *
	 * @param string $option3 The option3.
	 * @return Licences Returns this licences.
	 */
	public function setOption3($option3) {
		$this->option3 = $option3;
		return $this;
	}

	/**
	 * Set the option4.
	 *
	 * @param string $option4 The option4.
	 * @return Licences Returns this licences.
	 */
	public function setOption4($option4) {
		$this->option4 = $option4;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return Licences Returns this licences.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the support.
	 *
	 * @param string $support The support.
	 * @return Licences Returns this licences.
	 */
	public function setSupport($support) {
		$this->support = $support;
		return $this;
	}

	/**
	 * Set the type reseau.
	 *
	 * @param string $typeReseau The type reseau.
	 * @return Licences Returns this licences.
	 */
	public function setTypeReseau($typeReseau) {
		$this->typeReseau = $typeReseau;
		return $this;
	}

	/**
	 * Set the version.
	 *
	 * @param string $version The version.
	 * @return Licences Returns this licences.
	 */
	public function setVersion($version) {
		$this->version = $version;
		return $this;
	}

}
