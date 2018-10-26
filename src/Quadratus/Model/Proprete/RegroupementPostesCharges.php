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
 * Regroupement postes charges model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class RegroupementPostesCharges {

	/**
	 * Code charge.
	 *
	 * @var string
	 */
	private $codeCharge;

	/**
	 * Code reg charge.
	 *
	 * @var string
	 */
	private $codeRegCharge;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code charge.
	 *
	 * @return string Returns the code charge.
	 */
	public function getCodeCharge() {
		return $this->codeCharge;
	}

	/**
	 * Get the code reg charge.
	 *
	 * @return string Returns the code reg charge.
	 */
	public function getCodeRegCharge() {
		return $this->codeRegCharge;
	}

	/**
	 * Set the code charge.
	 *
	 * @param string $codeCharge The code charge.
	 * @return RegroupementPostesCharges Returns this regroupement postes charges.
	 */
	public function setCodeCharge($codeCharge) {
		$this->codeCharge = $codeCharge;
		return $this;
	}

	/**
	 * Set the code reg charge.
	 *
	 * @param string $codeRegCharge The code reg charge.
	 * @return RegroupementPostesCharges Returns this regroupement postes charges.
	 */
	public function setCodeRegCharge($codeRegCharge) {
		$this->codeRegCharge = $codeRegCharge;
		return $this;
	}

}
