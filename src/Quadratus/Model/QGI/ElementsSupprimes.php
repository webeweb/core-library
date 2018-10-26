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
 * Elements supprimes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ElementsSupprimes {

	/**
	 * Date1.
	 *
	 * @var DateTime
	 */
	private $date1;

	/**
	 * Date elem.
	 *
	 * @var DateTime
	 */
	private $dateElem;

	/**
	 * Memo1.
	 *
	 * @var string
	 */
	private $memo1;

	/**
	 * Texte1.
	 *
	 * @var string
	 */
	private $texte1;

	/**
	 * Type elem.
	 *
	 * @var string
	 */
	private $typeElem;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the date1.
	 *
	 * @return DateTime Returns the date1.
	 */
	public function getDate1() {
		return $this->date1;
	}

	/**
	 * Get the date elem.
	 *
	 * @return DateTime Returns the date elem.
	 */
	public function getDateElem() {
		return $this->dateElem;
	}

	/**
	 * Get the memo1.
	 *
	 * @return string Returns the memo1.
	 */
	public function getMemo1() {
		return $this->memo1;
	}

	/**
	 * Get the texte1.
	 *
	 * @return string Returns the texte1.
	 */
	public function getTexte1() {
		return $this->texte1;
	}

	/**
	 * Get the type elem.
	 *
	 * @return string Returns the type elem.
	 */
	public function getTypeElem() {
		return $this->typeElem;
	}

	/**
	 * Get the uniq i d.
	 *
	 * @return string Returns the uniq i d.
	 */
	public function getUniqID() {
		return $this->uniqID;
	}

	/**
	 * Set the date1.
	 *
	 * @param DateTime $date1 The date1.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setDate1(DateTime $date1 = null) {
		$this->date1 = $date1;
		return $this;
	}

	/**
	 * Set the date elem.
	 *
	 * @param DateTime $dateElem The date elem.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setDateElem(DateTime $dateElem = null) {
		$this->dateElem = $dateElem;
		return $this;
	}

	/**
	 * Set the memo1.
	 *
	 * @param string $memo1 The memo1.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setMemo1($memo1) {
		$this->memo1 = $memo1;
		return $this;
	}

	/**
	 * Set the texte1.
	 *
	 * @param string $texte1 The texte1.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setTexte1($texte1) {
		$this->texte1 = $texte1;
		return $this;
	}

	/**
	 * Set the type elem.
	 *
	 * @param string $typeElem The type elem.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setTypeElem($typeElem) {
		$this->typeElem = $typeElem;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return ElementsSupprimes Returns this elements supprimes.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

}
