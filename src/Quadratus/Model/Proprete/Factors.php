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


/**
 * Factors model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class Factors {

	/**
	 * B i c.
	 *
	 * @var string
	 */
	private $bIC;

	/**
	 * B t q.
	 *
	 * @var string
	 */
	private $bTQ;

	/**
	 * Bureau distributeur.
	 *
	 * @var string
	 */
	private $bureauDistributeur;

	/**
	 * Code factor.
	 *
	 * @var string
	 */
	private $codeFactor;

	/**
	 * Code postal.
	 *
	 * @var string
	 */
	private $codePostal;

	/**
	 * Complement.
	 *
	 * @var string
	 */
	private $complement;

	/**
	 * Domiciliation bancaire1.
	 *
	 * @var string
	 */
	private $domiciliationBancaire1;

	/**
	 * Domiciliation bancaire2.
	 *
	 * @var string
	 */
	private $domiciliationBancaire2;

	/**
	 * I b a n.
	 *
	 * @var string
	 */
	private $iBAN;

	/**
	 * Nom.
	 *
	 * @var string
	 */
	private $nom;

	/**
	 * Nom suite.
	 *
	 * @var string
	 */
	private $nomSuite;

	/**
	 * Nom voie.
	 *
	 * @var string
	 */
	private $nomVoie;

	/**
	 * Num voie.
	 *
	 * @var string
	 */
	private $numVoie;

	/**
	 * R i b.
	 *
	 * @var string
	 */
	private $rIB;

	/**
	 * Telephone.
	 *
	 * @var string
	 */
	private $telephone;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the b i c.
	 *
	 * @return string Returns the b i c.
	 */
	public function getBIC() {
		return $this->bIC;
	}

	/**
	 * Get the b t q.
	 *
	 * @return string Returns the b t q.
	 */
	public function getBTQ() {
		return $this->bTQ;
	}

	/**
	 * Get the bureau distributeur.
	 *
	 * @return string Returns the bureau distributeur.
	 */
	public function getBureauDistributeur() {
		return $this->bureauDistributeur;
	}

	/**
	 * Get the code factor.
	 *
	 * @return string Returns the code factor.
	 */
	public function getCodeFactor() {
		return $this->codeFactor;
	}

	/**
	 * Get the code postal.
	 *
	 * @return string Returns the code postal.
	 */
	public function getCodePostal() {
		return $this->codePostal;
	}

	/**
	 * Get the complement.
	 *
	 * @return string Returns the complement.
	 */
	public function getComplement() {
		return $this->complement;
	}

	/**
	 * Get the domiciliation bancaire1.
	 *
	 * @return string Returns the domiciliation bancaire1.
	 */
	public function getDomiciliationBancaire1() {
		return $this->domiciliationBancaire1;
	}

	/**
	 * Get the domiciliation bancaire2.
	 *
	 * @return string Returns the domiciliation bancaire2.
	 */
	public function getDomiciliationBancaire2() {
		return $this->domiciliationBancaire2;
	}

	/**
	 * Get the i b a n.
	 *
	 * @return string Returns the i b a n.
	 */
	public function getIBAN() {
		return $this->iBAN;
	}

	/**
	 * Get the nom.
	 *
	 * @return string Returns the nom.
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * Get the nom suite.
	 *
	 * @return string Returns the nom suite.
	 */
	public function getNomSuite() {
		return $this->nomSuite;
	}

	/**
	 * Get the nom voie.
	 *
	 * @return string Returns the nom voie.
	 */
	public function getNomVoie() {
		return $this->nomVoie;
	}

	/**
	 * Get the num voie.
	 *
	 * @return string Returns the num voie.
	 */
	public function getNumVoie() {
		return $this->numVoie;
	}

	/**
	 * Get the r i b.
	 *
	 * @return string Returns the r i b.
	 */
	public function getRIB() {
		return $this->rIB;
	}

	/**
	 * Get the telephone.
	 *
	 * @return string Returns the telephone.
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Set the b i c.
	 *
	 * @param string $bIC The b i c.
	 * @return Factors Returns this factors.
	 */
	public function setBIC($bIC) {
		$this->bIC = $bIC;
		return $this;
	}

	/**
	 * Set the b t q.
	 *
	 * @param string $bTQ The b t q.
	 * @return Factors Returns this factors.
	 */
	public function setBTQ($bTQ) {
		$this->bTQ = $bTQ;
		return $this;
	}

	/**
	 * Set the bureau distributeur.
	 *
	 * @param string $bureauDistributeur The bureau distributeur.
	 * @return Factors Returns this factors.
	 */
	public function setBureauDistributeur($bureauDistributeur) {
		$this->bureauDistributeur = $bureauDistributeur;
		return $this;
	}

	/**
	 * Set the code factor.
	 *
	 * @param string $codeFactor The code factor.
	 * @return Factors Returns this factors.
	 */
	public function setCodeFactor($codeFactor) {
		$this->codeFactor = $codeFactor;
		return $this;
	}

	/**
	 * Set the code postal.
	 *
	 * @param string $codePostal The code postal.
	 * @return Factors Returns this factors.
	 */
	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
		return $this;
	}

	/**
	 * Set the complement.
	 *
	 * @param string $complement The complement.
	 * @return Factors Returns this factors.
	 */
	public function setComplement($complement) {
		$this->complement = $complement;
		return $this;
	}

	/**
	 * Set the domiciliation bancaire1.
	 *
	 * @param string $domiciliationBancaire1 The domiciliation bancaire1.
	 * @return Factors Returns this factors.
	 */
	public function setDomiciliationBancaire1($domiciliationBancaire1) {
		$this->domiciliationBancaire1 = $domiciliationBancaire1;
		return $this;
	}

	/**
	 * Set the domiciliation bancaire2.
	 *
	 * @param string $domiciliationBancaire2 The domiciliation bancaire2.
	 * @return Factors Returns this factors.
	 */
	public function setDomiciliationBancaire2($domiciliationBancaire2) {
		$this->domiciliationBancaire2 = $domiciliationBancaire2;
		return $this;
	}

	/**
	 * Set the i b a n.
	 *
	 * @param string $iBAN The i b a n.
	 * @return Factors Returns this factors.
	 */
	public function setIBAN($iBAN) {
		$this->iBAN = $iBAN;
		return $this;
	}

	/**
	 * Set the nom.
	 *
	 * @param string $nom The nom.
	 * @return Factors Returns this factors.
	 */
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Set the nom suite.
	 *
	 * @param string $nomSuite The nom suite.
	 * @return Factors Returns this factors.
	 */
	public function setNomSuite($nomSuite) {
		$this->nomSuite = $nomSuite;
		return $this;
	}

	/**
	 * Set the nom voie.
	 *
	 * @param string $nomVoie The nom voie.
	 * @return Factors Returns this factors.
	 */
	public function setNomVoie($nomVoie) {
		$this->nomVoie = $nomVoie;
		return $this;
	}

	/**
	 * Set the num voie.
	 *
	 * @param string $numVoie The num voie.
	 * @return Factors Returns this factors.
	 */
	public function setNumVoie($numVoie) {
		$this->numVoie = $numVoie;
		return $this;
	}

	/**
	 * Set the r i b.
	 *
	 * @param string $rIB The r i b.
	 * @return Factors Returns this factors.
	 */
	public function setRIB($rIB) {
		$this->rIB = $rIB;
		return $this;
	}

	/**
	 * Set the telephone.
	 *
	 * @param string $telephone The telephone.
	 * @return Factors Returns this factors.
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		return $this;
	}

}
