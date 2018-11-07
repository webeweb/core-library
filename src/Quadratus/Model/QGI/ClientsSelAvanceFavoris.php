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
 * Clients sel avance favoris model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ClientsSelAvanceFavoris {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code liste.
     *
     * @var string
     */
    private $codeListe;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Ordre.
     *
     * @var int
     */
    private $ordre;

    /**
     * Origine.
     *
     * @var string
     */
    private $origine;

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
     * Get the code liste.
     *
     * @return string Returns the code liste.
     */
    public function getCodeListe() {
        return $this->codeListe;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the ordre.
     *
     * @return int Returns the ordre.
     */
    public function getOrdre() {
        return $this->ordre;
    }

    /**
     * Get the origine.
     *
     * @return string Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ClientsSelAvanceFavoris Returns this clients sel avance favoris.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code liste.
     *
     * @param string $codeListe The code liste.
     * @return ClientsSelAvanceFavoris Returns this clients sel avance favoris.
     */
    public function setCodeListe($codeListe) {
        $this->codeListe = $codeListe;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return ClientsSelAvanceFavoris Returns this clients sel avance favoris.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int $ordre The ordre.
     * @return ClientsSelAvanceFavoris Returns this clients sel avance favoris.
     */
    public function setOrdre($ordre) {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string $origine The origine.
     * @return ClientsSelAvanceFavoris Returns this clients sel avance favoris.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

}
