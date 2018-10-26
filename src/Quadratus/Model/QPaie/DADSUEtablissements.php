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
 * D a d s u etablissements model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DADSUEtablissements {

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Forma pro_ base.
	 *
	 * @var float
	 */
	private $formaPro_Base;

	/**
	 * Forma pro_ base c d d.
	 *
	 * @var float
	 */
	private $formaPro_BaseCDD;

	/**
	 * Forma pro_ code assuj.
	 *
	 * @var string
	 */
	private $formaPro_CodeAssuj;

	/**
	 * Prud type d a d s u derogatoire.
	 *
	 * @var string
	 */
	private $prudTypeDADSUDerogatoire;

	/**
	 * Taxe apprentissage_ base.
	 *
	 * @var float
	 */
	private $taxeApprentissage_Base;

	/**
	 * Taxe apprentissage_ code assuj.
	 *
	 * @var string
	 */
	private $taxeApprentissage_CodeAssuj;

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
	 * Get the forma pro_ base.
	 *
	 * @return float Returns the forma pro_ base.
	 */
	public function getFormaPro_Base() {
		return $this->formaPro_Base;
	}

	/**
	 * Get the forma pro_ base c d d.
	 *
	 * @return float Returns the forma pro_ base c d d.
	 */
	public function getFormaPro_BaseCDD() {
		return $this->formaPro_BaseCDD;
	}

	/**
	 * Get the forma pro_ code assuj.
	 *
	 * @return string Returns the forma pro_ code assuj.
	 */
	public function getFormaPro_CodeAssuj() {
		return $this->formaPro_CodeAssuj;
	}

	/**
	 * Get the prud type d a d s u derogatoire.
	 *
	 * @return string Returns the prud type d a d s u derogatoire.
	 */
	public function getPrudTypeDADSUDerogatoire() {
		return $this->prudTypeDADSUDerogatoire;
	}

	/**
	 * Get the taxe apprentissage_ base.
	 *
	 * @return float Returns the taxe apprentissage_ base.
	 */
	public function getTaxeApprentissage_Base() {
		return $this->taxeApprentissage_Base;
	}

	/**
	 * Get the taxe apprentissage_ code assuj.
	 *
	 * @return string Returns the taxe apprentissage_ code assuj.
	 */
	public function getTaxeApprentissage_CodeAssuj() {
		return $this->taxeApprentissage_CodeAssuj;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the forma pro_ base.
	 *
	 * @param float $formaPro_Base The forma pro_ base.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setFormaPro_Base($formaPro_Base) {
		$this->formaPro_Base = $formaPro_Base;
		return $this;
	}

	/**
	 * Set the forma pro_ base c d d.
	 *
	 * @param float $formaPro_BaseCDD The forma pro_ base c d d.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setFormaPro_BaseCDD($formaPro_BaseCDD) {
		$this->formaPro_BaseCDD = $formaPro_BaseCDD;
		return $this;
	}

	/**
	 * Set the forma pro_ code assuj.
	 *
	 * @param string $formaPro_CodeAssuj The forma pro_ code assuj.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setFormaPro_CodeAssuj($formaPro_CodeAssuj) {
		$this->formaPro_CodeAssuj = $formaPro_CodeAssuj;
		return $this;
	}

	/**
	 * Set the prud type d a d s u derogatoire.
	 *
	 * @param string $prudTypeDADSUDerogatoire The prud type d a d s u derogatoire.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setPrudTypeDADSUDerogatoire($prudTypeDADSUDerogatoire) {
		$this->prudTypeDADSUDerogatoire = $prudTypeDADSUDerogatoire;
		return $this;
	}

	/**
	 * Set the taxe apprentissage_ base.
	 *
	 * @param float $taxeApprentissage_Base The taxe apprentissage_ base.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setTaxeApprentissage_Base($taxeApprentissage_Base) {
		$this->taxeApprentissage_Base = $taxeApprentissage_Base;
		return $this;
	}

	/**
	 * Set the taxe apprentissage_ code assuj.
	 *
	 * @param string $taxeApprentissage_CodeAssuj The taxe apprentissage_ code assuj.
	 * @return DADSUEtablissements Returns this d a d s u etablissements.
	 */
	public function setTaxeApprentissage_CodeAssuj($taxeApprentissage_CodeAssuj) {
		$this->taxeApprentissage_CodeAssuj = $taxeApprentissage_CodeAssuj;
		return $this;
	}

}
