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
 * Lignes bulletin compl model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class LignesBulletinCompl {

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
	 * Indice periode.
	 *
	 * @var int
	 */
	private $indicePeriode;

	/**
	 * Num ligne bulletin.
	 *
	 * @var int
	 */
	private $numLigneBulletin;

	/**
	 * Numero employe.
	 *
	 * @var string
	 */
	private $numeroEmploye;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Periodicite.
	 *
	 * @var string
	 */
	private $periodicite;

	/**
	 * Type regul.
	 *
	 * @var string
	 */
	private $typeRegul;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the indice periode.
	 *
	 * @return int Returns the indice periode.
	 */
	public function getIndicePeriode() {
		return $this->indicePeriode;
	}

	/**
	 * Get the num ligne bulletin.
	 *
	 * @return int Returns the num ligne bulletin.
	 */
	public function getNumLigneBulletin() {
		return $this->numLigneBulletin;
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
	 * Get the periode.
	 *
	 * @return DateTime Returns the periode.
	 */
	public function getPeriode() {
		return $this->periode;
	}

	/**
	 * Get the periodicite.
	 *
	 * @return string Returns the periodicite.
	 */
	public function getPeriodicite() {
		return $this->periodicite;
	}

	/**
	 * Get the type regul.
	 *
	 * @return string Returns the type regul.
	 */
	public function getTypeRegul() {
		return $this->typeRegul;
	}

	/**
	 * Set the date debut.
	 *
	 * @param DateTime $dateDebut The date debut.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setDateDebut(DateTime $dateDebut = null) {
		$this->dateDebut = $dateDebut;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the indice periode.
	 *
	 * @param int $indicePeriode The indice periode.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setIndicePeriode($indicePeriode) {
		$this->indicePeriode = $indicePeriode;
		return $this;
	}

	/**
	 * Set the num ligne bulletin.
	 *
	 * @param int $numLigneBulletin The num ligne bulletin.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setNumLigneBulletin($numLigneBulletin) {
		$this->numLigneBulletin = $numLigneBulletin;
		return $this;
	}

	/**
	 * Set the numero employe.
	 *
	 * @param string $numeroEmploye The numero employe.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setNumeroEmploye($numeroEmploye) {
		$this->numeroEmploye = $numeroEmploye;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

	/**
	 * Set the periodicite.
	 *
	 * @param string $periodicite The periodicite.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setPeriodicite($periodicite) {
		$this->periodicite = $periodicite;
		return $this;
	}

	/**
	 * Set the type regul.
	 *
	 * @param string $typeRegul The type regul.
	 * @return LignesBulletinCompl Returns this lignes bulletin compl.
	 */
	public function setTypeRegul($typeRegul) {
		$this->typeRegul = $typeRegul;
		return $this;
	}

}
