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
 * Clients lst perso indice collab.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * Ref guid.
     *
     * @var string
     */
    private $refGuid;

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
     * Get the ref guid.
     *
     * @return string Returns the ref guid.
     */
    public function getRefGuid() {
        return $this->refGuid;
    }

    /**
     * Set the chapitre.
     *
     * @param string $chapitre The chapitre.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setChapitre($chapitre) {
        $this->chapitre = $chapitre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param int $origine The origine.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string $refGuid The ref guid.
     * @return ClientsLstPersoIndiceCollab Returns this Clients lst perso indice collab.
     */
    public function setRefGuid($refGuid) {
        $this->refGuid = $refGuid;
        return $this;
    }
}
