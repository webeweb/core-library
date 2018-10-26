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
 * D a d s u etablissements rectif model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class DADSUEtablissementsRectif {

	/**
	 * Actif.
	 *
	 * @var boolean
	 */
	private $actif;

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
	 * Indice rectif.
	 *
	 * @var int
	 */
	private $indiceRectif;

	/**
	 * Taxe apprentissage_ base.
	 *
	 * @var float
	 */
	private $taxeApprentissage_Base;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the actif.
	 *
	 * @return boolean Returns the actif.
	 */
	public function getActif() {
		return $this->actif;
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
	 * Get the indice rectif.
	 *
	 * @return int Returns the indice rectif.
	 */
	public function getIndiceRectif() {
		return $this->indiceRectif;
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
	 * Set the actif.
	 *
	 * @param boolean $actif The actif.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setActif($actif) {
		$this->actif = $actif;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the forma pro_ base.
	 *
	 * @param float $formaPro_Base The forma pro_ base.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setFormaPro_Base($formaPro_Base) {
		$this->formaPro_Base = $formaPro_Base;
		return $this;
	}

	/**
	 * Set the forma pro_ base c d d.
	 *
	 * @param float $formaPro_BaseCDD The forma pro_ base c d d.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setFormaPro_BaseCDD($formaPro_BaseCDD) {
		$this->formaPro_BaseCDD = $formaPro_BaseCDD;
		return $this;
	}

	/**
	 * Set the indice rectif.
	 *
	 * @param int $indiceRectif The indice rectif.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setIndiceRectif($indiceRectif) {
		$this->indiceRectif = $indiceRectif;
		return $this;
	}

	/**
	 * Set the taxe apprentissage_ base.
	 *
	 * @param float $taxeApprentissage_Base The taxe apprentissage_ base.
	 * @return DADSUEtablissementsRectif Returns this d a d s u etablissements rectif.
	 */
	public function setTaxeApprentissage_Base($taxeApprentissage_Base) {
		$this->taxeApprentissage_Base = $taxeApprentissage_Base;
		return $this;
	}

}
