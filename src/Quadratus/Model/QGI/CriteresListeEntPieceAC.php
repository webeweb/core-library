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
 * Criteres liste ent piece a c model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class CriteresListeEntPieceAC {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Num libelle.
     *
     * @var string
     */
    private $numLibelle;

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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the num libelle.
     *
     * @return string Returns the num libelle.
     */
    public function getNumLibelle() {
        return $this->numLibelle;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return CriteresListeEntPieceAC Returns this criteres liste ent piece a c.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return CriteresListeEntPieceAC Returns this criteres liste ent piece a c.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num libelle.
     *
     * @param string $numLibelle The num libelle.
     * @return CriteresListeEntPieceAC Returns this criteres liste ent piece a c.
     */
    public function setNumLibelle($numLibelle) {
        $this->numLibelle = $numLibelle;
        return $this;
    }

}
