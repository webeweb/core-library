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
 * Acces web agenda model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AccesWebAgenda {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Droit modif.
     *
     * @var bool
     */
    private $droitModif;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the droit modif.
     *
     * @return bool Returns the droit modif.
     */
    public function getDroitModif() {
        return $this->droitModif;
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
     * Set the code.
     *
     * @param string $code The code.
     * @return AccesWebAgenda Returns this acces web agenda.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return AccesWebAgenda Returns this acces web agenda.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the droit modif.
     *
     * @param bool $droitModif The droit modif.
     * @return AccesWebAgenda Returns this acces web agenda.
     */
    public function setDroitModif($droitModif) {
        $this->droitModif = $droitModif;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return AccesWebAgenda Returns this acces web agenda.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
