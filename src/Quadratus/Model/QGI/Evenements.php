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
 * Evenements model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Evenements {

	/**
	 * Archive.
	 *
	 * @var boolean
	 */
	private $archive;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collab.
	 *
	 * @var string
	 */
	private $codeCollab;

	/**
	 * Contenu1.
	 *
	 * @var string
	 */
	private $contenu1;

	/**
	 * Contenu2.
	 *
	 * @var string
	 */
	private $contenu2;

	/**
	 * Contenu3.
	 *
	 * @var string
	 */
	private $contenu3;

	/**
	 * Contenu4.
	 *
	 * @var string
	 */
	private $contenu4;

	/**
	 * Date evt.
	 *
	 * @var DateTime
	 */
	private $dateEvt;

	/**
	 * Emplacement fichier.
	 *
	 * @var string
	 */
	private $emplacementFichier;

	/**
	 * Etat is actif.
	 *
	 * @var string
	 */
	private $etatIsActif;

	/**
	 * F s_ compta.
	 *
	 * @var string
	 */
	private $fS_Compta;

	/**
	 * F s_ compta date alerte.
	 *
	 * @var DateTime
	 */
	private $fS_ComptaDateAlerte;

	/**
	 * F s_ compta ya alerte.
	 *
	 * @var boolean
	 */
	private $fS_ComptaYaAlerte;

	/**
	 * F s_ compta_ coll arch.
	 *
	 * @var string
	 */
	private $fS_Compta_CollArch;

	/**
	 * F s_ compta_ date arch.
	 *
	 * @var DateTime
	 */
	private $fS_Compta_DateArch;

	/**
	 * F s_ fiscal.
	 *
	 * @var string
	 */
	private $fS_Fiscal;

	/**
	 * F s_ fiscal_ coll arch.
	 *
	 * @var string
	 */
	private $fS_Fiscal_CollArch;

	/**
	 * F s_ fiscal_ date arch.
	 *
	 * @var DateTime
	 */
	private $fS_Fiscal_DateArch;

	/**
	 * F s_ g i.
	 *
	 * @var string
	 */
	private $fS_GI;

	/**
	 * F s_ g i_ coll arch.
	 *
	 * @var string
	 */
	private $fS_GI_CollArch;

	/**
	 * F s_ g i_ date arch.
	 *
	 * @var DateTime
	 */
	private $fS_GI_DateArch;

	/**
	 * F s_ juridique.
	 *
	 * @var string
	 */
	private $fS_Juridique;

	/**
	 * F s_ juridique_ coll arch.
	 *
	 * @var string
	 */
	private $fS_Juridique_CollArch;

	/**
	 * F s_ juridique_ date arch.
	 *
	 * @var DateTime
	 */
	private $fS_Juridique_DateArch;

	/**
	 * F s_ social.
	 *
	 * @var string
	 */
	private $fS_Social;

	/**
	 * F s_ social date alerte.
	 *
	 * @var DateTime
	 */
	private $fS_SocialDateAlerte;

	/**
	 * F s_ social ya alerte.
	 *
	 * @var boolean
	 */
	private $fS_SocialYaAlerte;

	/**
	 * F s_ social_ coll arch.
	 *
	 * @var string
	 */
	private $fS_Social_CollArch;

	/**
	 * F s_ social_ date arch.
	 *
	 * @var DateTime
	 */
	private $fS_Social_DateArch;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Numero.
	 *
	 * @var int
	 */
	private $numero;

	/**
	 * Qualifiant1.
	 *
	 * @var string
	 */
	private $qualifiant1;

	/**
	 * Qualifiant2.
	 *
	 * @var string
	 */
	private $qualifiant2;

	/**
	 * Qualifiant3.
	 *
	 * @var string
	 */
	private $qualifiant3;

	/**
	 * Racine cpt.
	 *
	 * @var string
	 */
	private $racineCpt;

	/**
	 * Regle.
	 *
	 * @var boolean
	 */
	private $regle;

	/**
	 * Titre.
	 *
	 * @var string
	 */
	private $titre;

	/**
	 * Type evt.
	 *
	 * @var string
	 */
	private $typeEvt;

	/**
	 * Uniq i d.
	 *
	 * @var string
	 */
	private $uniqID;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the archive.
	 *
	 * @return boolean Returns the archive.
	 */
	public function getArchive() {
		return $this->archive;
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
	 * Get the code collab.
	 *
	 * @return string Returns the code collab.
	 */
	public function getCodeCollab() {
		return $this->codeCollab;
	}

	/**
	 * Get the contenu1.
	 *
	 * @return string Returns the contenu1.
	 */
	public function getContenu1() {
		return $this->contenu1;
	}

	/**
	 * Get the contenu2.
	 *
	 * @return string Returns the contenu2.
	 */
	public function getContenu2() {
		return $this->contenu2;
	}

	/**
	 * Get the contenu3.
	 *
	 * @return string Returns the contenu3.
	 */
	public function getContenu3() {
		return $this->contenu3;
	}

	/**
	 * Get the contenu4.
	 *
	 * @return string Returns the contenu4.
	 */
	public function getContenu4() {
		return $this->contenu4;
	}

	/**
	 * Get the date evt.
	 *
	 * @return DateTime Returns the date evt.
	 */
	public function getDateEvt() {
		return $this->dateEvt;
	}

	/**
	 * Get the emplacement fichier.
	 *
	 * @return string Returns the emplacement fichier.
	 */
	public function getEmplacementFichier() {
		return $this->emplacementFichier;
	}

	/**
	 * Get the etat is actif.
	 *
	 * @return string Returns the etat is actif.
	 */
	public function getEtatIsActif() {
		return $this->etatIsActif;
	}

	/**
	 * Get the f s_ compta.
	 *
	 * @return string Returns the f s_ compta.
	 */
	public function getFS_Compta() {
		return $this->fS_Compta;
	}

	/**
	 * Get the f s_ compta date alerte.
	 *
	 * @return DateTime Returns the f s_ compta date alerte.
	 */
	public function getFS_ComptaDateAlerte() {
		return $this->fS_ComptaDateAlerte;
	}

	/**
	 * Get the f s_ compta ya alerte.
	 *
	 * @return boolean Returns the f s_ compta ya alerte.
	 */
	public function getFS_ComptaYaAlerte() {
		return $this->fS_ComptaYaAlerte;
	}

	/**
	 * Get the f s_ compta_ coll arch.
	 *
	 * @return string Returns the f s_ compta_ coll arch.
	 */
	public function getFS_Compta_CollArch() {
		return $this->fS_Compta_CollArch;
	}

	/**
	 * Get the f s_ compta_ date arch.
	 *
	 * @return DateTime Returns the f s_ compta_ date arch.
	 */
	public function getFS_Compta_DateArch() {
		return $this->fS_Compta_DateArch;
	}

	/**
	 * Get the f s_ fiscal.
	 *
	 * @return string Returns the f s_ fiscal.
	 */
	public function getFS_Fiscal() {
		return $this->fS_Fiscal;
	}

	/**
	 * Get the f s_ fiscal_ coll arch.
	 *
	 * @return string Returns the f s_ fiscal_ coll arch.
	 */
	public function getFS_Fiscal_CollArch() {
		return $this->fS_Fiscal_CollArch;
	}

	/**
	 * Get the f s_ fiscal_ date arch.
	 *
	 * @return DateTime Returns the f s_ fiscal_ date arch.
	 */
	public function getFS_Fiscal_DateArch() {
		return $this->fS_Fiscal_DateArch;
	}

	/**
	 * Get the f s_ g i.
	 *
	 * @return string Returns the f s_ g i.
	 */
	public function getFS_GI() {
		return $this->fS_GI;
	}

	/**
	 * Get the f s_ g i_ coll arch.
	 *
	 * @return string Returns the f s_ g i_ coll arch.
	 */
	public function getFS_GI_CollArch() {
		return $this->fS_GI_CollArch;
	}

	/**
	 * Get the f s_ g i_ date arch.
	 *
	 * @return DateTime Returns the f s_ g i_ date arch.
	 */
	public function getFS_GI_DateArch() {
		return $this->fS_GI_DateArch;
	}

	/**
	 * Get the f s_ juridique.
	 *
	 * @return string Returns the f s_ juridique.
	 */
	public function getFS_Juridique() {
		return $this->fS_Juridique;
	}

	/**
	 * Get the f s_ juridique_ coll arch.
	 *
	 * @return string Returns the f s_ juridique_ coll arch.
	 */
	public function getFS_Juridique_CollArch() {
		return $this->fS_Juridique_CollArch;
	}

	/**
	 * Get the f s_ juridique_ date arch.
	 *
	 * @return DateTime Returns the f s_ juridique_ date arch.
	 */
	public function getFS_Juridique_DateArch() {
		return $this->fS_Juridique_DateArch;
	}

	/**
	 * Get the f s_ social.
	 *
	 * @return string Returns the f s_ social.
	 */
	public function getFS_Social() {
		return $this->fS_Social;
	}

	/**
	 * Get the f s_ social date alerte.
	 *
	 * @return DateTime Returns the f s_ social date alerte.
	 */
	public function getFS_SocialDateAlerte() {
		return $this->fS_SocialDateAlerte;
	}

	/**
	 * Get the f s_ social ya alerte.
	 *
	 * @return boolean Returns the f s_ social ya alerte.
	 */
	public function getFS_SocialYaAlerte() {
		return $this->fS_SocialYaAlerte;
	}

	/**
	 * Get the f s_ social_ coll arch.
	 *
	 * @return string Returns the f s_ social_ coll arch.
	 */
	public function getFS_Social_CollArch() {
		return $this->fS_Social_CollArch;
	}

	/**
	 * Get the f s_ social_ date arch.
	 *
	 * @return DateTime Returns the f s_ social_ date arch.
	 */
	public function getFS_Social_DateArch() {
		return $this->fS_Social_DateArch;
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
	 * Get the numero.
	 *
	 * @return int Returns the numero.
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * Get the qualifiant1.
	 *
	 * @return string Returns the qualifiant1.
	 */
	public function getQualifiant1() {
		return $this->qualifiant1;
	}

	/**
	 * Get the qualifiant2.
	 *
	 * @return string Returns the qualifiant2.
	 */
	public function getQualifiant2() {
		return $this->qualifiant2;
	}

	/**
	 * Get the qualifiant3.
	 *
	 * @return string Returns the qualifiant3.
	 */
	public function getQualifiant3() {
		return $this->qualifiant3;
	}

	/**
	 * Get the racine cpt.
	 *
	 * @return string Returns the racine cpt.
	 */
	public function getRacineCpt() {
		return $this->racineCpt;
	}

	/**
	 * Get the regle.
	 *
	 * @return boolean Returns the regle.
	 */
	public function getRegle() {
		return $this->regle;
	}

	/**
	 * Get the titre.
	 *
	 * @return string Returns the titre.
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * Get the type evt.
	 *
	 * @return string Returns the type evt.
	 */
	public function getTypeEvt() {
		return $this->typeEvt;
	}

	/**
	 * Get the uniq i d.
	 *
	 * @return string Returns the uniq i d.
	 */
	public function getUniqID() {
		return $this->uniqID;
	}

	/**
	 * Set the archive.
	 *
	 * @param boolean $archive The archive.
	 * @return Evenements Returns this evenements.
	 */
	public function setArchive($archive) {
		$this->archive = $archive;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return Evenements Returns this evenements.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collab.
	 *
	 * @param string $codeCollab The code collab.
	 * @return Evenements Returns this evenements.
	 */
	public function setCodeCollab($codeCollab) {
		$this->codeCollab = $codeCollab;
		return $this;
	}

	/**
	 * Set the contenu1.
	 *
	 * @param string $contenu1 The contenu1.
	 * @return Evenements Returns this evenements.
	 */
	public function setContenu1($contenu1) {
		$this->contenu1 = $contenu1;
		return $this;
	}

	/**
	 * Set the contenu2.
	 *
	 * @param string $contenu2 The contenu2.
	 * @return Evenements Returns this evenements.
	 */
	public function setContenu2($contenu2) {
		$this->contenu2 = $contenu2;
		return $this;
	}

	/**
	 * Set the contenu3.
	 *
	 * @param string $contenu3 The contenu3.
	 * @return Evenements Returns this evenements.
	 */
	public function setContenu3($contenu3) {
		$this->contenu3 = $contenu3;
		return $this;
	}

	/**
	 * Set the contenu4.
	 *
	 * @param string $contenu4 The contenu4.
	 * @return Evenements Returns this evenements.
	 */
	public function setContenu4($contenu4) {
		$this->contenu4 = $contenu4;
		return $this;
	}

	/**
	 * Set the date evt.
	 *
	 * @param DateTime $dateEvt The date evt.
	 * @return Evenements Returns this evenements.
	 */
	public function setDateEvt(DateTime $dateEvt = null) {
		$this->dateEvt = $dateEvt;
		return $this;
	}

	/**
	 * Set the emplacement fichier.
	 *
	 * @param string $emplacementFichier The emplacement fichier.
	 * @return Evenements Returns this evenements.
	 */
	public function setEmplacementFichier($emplacementFichier) {
		$this->emplacementFichier = $emplacementFichier;
		return $this;
	}

	/**
	 * Set the etat is actif.
	 *
	 * @param string $etatIsActif The etat is actif.
	 * @return Evenements Returns this evenements.
	 */
	public function setEtatIsActif($etatIsActif) {
		$this->etatIsActif = $etatIsActif;
		return $this;
	}

	/**
	 * Set the f s_ compta.
	 *
	 * @param string $fS_Compta The f s_ compta.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Compta($fS_Compta) {
		$this->fS_Compta = $fS_Compta;
		return $this;
	}

	/**
	 * Set the f s_ compta date alerte.
	 *
	 * @param DateTime $fS_ComptaDateAlerte The f s_ compta date alerte.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_ComptaDateAlerte(DateTime $fS_ComptaDateAlerte = null) {
		$this->fS_ComptaDateAlerte = $fS_ComptaDateAlerte;
		return $this;
	}

	/**
	 * Set the f s_ compta ya alerte.
	 *
	 * @param boolean $fS_ComptaYaAlerte The f s_ compta ya alerte.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_ComptaYaAlerte($fS_ComptaYaAlerte) {
		$this->fS_ComptaYaAlerte = $fS_ComptaYaAlerte;
		return $this;
	}

	/**
	 * Set the f s_ compta_ coll arch.
	 *
	 * @param string $fS_Compta_CollArch The f s_ compta_ coll arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Compta_CollArch($fS_Compta_CollArch) {
		$this->fS_Compta_CollArch = $fS_Compta_CollArch;
		return $this;
	}

	/**
	 * Set the f s_ compta_ date arch.
	 *
	 * @param DateTime $fS_Compta_DateArch The f s_ compta_ date arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Compta_DateArch(DateTime $fS_Compta_DateArch = null) {
		$this->fS_Compta_DateArch = $fS_Compta_DateArch;
		return $this;
	}

	/**
	 * Set the f s_ fiscal.
	 *
	 * @param string $fS_Fiscal The f s_ fiscal.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Fiscal($fS_Fiscal) {
		$this->fS_Fiscal = $fS_Fiscal;
		return $this;
	}

	/**
	 * Set the f s_ fiscal_ coll arch.
	 *
	 * @param string $fS_Fiscal_CollArch The f s_ fiscal_ coll arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Fiscal_CollArch($fS_Fiscal_CollArch) {
		$this->fS_Fiscal_CollArch = $fS_Fiscal_CollArch;
		return $this;
	}

	/**
	 * Set the f s_ fiscal_ date arch.
	 *
	 * @param DateTime $fS_Fiscal_DateArch The f s_ fiscal_ date arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Fiscal_DateArch(DateTime $fS_Fiscal_DateArch = null) {
		$this->fS_Fiscal_DateArch = $fS_Fiscal_DateArch;
		return $this;
	}

	/**
	 * Set the f s_ g i.
	 *
	 * @param string $fS_GI The f s_ g i.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_GI($fS_GI) {
		$this->fS_GI = $fS_GI;
		return $this;
	}

	/**
	 * Set the f s_ g i_ coll arch.
	 *
	 * @param string $fS_GI_CollArch The f s_ g i_ coll arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_GI_CollArch($fS_GI_CollArch) {
		$this->fS_GI_CollArch = $fS_GI_CollArch;
		return $this;
	}

	/**
	 * Set the f s_ g i_ date arch.
	 *
	 * @param DateTime $fS_GI_DateArch The f s_ g i_ date arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_GI_DateArch(DateTime $fS_GI_DateArch = null) {
		$this->fS_GI_DateArch = $fS_GI_DateArch;
		return $this;
	}

	/**
	 * Set the f s_ juridique.
	 *
	 * @param string $fS_Juridique The f s_ juridique.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Juridique($fS_Juridique) {
		$this->fS_Juridique = $fS_Juridique;
		return $this;
	}

	/**
	 * Set the f s_ juridique_ coll arch.
	 *
	 * @param string $fS_Juridique_CollArch The f s_ juridique_ coll arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Juridique_CollArch($fS_Juridique_CollArch) {
		$this->fS_Juridique_CollArch = $fS_Juridique_CollArch;
		return $this;
	}

	/**
	 * Set the f s_ juridique_ date arch.
	 *
	 * @param DateTime $fS_Juridique_DateArch The f s_ juridique_ date arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Juridique_DateArch(DateTime $fS_Juridique_DateArch = null) {
		$this->fS_Juridique_DateArch = $fS_Juridique_DateArch;
		return $this;
	}

	/**
	 * Set the f s_ social.
	 *
	 * @param string $fS_Social The f s_ social.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Social($fS_Social) {
		$this->fS_Social = $fS_Social;
		return $this;
	}

	/**
	 * Set the f s_ social date alerte.
	 *
	 * @param DateTime $fS_SocialDateAlerte The f s_ social date alerte.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_SocialDateAlerte(DateTime $fS_SocialDateAlerte = null) {
		$this->fS_SocialDateAlerte = $fS_SocialDateAlerte;
		return $this;
	}

	/**
	 * Set the f s_ social ya alerte.
	 *
	 * @param boolean $fS_SocialYaAlerte The f s_ social ya alerte.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_SocialYaAlerte($fS_SocialYaAlerte) {
		$this->fS_SocialYaAlerte = $fS_SocialYaAlerte;
		return $this;
	}

	/**
	 * Set the f s_ social_ coll arch.
	 *
	 * @param string $fS_Social_CollArch The f s_ social_ coll arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Social_CollArch($fS_Social_CollArch) {
		$this->fS_Social_CollArch = $fS_Social_CollArch;
		return $this;
	}

	/**
	 * Set the f s_ social_ date arch.
	 *
	 * @param DateTime $fS_Social_DateArch The f s_ social_ date arch.
	 * @return Evenements Returns this evenements.
	 */
	public function setFS_Social_DateArch(DateTime $fS_Social_DateArch = null) {
		$this->fS_Social_DateArch = $fS_Social_DateArch;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return Evenements Returns this evenements.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the numero.
	 *
	 * @param int $numero The numero.
	 * @return Evenements Returns this evenements.
	 */
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * Set the qualifiant1.
	 *
	 * @param string $qualifiant1 The qualifiant1.
	 * @return Evenements Returns this evenements.
	 */
	public function setQualifiant1($qualifiant1) {
		$this->qualifiant1 = $qualifiant1;
		return $this;
	}

	/**
	 * Set the qualifiant2.
	 *
	 * @param string $qualifiant2 The qualifiant2.
	 * @return Evenements Returns this evenements.
	 */
	public function setQualifiant2($qualifiant2) {
		$this->qualifiant2 = $qualifiant2;
		return $this;
	}

	/**
	 * Set the qualifiant3.
	 *
	 * @param string $qualifiant3 The qualifiant3.
	 * @return Evenements Returns this evenements.
	 */
	public function setQualifiant3($qualifiant3) {
		$this->qualifiant3 = $qualifiant3;
		return $this;
	}

	/**
	 * Set the racine cpt.
	 *
	 * @param string $racineCpt The racine cpt.
	 * @return Evenements Returns this evenements.
	 */
	public function setRacineCpt($racineCpt) {
		$this->racineCpt = $racineCpt;
		return $this;
	}

	/**
	 * Set the regle.
	 *
	 * @param boolean $regle The regle.
	 * @return Evenements Returns this evenements.
	 */
	public function setRegle($regle) {
		$this->regle = $regle;
		return $this;
	}

	/**
	 * Set the titre.
	 *
	 * @param string $titre The titre.
	 * @return Evenements Returns this evenements.
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

	/**
	 * Set the type evt.
	 *
	 * @param string $typeEvt The type evt.
	 * @return Evenements Returns this evenements.
	 */
	public function setTypeEvt($typeEvt) {
		$this->typeEvt = $typeEvt;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return Evenements Returns this evenements.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

}
