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
 * Regles publication model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
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
     * E w s publication.
     *
     * @var boolean
     */
    private $eWSPublication;

    /**
     * Type publication.
     *
     * @var string
     */
    private $typePublication;

    /**
     * W e b publication.
     *
     * @var boolean
     */
    private $wEBPublication;

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
     * Get the e w s publication.
     *
     * @return boolean Returns the e w s publication.
     */
    public function getEWSPublication() {
        return $this->eWSPublication;
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
     * Get the w e b publication.
     *
     * @return boolean Returns the w e b publication.
     */
    public function getWEBPublication() {
        return $this->wEBPublication;
    }

    /**
     * Set the chaine publication.
     *
     * @param string $chainePublication The chaine publication.
     * @return ReglesPublication Returns this regles publication.
     */
    public function setChainePublication($chainePublication) {
        $this->chainePublication = $chainePublication;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ReglesPublication Returns this regles publication.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the e w s publication.
     *
     * @param boolean $eWSPublication The e w s publication.
     * @return ReglesPublication Returns this regles publication.
     */
    public function setEWSPublication($eWSPublication) {
        $this->eWSPublication = $eWSPublication;
        return $this;
    }

    /**
     * Set the type publication.
     *
     * @param string $typePublication The type publication.
     * @return ReglesPublication Returns this regles publication.
     */
    public function setTypePublication($typePublication) {
        $this->typePublication = $typePublication;
        return $this;
    }

    /**
     * Set the w e b publication.
     *
     * @param boolean $wEBPublication The w e b publication.
     * @return ReglesPublication Returns this regles publication.
     */
    public function setWEBPublication($wEBPublication) {
        $this->wEBPublication = $wEBPublication;
        return $this;
    }

}
