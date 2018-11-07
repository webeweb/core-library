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
 * Agenda groupes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AgendaGroupes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code coll.
     *
     * @var string
     */
    private $codeColl;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Get the code coll.
     *
     * @return string Returns the code coll.
     */
    public function getCodeColl() {
        return $this->codeColl;
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
     * Set the code.
     *
     * @param string $code The code.
     * @return AgendaGroupes Returns this agenda groupes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code coll.
     *
     * @param string $codeColl The code coll.
     * @return AgendaGroupes Returns this agenda groupes.
     */
    public function setCodeColl($codeColl) {
        $this->codeColl = $codeColl;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return AgendaGroupes Returns this agenda groupes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

}
