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

use DateTime;

/**
 * Histo transf paie model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class HistoTransfPaie {

	/**
	 * Code employe.
	 *
	 * @var string
	 */
	private $codeEmploye;

	/**
	 * Ecart cumule.
	 *
	 * @var float
	 */
	private $ecartCumule;

	/**
	 * H c r payees.
	 *
	 * @var boolean
	 */
	private $hCRPayees;

	/**
	 * H n p compl h.
	 *
	 * @var float
	 */
	private $hNPComplH;

	/**
	 * H n p h c11.
	 *
	 * @var float
	 */
	private $hNPHC11;

	/**
	 * H n p h c25.
	 *
	 * @var float
	 */
	private $hNPHC25;

	/**
	 * H n p h c33.
	 *
	 * @var float
	 */
	private $hNPHC33;

	/**
	 * Nb compl h.
	 *
	 * @var float
	 */
	private $nbComplH;

	/**
	 * Nb h abs.
	 *
	 * @var float
	 */
	private $nbHAbs;

	/**
	 * Nb h abs j f.
	 *
	 * @var float
	 */
	private $nbHAbsJF;

	/**
	 * Nb h compl.
	 *
	 * @var float
	 */
	private $nbHCompl;

	/**
	 * Nb h rempl.
	 *
	 * @var float
	 */
	private $nbHRempl;

	/**
	 * Nb hprevues.
	 *
	 * @var float
	 */
	private $nbHprevues;

	/**
	 * Periode.
	 *
	 * @var DateTime
	 */
	private $periode;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code employe.
	 *
	 * @return string Returns the code employe.
	 */
	public function getCodeEmploye() {
		return $this->codeEmploye;
	}

	/**
	 * Get the ecart cumule.
	 *
	 * @return float Returns the ecart cumule.
	 */
	public function getEcartCumule() {
		return $this->ecartCumule;
	}

	/**
	 * Get the h c r payees.
	 *
	 * @return boolean Returns the h c r payees.
	 */
	public function getHCRPayees() {
		return $this->hCRPayees;
	}

	/**
	 * Get the h n p compl h.
	 *
	 * @return float Returns the h n p compl h.
	 */
	public function getHNPComplH() {
		return $this->hNPComplH;
	}

	/**
	 * Get the h n p h c11.
	 *
	 * @return float Returns the h n p h c11.
	 */
	public function getHNPHC11() {
		return $this->hNPHC11;
	}

	/**
	 * Get the h n p h c25.
	 *
	 * @return float Returns the h n p h c25.
	 */
	public function getHNPHC25() {
		return $this->hNPHC25;
	}

	/**
	 * Get the h n p h c33.
	 *
	 * @return float Returns the h n p h c33.
	 */
	public function getHNPHC33() {
		return $this->hNPHC33;
	}

	/**
	 * Get the nb compl h.
	 *
	 * @return float Returns the nb compl h.
	 */
	public function getNbComplH() {
		return $this->nbComplH;
	}

	/**
	 * Get the nb h abs.
	 *
	 * @return float Returns the nb h abs.
	 */
	public function getNbHAbs() {
		return $this->nbHAbs;
	}

	/**
	 * Get the nb h abs j f.
	 *
	 * @return float Returns the nb h abs j f.
	 */
	public function getNbHAbsJF() {
		return $this->nbHAbsJF;
	}

	/**
	 * Get the nb h compl.
	 *
	 * @return float Returns the nb h compl.
	 */
	public function getNbHCompl() {
		return $this->nbHCompl;
	}

	/**
	 * Get the nb h rempl.
	 *
	 * @return float Returns the nb h rempl.
	 */
	public function getNbHRempl() {
		return $this->nbHRempl;
	}

	/**
	 * Get the nb hprevues.
	 *
	 * @return float Returns the nb hprevues.
	 */
	public function getNbHprevues() {
		return $this->nbHprevues;
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
	 * Set the code employe.
	 *
	 * @param string $codeEmploye The code employe.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setCodeEmploye($codeEmploye) {
		$this->codeEmploye = $codeEmploye;
		return $this;
	}

	/**
	 * Set the ecart cumule.
	 *
	 * @param float $ecartCumule The ecart cumule.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setEcartCumule($ecartCumule) {
		$this->ecartCumule = $ecartCumule;
		return $this;
	}

	/**
	 * Set the h c r payees.
	 *
	 * @param boolean $hCRPayees The h c r payees.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setHCRPayees($hCRPayees) {
		$this->hCRPayees = $hCRPayees;
		return $this;
	}

	/**
	 * Set the h n p compl h.
	 *
	 * @param float $hNPComplH The h n p compl h.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setHNPComplH($hNPComplH) {
		$this->hNPComplH = $hNPComplH;
		return $this;
	}

	/**
	 * Set the h n p h c11.
	 *
	 * @param float $hNPHC11 The h n p h c11.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setHNPHC11($hNPHC11) {
		$this->hNPHC11 = $hNPHC11;
		return $this;
	}

	/**
	 * Set the h n p h c25.
	 *
	 * @param float $hNPHC25 The h n p h c25.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setHNPHC25($hNPHC25) {
		$this->hNPHC25 = $hNPHC25;
		return $this;
	}

	/**
	 * Set the h n p h c33.
	 *
	 * @param float $hNPHC33 The h n p h c33.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setHNPHC33($hNPHC33) {
		$this->hNPHC33 = $hNPHC33;
		return $this;
	}

	/**
	 * Set the nb compl h.
	 *
	 * @param float $nbComplH The nb compl h.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbComplH($nbComplH) {
		$this->nbComplH = $nbComplH;
		return $this;
	}

	/**
	 * Set the nb h abs.
	 *
	 * @param float $nbHAbs The nb h abs.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbHAbs($nbHAbs) {
		$this->nbHAbs = $nbHAbs;
		return $this;
	}

	/**
	 * Set the nb h abs j f.
	 *
	 * @param float $nbHAbsJF The nb h abs j f.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbHAbsJF($nbHAbsJF) {
		$this->nbHAbsJF = $nbHAbsJF;
		return $this;
	}

	/**
	 * Set the nb h compl.
	 *
	 * @param float $nbHCompl The nb h compl.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbHCompl($nbHCompl) {
		$this->nbHCompl = $nbHCompl;
		return $this;
	}

	/**
	 * Set the nb h rempl.
	 *
	 * @param float $nbHRempl The nb h rempl.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbHRempl($nbHRempl) {
		$this->nbHRempl = $nbHRempl;
		return $this;
	}

	/**
	 * Set the nb hprevues.
	 *
	 * @param float $nbHprevues The nb hprevues.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setNbHprevues($nbHprevues) {
		$this->nbHprevues = $nbHprevues;
		return $this;
	}

	/**
	 * Set the periode.
	 *
	 * @param DateTime $periode The periode.
	 * @return HistoTransfPaie Returns this histo transf paie.
	 */
	public function setPeriode(DateTime $periode = null) {
		$this->periode = $periode;
		return $this;
	}

}
