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
 * Previsionnel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Previsionnel {

	/**
	 * Annee.
	 *
	 * @var int
	 */
	private $annee;

	/**
	 * Date application.
	 *
	 * @var DateTime
	 */
	private $dateApplication;

	/**
	 * Debut semaine.
	 *
	 * @var DateTime
	 */
	private $debutSemaine;

	/**
	 * Horaire prevu.
	 *
	 * @var float
	 */
	private $horairePrevu;

	/**
	 * Numero grille type.
	 *
	 * @var int
	 */
	private $numeroGrilleType;

	/**
	 * Numero semaine.
	 *
	 * @var string
	 */
	private $numeroSemaine;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the annee.
	 *
	 * @return int Returns the annee.
	 */
	public function getAnnee() {
		return $this->annee;
	}

	/**
	 * Get the date application.
	 *
	 * @return DateTime Returns the date application.
	 */
	public function getDateApplication() {
		return $this->dateApplication;
	}

	/**
	 * Get the debut semaine.
	 *
	 * @return DateTime Returns the debut semaine.
	 */
	public function getDebutSemaine() {
		return $this->debutSemaine;
	}

	/**
	 * Get the horaire prevu.
	 *
	 * @return float Returns the horaire prevu.
	 */
	public function getHorairePrevu() {
		return $this->horairePrevu;
	}

	/**
	 * Get the numero grille type.
	 *
	 * @return int Returns the numero grille type.
	 */
	public function getNumeroGrilleType() {
		return $this->numeroGrilleType;
	}

	/**
	 * Get the numero semaine.
	 *
	 * @return string Returns the numero semaine.
	 */
	public function getNumeroSemaine() {
		return $this->numeroSemaine;
	}

	/**
	 * Set the annee.
	 *
	 * @param int $annee The annee.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setAnnee($annee) {
		$this->annee = $annee;
		return $this;
	}

	/**
	 * Set the date application.
	 *
	 * @param DateTime $dateApplication The date application.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setDateApplication(DateTime $dateApplication = null) {
		$this->dateApplication = $dateApplication;
		return $this;
	}

	/**
	 * Set the debut semaine.
	 *
	 * @param DateTime $debutSemaine The debut semaine.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setDebutSemaine(DateTime $debutSemaine = null) {
		$this->debutSemaine = $debutSemaine;
		return $this;
	}

	/**
	 * Set the horaire prevu.
	 *
	 * @param float $horairePrevu The horaire prevu.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setHorairePrevu($horairePrevu) {
		$this->horairePrevu = $horairePrevu;
		return $this;
	}

	/**
	 * Set the numero grille type.
	 *
	 * @param int $numeroGrilleType The numero grille type.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setNumeroGrilleType($numeroGrilleType) {
		$this->numeroGrilleType = $numeroGrilleType;
		return $this;
	}

	/**
	 * Set the numero semaine.
	 *
	 * @param string $numeroSemaine The numero semaine.
	 * @return Previsionnel Returns this previsionnel.
	 */
	public function setNumeroSemaine($numeroSemaine) {
		$this->numeroSemaine = $numeroSemaine;
		return $this;
	}

}
