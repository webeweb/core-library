<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

/**
 * Historiques employes colonnes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HistoriquesEmployesColonnes {

    /**
     * b en graph.
     *
     * @var bool
     */
    private $bEnGraph;

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
     * Ref guid.
     *
     * @var string
     */
    private $refGuid;

    /**
     * Saisie.
     *
     * @var bool
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
     * Get the ref guid.
     *
     * @return string Returns the ref guid.
     */
    public function getRefGuid() {
        return $this->refGuid;
    }

    /**
     * Get the saisie.
     *
     * @return bool Returns the saisie.
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
     * @return bool Returns the b en graph.
     */
    public function getbEnGraph() {
        return $this->bEnGraph;
    }

    /**
     * Set the clause where.
     *
     * @param string $clauseWhere The clause where.
     */
    public function setClauseWhere($clauseWhere) {
        $this->clauseWhere = $clauseWhere;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the indice tri.
     *
     * @param string $indiceTri The indice tri.
     */
    public function setIndiceTri($indiceTri) {
        $this->indiceTri = $indiceTri;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the jointure.
     *
     * @param string $jointure The jointure.
     */
    public function setJointure($jointure) {
        $this->jointure = $jointure;
        return $this;
    }

    /**
     * Set the nom champ.
     *
     * @param string $nomChamp The nom champ.
     */
    public function setNomChamp($nomChamp) {
        $this->nomChamp = $nomChamp;
        return $this;
    }

    /**
     * Set the nom table.
     *
     * @param string $nomTable The nom table.
     */
    public function setNomTable($nomTable) {
        $this->nomTable = $nomTable;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string $refGuid The ref guid.
     */
    public function setRefGuid($refGuid) {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the saisie.
     *
     * @param bool $saisie The saisie.
     */
    public function setSaisie($saisie) {
        $this->saisie = $saisie;
        return $this;
    }

    /**
     * Set the selection.
     *
     * @param string $selection The selection.
     */
    public function setSelection($selection) {
        $this->selection = $selection;
        return $this;
    }

    /**
     * Set the taille.
     *
     * @param int $taille The taille.
     */
    public function setTaille($taille) {
        $this->taille = $taille;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the b en graph.
     *
     * @param bool $bEnGraph The b en graph.
     */
    public function setbEnGraph($bEnGraph) {
        $this->bEnGraph = $bEnGraph;
        return $this;
    }
}
