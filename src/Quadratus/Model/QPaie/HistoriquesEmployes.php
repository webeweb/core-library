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
 * Historiques employes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class HistoriquesEmployes {

	/**
	 * Chapitre.
	 *
	 * @var string
	 */
	private $chapitre;

	/**
	 * Coll creat.
	 *
	 * @var string
	 */
	private $collCreat;

	/**
	 * Coll modif.
	 *
	 * @var string
	 */
	private $collModif;

	/**
	 * Date creat.
	 *
	 * @var DateTime
	 */
	private $dateCreat;

	/**
	 * Date modif.
	 *
	 * @var DateTime
	 */
	private $dateModif;

	/**
	 * Description.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * G uniq i d.
	 *
	 * @var string
	 */
	private $gUniqID;

	/**
	 * Indice.
	 *
	 * @var int
	 */
	private $indice;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the chapitre.
	 *
	 * @return string Returns the chapitre.
	 */
	public function getChapitre() {
		return $this->chapitre;
	}

	/**
	 * Get the coll creat.
	 *
	 * @return string Returns the coll creat.
	 */
	public function getCollCreat() {
		return $this->collCreat;
	}

	/**
	 * Get the coll modif.
	 *
	 * @return string Returns the coll modif.
	 */
	public function getCollModif() {
		return $this->collModif;
	}

	/**
	 * Get the date creat.
	 *
	 * @return DateTime Returns the date creat.
	 */
	public function getDateCreat() {
		return $this->dateCreat;
	}

	/**
	 * Get the date modif.
	 *
	 * @return DateTime Returns the date modif.
	 */
	public function getDateModif() {
		return $this->dateModif;
	}

	/**
	 * Get the description.
	 *
	 * @return string Returns the description.
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get the g uniq i d.
	 *
	 * @return string Returns the g uniq i d.
	 */
	public function getGUniqID() {
		return $this->gUniqID;
	}

	/**
	 * Get the indice.
	 *
	 * @return int Returns the indice.
	 */
	public function getIndice() {
		return $this->indice;
	}

	/**
	 * Set the chapitre.
	 *
	 * @param string $chapitre The chapitre.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setChapitre($chapitre) {
		$this->chapitre = $chapitre;
		return $this;
	}

	/**
	 * Set the coll creat.
	 *
	 * @param string $collCreat The coll creat.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setCollCreat($collCreat) {
		$this->collCreat = $collCreat;
		return $this;
	}

	/**
	 * Set the coll modif.
	 *
	 * @param string $collModif The coll modif.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setCollModif($collModif) {
		$this->collModif = $collModif;
		return $this;
	}

	/**
	 * Set the date creat.
	 *
	 * @param DateTime $dateCreat The date creat.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setDateCreat(DateTime $dateCreat = null) {
		$this->dateCreat = $dateCreat;
		return $this;
	}

	/**
	 * Set the date modif.
	 *
	 * @param DateTime $dateModif The date modif.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setDateModif(DateTime $dateModif = null) {
		$this->dateModif = $dateModif;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the g uniq i d.
	 *
	 * @param string $gUniqID The g uniq i d.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setGUniqID($gUniqID) {
		$this->gUniqID = $gUniqID;
		return $this;
	}

	/**
	 * Set the indice.
	 *
	 * @param int $indice The indice.
	 * @return HistoriquesEmployes Returns this historiques employes.
	 */
	public function setIndice($indice) {
		$this->indice = $indice;
		return $this;
	}

}
