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
 * Clients lst perso indice collab model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ClientsLstPersoIndiceCollab {

    /**
     * Chapitre.
     *
     * @var string
     */
    private $chapitre;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Origine.
     *
     * @var int
     */
    private $origine;

    /**
     * Ref g u i d.
     *
     * @var string
     */
    private $refGUID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chapitre.
     *
     * @return string Returns the chapitre.
     */
    public function getChapitre() {
        return $this->chapitre;
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
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the origine.
     *
     * @return int Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
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
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     * @return ClientsLstPersoIndiceCollab Returns this clients lst perso indice collab.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ClientsLstPersoIndiceCollab Returns this clients lst perso indice collab.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return ClientsLstPersoIndiceCollab Returns this clients lst perso indice collab.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param int $origine The origine.
     * @return ClientsLstPersoIndiceCollab Returns this clients lst perso indice collab.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the ref g u i d.
     *
     * @param string $refGUID The ref g u i d.
     * @return ClientsLstPersoIndiceCollab Returns this clients lst perso indice collab.
     */
    public function setRefGUID($refGUID) {
        $this->refGUID = $refGUID;
        return $this;
    }

}
