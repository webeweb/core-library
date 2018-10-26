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


/**
 * Services model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class Services {

	/**
	 * Code.
	 *
	 * @var string
	 */
	private $code;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code.
	 *
	 * @return string Returns the code.
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Get the intitule.
	 *
	 * @return string Returns the intitule.
	 */
	public function getIntitule() {
		return $this->intitule;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return Services Returns this services.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return Services Returns this services.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

}
