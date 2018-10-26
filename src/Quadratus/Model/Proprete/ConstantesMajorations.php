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
 * Constantes majorations model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ConstantesMajorations {

	/**
	 * Except.
	 *
	 * @var float
	 */
	private $except;

	/**
	 * Mai.
	 *
	 * @var float
	 */
	private $mai;

	/**
	 * Normal.
	 *
	 * @var float
	 */
	private $normal;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Type2.
	 *
	 * @var float
	 */
	private $type2;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the except.
	 *
	 * @return float Returns the except.
	 */
	public function getExcept() {
		return $this->except;
	}

	/**
	 * Get the mai.
	 *
	 * @return float Returns the mai.
	 */
	public function getMai() {
		return $this->mai;
	}

	/**
	 * Get the normal.
	 *
	 * @return float Returns the normal.
	 */
	public function getNormal() {
		return $this->normal;
	}

	/**
	 * Get the type.
	 *
	 * @return string Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Get the type2.
	 *
	 * @return float Returns the type2.
	 */
	public function getType2() {
		return $this->type2;
	}

	/**
	 * Set the except.
	 *
	 * @param float $except The except.
	 * @return ConstantesMajorations Returns this constantes majorations.
	 */
	public function setExcept($except) {
		$this->except = $except;
		return $this;
	}

	/**
	 * Set the mai.
	 *
	 * @param float $mai The mai.
	 * @return ConstantesMajorations Returns this constantes majorations.
	 */
	public function setMai($mai) {
		$this->mai = $mai;
		return $this;
	}

	/**
	 * Set the normal.
	 *
	 * @param float $normal The normal.
	 * @return ConstantesMajorations Returns this constantes majorations.
	 */
	public function setNormal($normal) {
		$this->normal = $normal;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return ConstantesMajorations Returns this constantes majorations.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Set the type2.
	 *
	 * @param float $type2 The type2.
	 * @return ConstantesMajorations Returns this constantes majorations.
	 */
	public function setType2($type2) {
		$this->type2 = $type2;
		return $this;
	}

}
