<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

/**
 * Mots clef etebac.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class MotsClefEtebac {

    /**
     * Code journal.
     *
     * @var string
     */
    private $codeJournal;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Liste comptes.
     *
     * @var string
     */
    private $listeComptes;

    /**
     * Mot.
     *
     * @var string
     */
    private $mot;

    /**
     * Numero compte depense.
     *
     * @var string
     */
    private $numeroCompteDepense;

    /**
     * Numero compte recette.
     *
     * @var string
     */
    private $numeroCompteRecette;

    /**
     * Regle.
     *
     * @var string
     */
    private $regle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code journal.
     *
     * @return string Returns the code journal.
     */
    public function getCodeJournal() {
        return $this->codeJournal;
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
     * Get the liste comptes.
     *
     * @return string Returns the liste comptes.
     */
    public function getListeComptes() {
        return $this->listeComptes;
    }

    /**
     * Get the mot.
     *
     * @return string Returns the mot.
     */
    public function getMot() {
        return $this->mot;
    }

    /**
     * Get the numero compte depense.
     *
     * @return string Returns the numero compte depense.
     */
    public function getNumeroCompteDepense() {
        return $this->numeroCompteDepense;
    }

    /**
     * Get the numero compte recette.
     *
     * @return string Returns the numero compte recette.
     */
    public function getNumeroCompteRecette() {
        return $this->numeroCompteRecette;
    }

    /**
     * Get the regle.
     *
     * @return string Returns the regle.
     */
    public function getRegle() {
        return $this->regle;
    }

    /**
     * Set the code journal.
     *
     * @param string $codeJournal The code journal.
     */
    public function setCodeJournal($codeJournal) {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the liste comptes.
     *
     * @param string $listeComptes The liste comptes.
     */
    public function setListeComptes($listeComptes) {
        $this->listeComptes = $listeComptes;
        return $this;
    }

    /**
     * Set the mot.
     *
     * @param string $mot The mot.
     */
    public function setMot($mot) {
        $this->mot = $mot;
        return $this;
    }

    /**
     * Set the numero compte depense.
     *
     * @param string $numeroCompteDepense The numero compte depense.
     */
    public function setNumeroCompteDepense($numeroCompteDepense) {
        $this->numeroCompteDepense = $numeroCompteDepense;
        return $this;
    }

    /**
     * Set the numero compte recette.
     *
     * @param string $numeroCompteRecette The numero compte recette.
     */
    public function setNumeroCompteRecette($numeroCompteRecette) {
        $this->numeroCompteRecette = $numeroCompteRecette;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param string $regle The regle.
     */
    public function setRegle($regle) {
        $this->regle = $regle;
        return $this;
    }
}
