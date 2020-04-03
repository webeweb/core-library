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

use DateTime;

/**
 * Options2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Options2 {

    /**
     * Booleen.
     *
     * @var bool
     */
    private $booleen;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Date heure.
     *
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Numerique.
     *
     * @var float
     */
    private $numerique;

    /**
     * String.
     *
     * @var string
     */
    private $string;

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
     * Get the booleen.
     *
     * @return bool Returns the booleen.
     */
    public function getBooleen() {
        return $this->booleen;
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
     * Get the date heure.
     *
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure() {
        return $this->dateHeure;
    }

    /**
     * Get the descriptif.
     *
     * @return string Returns the descriptif.
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Get the numerique.
     *
     * @return float Returns the numerique.
     */
    public function getNumerique() {
        return $this->numerique;
    }

    /**
     * Get the string.
     *
     * @return string Returns the string.
     */
    public function getString() {
        return $this->string;
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
     * Set the booleen.
     *
     * @param bool $booleen The booleen.
     * @return Options2 Returns this Options2.
     */
    public function setBooleen($booleen) {
        $this->booleen = $booleen;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Options2 Returns this Options2.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return Options2 Returns this Options2.
     */
    public function setDateHeure(DateTime $dateHeure = null) {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     * @return Options2 Returns this Options2.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the numerique.
     *
     * @param float $numerique The numerique.
     * @return Options2 Returns this Options2.
     */
    public function setNumerique($numerique) {
        $this->numerique = $numerique;
        return $this;
    }

    /**
     * Set the string.
     *
     * @param string $string The string.
     * @return Options2 Returns this Options2.
     */
    public function setString($string) {
        $this->string = $string;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Options2 Returns this Options2.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
