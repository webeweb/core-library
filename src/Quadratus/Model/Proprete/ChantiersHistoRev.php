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
 * Chantiers histo rev model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersHistoRev {

	/**
	 * Code affaire.
	 *
	 * @var string
	 */
	private $codeAffaire;

	/**
	 * Code chantier.
	 *
	 * @var string
	 */
	private $codeChantier;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code formule.
	 *
	 * @var string
	 */
	private $codeFormule;

	/**
	 * Code regroupement.
	 *
	 * @var string
	 */
	private $codeRegroupement;

	/**
	 * Commentaire.
	 *
	 * @var string
	 */
	private $commentaire;

	/**
	 * Date revision.
	 *
	 * @var DateTime
	 */
	private $dateRevision;

	/**
	 * Formule.
	 *
	 * @var string
	 */
	private $formule;

	/**
	 * Lien document.
	 *
	 * @var string
	 */
	private $lienDocument;

	/**
	 * Num b t.
	 *
	 * @var int
	 */
	private $numBT;

	/**
	 * Num ligne rev.
	 *
	 * @var int
	 */
	private $numLigneRev;

	/**
	 * Periode revisee.
	 *
	 * @var DateTime
	 */
	private $periodeRevisee;

	/**
	 * Pourcentage.
	 *
	 * @var float
	 */
	private $pourcentage;

	/**
	 * Refus client.
	 *
	 * @var boolean
	 */
	private $refusClient;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code affaire.
	 *
	 * @return string Returns the code affaire.
	 */
	public function getCodeAffaire() {
		return $this->codeAffaire;
	}

	/**
	 * Get the code chantier.
	 *
	 * @return string Returns the code chantier.
	 */
	public function getCodeChantier() {
		return $this->codeChantier;
	}

	/**
	 * Get the code client.
	 *
	 * @return string Returns the code client.
	 */
	public function getCodeClient() {
		return $this->codeClient;
	}

	/**
	 * Get the code formule.
	 *
	 * @return string Returns the code formule.
	 */
	public function getCodeFormule() {
		return $this->codeFormule;
	}

	/**
	 * Get the code regroupement.
	 *
	 * @return string Returns the code regroupement.
	 */
	public function getCodeRegroupement() {
		return $this->codeRegroupement;
	}

	/**
	 * Get the commentaire.
	 *
	 * @return string Returns the commentaire.
	 */
	public function getCommentaire() {
		return $this->commentaire;
	}

	/**
	 * Get the date revision.
	 *
	 * @return DateTime Returns the date revision.
	 */
	public function getDateRevision() {
		return $this->dateRevision;
	}

	/**
	 * Get the formule.
	 *
	 * @return string Returns the formule.
	 */
	public function getFormule() {
		return $this->formule;
	}

	/**
	 * Get the lien document.
	 *
	 * @return string Returns the lien document.
	 */
	public function getLienDocument() {
		return $this->lienDocument;
	}

	/**
	 * Get the num b t.
	 *
	 * @return int Returns the num b t.
	 */
	public function getNumBT() {
		return $this->numBT;
	}

	/**
	 * Get the num ligne rev.
	 *
	 * @return int Returns the num ligne rev.
	 */
	public function getNumLigneRev() {
		return $this->numLigneRev;
	}

	/**
	 * Get the periode revisee.
	 *
	 * @return DateTime Returns the periode revisee.
	 */
	public function getPeriodeRevisee() {
		return $this->periodeRevisee;
	}

	/**
	 * Get the pourcentage.
	 *
	 * @return float Returns the pourcentage.
	 */
	public function getPourcentage() {
		return $this->pourcentage;
	}

	/**
	 * Get the refus client.
	 *
	 * @return boolean Returns the refus client.
	 */
	public function getRefusClient() {
		return $this->refusClient;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code formule.
	 *
	 * @param string $codeFormule The code formule.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCodeFormule($codeFormule) {
		$this->codeFormule = $codeFormule;
		return $this;
	}

	/**
	 * Set the code regroupement.
	 *
	 * @param string $codeRegroupement The code regroupement.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCodeRegroupement($codeRegroupement) {
		$this->codeRegroupement = $codeRegroupement;
		return $this;
	}

	/**
	 * Set the commentaire.
	 *
	 * @param string $commentaire The commentaire.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
		return $this;
	}

	/**
	 * Set the date revision.
	 *
	 * @param DateTime $dateRevision The date revision.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setDateRevision(DateTime $dateRevision = null) {
		$this->dateRevision = $dateRevision;
		return $this;
	}

	/**
	 * Set the formule.
	 *
	 * @param string $formule The formule.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setFormule($formule) {
		$this->formule = $formule;
		return $this;
	}

	/**
	 * Set the lien document.
	 *
	 * @param string $lienDocument The lien document.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setLienDocument($lienDocument) {
		$this->lienDocument = $lienDocument;
		return $this;
	}

	/**
	 * Set the num b t.
	 *
	 * @param int $numBT The num b t.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setNumBT($numBT) {
		$this->numBT = $numBT;
		return $this;
	}

	/**
	 * Set the num ligne rev.
	 *
	 * @param int $numLigneRev The num ligne rev.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setNumLigneRev($numLigneRev) {
		$this->numLigneRev = $numLigneRev;
		return $this;
	}

	/**
	 * Set the periode revisee.
	 *
	 * @param DateTime $periodeRevisee The periode revisee.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setPeriodeRevisee(DateTime $periodeRevisee = null) {
		$this->periodeRevisee = $periodeRevisee;
		return $this;
	}

	/**
	 * Set the pourcentage.
	 *
	 * @param float $pourcentage The pourcentage.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setPourcentage($pourcentage) {
		$this->pourcentage = $pourcentage;
		return $this;
	}

	/**
	 * Set the refus client.
	 *
	 * @param boolean $refusClient The refus client.
	 * @return ChantiersHistoRev Returns this chantiers histo rev.
	 */
	public function setRefusClient($refusClient) {
		$this->refusClient = $refusClient;
		return $this;
	}

}
