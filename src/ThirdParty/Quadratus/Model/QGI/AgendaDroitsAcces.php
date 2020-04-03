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
 * Agenda droits acces.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AgendaDroitsAcces {

    /**
     * Code coll droit.
     *
     * @var string
     */
    private $codeCollDroit;

    /**
     * Code coll suivi.
     *
     * @var string
     */
    private $codeCollSuivi;

    /**
     * Niveau droit.
     *
     * @var string
     */
    private $niveauDroit;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code coll droit.
     *
     * @return string Returns the code coll droit.
     */
    public function getCodeCollDroit() {
        return $this->codeCollDroit;
    }

    /**
     * Get the code coll suivi.
     *
     * @return string Returns the code coll suivi.
     */
    public function getCodeCollSuivi() {
        return $this->codeCollSuivi;
    }

    /**
     * Get the niveau droit.
     *
     * @return string Returns the niveau droit.
     */
    public function getNiveauDroit() {
        return $this->niveauDroit;
    }

    /**
     * Set the code coll droit.
     *
     * @param string $codeCollDroit The code coll droit.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setCodeCollDroit($codeCollDroit) {
        $this->codeCollDroit = $codeCollDroit;
        return $this;
    }

    /**
     * Set the code coll suivi.
     *
     * @param string $codeCollSuivi The code coll suivi.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setCodeCollSuivi($codeCollSuivi) {
        $this->codeCollSuivi = $codeCollSuivi;
        return $this;
    }

    /**
     * Set the niveau droit.
     *
     * @param string $niveauDroit The niveau droit.
     * @return AgendaDroitsAcces Returns this Agenda droits acces.
     */
    public function setNiveauDroit($niveauDroit) {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }
}
