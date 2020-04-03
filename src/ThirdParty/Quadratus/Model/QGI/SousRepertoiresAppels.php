<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Sous repertoires appels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class SousRepertoiresAppels {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Niveau ligne.
     *
     * @var int
     */
    private $niveauLigne;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Proprietes.
     *
     * @var string
     */
    private $proprietes;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the niveau ligne.
     *
     * @return int Returns the niveau ligne.
     */
    public function getNiveauLigne() {
        return $this->niveauLigne;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Get the proprietes.
     *
     * @return string Returns the proprietes.
     */
    public function getProprietes() {
        return $this->proprietes;
    }

    /**
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the niveau ligne.
     *
     * @param int $niveauLigne The niveau ligne.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setNiveauLigne($niveauLigne) {
        $this->niveauLigne = $niveauLigne;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the proprietes.
     *
     * @param string $proprietes The proprietes.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setProprietes($proprietes) {
        $this->proprietes = $proprietes;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return SousRepertoiresAppels Returns this Sous repertoires appels.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
