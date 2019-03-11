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
 * Droits acces intervenants collab model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class DroitsAccesIntervenantsCollab {

    /**
     * Acces libre.
     *
     * @var bool
     */
    private $accesLibre;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Type intervenant.
     *
     * @var string
     */
    private $typeIntervenant;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces libre.
     *
     * @return bool Returns the acces libre.
     */
    public function getAccesLibre() {
        return $this->accesLibre;
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
     * Get the type intervenant.
     *
     * @return string Returns the type intervenant.
     */
    public function getTypeIntervenant() {
        return $this->typeIntervenant;
    }

    /**
     * Set the acces libre.
     *
     * @param bool $accesLibre The acces libre.
     * @return DroitsAccesIntervenantsCollab Returns this droits acces intervenants collab.
     */
    public function setAccesLibre($accesLibre) {
        $this->accesLibre = $accesLibre;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return DroitsAccesIntervenantsCollab Returns this droits acces intervenants collab.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the type intervenant.
     *
     * @param string $typeIntervenant The type intervenant.
     * @return DroitsAccesIntervenantsCollab Returns this droits acces intervenants collab.
     */
    public function setTypeIntervenant($typeIntervenant) {
        $this->typeIntervenant = $typeIntervenant;
        return $this;
    }
}
