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
 * Annexe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Annexe {

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
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Double1.
     *
     * @var float
     */
    private $double1;

    /**
     * Double2.
     *
     * @var float
     */
    private $double2;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Texte2.
     *
     * @var string
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string
     */
    private $texte5;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Uniq id.
     *
     * @var string
     */
    private $uniqId;

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
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1() {
        return $this->date1;
    }

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2() {
        return $this->date2;
    }

    /**
     * Get the double1.
     *
     * @return float Returns the double1.
     */
    public function getDouble1() {
        return $this->double1;
    }

    /**
     * Get the double2.
     *
     * @return float Returns the double2.
     */
    public function getDouble2() {
        return $this->double2;
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
     * Get the texte1.
     *
     * @return string Returns the texte1.
     */
    public function getTexte1() {
        return $this->texte1;
    }

    /**
     * Get the texte2.
     *
     * @return string Returns the texte2.
     */
    public function getTexte2() {
        return $this->texte2;
    }

    /**
     * Get the texte3.
     *
     * @return string Returns the texte3.
     */
    public function getTexte3() {
        return $this->texte3;
    }

    /**
     * Get the texte4.
     *
     * @return string Returns the texte4.
     */
    public function getTexte4() {
        return $this->texte4;
    }

    /**
     * Get the texte5.
     *
     * @return string Returns the texte5.
     */
    public function getTexte5() {
        return $this->texte5;
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
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
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
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     */
    public function setDate1(DateTime $date1 = null) {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     */
    public function setDate2(DateTime $date2 = null) {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the double1.
     *
     * @param float $double1 The double1.
     */
    public function setDouble1($double1) {
        $this->double1 = $double1;
        return $this;
    }

    /**
     * Set the double2.
     *
     * @param float $double2 The double2.
     */
    public function setDouble2($double2) {
        $this->double2 = $double2;
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
     * Set the texte1.
     *
     * @param string $texte1 The texte1.
     */
    public function setTexte1($texte1) {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string $texte2 The texte2.
     */
    public function setTexte2($texte2) {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string $texte3 The texte3.
     */
    public function setTexte3($texte3) {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string $texte4 The texte4.
     */
    public function setTexte4($texte4) {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string $texte5 The texte5.
     */
    public function setTexte5($texte5) {
        $this->texte5 = $texte5;
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

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
