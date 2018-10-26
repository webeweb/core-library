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
 * Actions co_ manif model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ActionsCo_Manif {

	/**
	 * Code action.
	 *
	 * @var string
	 */
	private $codeAction;

	/**
	 * Code manif.
	 *
	 * @var string
	 */
	private $codeManif;

	/**
	 * Contact.
	 *
	 * @var string
	 */
	private $contact;

	/**
	 * Date deb.
	 *
	 * @var DateTime
	 */
	private $dateDeb;

	/**
	 * Date fin.
	 *
	 * @var DateTime
	 */
	private $dateFin;

	/**
	 * Duree.
	 *
	 * @var int
	 */
	private $duree;

	/**
	 * Duree dbl.
	 *
	 * @var float
	 */
	private $dureeDbl;

	/**
	 * Indice aff.
	 *
	 * @var int
	 */
	private $indiceAff;

	/**
	 * Is montant h t.
	 *
	 * @var boolean
	 */
	private $isMontantHT;

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
	 * Lieu b t q.
	 *
	 * @var string
	 */
	private $lieuBTQ;

	/**
	 * Lieu bureau distributeur.
	 *
	 * @var string
	 */
	private $lieuBureauDistributeur;

	/**
	 * Lieu code postal.
	 *
	 * @var string
	 */
	private $lieuCodePostal;

	/**
	 * Lieu complement.
	 *
	 * @var string
	 */
	private $lieuComplement;

	/**
	 * Lieu e mail.
	 *
	 * @var string
	 */
	private $lieuEMail;

	/**
	 * Lieu fax.
	 *
	 * @var string
	 */
	private $lieuFax;

	/**
	 * Lieu nom.
	 *
	 * @var string
	 */
	private $lieuNom;

	/**
	 * Lieu nom voie.
	 *
	 * @var string
	 */
	private $lieuNomVoie;

	/**
	 * Lieu num voie.
	 *
	 * @var string
	 */
	private $lieuNumVoie;

	/**
	 * Lieu p j.
	 *
	 * @var string
	 */
	private $lieuPJ;

	/**
	 * Lieu tel.
	 *
	 * @var string
	 */
	private $lieuTel;

	/**
	 * Montant cheque.
	 *
	 * @var float
	 */
	private $montantCheque;

	/**
	 * Nb seances.
	 *
	 * @var int
	 */
	private $nbSeances;

	/**
	 * Nom formateur.
	 *
	 * @var string
	 */
	private $nomFormateur;

	/**
	 * Type formation.
	 *
	 * @var boolean
	 */
	private $typeFormation;

	/**
	 * Ya feuille presence.
	 *
	 * @var boolean
	 */
	private $yaFeuillePresence;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code action.
	 *
	 * @return string Returns the code action.
	 */
	public function getCodeAction() {
		return $this->codeAction;
	}

	/**
	 * Get the code manif.
	 *
	 * @return string Returns the code manif.
	 */
	public function getCodeManif() {
		return $this->codeManif;
	}

	/**
	 * Get the contact.
	 *
	 * @return string Returns the contact.
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * Get the date deb.
	 *
	 * @return DateTime Returns the date deb.
	 */
	public function getDateDeb() {
		return $this->dateDeb;
	}

	/**
	 * Get the date fin.
	 *
	 * @return DateTime Returns the date fin.
	 */
	public function getDateFin() {
		return $this->dateFin;
	}

	/**
	 * Get the duree.
	 *
	 * @return int Returns the duree.
	 */
	public function getDuree() {
		return $this->duree;
	}

	/**
	 * Get the duree dbl.
	 *
	 * @return float Returns the duree dbl.
	 */
	public function getDureeDbl() {
		return $this->dureeDbl;
	}

	/**
	 * Get the indice aff.
	 *
	 * @return int Returns the indice aff.
	 */
	public function getIndiceAff() {
		return $this->indiceAff;
	}

	/**
	 * Get the is montant h t.
	 *
	 * @return boolean Returns the is montant h t.
	 */
	public function getIsMontantHT() {
		return $this->isMontantHT;
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
	 * Get the lieu b t q.
	 *
	 * @return string Returns the lieu b t q.
	 */
	public function getLieuBTQ() {
		return $this->lieuBTQ;
	}

	/**
	 * Get the lieu bureau distributeur.
	 *
	 * @return string Returns the lieu bureau distributeur.
	 */
	public function getLieuBureauDistributeur() {
		return $this->lieuBureauDistributeur;
	}

	/**
	 * Get the lieu code postal.
	 *
	 * @return string Returns the lieu code postal.
	 */
	public function getLieuCodePostal() {
		return $this->lieuCodePostal;
	}

	/**
	 * Get the lieu complement.
	 *
	 * @return string Returns the lieu complement.
	 */
	public function getLieuComplement() {
		return $this->lieuComplement;
	}

	/**
	 * Get the lieu e mail.
	 *
	 * @return string Returns the lieu e mail.
	 */
	public function getLieuEMail() {
		return $this->lieuEMail;
	}

	/**
	 * Get the lieu fax.
	 *
	 * @return string Returns the lieu fax.
	 */
	public function getLieuFax() {
		return $this->lieuFax;
	}

	/**
	 * Get the lieu nom.
	 *
	 * @return string Returns the lieu nom.
	 */
	public function getLieuNom() {
		return $this->lieuNom;
	}

	/**
	 * Get the lieu nom voie.
	 *
	 * @return string Returns the lieu nom voie.
	 */
	public function getLieuNomVoie() {
		return $this->lieuNomVoie;
	}

	/**
	 * Get the lieu num voie.
	 *
	 * @return string Returns the lieu num voie.
	 */
	public function getLieuNumVoie() {
		return $this->lieuNumVoie;
	}

	/**
	 * Get the lieu p j.
	 *
	 * @return string Returns the lieu p j.
	 */
	public function getLieuPJ() {
		return $this->lieuPJ;
	}

	/**
	 * Get the lieu tel.
	 *
	 * @return string Returns the lieu tel.
	 */
	public function getLieuTel() {
		return $this->lieuTel;
	}

	/**
	 * Get the montant cheque.
	 *
	 * @return float Returns the montant cheque.
	 */
	public function getMontantCheque() {
		return $this->montantCheque;
	}

	/**
	 * Get the nb seances.
	 *
	 * @return int Returns the nb seances.
	 */
	public function getNbSeances() {
		return $this->nbSeances;
	}

	/**
	 * Get the nom formateur.
	 *
	 * @return string Returns the nom formateur.
	 */
	public function getNomFormateur() {
		return $this->nomFormateur;
	}

	/**
	 * Get the type formation.
	 *
	 * @return boolean Returns the type formation.
	 */
	public function getTypeFormation() {
		return $this->typeFormation;
	}

	/**
	 * Get the ya feuille presence.
	 *
	 * @return boolean Returns the ya feuille presence.
	 */
	public function getYaFeuillePresence() {
		return $this->yaFeuillePresence;
	}

	/**
	 * Set the code action.
	 *
	 * @param string $codeAction The code action.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setCodeAction($codeAction) {
		$this->codeAction = $codeAction;
		return $this;
	}

	/**
	 * Set the code manif.
	 *
	 * @param string $codeManif The code manif.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setCodeManif($codeManif) {
		$this->codeManif = $codeManif;
		return $this;
	}

	/**
	 * Set the contact.
	 *
	 * @param string $contact The contact.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setContact($contact) {
		$this->contact = $contact;
		return $this;
	}

	/**
	 * Set the date deb.
	 *
	 * @param DateTime $dateDeb The date deb.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setDateDeb(DateTime $dateDeb = null) {
		$this->dateDeb = $dateDeb;
		return $this;
	}

	/**
	 * Set the date fin.
	 *
	 * @param DateTime $dateFin The date fin.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setDateFin(DateTime $dateFin = null) {
		$this->dateFin = $dateFin;
		return $this;
	}

	/**
	 * Set the duree.
	 *
	 * @param int $duree The duree.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setDuree($duree) {
		$this->duree = $duree;
		return $this;
	}

	/**
	 * Set the duree dbl.
	 *
	 * @param float $dureeDbl The duree dbl.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setDureeDbl($dureeDbl) {
		$this->dureeDbl = $dureeDbl;
		return $this;
	}

	/**
	 * Set the indice aff.
	 *
	 * @param int $indiceAff The indice aff.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setIndiceAff($indiceAff) {
		$this->indiceAff = $indiceAff;
		return $this;
	}

	/**
	 * Set the is montant h t.
	 *
	 * @param boolean $isMontantHT The is montant h t.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setIsMontantHT($isMontantHT) {
		$this->isMontantHT = $isMontantHT;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the libelle memo.
	 *
	 * @param string $libelleMemo The libelle memo.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLibelleMemo($libelleMemo) {
		$this->libelleMemo = $libelleMemo;
		return $this;
	}

	/**
	 * Set the lieu b t q.
	 *
	 * @param string $lieuBTQ The lieu b t q.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuBTQ($lieuBTQ) {
		$this->lieuBTQ = $lieuBTQ;
		return $this;
	}

	/**
	 * Set the lieu bureau distributeur.
	 *
	 * @param string $lieuBureauDistributeur The lieu bureau distributeur.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuBureauDistributeur($lieuBureauDistributeur) {
		$this->lieuBureauDistributeur = $lieuBureauDistributeur;
		return $this;
	}

	/**
	 * Set the lieu code postal.
	 *
	 * @param string $lieuCodePostal The lieu code postal.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuCodePostal($lieuCodePostal) {
		$this->lieuCodePostal = $lieuCodePostal;
		return $this;
	}

	/**
	 * Set the lieu complement.
	 *
	 * @param string $lieuComplement The lieu complement.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuComplement($lieuComplement) {
		$this->lieuComplement = $lieuComplement;
		return $this;
	}

	/**
	 * Set the lieu e mail.
	 *
	 * @param string $lieuEMail The lieu e mail.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuEMail($lieuEMail) {
		$this->lieuEMail = $lieuEMail;
		return $this;
	}

	/**
	 * Set the lieu fax.
	 *
	 * @param string $lieuFax The lieu fax.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuFax($lieuFax) {
		$this->lieuFax = $lieuFax;
		return $this;
	}

	/**
	 * Set the lieu nom.
	 *
	 * @param string $lieuNom The lieu nom.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuNom($lieuNom) {
		$this->lieuNom = $lieuNom;
		return $this;
	}

	/**
	 * Set the lieu nom voie.
	 *
	 * @param string $lieuNomVoie The lieu nom voie.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuNomVoie($lieuNomVoie) {
		$this->lieuNomVoie = $lieuNomVoie;
		return $this;
	}

	/**
	 * Set the lieu num voie.
	 *
	 * @param string $lieuNumVoie The lieu num voie.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuNumVoie($lieuNumVoie) {
		$this->lieuNumVoie = $lieuNumVoie;
		return $this;
	}

	/**
	 * Set the lieu p j.
	 *
	 * @param string $lieuPJ The lieu p j.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuPJ($lieuPJ) {
		$this->lieuPJ = $lieuPJ;
		return $this;
	}

	/**
	 * Set the lieu tel.
	 *
	 * @param string $lieuTel The lieu tel.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setLieuTel($lieuTel) {
		$this->lieuTel = $lieuTel;
		return $this;
	}

	/**
	 * Set the montant cheque.
	 *
	 * @param float $montantCheque The montant cheque.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setMontantCheque($montantCheque) {
		$this->montantCheque = $montantCheque;
		return $this;
	}

	/**
	 * Set the nb seances.
	 *
	 * @param int $nbSeances The nb seances.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setNbSeances($nbSeances) {
		$this->nbSeances = $nbSeances;
		return $this;
	}

	/**
	 * Set the nom formateur.
	 *
	 * @param string $nomFormateur The nom formateur.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setNomFormateur($nomFormateur) {
		$this->nomFormateur = $nomFormateur;
		return $this;
	}

	/**
	 * Set the type formation.
	 *
	 * @param boolean $typeFormation The type formation.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setTypeFormation($typeFormation) {
		$this->typeFormation = $typeFormation;
		return $this;
	}

	/**
	 * Set the ya feuille presence.
	 *
	 * @param boolean $yaFeuillePresence The ya feuille presence.
	 * @return ActionsCo_Manif Returns this actions co_ manif.
	 */
	public function setYaFeuillePresence($yaFeuillePresence) {
		$this->yaFeuillePresence = $yaFeuillePresence;
		return $this;
	}

}
