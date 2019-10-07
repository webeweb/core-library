<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dos rev commentaires model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevCommentaires {

    /**
     * Bloquant.
     *
     * @var bool
     */
    private $bloquant;

    /**
     * Code coll modif question.
     *
     * @var string
     */
    private $codeCollModifQuestion;

    /**
     * Code coll modif reponse.
     *
     * @var string
     */
    private $codeCollModifReponse;

    /**
     * Code coll question.
     *
     * @var string
     */
    private $codeCollQuestion;

    /**
     * Code coll reponse.
     *
     * @var string
     */
    private $codeCollReponse;

    /**
     * Cpt comment.
     *
     * @var int
     */
    private $cptComment;

    /**
     * Dt creation question.
     *
     * @var DateTime
     */
    private $dtCreationQuestion;

    /**
     * Dt creation reponse.
     *
     * @var DateTime
     */
    private $dtCreationReponse;

    /**
     * Dt modif question.
     *
     * @var DateTime
     */
    private $dtModifQuestion;

    /**
     * Dt modif reponse.
     *
     * @var DateTime
     */
    private $dtModifReponse;

    /**
     * Dt transfert d a.
     *
     * @var DateTime
     */
    private $dtTransfertDA;

    /**
     * En attente reponse.
     *
     * @var bool
     */
    private $enAttenteReponse;

    /**
     * Need answer.
     *
     * @var bool
     */
    private $needAnswer;

    /**
     * Niveau.
     *
     * @var string
     */
    private $niveau;

    /**
     * Periode rev.
     *
     * @var DateTime
     */
    private $periodeRev;

    /**
     * Permanent.
     *
     * @var bool
     */
    private $permanent;

    /**
     * Txt question.
     *
     * @var string
     */
    private $txtQuestion;

    /**
     * Txt reponse.
     *
     * @var string
     */
    private $txtReponse;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bloquant.
     *
     * @return bool Returns the bloquant.
     */
    public function getBloquant() {
        return $this->bloquant;
    }

    /**
     * Get the code coll modif question.
     *
     * @return string Returns the code coll modif question.
     */
    public function getCodeCollModifQuestion() {
        return $this->codeCollModifQuestion;
    }

    /**
     * Get the code coll modif reponse.
     *
     * @return string Returns the code coll modif reponse.
     */
    public function getCodeCollModifReponse() {
        return $this->codeCollModifReponse;
    }

    /**
     * Get the code coll question.
     *
     * @return string Returns the code coll question.
     */
    public function getCodeCollQuestion() {
        return $this->codeCollQuestion;
    }

    /**
     * Get the code coll reponse.
     *
     * @return string Returns the code coll reponse.
     */
    public function getCodeCollReponse() {
        return $this->codeCollReponse;
    }

    /**
     * Get the cpt comment.
     *
     * @return int Returns the cpt comment.
     */
    public function getCptComment() {
        return $this->cptComment;
    }

    /**
     * Get the dt creation question.
     *
     * @return DateTime Returns the dt creation question.
     */
    public function getDtCreationQuestion() {
        return $this->dtCreationQuestion;
    }

    /**
     * Get the dt creation reponse.
     *
     * @return DateTime Returns the dt creation reponse.
     */
    public function getDtCreationReponse() {
        return $this->dtCreationReponse;
    }

    /**
     * Get the dt modif question.
     *
     * @return DateTime Returns the dt modif question.
     */
    public function getDtModifQuestion() {
        return $this->dtModifQuestion;
    }

    /**
     * Get the dt modif reponse.
     *
     * @return DateTime Returns the dt modif reponse.
     */
    public function getDtModifReponse() {
        return $this->dtModifReponse;
    }

    /**
     * Get the dt transfert d a.
     *
     * @return DateTime Returns the dt transfert d a.
     */
    public function getDtTransfertDA() {
        return $this->dtTransfertDA;
    }

    /**
     * Get the en attente reponse.
     *
     * @return bool Returns the en attente reponse.
     */
    public function getEnAttenteReponse() {
        return $this->enAttenteReponse;
    }

    /**
     * Get the need answer.
     *
     * @return bool Returns the need answer.
     */
    public function getNeedAnswer() {
        return $this->needAnswer;
    }

    /**
     * Get the niveau.
     *
     * @return string Returns the niveau.
     */
    public function getNiveau() {
        return $this->niveau;
    }

    /**
     * Get the periode rev.
     *
     * @return DateTime Returns the periode rev.
     */
    public function getPeriodeRev() {
        return $this->periodeRev;
    }

    /**
     * Get the permanent.
     *
     * @return bool Returns the permanent.
     */
    public function getPermanent() {
        return $this->permanent;
    }

    /**
     * Get the txt question.
     *
     * @return string Returns the txt question.
     */
    public function getTxtQuestion() {
        return $this->txtQuestion;
    }

    /**
     * Get the txt reponse.
     *
     * @return string Returns the txt reponse.
     */
    public function getTxtReponse() {
        return $this->txtReponse;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the bloquant.
     *
     * @param bool $bloquant The bloquant.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setBloquant($bloquant) {
        $this->bloquant = $bloquant;
        return $this;
    }

    /**
     * Set the code coll modif question.
     *
     * @param string $codeCollModifQuestion The code coll modif question.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setCodeCollModifQuestion($codeCollModifQuestion) {
        $this->codeCollModifQuestion = $codeCollModifQuestion;
        return $this;
    }

    /**
     * Set the code coll modif reponse.
     *
     * @param string $codeCollModifReponse The code coll modif reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setCodeCollModifReponse($codeCollModifReponse) {
        $this->codeCollModifReponse = $codeCollModifReponse;
        return $this;
    }

    /**
     * Set the code coll question.
     *
     * @param string $codeCollQuestion The code coll question.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setCodeCollQuestion($codeCollQuestion) {
        $this->codeCollQuestion = $codeCollQuestion;
        return $this;
    }

    /**
     * Set the code coll reponse.
     *
     * @param string $codeCollReponse The code coll reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setCodeCollReponse($codeCollReponse) {
        $this->codeCollReponse = $codeCollReponse;
        return $this;
    }

    /**
     * Set the cpt comment.
     *
     * @param int $cptComment The cpt comment.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setCptComment($cptComment) {
        $this->cptComment = $cptComment;
        return $this;
    }

    /**
     * Set the dt creation question.
     *
     * @param DateTime $dtCreationQuestion The dt creation question.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setDtCreationQuestion(DateTime $dtCreationQuestion = null) {
        $this->dtCreationQuestion = $dtCreationQuestion;
        return $this;
    }

    /**
     * Set the dt creation reponse.
     *
     * @param DateTime $dtCreationReponse The dt creation reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setDtCreationReponse(DateTime $dtCreationReponse = null) {
        $this->dtCreationReponse = $dtCreationReponse;
        return $this;
    }

    /**
     * Set the dt modif question.
     *
     * @param DateTime $dtModifQuestion The dt modif question.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setDtModifQuestion(DateTime $dtModifQuestion = null) {
        $this->dtModifQuestion = $dtModifQuestion;
        return $this;
    }

    /**
     * Set the dt modif reponse.
     *
     * @param DateTime $dtModifReponse The dt modif reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setDtModifReponse(DateTime $dtModifReponse = null) {
        $this->dtModifReponse = $dtModifReponse;
        return $this;
    }

    /**
     * Set the dt transfert d a.
     *
     * @param DateTime $dtTransfertDA The dt transfert d a.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setDtTransfertDA(DateTime $dtTransfertDA = null) {
        $this->dtTransfertDA = $dtTransfertDA;
        return $this;
    }

    /**
     * Set the en attente reponse.
     *
     * @param bool $enAttenteReponse The en attente reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setEnAttenteReponse($enAttenteReponse) {
        $this->enAttenteReponse = $enAttenteReponse;
        return $this;
    }

    /**
     * Set the need answer.
     *
     * @param bool $needAnswer The need answer.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setNeedAnswer($needAnswer) {
        $this->needAnswer = $needAnswer;
        return $this;
    }

    /**
     * Set the niveau.
     *
     * @param string $niveau The niveau.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
        return $this;
    }

    /**
     * Set the periode rev.
     *
     * @param DateTime $periodeRev The periode rev.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setPeriodeRev(DateTime $periodeRev = null) {
        $this->periodeRev = $periodeRev;
        return $this;
    }

    /**
     * Set the permanent.
     *
     * @param bool $permanent The permanent.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setPermanent($permanent) {
        $this->permanent = $permanent;
        return $this;
    }

    /**
     * Set the txt question.
     *
     * @param string $txtQuestion The txt question.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setTxtQuestion($txtQuestion) {
        $this->txtQuestion = $txtQuestion;
        return $this;
    }

    /**
     * Set the txt reponse.
     *
     * @param string $txtReponse The txt reponse.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setTxtReponse($txtReponse) {
        $this->txtReponse = $txtReponse;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     * @return DosRevCommentaires Returns this dos rev commentaires.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
