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
 * Annexe suite.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeSuite {

    /**
     * Code1.
     *
     * @var string
     */
    private $code1;

    /**
     * Code2.
     *
     * @var string
     */
    private $code2;

    /**
     * Critere libre1.
     *
     * @var string
     */
    private $critereLibre1;

    /**
     * Critere libre2.
     *
     * @var string
     */
    private $critereLibre2;

    /**
     * Dest relance.
     *
     * @var bool
     */
    private $destRelance;

    /**
     * Fax.
     *
     * @var string
     */
    private $fax;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Remarques rtf.
     *
     * @var string
     */
    private $remarquesRtf;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

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
     * Get the code1.
     *
     * @return string Returns the code1.
     */
    public function getCode1() {
        return $this->code1;
    }

    /**
     * Get the code2.
     *
     * @return string Returns the code2.
     */
    public function getCode2() {
        return $this->code2;
    }

    /**
     * Get the critere libre1.
     *
     * @return string Returns the critere libre1.
     */
    public function getCritereLibre1() {
        return $this->critereLibre1;
    }

    /**
     * Get the critere libre2.
     *
     * @return string Returns the critere libre2.
     */
    public function getCritereLibre2() {
        return $this->critereLibre2;
    }

    /**
     * Get the dest relance.
     *
     * @return bool Returns the dest relance.
     */
    public function getDestRelance() {
        return $this->destRelance;
    }

    /**
     * Get the fax.
     *
     * @return string Returns the fax.
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the prenom.
     *
     * @return string Returns the prenom.
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Get the remarques rtf.
     *
     * @return string Returns the remarques rtf.
     */
    public function getRemarquesRtf() {
        return $this->remarquesRtf;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
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
     * Set the code1.
     *
     * @param string $code1 The code1.
     */
    public function setCode1($code1) {
        $this->code1 = $code1;
        return $this;
    }

    /**
     * Set the code2.
     *
     * @param string $code2 The code2.
     */
    public function setCode2($code2) {
        $this->code2 = $code2;
        return $this;
    }

    /**
     * Set the critere libre1.
     *
     * @param string $critereLibre1 The critere libre1.
     */
    public function setCritereLibre1($critereLibre1) {
        $this->critereLibre1 = $critereLibre1;
        return $this;
    }

    /**
     * Set the critere libre2.
     *
     * @param string $critereLibre2 The critere libre2.
     */
    public function setCritereLibre2($critereLibre2) {
        $this->critereLibre2 = $critereLibre2;
        return $this;
    }

    /**
     * Set the dest relance.
     *
     * @param bool $destRelance The dest relance.
     */
    public function setDestRelance($destRelance) {
        $this->destRelance = $destRelance;
        return $this;
    }

    /**
     * Set the fax.
     *
     * @param string $fax The fax.
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the remarques rtf.
     *
     * @param string $remarquesRtf The remarques rtf.
     */
    public function setRemarquesRtf($remarquesRtf) {
        $this->remarquesRtf = $remarquesRtf;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
