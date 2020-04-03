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
 * Options envoi mails.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class OptionsEnvoiMails {

    /**
     * Avec entete.
     *
     * @var bool
     */
    private $avecEntete;

    /**
     * Avec pied.
     *
     * @var bool
     */
    private $avecPied;

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Code module.
     *
     * @var string
     */
    private $codeModule;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the avec entete.
     *
     * @return bool Returns the avec entete.
     */
    public function getAvecEntete() {
        return $this->avecEntete;
    }

    /**
     * Get the avec pied.
     *
     * @return bool Returns the avec pied.
     */
    public function getAvecPied() {
        return $this->avecPied;
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
     * Get the code module.
     *
     * @return string Returns the code module.
     */
    public function getCodeModule() {
        return $this->codeModule;
    }

    /**
     * Set the avec entete.
     *
     * @param bool $avecEntete The avec entete.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setAvecEntete($avecEntete) {
        $this->avecEntete = $avecEntete;
        return $this;
    }

    /**
     * Set the avec pied.
     *
     * @param bool $avecPied The avec pied.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setAvecPied($avecPied) {
        $this->avecPied = $avecPied;
        return $this;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code module.
     *
     * @param string $codeModule The code module.
     * @return OptionsEnvoiMails Returns this Options envoi mails.
     */
    public function setCodeModule($codeModule) {
        $this->codeModule = $codeModule;
        return $this;
    }
}
