<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Chantiers synchro id model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersSynchroId {

    /**
     * Bloc d a.
     *
     * @var bool
     */
    private $blocDA;

    /**
     * Bloc f c.
     *
     * @var bool
     */
    private $blocFC;

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bloc d a.
     *
     * @return bool Returns the bloc d a.
     */
    public function getBlocDA() {
        return $this->blocDA;
    }

    /**
     * Get the bloc f c.
     *
     * @return bool Returns the bloc f c.
     */
    public function getBlocFC() {
        return $this->blocFC;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the bloc d a.
     *
     * @param bool $blocDA The bloc d a.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setBlocDA($blocDA) {
        $this->blocDA = $blocDA;
        return $this;
    }

    /**
     * Set the bloc f c.
     *
     * @param bool $blocFC The bloc f c.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setBlocFC($blocFC) {
        $this->blocFC = $blocFC;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return ChantiersSynchroId Returns this chantiers synchro id.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
