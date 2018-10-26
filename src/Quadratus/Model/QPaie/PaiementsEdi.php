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
 * Paiements edi model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class PaiementsEdi {

	/**
	 * B i c.
	 *
	 * @var string
	 */
	private $bIC;

	/**
	 * Code etablissement.
	 *
	 * @var int
	 */
	private $codeEtablissement;

	/**
	 * Code organisme.
	 *
	 * @var string
	 */
	private $codeOrganisme;

	/**
	 * Dom banque.
	 *
	 * @var string
	 */
	private $domBanque;

	/**
	 * Generer coupon paiement.
	 *
	 * @var boolean
	 */
	private $genererCouponPaiement;

	/**
	 * I b a n.
	 *
	 * @var string
	 */
	private $iBAN;

	/**
	 * Montant.
	 *
	 * @var float
	 */
	private $montant;

	/**
	 * Montant ducs annuelle.
	 *
	 * @var float
	 */
	private $montantDucsAnnuelle;

	/**
	 * Moyen paiement.
	 *
	 * @var string
	 */
	private $moyenPaiement;

	/**
	 * Rib.
	 *
	 * @var string
	 */
	private $rib;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the b i c.
	 *
	 * @return string Returns the b i c.
	 */
	public function getBIC() {
		return $this->bIC;
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
	 * Get the code organisme.
	 *
	 * @return string Returns the code organisme.
	 */
	public function getCodeOrganisme() {
		return $this->codeOrganisme;
	}

	/**
	 * Get the dom banque.
	 *
	 * @return string Returns the dom banque.
	 */
	public function getDomBanque() {
		return $this->domBanque;
	}

	/**
	 * Get the generer coupon paiement.
	 *
	 * @return boolean Returns the generer coupon paiement.
	 */
	public function getGenererCouponPaiement() {
		return $this->genererCouponPaiement;
	}

	/**
	 * Get the i b a n.
	 *
	 * @return string Returns the i b a n.
	 */
	public function getIBAN() {
		return $this->iBAN;
	}

	/**
	 * Get the montant.
	 *
	 * @return float Returns the montant.
	 */
	public function getMontant() {
		return $this->montant;
	}

	/**
	 * Get the montant ducs annuelle.
	 *
	 * @return float Returns the montant ducs annuelle.
	 */
	public function getMontantDucsAnnuelle() {
		return $this->montantDucsAnnuelle;
	}

	/**
	 * Get the moyen paiement.
	 *
	 * @return string Returns the moyen paiement.
	 */
	public function getMoyenPaiement() {
		return $this->moyenPaiement;
	}

	/**
	 * Get the rib.
	 *
	 * @return string Returns the rib.
	 */
	public function getRib() {
		return $this->rib;
	}

	/**
	 * Set the b i c.
	 *
	 * @param string $bIC The b i c.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setBIC($bIC) {
		$this->bIC = $bIC;
		return $this;
	}

	/**
	 * Set the code etablissement.
	 *
	 * @param int $codeEtablissement The code etablissement.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setCodeEtablissement($codeEtablissement) {
		$this->codeEtablissement = $codeEtablissement;
		return $this;
	}

	/**
	 * Set the code organisme.
	 *
	 * @param string $codeOrganisme The code organisme.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setCodeOrganisme($codeOrganisme) {
		$this->codeOrganisme = $codeOrganisme;
		return $this;
	}

	/**
	 * Set the dom banque.
	 *
	 * @param string $domBanque The dom banque.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setDomBanque($domBanque) {
		$this->domBanque = $domBanque;
		return $this;
	}

	/**
	 * Set the generer coupon paiement.
	 *
	 * @param boolean $genererCouponPaiement The generer coupon paiement.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setGenererCouponPaiement($genererCouponPaiement) {
		$this->genererCouponPaiement = $genererCouponPaiement;
		return $this;
	}

	/**
	 * Set the i b a n.
	 *
	 * @param string $iBAN The i b a n.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setIBAN($iBAN) {
		$this->iBAN = $iBAN;
		return $this;
	}

	/**
	 * Set the montant.
	 *
	 * @param float $montant The montant.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setMontant($montant) {
		$this->montant = $montant;
		return $this;
	}

	/**
	 * Set the montant ducs annuelle.
	 *
	 * @param float $montantDucsAnnuelle The montant ducs annuelle.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setMontantDucsAnnuelle($montantDucsAnnuelle) {
		$this->montantDucsAnnuelle = $montantDucsAnnuelle;
		return $this;
	}

	/**
	 * Set the moyen paiement.
	 *
	 * @param string $moyenPaiement The moyen paiement.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setMoyenPaiement($moyenPaiement) {
		$this->moyenPaiement = $moyenPaiement;
		return $this;
	}

	/**
	 * Set the rib.
	 *
	 * @param string $rib The rib.
	 * @return PaiementsEdi Returns this paiements edi.
	 */
	public function setRib($rib) {
		$this->rib = $rib;
		return $this;
	}

}
