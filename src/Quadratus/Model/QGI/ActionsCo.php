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
 * Actions co model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ActionsCo {

	/**
	 * Code.
	 *
	 * @var string
	 */
	private $code;

	/**
	 * Date creation.
	 *
	 * @var DateTime
	 */
	private $dateCreation;

	/**
	 * Date fin vie.
	 *
	 * @var DateTime
	 */
	private $dateFinVie;

	/**
	 * Date modification.
	 *
	 * @var DateTime
	 */
	private $dateModification;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Libelle memo.
	 *
	 * @var string
	 */
	private $libelleMemo;

	/**
	 * Op_ confirmation.
	 *
	 * @var boolean
	 */
	private $op_Confirmation;

	/**
	 * Op_ contrat signe.
	 *
	 * @var boolean
	 */
	private $op_ContratSigne;

	/**
	 * Op_ explication.
	 *
	 * @var boolean
	 */
	private $op_Explication;

	/**
	 * Op_ invitation indiv.
	 *
	 * @var boolean
	 */
	private $op_InvitationIndiv;

	/**
	 * Op_ invitation masse.
	 *
	 * @var boolean
	 */
	private $op_InvitationMasse;

	/**
	 * Op_ presence.
	 *
	 * @var boolean
	 */
	private $op_Presence;

	/**
	 * Op_ prise r d v.
	 *
	 * @var boolean
	 */
	private $op_PriseRDV;

	/**
	 * Op_ relance.
	 *
	 * @var boolean
	 */
	private $op_Relance;

	/**
	 * Op_ reponse inscrip.
	 *
	 * @var boolean
	 */
	private $op_ReponseInscrip;

	/**
	 * Op_ reponse negative.
	 *
	 * @var boolean
	 */
	private $op_ReponseNegative;

	/**
	 * Op_ reservation.
	 *
	 * @var boolean
	 */
	private $op_Reservation;

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
	 * Get the date creation.
	 *
	 * @return DateTime Returns the date creation.
	 */
	public function getDateCreation() {
		return $this->dateCreation;
	}

	/**
	 * Get the date fin vie.
	 *
	 * @return DateTime Returns the date fin vie.
	 */
	public function getDateFinVie() {
		return $this->dateFinVie;
	}

	/**
	 * Get the date modification.
	 *
	 * @return DateTime Returns the date modification.
	 */
	public function getDateModification() {
		return $this->dateModification;
	}

	/**
	 * Get the libelle.
	 *
	 * @return string Returns the libelle.
	 */
	public function getLibelle() {
		return $this->libelle;
	}

	/**
	 * Get the libelle memo.
	 *
	 * @return string Returns the libelle memo.
	 */
	public function getLibelleMemo() {
		return $this->libelleMemo;
	}

	/**
	 * Get the op_ confirmation.
	 *
	 * @return boolean Returns the op_ confirmation.
	 */
	public function getOp_Confirmation() {
		return $this->op_Confirmation;
	}

	/**
	 * Get the op_ contrat signe.
	 *
	 * @return boolean Returns the op_ contrat signe.
	 */
	public function getOp_ContratSigne() {
		return $this->op_ContratSigne;
	}

	/**
	 * Get the op_ explication.
	 *
	 * @return boolean Returns the op_ explication.
	 */
	public function getOp_Explication() {
		return $this->op_Explication;
	}

	/**
	 * Get the op_ invitation indiv.
	 *
	 * @return boolean Returns the op_ invitation indiv.
	 */
	public function getOp_InvitationIndiv() {
		return $this->op_InvitationIndiv;
	}

	/**
	 * Get the op_ invitation masse.
	 *
	 * @return boolean Returns the op_ invitation masse.
	 */
	public function getOp_InvitationMasse() {
		return $this->op_InvitationMasse;
	}

	/**
	 * Get the op_ presence.
	 *
	 * @return boolean Returns the op_ presence.
	 */
	public function getOp_Presence() {
		return $this->op_Presence;
	}

	/**
	 * Get the op_ prise r d v.
	 *
	 * @return boolean Returns the op_ prise r d v.
	 */
	public function getOp_PriseRDV() {
		return $this->op_PriseRDV;
	}

	/**
	 * Get the op_ relance.
	 *
	 * @return boolean Returns the op_ relance.
	 */
	public function getOp_Relance() {
		return $this->op_Relance;
	}

	/**
	 * Get the op_ reponse inscrip.
	 *
	 * @return boolean Returns the op_ reponse inscrip.
	 */
	public function getOp_ReponseInscrip() {
		return $this->op_ReponseInscrip;
	}

	/**
	 * Get the op_ reponse negative.
	 *
	 * @return boolean Returns the op_ reponse negative.
	 */
	public function getOp_ReponseNegative() {
		return $this->op_ReponseNegative;
	}

	/**
	 * Get the op_ reservation.
	 *
	 * @return boolean Returns the op_ reservation.
	 */
	public function getOp_Reservation() {
		return $this->op_Reservation;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the date creation.
	 *
	 * @param DateTime $dateCreation The date creation.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setDateCreation(DateTime $dateCreation = null) {
		$this->dateCreation = $dateCreation;
		return $this;
	}

	/**
	 * Set the date fin vie.
	 *
	 * @param DateTime $dateFinVie The date fin vie.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setDateFinVie(DateTime $dateFinVie = null) {
		$this->dateFinVie = $dateFinVie;
		return $this;
	}

	/**
	 * Set the date modification.
	 *
	 * @param DateTime $dateModification The date modification.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setDateModification(DateTime $dateModification = null) {
		$this->dateModification = $dateModification;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the libelle memo.
	 *
	 * @param string $libelleMemo The libelle memo.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setLibelleMemo($libelleMemo) {
		$this->libelleMemo = $libelleMemo;
		return $this;
	}

	/**
	 * Set the op_ confirmation.
	 *
	 * @param boolean $op_Confirmation The op_ confirmation.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_Confirmation($op_Confirmation) {
		$this->op_Confirmation = $op_Confirmation;
		return $this;
	}

	/**
	 * Set the op_ contrat signe.
	 *
	 * @param boolean $op_ContratSigne The op_ contrat signe.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_ContratSigne($op_ContratSigne) {
		$this->op_ContratSigne = $op_ContratSigne;
		return $this;
	}

	/**
	 * Set the op_ explication.
	 *
	 * @param boolean $op_Explication The op_ explication.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_Explication($op_Explication) {
		$this->op_Explication = $op_Explication;
		return $this;
	}

	/**
	 * Set the op_ invitation indiv.
	 *
	 * @param boolean $op_InvitationIndiv The op_ invitation indiv.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_InvitationIndiv($op_InvitationIndiv) {
		$this->op_InvitationIndiv = $op_InvitationIndiv;
		return $this;
	}

	/**
	 * Set the op_ invitation masse.
	 *
	 * @param boolean $op_InvitationMasse The op_ invitation masse.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_InvitationMasse($op_InvitationMasse) {
		$this->op_InvitationMasse = $op_InvitationMasse;
		return $this;
	}

	/**
	 * Set the op_ presence.
	 *
	 * @param boolean $op_Presence The op_ presence.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_Presence($op_Presence) {
		$this->op_Presence = $op_Presence;
		return $this;
	}

	/**
	 * Set the op_ prise r d v.
	 *
	 * @param boolean $op_PriseRDV The op_ prise r d v.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_PriseRDV($op_PriseRDV) {
		$this->op_PriseRDV = $op_PriseRDV;
		return $this;
	}

	/**
	 * Set the op_ relance.
	 *
	 * @param boolean $op_Relance The op_ relance.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_Relance($op_Relance) {
		$this->op_Relance = $op_Relance;
		return $this;
	}

	/**
	 * Set the op_ reponse inscrip.
	 *
	 * @param boolean $op_ReponseInscrip The op_ reponse inscrip.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_ReponseInscrip($op_ReponseInscrip) {
		$this->op_ReponseInscrip = $op_ReponseInscrip;
		return $this;
	}

	/**
	 * Set the op_ reponse negative.
	 *
	 * @param boolean $op_ReponseNegative The op_ reponse negative.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_ReponseNegative($op_ReponseNegative) {
		$this->op_ReponseNegative = $op_ReponseNegative;
		return $this;
	}

	/**
	 * Set the op_ reservation.
	 *
	 * @param boolean $op_Reservation The op_ reservation.
	 * @return ActionsCo Returns this actions co.
	 */
	public function setOp_Reservation($op_Reservation) {
		$this->op_Reservation = $op_Reservation;
		return $this;
	}

}
