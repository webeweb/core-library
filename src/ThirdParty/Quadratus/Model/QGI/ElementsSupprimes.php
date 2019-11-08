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
 * Elements supprimes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ElementsSupprimes {

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date elem.
     *
     * @var DateTime|null
     */
    private $dateElem;

    /**
     * Memo1.
     *
     * @var string
     */
    private $memo1;

    /**
     * Texte1.
     *
     * @var string
     */
    private $texte1;

    /**
     * Type elem.
     *
     * @var string
     */
    private $typeElem;

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
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1() {
        return $this->date1;
    }

    /**
     * Get the date elem.
     *
     * @return DateTime|null Returns the date elem.
     */
    public function getDateElem() {
        return $this->dateElem;
    }

    /**
     * Get the memo1.
     *
     * @return string Returns the memo1.
     */
    public function getMemo1() {
        return $this->memo1;
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
     * Get the type elem.
     *
     * @return string Returns the type elem.
     */
    public function getTypeElem() {
        return $this->typeElem;
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
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     */
    public function setDate1(DateTime $date1 = null) {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date elem.
     *
     * @param DateTime|null $dateElem The date elem.
     */
    public function setDateElem(DateTime $dateElem = null) {
        $this->dateElem = $dateElem;
        return $this;
    }

    /**
     * Set the memo1.
     *
     * @param string $memo1 The memo1.
     */
    public function setMemo1($memo1) {
        $this->memo1 = $memo1;
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
     * Set the type elem.
     *
     * @param string $typeElem The type elem.
     */
    public function setTypeElem($typeElem) {
        $this->typeElem = $typeElem;
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
