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
 * Clients selection.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelection {

    /**
     * Champ.
     *
     * @var string
     */
    private $champ;

    /**
     * Code col.
     *
     * @var string
     */
    private $codeCol;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Valeur.
     *
     * @var string
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the champ.
     *
     * @return string Returns the champ.
     */
    public function getChamp() {
        return $this->champ;
    }

    /**
     * Get the code col.
     *
     * @return string Returns the code col.
     */
    public function getCodeCol() {
        return $this->codeCol;
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
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the valeur.
     *
     * @return string Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Set the champ.
     *
     * @param string $champ The champ.
     */
    public function setChamp($champ) {
        $this->champ = $champ;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string $codeCol The code col.
     */
    public function setCodeCol($codeCol) {
        $this->codeCol = $codeCol;
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
     * Set the type.
     *
     * @param string $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param string $valeur The valeur.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }
}
