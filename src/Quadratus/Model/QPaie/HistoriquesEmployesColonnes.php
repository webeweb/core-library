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
 * Historiques employes colonnes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class HistoriquesEmployesColonnes {

	/**
	 * Clause where.
	 *
	 * @var string
	 */
	private $clauseWhere;

	/**
	 * Indice.
	 *
	 * @var int
	 */
	private $indice;

	/**
	 * Indice tri.
	 *
	 * @var string
	 */
	private $indiceTri;

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Jointure.
	 *
	 * @var string
	 */
	private $jointure;

	/**
	 * Nom champ.
	 *
	 * @var string
	 */
	private $nomChamp;

	/**
	 * Nom table.
	 *
	 * @var string
	 */
	private $nomTable;

	/**
	 * Ref g u i d.
	 *
	 * @var string
	 */
	private $refGUID;

	/**
	 * Saisie.
	 *
	 * @var boolean
	 */
	private $saisie;

	/**
	 * Selection.
	 *
	 * @var string
	 */
	private $selection;

	/**
	 * Taille.
	 *
	 * @var int
	 */
	private $taille;

	/**
	 * Titre.
	 *
	 * @var string
	 */
	private $titre;

	/**
	 * b en graph.
	 *
	 * @var boolean
	 */
	private $bEnGraph;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the clause where.
	 *
	 * @return string Returns the clause where.
	 */
	public function getClauseWhere() {
		return $this->clauseWhere;
	}

	/**
	 * Get the indice.
	 *
	 * @return int Returns the indice.
	 */
	public function getIndice() {
		return $this->indice;
	}

	/**
	 * Get the indice tri.
	 *
	 * @return string Returns the indice tri.
	 */
	public function getIndiceTri() {
		return $this->indiceTri;
	}

	/**
	 * Get the intitule.
	 *
	 * @return string Returns the intitule.
	 */
	public function getIntitule() {
		return $this->intitule;
	}

	/**
	 * Get the jointure.
	 *
	 * @return string Returns the jointure.
	 */
	public function getJointure() {
		return $this->jointure;
	}

	/**
	 * Get the nom champ.
	 *
	 * @return string Returns the nom champ.
	 */
	public function getNomChamp() {
		return $this->nomChamp;
	}

	/**
	 * Get the nom table.
	 *
	 * @return string Returns the nom table.
	 */
	public function getNomTable() {
		return $this->nomTable;
	}

	/**
	 * Get the ref g u i d.
	 *
	 * @return string Returns the ref g u i d.
	 */
	public function getRefGUID() {
		return $this->refGUID;
	}

	/**
	 * Get the saisie.
	 *
	 * @return boolean Returns the saisie.
	 */
	public function getSaisie() {
		return $this->saisie;
	}

	/**
	 * Get the selection.
	 *
	 * @return string Returns the selection.
	 */
	public function getSelection() {
		return $this->selection;
	}

	/**
	 * Get the taille.
	 *
	 * @return int Returns the taille.
	 */
	public function getTaille() {
		return $this->taille;
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
	 * Get the b en graph.
	 *
	 * @return boolean Returns the b en graph.
	 */
	public function getbEnGraph() {
		return $this->bEnGraph;
	}

	/**
	 * Set the clause where.
	 *
	 * @param string $clauseWhere The clause where.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setClauseWhere($clauseWhere) {
		$this->clauseWhere = $clauseWhere;
		return $this;
	}

	/**
	 * Set the indice.
	 *
	 * @param int $indice The indice.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setIndice($indice) {
		$this->indice = $indice;
		return $this;
	}

	/**
	 * Set the indice tri.
	 *
	 * @param string $indiceTri The indice tri.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setIndiceTri($indiceTri) {
		$this->indiceTri = $indiceTri;
		return $this;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the jointure.
	 *
	 * @param string $jointure The jointure.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setJointure($jointure) {
		$this->jointure = $jointure;
		return $this;
	}

	/**
	 * Set the nom champ.
	 *
	 * @param string $nomChamp The nom champ.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setNomChamp($nomChamp) {
		$this->nomChamp = $nomChamp;
		return $this;
	}

	/**
	 * Set the nom table.
	 *
	 * @param string $nomTable The nom table.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setNomTable($nomTable) {
		$this->nomTable = $nomTable;
		return $this;
	}

	/**
	 * Set the ref g u i d.
	 *
	 * @param string $refGUID The ref g u i d.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setRefGUID($refGUID) {
		$this->refGUID = $refGUID;
		return $this;
	}

	/**
	 * Set the saisie.
	 *
	 * @param boolean $saisie The saisie.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setSaisie($saisie) {
		$this->saisie = $saisie;
		return $this;
	}

	/**
	 * Set the selection.
	 *
	 * @param string $selection The selection.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setSelection($selection) {
		$this->selection = $selection;
		return $this;
	}

	/**
	 * Set the taille.
	 *
	 * @param int $taille The taille.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setTaille($taille) {
		$this->taille = $taille;
		return $this;
	}

	/**
	 * Set the titre.
	 *
	 * @param string $titre The titre.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

	/**
	 * Set the b en graph.
	 *
	 * @param boolean $bEnGraph The b en graph.
	 * @return HistoriquesEmployesColonnes Returns this historiques employes colonnes.
	 */
	public function setbEnGraph($bEnGraph) {
		$this->bEnGraph = $bEnGraph;
		return $this;
	}

}
