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

use DateTime;

/**
 * Repertoire col model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class RepertoireCol {

    /**
     * Adresse1.
     *
     * @var string
     */
    private $adresse1;

    /**
     * Adresse2.
     *
     * @var string
     */
    private $adresse2;

    /**
     * Adresse3.
     *
     * @var string
     */
    private $adresse3;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code comp.
     *
     * @var string
     */
    private $codeComp;

    /**
     * Coll modif.
     *
     * @var string
     */
    private $collModif;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date modif.
     *
     * @var DateTime
     */
    private $dateModif;

    /**
     * Email.
     *
     * @var string
     */
    private $email;

    /**
     * Email2.
     *
     * @var string
     */
    private $email2;

    /**
     * Flag tel.
     *
     * @var string
     */
    private $flagTel;

    /**
     * Flag tel2.
     *
     * @var string
     */
    private $flagTel2;

    /**
     * Flag tel3.
     *
     * @var string
     */
    private $flagTel3;

    /**
     * Flag tel4.
     *
     * @var string
     */
    private $flagTel4;

    /**
     * L d a p_ ads path.
     *
     * @var string
     */
    private $lDAP_AdsPath;

    /**
     * Nom.
     *
     * @var string
     */
    private $nom;

    /**
     * Num sous rep.
     *
     * @var int
     */
    private $numSousRep;

    /**
     * Num uniq.
     *
     * @var int
     */
    private $numUniq;

    /**
     * Prenom.
     *
     * @var string
     */
    private $prenom;

    /**
     * Tel.
     *
     * @var string
     */
    private $tel;

    /**
     * Tel2.
     *
     * @var string
     */
    private $tel2;

    /**
     * Tel3.
     *
     * @var string
     */
    private $tel3;

    /**
     * Tel4.
     *
     * @var string
     */
    private $tel4;

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
     * Get the adresse1.
     *
     * @return string Returns the adresse1.
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Get the adresse2.
     *
     * @return string Returns the adresse2.
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Get the adresse3.
     *
     * @return string Returns the adresse3.
     */
    public function getAdresse3() {
        return $this->adresse3;
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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code comp.
     *
     * @return string Returns the code comp.
     */
    public function getCodeComp() {
        return $this->codeComp;
    }

    /**
     * Get the coll modif.
     *
     * @return string Returns the coll modif.
     */
    public function getCollModif() {
        return $this->collModif;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the email.
     *
     * @return string Returns the email.
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get the email2.
     *
     * @return string Returns the email2.
     */
    public function getEmail2() {
        return $this->email2;
    }

    /**
     * Get the flag tel.
     *
     * @return string Returns the flag tel.
     */
    public function getFlagTel() {
        return $this->flagTel;
    }

    /**
     * Get the flag tel2.
     *
     * @return string Returns the flag tel2.
     */
    public function getFlagTel2() {
        return $this->flagTel2;
    }

    /**
     * Get the flag tel3.
     *
     * @return string Returns the flag tel3.
     */
    public function getFlagTel3() {
        return $this->flagTel3;
    }

    /**
     * Get the flag tel4.
     *
     * @return string Returns the flag tel4.
     */
    public function getFlagTel4() {
        return $this->flagTel4;
    }

    /**
     * Get the l d a p_ ads path.
     *
     * @return string Returns the l d a p_ ads path.
     */
    public function getLDAP_AdsPath() {
        return $this->lDAP_AdsPath;
    }

    /**
     * Get the nom.
     *
     * @return string Returns the nom.
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Get the num sous rep.
     *
     * @return int Returns the num sous rep.
     */
    public function getNumSousRep() {
        return $this->numSousRep;
    }

    /**
     * Get the num uniq.
     *
     * @return int Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
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
     * Get the tel.
     *
     * @return string Returns the tel.
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Get the tel2.
     *
     * @return string Returns the tel2.
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * Get the tel3.
     *
     * @return string Returns the tel3.
     */
    public function getTel3() {
        return $this->tel3;
    }

    /**
     * Get the tel4.
     *
     * @return string Returns the tel4.
     */
    public function getTel4() {
        return $this->tel4;
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
     * Set the adresse1.
     *
     * @param string $adresse1 The adresse1.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
        return $this;
    }

    /**
     * Set the adresse2.
     *
     * @param string $adresse2 The adresse2.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
        return $this;
    }

    /**
     * Set the adresse3.
     *
     * @param string $adresse3 The adresse3.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code comp.
     *
     * @param string $codeComp The code comp.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setCodeComp($codeComp) {
        $this->codeComp = $codeComp;
        return $this;
    }

    /**
     * Set the coll modif.
     *
     * @param string $collModif The coll modif.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setCollModif($collModif) {
        $this->collModif = $collModif;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime $dateModif The date modif.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set the email2.
     *
     * @param string $email2 The email2.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setEmail2($email2) {
        $this->email2 = $email2;
        return $this;
    }

    /**
     * Set the flag tel.
     *
     * @param string $flagTel The flag tel.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setFlagTel($flagTel) {
        $this->flagTel = $flagTel;
        return $this;
    }

    /**
     * Set the flag tel2.
     *
     * @param string $flagTel2 The flag tel2.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setFlagTel2($flagTel2) {
        $this->flagTel2 = $flagTel2;
        return $this;
    }

    /**
     * Set the flag tel3.
     *
     * @param string $flagTel3 The flag tel3.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setFlagTel3($flagTel3) {
        $this->flagTel3 = $flagTel3;
        return $this;
    }

    /**
     * Set the flag tel4.
     *
     * @param string $flagTel4 The flag tel4.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setFlagTel4($flagTel4) {
        $this->flagTel4 = $flagTel4;
        return $this;
    }

    /**
     * Set the l d a p_ ads path.
     *
     * @param string $lDAP_AdsPath The l d a p_ ads path.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setLDAP_AdsPath($lDAP_AdsPath) {
        $this->lDAP_AdsPath = $lDAP_AdsPath;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string $nom The nom.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the num sous rep.
     *
     * @param int $numSousRep The num sous rep.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setNumSousRep($numSousRep) {
        $this->numSousRep = $numSousRep;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int $numUniq The num uniq.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string $prenom The prenom.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the tel.
     *
     * @param string $tel The tel.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }

    /**
     * Set the tel2.
     *
     * @param string $tel2 The tel2.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    /**
     * Set the tel3.
     *
     * @param string $tel3 The tel3.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setTel3($tel3) {
        $this->tel3 = $tel3;
        return $this;
    }

    /**
     * Set the tel4.
     *
     * @param string $tel4 The tel4.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setTel4($tel4) {
        $this->tel4 = $tel4;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return RepertoireCol Returns this repertoire col.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }

}
