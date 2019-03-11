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
 * Banques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Banques {

    /**
     * B i c.
     *
     * @var string
     */
    private $bIC;

    /**
     * Code banque.
     *
     * @var string
     */
    private $codeBanque;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Edi tdfc.
     *
     * @var bool
     */
    private $ediTdfc;

    /**
     * I b a n.
     *
     * @var string
     */
    private $iBAN;

    /**
     * I d carte appel env.
     *
     * @var string
     */
    private $iDCarteAppelEnv;

    /**
     * I d carte appel env2.
     *
     * @var string
     */
    private $iDCarteAppelEnv2;

    /**
     * I d carte appel env3.
     *
     * @var string
     */
    private $iDCarteAppelEnv3;

    /**
     * I d carte appel rec.
     *
     * @var string
     */
    private $iDCarteAppelRec;

    /**
     * Is banque fact.
     *
     * @var bool
     */
    private $isBanqueFact;

    /**
     * Mandat date debut e t e b a c.
     *
     * @var DateTime
     */
    private $mandatDateDebutETEBAC;

    /**
     * Mandat duree e t e b a c.
     *
     * @var int
     */
    private $mandatDureeETEBAC;

    /**
     * Mandat piece jointe e t e b a c.
     *
     * @var string
     */
    private $mandatPieceJointeETEBAC;

    /**
     * Nb prelevements.
     *
     * @var int
     */
    private $nbPrelevements;

    /**
     * Nom int.
     *
     * @var string
     */
    private $nomInt;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * R i b.
     *
     * @var string
     */
    private $rIB;

    /**
     * Sepa.
     *
     * @var bool
     */
    private $sepa;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

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
     * Get the b i c.
     *
     * @return string Returns the b i c.
     */
    public function getBIC() {
        return $this->bIC;
    }

    /**
     * Get the code banque.
     *
     * @return string Returns the code banque.
     */
    public function getCodeBanque() {
        return $this->codeBanque;
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
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the edi tdfc.
     *
     * @return bool Returns the edi tdfc.
     */
    public function getEdiTdfc() {
        return $this->ediTdfc;
    }

    /**
     * Get the i b a n.
     *
     * @return string Returns the i b a n.
     */
    public function getIBAN() {
        return $this->iBAN;
    }

    /**
     * Get the i d carte appel env.
     *
     * @return string Returns the i d carte appel env.
     */
    public function getIDCarteAppelEnv() {
        return $this->iDCarteAppelEnv;
    }

    /**
     * Get the i d carte appel env2.
     *
     * @return string Returns the i d carte appel env2.
     */
    public function getIDCarteAppelEnv2() {
        return $this->iDCarteAppelEnv2;
    }

    /**
     * Get the i d carte appel env3.
     *
     * @return string Returns the i d carte appel env3.
     */
    public function getIDCarteAppelEnv3() {
        return $this->iDCarteAppelEnv3;
    }

    /**
     * Get the i d carte appel rec.
     *
     * @return string Returns the i d carte appel rec.
     */
    public function getIDCarteAppelRec() {
        return $this->iDCarteAppelRec;
    }

    /**
     * Get the is banque fact.
     *
     * @return bool Returns the is banque fact.
     */
    public function getIsBanqueFact() {
        return $this->isBanqueFact;
    }

    /**
     * Get the mandat date debut e t e b a c.
     *
     * @return DateTime Returns the mandat date debut e t e b a c.
     */
    public function getMandatDateDebutETEBAC() {
        return $this->mandatDateDebutETEBAC;
    }

    /**
     * Get the mandat duree e t e b a c.
     *
     * @return int Returns the mandat duree e t e b a c.
     */
    public function getMandatDureeETEBAC() {
        return $this->mandatDureeETEBAC;
    }

    /**
     * Get the mandat piece jointe e t e b a c.
     *
     * @return string Returns the mandat piece jointe e t e b a c.
     */
    public function getMandatPieceJointeETEBAC() {
        return $this->mandatPieceJointeETEBAC;
    }

    /**
     * Get the nb prelevements.
     *
     * @return int Returns the nb prelevements.
     */
    public function getNbPrelevements() {
        return $this->nbPrelevements;
    }

    /**
     * Get the nom int.
     *
     * @return string Returns the nom int.
     */
    public function getNomInt() {
        return $this->nomInt;
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
     * Get the r i b.
     *
     * @return string Returns the r i b.
     */
    public function getRIB() {
        return $this->rIB;
    }

    /**
     * Get the sepa.
     *
     * @return bool Returns the sepa.
     */
    public function getSepa() {
        return $this->sepa;
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
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the b i c.
     *
     * @param string $bIC The b i c.
     * @return Banques Returns this banques.
     */
    public function setBIC($bIC) {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     * @return Banques Returns this banques.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return Banques Returns this banques.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     * @return Banques Returns this banques.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the edi tdfc.
     *
     * @param bool $ediTdfc The edi tdfc.
     * @return Banques Returns this banques.
     */
    public function setEdiTdfc($ediTdfc) {
        $this->ediTdfc = $ediTdfc;
        return $this;
    }

    /**
     * Set the i b a n.
     *
     * @param string $iBAN The i b a n.
     * @return Banques Returns this banques.
     */
    public function setIBAN($iBAN) {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Set the i d carte appel env.
     *
     * @param string $iDCarteAppelEnv The i d carte appel env.
     * @return Banques Returns this banques.
     */
    public function setIDCarteAppelEnv($iDCarteAppelEnv) {
        $this->iDCarteAppelEnv = $iDCarteAppelEnv;
        return $this;
    }

    /**
     * Set the i d carte appel env2.
     *
     * @param string $iDCarteAppelEnv2 The i d carte appel env2.
     * @return Banques Returns this banques.
     */
    public function setIDCarteAppelEnv2($iDCarteAppelEnv2) {
        $this->iDCarteAppelEnv2 = $iDCarteAppelEnv2;
        return $this;
    }

    /**
     * Set the i d carte appel env3.
     *
     * @param string $iDCarteAppelEnv3 The i d carte appel env3.
     * @return Banques Returns this banques.
     */
    public function setIDCarteAppelEnv3($iDCarteAppelEnv3) {
        $this->iDCarteAppelEnv3 = $iDCarteAppelEnv3;
        return $this;
    }

    /**
     * Set the i d carte appel rec.
     *
     * @param string $iDCarteAppelRec The i d carte appel rec.
     * @return Banques Returns this banques.
     */
    public function setIDCarteAppelRec($iDCarteAppelRec) {
        $this->iDCarteAppelRec = $iDCarteAppelRec;
        return $this;
    }

    /**
     * Set the is banque fact.
     *
     * @param bool $isBanqueFact The is banque fact.
     * @return Banques Returns this banques.
     */
    public function setIsBanqueFact($isBanqueFact) {
        $this->isBanqueFact = $isBanqueFact;
        return $this;
    }

    /**
     * Set the mandat date debut e t e b a c.
     *
     * @param DateTime $mandatDateDebutETEBAC The mandat date debut e t e b a c.
     * @return Banques Returns this banques.
     */
    public function setMandatDateDebutETEBAC(DateTime $mandatDateDebutETEBAC = null) {
        $this->mandatDateDebutETEBAC = $mandatDateDebutETEBAC;
        return $this;
    }

    /**
     * Set the mandat duree e t e b a c.
     *
     * @param int $mandatDureeETEBAC The mandat duree e t e b a c.
     * @return Banques Returns this banques.
     */
    public function setMandatDureeETEBAC($mandatDureeETEBAC) {
        $this->mandatDureeETEBAC = $mandatDureeETEBAC;
        return $this;
    }

    /**
     * Set the mandat piece jointe e t e b a c.
     *
     * @param string $mandatPieceJointeETEBAC The mandat piece jointe e t e b a c.
     * @return Banques Returns this banques.
     */
    public function setMandatPieceJointeETEBAC($mandatPieceJointeETEBAC) {
        $this->mandatPieceJointeETEBAC = $mandatPieceJointeETEBAC;
        return $this;
    }

    /**
     * Set the nb prelevements.
     *
     * @param int $nbPrelevements The nb prelevements.
     * @return Banques Returns this banques.
     */
    public function setNbPrelevements($nbPrelevements) {
        $this->nbPrelevements = $nbPrelevements;
        return $this;
    }

    /**
     * Set the nom int.
     *
     * @param string $nomInt The nom int.
     * @return Banques Returns this banques.
     */
    public function setNomInt($nomInt) {
        $this->nomInt = $nomInt;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return Banques Returns this banques.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the r i b.
     *
     * @param string $rIB The r i b.
     * @return Banques Returns this banques.
     */
    public function setRIB($rIB) {
        $this->rIB = $rIB;
        return $this;
    }

    /**
     * Set the sepa.
     *
     * @param bool $sepa The sepa.
     * @return Banques Returns this banques.
     */
    public function setSepa($sepa) {
        $this->sepa = $sepa;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Banques Returns this banques.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return Banques Returns this banques.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
