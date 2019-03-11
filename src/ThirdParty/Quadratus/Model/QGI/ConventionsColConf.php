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
 * Conventions col conf model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ConventionsColConf {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Droit.
     *
     * @var string
     */
    private $droit;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

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
     * Get the droit.
     *
     * @return string Returns the droit.
     */
    public function getDroit() {
        return $this->droit;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return ConventionsColConf Returns this conventions col conf.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the droit.
     *
     * @param string $droit The droit.
     * @return ConventionsColConf Returns this conventions col conf.
     */
    public function setDroit($droit) {
        $this->droit = $droit;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     * @return ConventionsColConf Returns this conventions col conf.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
