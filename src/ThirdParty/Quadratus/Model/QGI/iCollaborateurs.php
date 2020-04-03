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

use DateTime;

/**
 * i collaborateurs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class iCollaborateurs {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Numi key.
     *
     * @var string
     */
    private $numiKey;

    /**
     * Password.
     *
     * @var string
     */
    private $password;

    /**
     * Valide a.
     *
     * @var DateTime|null
     */
    private $valideA;

    /**
     * Valide de.
     *
     * @var DateTime|null
     */
    private $valideDe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the numi key.
     *
     * @return string Returns the numi key.
     */
    public function getNumiKey() {
        return $this->numiKey;
    }

    /**
     * Get the password.
     *
     * @return string Returns the password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Get the valide a.
     *
     * @return DateTime|null Returns the valide a.
     */
    public function getValideA() {
        return $this->valideA;
    }

    /**
     * Get the valide de.
     *
     * @return DateTime|null Returns the valide de.
     */
    public function getValideDe() {
        return $this->valideDe;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password The password.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the valide a.
     *
     * @param DateTime|null $valideA The valide a.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setValideA(DateTime $valideA = null) {
        $this->valideA = $valideA;
        return $this;
    }

    /**
     * Set the valide de.
     *
     * @param DateTime|null $valideDe The valide de.
     * @return iCollaborateurs Returns this i collaborateurs.
     */
    public function setValideDe(DateTime $valideDe = null) {
        $this->valideDe = $valideDe;
        return $this;
    }
}
