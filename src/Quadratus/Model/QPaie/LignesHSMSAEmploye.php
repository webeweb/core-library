<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes h s m s a employe model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesHSMSAEmploye {

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Code unite.
	 *
	 * @var string
	 */
	private $codeUnite;

	/**
	 * Mt h s.
	 *
	 * @var int
	 */
	private $mtHS;

	/**
	 * Nb h s.
	 *
	 * @var float
	 */
	private $nbHS;

	/**
	 * Num ligne.
	 *
	 * @var string
	 */
	private $numLigne;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Numero employe2.
	 *
	 * @var string
	 */
	private $numeroEmploye2;

	/**
	 * Per deb.
	 *
	 * @var DateTime
	 */
	private $perDeb;

	/**
	 * Periode decla.
	 *
	 * @var DateTime
	 */
	private $periodeDecla;

	/**
	 * Taux h s.
	 *
	 * @var int
	 */
	private $tauxHS;

	/**
	 * Type remun h s.
	 *
	 * @var string
	 */
	private $typeRemunHS;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code etablissement.
	 *
	 * @return int Returns the code etablissement.
	 */
	public function getCodeEtablissement() {
		return $this->codeEtablissement;
	}

	/**
	 * Get the code unite.
	 *
	 * @return string Returns the code unite.
	 */
	public function getCodeUnite() {
		return $this->codeUnite;
	}

	/**
	 * Get the mt h s.
	 *
	 * @return int Returns the mt h s.
	 */
	public function getMtHS() {
		return $this->mtHS;
	}

	/**
	 * Get the nb h s.
	 *
	 * @return float Returns the nb h s.
	 */
	public function getNbHS() {
		return $this->nbHS;
	}

	/**
	 * Get the num ligne.
	 *
	 * @return string Returns the num ligne.
	 */
	public function getNumLigne() {
		return $this->numLigne;
	}

	/**
	 * Get the numero employe.
	 *
	 * @return string Returns the numero employe.
	 */
	public function getNumeroEmploye() {
		return $this->numeroEmploye;
	}

	/**
	 * Get the numero employe2.
	 *
	 * @return string Returns the numero employe2.
	 */
	public function getNumeroEmploye2() {
		return $this->numeroEmploye2;
	}

	/**
	 * Get the per deb.
	 *
	 * @return DateTime Returns the per deb.
	 */
	public function getPerDeb() {
		return $this->perDeb;
	}

	/**
	 * Get the periode decla.
	 *
	 * @return DateTime Returns the periode decla.
	 */
	public function getPeriodeDecla() {
		return $this->periodeDecla;
	}

	/**
	 * Get the taux h s.
	 *
	 * @return int Returns the taux h s.
	 */
	public function getTauxHS() {
		return $this->tauxHS;
	}

	/**
	 * Get the type remun h s.
	 *
	 * @return string Returns the type remun h s.
	 */
	public function getTypeRemunHS() {
		return $this->typeRemunHS;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the code unite.
	 *
	 * @param string $codeUnite The code unite.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setCodeUnite($codeUnite) {
		$this->codeUnite = $codeUnite;
		return $this;
	}

	/**
	 * Set the mt h s.
	 *
	 * @param int $mtHS The mt h s.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setMtHS($mtHS) {
		$this->mtHS = $mtHS;
		return $this;
	}

	/**
	 * Set the nb h s.
	 *
	 * @param float $nbHS The nb h s.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setNbHS($nbHS) {
		$this->nbHS = $nbHS;
		return $this;
	}

	/**
	 * Set the num ligne.
	 *
	 * @param string $numLigne The num ligne.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setNumLigne($numLigne) {
		$this->numLigne = $numLigne;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the numero employe2.
	 *
	 * @param string $numeroEmploye2 The numero employe2.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setNumeroEmploye2($numeroEmploye2) {
		$this->numeroEmploye2 = $numeroEmploye2;
		return $this;
	}

	/**
	 * Set the per deb.
	 *
	 * @param DateTime $perDeb The per deb.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setPerDeb(DateTime $perDeb = null) {
		$this->perDeb = $perDeb;
		return $this;
	}

	/**
	 * Set the periode decla.
	 *
	 * @param DateTime $periodeDecla The periode decla.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setPeriodeDecla(DateTime $periodeDecla = null) {
		$this->periodeDecla = $periodeDecla;
		return $this;
	}

	/**
	 * Set the taux h s.
	 *
	 * @param int $tauxHS The taux h s.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setTauxHS($tauxHS) {
		$this->tauxHS = $tauxHS;
		return $this;
	}

	/**
	 * Set the type remun h s.
	 *
	 * @param string $typeRemunHS The type remun h s.
	 * @return LignesHSMSAEmploye Returns this lignes h s m s a employe.
	 */
	public function setTypeRemunHS($typeRemunHS) {
		$this->typeRemunHS = $typeRemunHS;
		return $this;
	}

}
