<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Commentaire bulletins.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CommentaireBulletins {

    /**
     * Commentaire1.
     *
     * @var string
     */
    private $commentaire1;

    /**
     * Commentaire2.
     *
     * @var string
     */
    private $commentaire2;

    /**
     * Commentaire3.
     *
     * @var string
     */
    private $commentaire3;

    /**
     * Commentaire4.
     *
     * @var string
     */
    private $commentaire4;

    /**
     * Commentaire5.
     *
     * @var string
     */
    private $commentaire5;

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Txt commentaire rtf.
     *
     * @var string
     */
    private $txtCommentaireRtf;

    /**
     * Txt commentaire saisi.
     *
     * @var string
     */
    private $txtCommentaireSaisi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the commentaire1.
     *
     * @return string Returns the commentaire1.
     */
    public function getCommentaire1() {
        return $this->commentaire1;
    }

    /**
     * Get the commentaire2.
     *
     * @return string Returns the commentaire2.
     */
    public function getCommentaire2() {
        return $this->commentaire2;
    }

    /**
     * Get the commentaire3.
     *
     * @return string Returns the commentaire3.
     */
    public function getCommentaire3() {
        return $this->commentaire3;
    }

    /**
     * Get the commentaire4.
     *
     * @return string Returns the commentaire4.
     */
    public function getCommentaire4() {
        return $this->commentaire4;
    }

    /**
     * Get the commentaire5.
     *
     * @return string Returns the commentaire5.
     */
    public function getCommentaire5() {
        return $this->commentaire5;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the txt commentaire rtf.
     *
     * @return string Returns the txt commentaire rtf.
     */
    public function getTxtCommentaireRtf() {
        return $this->txtCommentaireRtf;
    }

    /**
     * Get the txt commentaire saisi.
     *
     * @return string Returns the txt commentaire saisi.
     */
    public function getTxtCommentaireSaisi() {
        return $this->txtCommentaireSaisi;
    }

    /**
     * Set the commentaire1.
     *
     * @param string $commentaire1 The commentaire1.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire1($commentaire1) {
        $this->commentaire1 = $commentaire1;
        return $this;
    }

    /**
     * Set the commentaire2.
     *
     * @param string $commentaire2 The commentaire2.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire2($commentaire2) {
        $this->commentaire2 = $commentaire2;
        return $this;
    }

    /**
     * Set the commentaire3.
     *
     * @param string $commentaire3 The commentaire3.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire3($commentaire3) {
        $this->commentaire3 = $commentaire3;
        return $this;
    }

    /**
     * Set the commentaire4.
     *
     * @param string $commentaire4 The commentaire4.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire4($commentaire4) {
        $this->commentaire4 = $commentaire4;
        return $this;
    }

    /**
     * Set the commentaire5.
     *
     * @param string $commentaire5 The commentaire5.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setCommentaire5($commentaire5) {
        $this->commentaire5 = $commentaire5;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the txt commentaire rtf.
     *
     * @param string $txtCommentaireRtf The txt commentaire rtf.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setTxtCommentaireRtf($txtCommentaireRtf) {
        $this->txtCommentaireRtf = $txtCommentaireRtf;
        return $this;
    }

    /**
     * Set the txt commentaire saisi.
     *
     * @param string $txtCommentaireSaisi The txt commentaire saisi.
     * @return CommentaireBulletins Returns this Commentaire bulletins.
     */
    public function setTxtCommentaireSaisi($txtCommentaireSaisi) {
        $this->txtCommentaireSaisi = $txtCommentaireSaisi;
        return $this;
    }
}
