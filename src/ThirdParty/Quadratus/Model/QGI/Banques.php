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
 * Banques.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Banques {

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

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
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Id carte appel env.
     *
     * @var string
     */
    private $idCarteAppelEnv;

    /**
     * Id carte appel env2.
     *
     * @var string
     */
    private $idCarteAppelEnv2;

    /**
     * Id carte appel env3.
     *
     * @var string
     */
    private $idCarteAppelEnv3;

    /**
     * Id carte appel rec.
     *
     * @var string
     */
    private $idCarteAppelRec;

    /**
     * Is banque fact.
     *
     * @var bool
     */
    private $isBanqueFact;

    /**
     * Mandat date debut etebac.
     *
     * @var DateTime|null
     */
    private $mandatDateDebutEtebac;

    /**
     * Mandat duree etebac.
     *
     * @var int
     */
    private $mandatDureeEtebac;

    /**
     * Mandat piece jointe etebac.
     *
     * @var string
     */
    private $mandatPieceJointeEtebac;

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
     * Rib.
     *
     * @var string
     */
    private $rib;

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
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
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
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the id carte appel env.
     *
     * @return string Returns the id carte appel env.
     */
    public function getIdCarteAppelEnv() {
        return $this->idCarteAppelEnv;
    }

    /**
     * Get the id carte appel env2.
     *
     * @return string Returns the id carte appel env2.
     */
    public function getIdCarteAppelEnv2() {
        return $this->idCarteAppelEnv2;
    }

    /**
     * Get the id carte appel env3.
     *
     * @return string Returns the id carte appel env3.
     */
    public function getIdCarteAppelEnv3() {
        return $this->idCarteAppelEnv3;
    }

    /**
     * Get the id carte appel rec.
     *
     * @return string Returns the id carte appel rec.
     */
    public function getIdCarteAppelRec() {
        return $this->idCarteAppelRec;
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
     * Get the mandat date debut etebac.
     *
     * @return DateTime|null Returns the mandat date debut etebac.
     */
    public function getMandatDateDebutEtebac() {
        return $this->mandatDateDebutEtebac;
    }

    /**
     * Get the mandat duree etebac.
     *
     * @return int Returns the mandat duree etebac.
     */
    public function getMandatDureeEtebac() {
        return $this->mandatDureeEtebac;
    }

    /**
     * Get the mandat piece jointe etebac.
     *
     * @return string Returns the mandat piece jointe etebac.
     */
    public function getMandatPieceJointeEtebac() {
        return $this->mandatPieceJointeEtebac;
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
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
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
     * Get the uniq id.
     *
     * @return string Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string $codeBanque The code banque.
     */
    public function setCodeBanque($codeBanque) {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the edi tdfc.
     *
     * @param bool $ediTdfc The edi tdfc.
     */
    public function setEdiTdfc($ediTdfc) {
        $this->ediTdfc = $ediTdfc;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the id carte appel env.
     *
     * @param string $idCarteAppelEnv The id carte appel env.
     */
    public function setIdCarteAppelEnv($idCarteAppelEnv) {
        $this->idCarteAppelEnv = $idCarteAppelEnv;
        return $this;
    }

    /**
     * Set the id carte appel env2.
     *
     * @param string $idCarteAppelEnv2 The id carte appel env2.
     */
    public function setIdCarteAppelEnv2($idCarteAppelEnv2) {
        $this->idCarteAppelEnv2 = $idCarteAppelEnv2;
        return $this;
    }

    /**
     * Set the id carte appel env3.
     *
     * @param string $idCarteAppelEnv3 The id carte appel env3.
     */
    public function setIdCarteAppelEnv3($idCarteAppelEnv3) {
        $this->idCarteAppelEnv3 = $idCarteAppelEnv3;
        return $this;
    }

    /**
     * Set the id carte appel rec.
     *
     * @param string $idCarteAppelRec The id carte appel rec.
     */
    public function setIdCarteAppelRec($idCarteAppelRec) {
        $this->idCarteAppelRec = $idCarteAppelRec;
        return $this;
    }

    /**
     * Set the is banque fact.
     *
     * @param bool $isBanqueFact The is banque fact.
     */
    public function setIsBanqueFact($isBanqueFact) {
        $this->isBanqueFact = $isBanqueFact;
        return $this;
    }

    /**
     * Set the mandat date debut etebac.
     *
     * @param DateTime|null $mandatDateDebutEtebac The mandat date debut etebac.
     */
    public function setMandatDateDebutEtebac(DateTime $mandatDateDebutEtebac = null) {
        $this->mandatDateDebutEtebac = $mandatDateDebutEtebac;
        return $this;
    }

    /**
     * Set the mandat duree etebac.
     *
     * @param int $mandatDureeEtebac The mandat duree etebac.
     */
    public function setMandatDureeEtebac($mandatDureeEtebac) {
        $this->mandatDureeEtebac = $mandatDureeEtebac;
        return $this;
    }

    /**
     * Set the mandat piece jointe etebac.
     *
     * @param string $mandatPieceJointeEtebac The mandat piece jointe etebac.
     */
    public function setMandatPieceJointeEtebac($mandatPieceJointeEtebac) {
        $this->mandatPieceJointeEtebac = $mandatPieceJointeEtebac;
        return $this;
    }

    /**
     * Set the nb prelevements.
     *
     * @param int $nbPrelevements The nb prelevements.
     */
    public function setNbPrelevements($nbPrelevements) {
        $this->nbPrelevements = $nbPrelevements;
        return $this;
    }

    /**
     * Set the nom int.
     *
     * @param string $nomInt The nom int.
     */
    public function setNomInt($nomInt) {
        $this->nomInt = $nomInt;
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
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the sepa.
     *
     * @param bool $sepa The sepa.
     */
    public function setSepa($sepa) {
        $this->sepa = $sepa;
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
