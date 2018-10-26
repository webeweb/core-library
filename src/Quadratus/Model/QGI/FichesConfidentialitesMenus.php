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


/**
 * Fiches confidentialites menus model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class FichesConfidentialitesMenus {

	/**
	 * Code.
	 *
	 * @var string
	 */
	private $code;

	/**
	 * Dossier.
	 *
	 * @var string
	 */
	private $dossier;

	/**
	 * Droit ajout.
	 *
	 * @var boolean
	 */
	private $droitAjout;

	/**
	 * Droit modification.
	 *
	 * @var boolean
	 */
	private $droitModification;

	/**
	 * Droit suppression.
	 *
	 * @var boolean
	 */
	private $droitSuppression;

	/**
	 * Index.
	 *
	 * @var int
	 */
	private $index;

	/**
	 * Index du pere no1.
	 *
	 * @var int
	 */
	private $indexDuPereNo1;

	/**
	 * Index du pere no2.
	 *
	 * @var int
	 */
	private $indexDuPereNo2;

	/**
	 * Index du pere no3.
	 *
	 * @var int
	 */
	private $indexDuPereNo3;

	/**
	 * Index du pere no4.
	 *
	 * @var int
	 */
	private $indexDuPereNo4;

	/**
	 * Index du pere no5.
	 *
	 * @var int
	 */
	private $indexDuPereNo5;

	/**
	 * Index du pere no6.
	 *
	 * @var int
	 */
	private $indexDuPereNo6;

	/**
	 * Index du pere no7.
	 *
	 * @var int
	 */
	private $indexDuPereNo7;

	/**
	 * Libelle menu.
	 *
	 * @var string
	 */
	private $libelleMenu;

	/**
	 * Menu visible.
	 *
	 * @var boolean
	 */
	private $menuVisible;

	/**
	 * Mot de passe.
	 *
	 * @var string
	 */
	private $motDePasse;

	/**
	 * Niveau ligne.
	 *
	 * @var string
	 */
	private $niveauLigne;

	/**
	 * Nom du pere no1.
	 *
	 * @var string
	 */
	private $nomDuPereNo1;

	/**
	 * Nom du pere no2.
	 *
	 * @var string
	 */
	private $nomDuPereNo2;

	/**
	 * Nom du pere no3.
	 *
	 * @var string
	 */
	private $nomDuPereNo3;

	/**
	 * Nom du pere no4.
	 *
	 * @var string
	 */
	private $nomDuPereNo4;

	/**
	 * Nom du pere no5.
	 *
	 * @var string
	 */
	private $nomDuPereNo5;

	/**
	 * Nom du pere no6.
	 *
	 * @var string
	 */
	private $nomDuPereNo6;

	/**
	 * Nom du pere no7.
	 *
	 * @var string
	 */
	private $nomDuPereNo7;

	/**
	 * Nom menu.
	 *
	 * @var string
	 */
	private $nomMenu;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Type selection.
	 *
	 * @var string
	 */
	private $typeSelection;

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
	 * Get the dossier.
	 *
	 * @return string Returns the dossier.
	 */
	public function getDossier() {
		return $this->dossier;
	}

	/**
	 * Get the droit ajout.
	 *
	 * @return boolean Returns the droit ajout.
	 */
	public function getDroitAjout() {
		return $this->droitAjout;
	}

	/**
	 * Get the droit modification.
	 *
	 * @return boolean Returns the droit modification.
	 */
	public function getDroitModification() {
		return $this->droitModification;
	}

	/**
	 * Get the droit suppression.
	 *
	 * @return boolean Returns the droit suppression.
	 */
	public function getDroitSuppression() {
		return $this->droitSuppression;
	}

	/**
	 * Get the index.
	 *
	 * @return int Returns the index.
	 */
	public function getIndex() {
		return $this->index;
	}

	/**
	 * Get the index du pere no1.
	 *
	 * @return int Returns the index du pere no1.
	 */
	public function getIndexDuPereNo1() {
		return $this->indexDuPereNo1;
	}

	/**
	 * Get the index du pere no2.
	 *
	 * @return int Returns the index du pere no2.
	 */
	public function getIndexDuPereNo2() {
		return $this->indexDuPereNo2;
	}

	/**
	 * Get the index du pere no3.
	 *
	 * @return int Returns the index du pere no3.
	 */
	public function getIndexDuPereNo3() {
		return $this->indexDuPereNo3;
	}

	/**
	 * Get the index du pere no4.
	 *
	 * @return int Returns the index du pere no4.
	 */
	public function getIndexDuPereNo4() {
		return $this->indexDuPereNo4;
	}

	/**
	 * Get the index du pere no5.
	 *
	 * @return int Returns the index du pere no5.
	 */
	public function getIndexDuPereNo5() {
		return $this->indexDuPereNo5;
	}

	/**
	 * Get the index du pere no6.
	 *
	 * @return int Returns the index du pere no6.
	 */
	public function getIndexDuPereNo6() {
		return $this->indexDuPereNo6;
	}

	/**
	 * Get the index du pere no7.
	 *
	 * @return int Returns the index du pere no7.
	 */
	public function getIndexDuPereNo7() {
		return $this->indexDuPereNo7;
	}

	/**
	 * Get the libelle menu.
	 *
	 * @return string Returns the libelle menu.
	 */
	public function getLibelleMenu() {
		return $this->libelleMenu;
	}

	/**
	 * Get the menu visible.
	 *
	 * @return boolean Returns the menu visible.
	 */
	public function getMenuVisible() {
		return $this->menuVisible;
	}

	/**
	 * Get the mot de passe.
	 *
	 * @return string Returns the mot de passe.
	 */
	public function getMotDePasse() {
		return $this->motDePasse;
	}

	/**
	 * Get the niveau ligne.
	 *
	 * @return string Returns the niveau ligne.
	 */
	public function getNiveauLigne() {
		return $this->niveauLigne;
	}

	/**
	 * Get the nom du pere no1.
	 *
	 * @return string Returns the nom du pere no1.
	 */
	public function getNomDuPereNo1() {
		return $this->nomDuPereNo1;
	}

	/**
	 * Get the nom du pere no2.
	 *
	 * @return string Returns the nom du pere no2.
	 */
	public function getNomDuPereNo2() {
		return $this->nomDuPereNo2;
	}

	/**
	 * Get the nom du pere no3.
	 *
	 * @return string Returns the nom du pere no3.
	 */
	public function getNomDuPereNo3() {
		return $this->nomDuPereNo3;
	}

	/**
	 * Get the nom du pere no4.
	 *
	 * @return string Returns the nom du pere no4.
	 */
	public function getNomDuPereNo4() {
		return $this->nomDuPereNo4;
	}

	/**
	 * Get the nom du pere no5.
	 *
	 * @return string Returns the nom du pere no5.
	 */
	public function getNomDuPereNo5() {
		return $this->nomDuPereNo5;
	}

	/**
	 * Get the nom du pere no6.
	 *
	 * @return string Returns the nom du pere no6.
	 */
	public function getNomDuPereNo6() {
		return $this->nomDuPereNo6;
	}

	/**
	 * Get the nom du pere no7.
	 *
	 * @return string Returns the nom du pere no7.
	 */
	public function getNomDuPereNo7() {
		return $this->nomDuPereNo7;
	}

	/**
	 * Get the nom menu.
	 *
	 * @return string Returns the nom menu.
	 */
	public function getNomMenu() {
		return $this->nomMenu;
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
	 * Get the type selection.
	 *
	 * @return string Returns the type selection.
	 */
	public function getTypeSelection() {
		return $this->typeSelection;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the dossier.
	 *
	 * @param string $dossier The dossier.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setDossier($dossier) {
		$this->dossier = $dossier;
		return $this;
	}

	/**
	 * Set the droit ajout.
	 *
	 * @param boolean $droitAjout The droit ajout.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setDroitAjout($droitAjout) {
		$this->droitAjout = $droitAjout;
		return $this;
	}

	/**
	 * Set the droit modification.
	 *
	 * @param boolean $droitModification The droit modification.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setDroitModification($droitModification) {
		$this->droitModification = $droitModification;
		return $this;
	}

	/**
	 * Set the droit suppression.
	 *
	 * @param boolean $droitSuppression The droit suppression.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setDroitSuppression($droitSuppression) {
		$this->droitSuppression = $droitSuppression;
		return $this;
	}

	/**
	 * Set the index.
	 *
	 * @param int $index The index.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndex($index) {
		$this->index = $index;
		return $this;
	}

	/**
	 * Set the index du pere no1.
	 *
	 * @param int $indexDuPereNo1 The index du pere no1.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo1($indexDuPereNo1) {
		$this->indexDuPereNo1 = $indexDuPereNo1;
		return $this;
	}

	/**
	 * Set the index du pere no2.
	 *
	 * @param int $indexDuPereNo2 The index du pere no2.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo2($indexDuPereNo2) {
		$this->indexDuPereNo2 = $indexDuPereNo2;
		return $this;
	}

	/**
	 * Set the index du pere no3.
	 *
	 * @param int $indexDuPereNo3 The index du pere no3.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo3($indexDuPereNo3) {
		$this->indexDuPereNo3 = $indexDuPereNo3;
		return $this;
	}

	/**
	 * Set the index du pere no4.
	 *
	 * @param int $indexDuPereNo4 The index du pere no4.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo4($indexDuPereNo4) {
		$this->indexDuPereNo4 = $indexDuPereNo4;
		return $this;
	}

	/**
	 * Set the index du pere no5.
	 *
	 * @param int $indexDuPereNo5 The index du pere no5.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo5($indexDuPereNo5) {
		$this->indexDuPereNo5 = $indexDuPereNo5;
		return $this;
	}

	/**
	 * Set the index du pere no6.
	 *
	 * @param int $indexDuPereNo6 The index du pere no6.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo6($indexDuPereNo6) {
		$this->indexDuPereNo6 = $indexDuPereNo6;
		return $this;
	}

	/**
	 * Set the index du pere no7.
	 *
	 * @param int $indexDuPereNo7 The index du pere no7.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setIndexDuPereNo7($indexDuPereNo7) {
		$this->indexDuPereNo7 = $indexDuPereNo7;
		return $this;
	}

	/**
	 * Set the libelle menu.
	 *
	 * @param string $libelleMenu The libelle menu.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setLibelleMenu($libelleMenu) {
		$this->libelleMenu = $libelleMenu;
		return $this;
	}

	/**
	 * Set the menu visible.
	 *
	 * @param boolean $menuVisible The menu visible.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setMenuVisible($menuVisible) {
		$this->menuVisible = $menuVisible;
		return $this;
	}

	/**
	 * Set the mot de passe.
	 *
	 * @param string $motDePasse The mot de passe.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setMotDePasse($motDePasse) {
		$this->motDePasse = $motDePasse;
		return $this;
	}

	/**
	 * Set the niveau ligne.
	 *
	 * @param string $niveauLigne The niveau ligne.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNiveauLigne($niveauLigne) {
		$this->niveauLigne = $niveauLigne;
		return $this;
	}

	/**
	 * Set the nom du pere no1.
	 *
	 * @param string $nomDuPereNo1 The nom du pere no1.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo1($nomDuPereNo1) {
		$this->nomDuPereNo1 = $nomDuPereNo1;
		return $this;
	}

	/**
	 * Set the nom du pere no2.
	 *
	 * @param string $nomDuPereNo2 The nom du pere no2.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo2($nomDuPereNo2) {
		$this->nomDuPereNo2 = $nomDuPereNo2;
		return $this;
	}

	/**
	 * Set the nom du pere no3.
	 *
	 * @param string $nomDuPereNo3 The nom du pere no3.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo3($nomDuPereNo3) {
		$this->nomDuPereNo3 = $nomDuPereNo3;
		return $this;
	}

	/**
	 * Set the nom du pere no4.
	 *
	 * @param string $nomDuPereNo4 The nom du pere no4.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo4($nomDuPereNo4) {
		$this->nomDuPereNo4 = $nomDuPereNo4;
		return $this;
	}

	/**
	 * Set the nom du pere no5.
	 *
	 * @param string $nomDuPereNo5 The nom du pere no5.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo5($nomDuPereNo5) {
		$this->nomDuPereNo5 = $nomDuPereNo5;
		return $this;
	}

	/**
	 * Set the nom du pere no6.
	 *
	 * @param string $nomDuPereNo6 The nom du pere no6.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo6($nomDuPereNo6) {
		$this->nomDuPereNo6 = $nomDuPereNo6;
		return $this;
	}

	/**
	 * Set the nom du pere no7.
	 *
	 * @param string $nomDuPereNo7 The nom du pere no7.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomDuPereNo7($nomDuPereNo7) {
		$this->nomDuPereNo7 = $nomDuPereNo7;
		return $this;
	}

	/**
	 * Set the nom menu.
	 *
	 * @param string $nomMenu The nom menu.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setNomMenu($nomMenu) {
		$this->nomMenu = $nomMenu;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * Set the type selection.
	 *
	 * @param string $typeSelection The type selection.
	 * @return FichesConfidentialitesMenus Returns this fiches confidentialites menus.
	 */
	public function setTypeSelection($typeSelection) {
		$this->typeSelection = $typeSelection;
		return $this;
	}

}
