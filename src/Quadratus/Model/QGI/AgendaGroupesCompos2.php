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
 * Agenda groupes compos2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AgendaGroupesCompos2 {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code groupe.
     *
     * @var string
     */
    private $codeGroupe;

    /**
     * Num lig.
     *
     * @var int
     */
    private $numLig;

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
     * Get the code groupe.
     *
     * @return string Returns the code groupe.
     */
    public function getCodeGroupe() {
        return $this->codeGroupe;
    }

    /**
     * Get the num lig.
     *
     * @return int Returns the num lig.
     */
    public function getNumLig() {
        return $this->numLig;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return AgendaGroupesCompos2 Returns this agenda groupes compos2.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code groupe.
     *
     * @param string $codeGroupe The code groupe.
     * @return AgendaGroupesCompos2 Returns this agenda groupes compos2.
     */
    public function setCodeGroupe($codeGroupe) {
        $this->codeGroupe = $codeGroupe;
        return $this;
    }

    /**
     * Set the num lig.
     *
     * @param int $numLig The num lig.
     * @return AgendaGroupesCompos2 Returns this agenda groupes compos2.
     */
    public function setNumLig($numLig) {
        $this->numLig = $numLig;
        return $this;
    }

}
