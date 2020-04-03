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
 * Regles publication.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ReglesPublication {

    /**
     * Chaine publication.
     *
     * @var string
     */
    private $chainePublication;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Ews publication.
     *
     * @var bool
     */
    private $ewsPublication;

    /**
     * Type publication.
     *
     * @var string
     */
    private $typePublication;

    /**
     * Web publication.
     *
     * @var bool
     */
    private $webPublication;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the chaine publication.
     *
     * @return string Returns the chaine publication.
     */
    public function getChainePublication() {
        return $this->chainePublication;
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
     * Get the ews publication.
     *
     * @return bool Returns the ews publication.
     */
    public function getEwsPublication() {
        return $this->ewsPublication;
    }

    /**
     * Get the type publication.
     *
     * @return string Returns the type publication.
     */
    public function getTypePublication() {
        return $this->typePublication;
    }

    /**
     * Get the web publication.
     *
     * @return bool Returns the web publication.
     */
    public function getWebPublication() {
        return $this->webPublication;
    }

    /**
     * Set the chaine publication.
     *
     * @param string $chainePublication The chaine publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setChainePublication($chainePublication) {
        $this->chainePublication = $chainePublication;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the ews publication.
     *
     * @param bool $ewsPublication The ews publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setEwsPublication($ewsPublication) {
        $this->ewsPublication = $ewsPublication;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string $typePublication The type publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setTypePublication($typePublication) {
        $this->typePublication = $typePublication;
        return $this;
    }

    /**
     * Set the web publication.
     *
     * @param bool $webPublication The web publication.
     * @return ReglesPublication Returns this Regles publication.
     */
    public function setWebPublication($webPublication) {
        $this->webPublication = $webPublication;
        return $this;
    }
}
