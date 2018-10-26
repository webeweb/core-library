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
 * Chantiers plan ctrl qualite model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualite {

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
	 * Code collabo valid.
	 *
	 * @var string
	 */
	private $codeCollaboValid;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Commentaire.
	 *
	 * @var string
	 */
	private $commentaire;

	/**
	 * Date prevue.
	 *
	 * @var DateTime
	 */
	private $datePrevue;

	/**
	 * Date reelle.
	 *
	 * @var DateTime
	 */
	private $dateReelle;

	/**
	 * Date validation synchro.
	 *
	 * @var DateTime
	 */
	private $dateValidationSynchro;

	/**
	 * Etat.
	 *
	 * @var string
	 */
	private $etat;

	/**
	 * Note globale.
	 *
	 * @var float
	 */
	private $noteGlobale;

	/**
	 * Numero reclam.
	 *
	 * @var int
	 */
	private $numeroReclam;

	/**
	 * Realise par f c q.
	 *
	 * @var boolean
	 */
	private $realiseParFCQ;

	/**
	 * Type controle.
	 *
	 * @var string
	 */
	private $typeControle;

	/**
	 * Uniq i d synchro.
	 *
	 * @var string
	 */
	private $uniqIDSynchro;

	/**
	 * Uniq id noeud.
	 *
	 * @var string
	 */
	private $uniqIdNoeud;

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
	 * Get the code collabo valid.
	 *
	 * @return string Returns the code collabo valid.
	 */
	public function getCodeCollaboValid() {
		return $this->codeCollaboValid;
	}

	/**
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
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
	 * Get the date prevue.
	 *
	 * @return DateTime Returns the date prevue.
	 */
	public function getDatePrevue() {
		return $this->datePrevue;
	}

	/**
	 * Get the date reelle.
	 *
	 * @return DateTime Returns the date reelle.
	 */
	public function getDateReelle() {
		return $this->dateReelle;
	}

	/**
	 * Get the date validation synchro.
	 *
	 * @return DateTime Returns the date validation synchro.
	 */
	public function getDateValidationSynchro() {
		return $this->dateValidationSynchro;
	}

	/**
	 * Get the etat.
	 *
	 * @return string Returns the etat.
	 */
	public function getEtat() {
		return $this->etat;
	}

	/**
	 * Get the note globale.
	 *
	 * @return float Returns the note globale.
	 */
	public function getNoteGlobale() {
		return $this->noteGlobale;
	}

	/**
	 * Get the numero reclam.
	 *
	 * @return int Returns the numero reclam.
	 */
	public function getNumeroReclam() {
		return $this->numeroReclam;
	}

	/**
	 * Get the realise par f c q.
	 *
	 * @return boolean Returns the realise par f c q.
	 */
	public function getRealiseParFCQ() {
		return $this->realiseParFCQ;
	}

	/**
	 * Get the type controle.
	 *
	 * @return string Returns the type controle.
	 */
	public function getTypeControle() {
		return $this->typeControle;
	}

	/**
	 * Get the uniq i d synchro.
	 *
	 * @return string Returns the uniq i d synchro.
	 */
	public function getUniqIDSynchro() {
		return $this->uniqIDSynchro;
	}

	/**
	 * Get the uniq id noeud.
	 *
	 * @return string Returns the uniq id noeud.
	 */
	public function getUniqIdNoeud() {
		return $this->uniqIdNoeud;
	}

	/**
	 * Set the code affaire.
	 *
	 * @param string $codeAffaire The code affaire.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCodeAffaire($codeAffaire) {
		$this->codeAffaire = $codeAffaire;
		return $this;
	}

	/**
	 * Set the code chantier.
	 *
	 * @param string $codeChantier The code chantier.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCodeChantier($codeChantier) {
		$this->codeChantier = $codeChantier;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collabo valid.
	 *
	 * @param string $codeCollaboValid The code collabo valid.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCodeCollaboValid($codeCollaboValid) {
		$this->codeCollaboValid = $codeCollaboValid;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the commentaire.
	 *
	 * @param string $commentaire The commentaire.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;
		return $this;
	}

	/**
	 * Set the date prevue.
	 *
	 * @param DateTime $datePrevue The date prevue.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setDatePrevue(DateTime $datePrevue = null) {
		$this->datePrevue = $datePrevue;
		return $this;
	}

	/**
	 * Set the date reelle.
	 *
	 * @param DateTime $dateReelle The date reelle.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setDateReelle(DateTime $dateReelle = null) {
		$this->dateReelle = $dateReelle;
		return $this;
	}

	/**
	 * Set the date validation synchro.
	 *
	 * @param DateTime $dateValidationSynchro The date validation synchro.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
		$this->dateValidationSynchro = $dateValidationSynchro;
		return $this;
	}

	/**
	 * Set the etat.
	 *
	 * @param string $etat The etat.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setEtat($etat) {
		$this->etat = $etat;
		return $this;
	}

	/**
	 * Set the note globale.
	 *
	 * @param float $noteGlobale The note globale.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setNoteGlobale($noteGlobale) {
		$this->noteGlobale = $noteGlobale;
		return $this;
	}

	/**
	 * Set the numero reclam.
	 *
	 * @param int $numeroReclam The numero reclam.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setNumeroReclam($numeroReclam) {
		$this->numeroReclam = $numeroReclam;
		return $this;
	}

	/**
	 * Set the realise par f c q.
	 *
	 * @param boolean $realiseParFCQ The realise par f c q.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setRealiseParFCQ($realiseParFCQ) {
		$this->realiseParFCQ = $realiseParFCQ;
		return $this;
	}

	/**
	 * Set the type controle.
	 *
	 * @param string $typeControle The type controle.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setTypeControle($typeControle) {
		$this->typeControle = $typeControle;
		return $this;
	}

	/**
	 * Set the uniq i d synchro.
	 *
	 * @param string $uniqIDSynchro The uniq i d synchro.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setUniqIDSynchro($uniqIDSynchro) {
		$this->uniqIDSynchro = $uniqIDSynchro;
		return $this;
	}

	/**
	 * Set the uniq id noeud.
	 *
	 * @param string $uniqIdNoeud The uniq id noeud.
	 * @return ChantiersPlanCtrlQualite Returns this chantiers plan ctrl qualite.
	 */
	public function setUniqIdNoeud($uniqIdNoeud) {
		$this->uniqIdNoeud = $uniqIdNoeud;
		return $this;
	}

}
