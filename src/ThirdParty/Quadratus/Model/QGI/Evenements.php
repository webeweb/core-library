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
 * Evenements.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Evenements {

    /**
     * Archive.
     *
     * @var bool
     */
    private $archive;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Contenu1.
     *
     * @var string
     */
    private $contenu1;

    /**
     * Contenu2.
     *
     * @var string
     */
    private $contenu2;

    /**
     * Contenu3.
     *
     * @var string
     */
    private $contenu3;

    /**
     * Contenu4.
     *
     * @var string
     */
    private $contenu4;

    /**
     * Date evt.
     *
     * @var DateTime|null
     */
    private $dateEvt;

    /**
     * Emplacement fichier.
     *
     * @var string
     */
    private $emplacementFichier;

    /**
     * Etat is actif.
     *
     * @var string
     */
    private $etatIsActif;

    /**
     * Fs compta.
     *
     * @var string
     */
    private $fsCompta;

    /**
     * Fs compta coll arch.
     *
     * @var string
     */
    private $fsComptaCollArch;

    /**
     * Fs compta date alerte.
     *
     * @var DateTime|null
     */
    private $fsComptaDateAlerte;

    /**
     * Fs compta date arch.
     *
     * @var DateTime|null
     */
    private $fsComptaDateArch;

    /**
     * Fs compta ya alerte.
     *
     * @var bool
     */
    private $fsComptaYaAlerte;

    /**
     * Fs fiscal.
     *
     * @var string
     */
    private $fsFiscal;

    /**
     * Fs fiscal coll arch.
     *
     * @var string
     */
    private $fsFiscalCollArch;

    /**
     * Fs fiscal date arch.
     *
     * @var DateTime|null
     */
    private $fsFiscalDateArch;

    /**
     * Fs juridique.
     *
     * @var string
     */
    private $fsJuridique;

    /**
     * Fs juridique coll arch.
     *
     * @var string
     */
    private $fsJuridiqueCollArch;

    /**
     * Fs juridique date arch.
     *
     * @var DateTime|null
     */
    private $fsJuridiqueDateArch;

    /**
     * Fs social.
     *
     * @var string
     */
    private $fsSocial;

    /**
     * Fs social coll arch.
     *
     * @var string
     */
    private $fsSocialCollArch;

    /**
     * Fs social date alerte.
     *
     * @var DateTime|null
     */
    private $fsSocialDateAlerte;

    /**
     * Fs social date arch.
     *
     * @var DateTime|null
     */
    private $fsSocialDateArch;

    /**
     * Fs social ya alerte.
     *
     * @var bool
     */
    private $fsSocialYaAlerte;

    /**
     * Fsgi.
     *
     * @var string
     */
    private $fsgi;

    /**
     * Fsgi coll arch.
     *
     * @var string
     */
    private $fsgiCollArch;

    /**
     * Fsgi date arch.
     *
     * @var DateTime|null
     */
    private $fsgiDateArch;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Qualifiant1.
     *
     * @var string
     */
    private $qualifiant1;

    /**
     * Qualifiant2.
     *
     * @var string
     */
    private $qualifiant2;

    /**
     * Qualifiant3.
     *
     * @var string
     */
    private $qualifiant3;

    /**
     * Racine cpt.
     *
     * @var string
     */
    private $racineCpt;

    /**
     * Regle.
     *
     * @var bool
     */
    private $regle;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Type evt.
     *
     * @var string
     */
    private $typeEvt;

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
     * Get the archive.
     *
     * @return bool Returns the archive.
     */
    public function getArchive() {
        return $this->archive;
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
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the contenu1.
     *
     * @return string Returns the contenu1.
     */
    public function getContenu1() {
        return $this->contenu1;
    }

    /**
     * Get the contenu2.
     *
     * @return string Returns the contenu2.
     */
    public function getContenu2() {
        return $this->contenu2;
    }

    /**
     * Get the contenu3.
     *
     * @return string Returns the contenu3.
     */
    public function getContenu3() {
        return $this->contenu3;
    }

    /**
     * Get the contenu4.
     *
     * @return string Returns the contenu4.
     */
    public function getContenu4() {
        return $this->contenu4;
    }

    /**
     * Get the date evt.
     *
     * @return DateTime|null Returns the date evt.
     */
    public function getDateEvt() {
        return $this->dateEvt;
    }

    /**
     * Get the emplacement fichier.
     *
     * @return string Returns the emplacement fichier.
     */
    public function getEmplacementFichier() {
        return $this->emplacementFichier;
    }

    /**
     * Get the etat is actif.
     *
     * @return string Returns the etat is actif.
     */
    public function getEtatIsActif() {
        return $this->etatIsActif;
    }

    /**
     * Get the fs compta.
     *
     * @return string Returns the fs compta.
     */
    public function getFsCompta() {
        return $this->fsCompta;
    }

    /**
     * Get the fs compta coll arch.
     *
     * @return string Returns the fs compta coll arch.
     */
    public function getFsComptaCollArch() {
        return $this->fsComptaCollArch;
    }

    /**
     * Get the fs compta date alerte.
     *
     * @return DateTime|null Returns the fs compta date alerte.
     */
    public function getFsComptaDateAlerte() {
        return $this->fsComptaDateAlerte;
    }

    /**
     * Get the fs compta date arch.
     *
     * @return DateTime|null Returns the fs compta date arch.
     */
    public function getFsComptaDateArch() {
        return $this->fsComptaDateArch;
    }

    /**
     * Get the fs compta ya alerte.
     *
     * @return bool Returns the fs compta ya alerte.
     */
    public function getFsComptaYaAlerte() {
        return $this->fsComptaYaAlerte;
    }

    /**
     * Get the fs fiscal.
     *
     * @return string Returns the fs fiscal.
     */
    public function getFsFiscal() {
        return $this->fsFiscal;
    }

    /**
     * Get the fs fiscal coll arch.
     *
     * @return string Returns the fs fiscal coll arch.
     */
    public function getFsFiscalCollArch() {
        return $this->fsFiscalCollArch;
    }

    /**
     * Get the fs fiscal date arch.
     *
     * @return DateTime|null Returns the fs fiscal date arch.
     */
    public function getFsFiscalDateArch() {
        return $this->fsFiscalDateArch;
    }

    /**
     * Get the fs juridique.
     *
     * @return string Returns the fs juridique.
     */
    public function getFsJuridique() {
        return $this->fsJuridique;
    }

    /**
     * Get the fs juridique coll arch.
     *
     * @return string Returns the fs juridique coll arch.
     */
    public function getFsJuridiqueCollArch() {
        return $this->fsJuridiqueCollArch;
    }

    /**
     * Get the fs juridique date arch.
     *
     * @return DateTime|null Returns the fs juridique date arch.
     */
    public function getFsJuridiqueDateArch() {
        return $this->fsJuridiqueDateArch;
    }

    /**
     * Get the fs social.
     *
     * @return string Returns the fs social.
     */
    public function getFsSocial() {
        return $this->fsSocial;
    }

    /**
     * Get the fs social coll arch.
     *
     * @return string Returns the fs social coll arch.
     */
    public function getFsSocialCollArch() {
        return $this->fsSocialCollArch;
    }

    /**
     * Get the fs social date alerte.
     *
     * @return DateTime|null Returns the fs social date alerte.
     */
    public function getFsSocialDateAlerte() {
        return $this->fsSocialDateAlerte;
    }

    /**
     * Get the fs social date arch.
     *
     * @return DateTime|null Returns the fs social date arch.
     */
    public function getFsSocialDateArch() {
        return $this->fsSocialDateArch;
    }

    /**
     * Get the fs social ya alerte.
     *
     * @return bool Returns the fs social ya alerte.
     */
    public function getFsSocialYaAlerte() {
        return $this->fsSocialYaAlerte;
    }

    /**
     * Get the fsgi.
     *
     * @return string Returns the fsgi.
     */
    public function getFsgi() {
        return $this->fsgi;
    }

    /**
     * Get the fsgi coll arch.
     *
     * @return string Returns the fsgi coll arch.
     */
    public function getFsgiCollArch() {
        return $this->fsgiCollArch;
    }

    /**
     * Get the fsgi date arch.
     *
     * @return DateTime|null Returns the fsgi date arch.
     */
    public function getFsgiDateArch() {
        return $this->fsgiDateArch;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the qualifiant1.
     *
     * @return string Returns the qualifiant1.
     */
    public function getQualifiant1() {
        return $this->qualifiant1;
    }

    /**
     * Get the qualifiant2.
     *
     * @return string Returns the qualifiant2.
     */
    public function getQualifiant2() {
        return $this->qualifiant2;
    }

    /**
     * Get the qualifiant3.
     *
     * @return string Returns the qualifiant3.
     */
    public function getQualifiant3() {
        return $this->qualifiant3;
    }

    /**
     * Get the racine cpt.
     *
     * @return string Returns the racine cpt.
     */
    public function getRacineCpt() {
        return $this->racineCpt;
    }

    /**
     * Get the regle.
     *
     * @return bool Returns the regle.
     */
    public function getRegle() {
        return $this->regle;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Get the type evt.
     *
     * @return string Returns the type evt.
     */
    public function getTypeEvt() {
        return $this->typeEvt;
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
     * Set the archive.
     *
     * @param bool $archive The archive.
     */
    public function setArchive($archive) {
        $this->archive = $archive;
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
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the contenu1.
     *
     * @param string $contenu1 The contenu1.
     */
    public function setContenu1($contenu1) {
        $this->contenu1 = $contenu1;
        return $this;
    }

    /**
     * Set the contenu2.
     *
     * @param string $contenu2 The contenu2.
     */
    public function setContenu2($contenu2) {
        $this->contenu2 = $contenu2;
        return $this;
    }

    /**
     * Set the contenu3.
     *
     * @param string $contenu3 The contenu3.
     */
    public function setContenu3($contenu3) {
        $this->contenu3 = $contenu3;
        return $this;
    }

    /**
     * Set the contenu4.
     *
     * @param string $contenu4 The contenu4.
     */
    public function setContenu4($contenu4) {
        $this->contenu4 = $contenu4;
        return $this;
    }

    /**
     * Set the date evt.
     *
     * @param DateTime|null $dateEvt The date evt.
     */
    public function setDateEvt(DateTime $dateEvt = null) {
        $this->dateEvt = $dateEvt;
        return $this;
    }

    /**
     * Set the emplacement fichier.
     *
     * @param string $emplacementFichier The emplacement fichier.
     */
    public function setEmplacementFichier($emplacementFichier) {
        $this->emplacementFichier = $emplacementFichier;
        return $this;
    }

    /**
     * Set the etat is actif.
     *
     * @param string $etatIsActif The etat is actif.
     */
    public function setEtatIsActif($etatIsActif) {
        $this->etatIsActif = $etatIsActif;
        return $this;
    }

    /**
     * Set the fs compta.
     *
     * @param string $fsCompta The fs compta.
     */
    public function setFsCompta($fsCompta) {
        $this->fsCompta = $fsCompta;
        return $this;
    }

    /**
     * Set the fs compta coll arch.
     *
     * @param string $fsComptaCollArch The fs compta coll arch.
     */
    public function setFsComptaCollArch($fsComptaCollArch) {
        $this->fsComptaCollArch = $fsComptaCollArch;
        return $this;
    }

    /**
     * Set the fs compta date alerte.
     *
     * @param DateTime|null $fsComptaDateAlerte The fs compta date alerte.
     */
    public function setFsComptaDateAlerte(DateTime $fsComptaDateAlerte = null) {
        $this->fsComptaDateAlerte = $fsComptaDateAlerte;
        return $this;
    }

    /**
     * Set the fs compta date arch.
     *
     * @param DateTime|null $fsComptaDateArch The fs compta date arch.
     */
    public function setFsComptaDateArch(DateTime $fsComptaDateArch = null) {
        $this->fsComptaDateArch = $fsComptaDateArch;
        return $this;
    }

    /**
     * Set the fs compta ya alerte.
     *
     * @param bool $fsComptaYaAlerte The fs compta ya alerte.
     */
    public function setFsComptaYaAlerte($fsComptaYaAlerte) {
        $this->fsComptaYaAlerte = $fsComptaYaAlerte;
        return $this;
    }

    /**
     * Set the fs fiscal.
     *
     * @param string $fsFiscal The fs fiscal.
     */
    public function setFsFiscal($fsFiscal) {
        $this->fsFiscal = $fsFiscal;
        return $this;
    }

    /**
     * Set the fs fiscal coll arch.
     *
     * @param string $fsFiscalCollArch The fs fiscal coll arch.
     */
    public function setFsFiscalCollArch($fsFiscalCollArch) {
        $this->fsFiscalCollArch = $fsFiscalCollArch;
        return $this;
    }

    /**
     * Set the fs fiscal date arch.
     *
     * @param DateTime|null $fsFiscalDateArch The fs fiscal date arch.
     */
    public function setFsFiscalDateArch(DateTime $fsFiscalDateArch = null) {
        $this->fsFiscalDateArch = $fsFiscalDateArch;
        return $this;
    }

    /**
     * Set the fs juridique.
     *
     * @param string $fsJuridique The fs juridique.
     */
    public function setFsJuridique($fsJuridique) {
        $this->fsJuridique = $fsJuridique;
        return $this;
    }

    /**
     * Set the fs juridique coll arch.
     *
     * @param string $fsJuridiqueCollArch The fs juridique coll arch.
     */
    public function setFsJuridiqueCollArch($fsJuridiqueCollArch) {
        $this->fsJuridiqueCollArch = $fsJuridiqueCollArch;
        return $this;
    }

    /**
     * Set the fs juridique date arch.
     *
     * @param DateTime|null $fsJuridiqueDateArch The fs juridique date arch.
     */
    public function setFsJuridiqueDateArch(DateTime $fsJuridiqueDateArch = null) {
        $this->fsJuridiqueDateArch = $fsJuridiqueDateArch;
        return $this;
    }

    /**
     * Set the fs social.
     *
     * @param string $fsSocial The fs social.
     */
    public function setFsSocial($fsSocial) {
        $this->fsSocial = $fsSocial;
        return $this;
    }

    /**
     * Set the fs social coll arch.
     *
     * @param string $fsSocialCollArch The fs social coll arch.
     */
    public function setFsSocialCollArch($fsSocialCollArch) {
        $this->fsSocialCollArch = $fsSocialCollArch;
        return $this;
    }

    /**
     * Set the fs social date alerte.
     *
     * @param DateTime|null $fsSocialDateAlerte The fs social date alerte.
     */
    public function setFsSocialDateAlerte(DateTime $fsSocialDateAlerte = null) {
        $this->fsSocialDateAlerte = $fsSocialDateAlerte;
        return $this;
    }

    /**
     * Set the fs social date arch.
     *
     * @param DateTime|null $fsSocialDateArch The fs social date arch.
     */
    public function setFsSocialDateArch(DateTime $fsSocialDateArch = null) {
        $this->fsSocialDateArch = $fsSocialDateArch;
        return $this;
    }

    /**
     * Set the fs social ya alerte.
     *
     * @param bool $fsSocialYaAlerte The fs social ya alerte.
     */
    public function setFsSocialYaAlerte($fsSocialYaAlerte) {
        $this->fsSocialYaAlerte = $fsSocialYaAlerte;
        return $this;
    }

    /**
     * Set the fsgi.
     *
     * @param string $fsgi The fsgi.
     */
    public function setFsgi($fsgi) {
        $this->fsgi = $fsgi;
        return $this;
    }

    /**
     * Set the fsgi coll arch.
     *
     * @param string $fsgiCollArch The fsgi coll arch.
     */
    public function setFsgiCollArch($fsgiCollArch) {
        $this->fsgiCollArch = $fsgiCollArch;
        return $this;
    }

    /**
     * Set the fsgi date arch.
     *
     * @param DateTime|null $fsgiDateArch The fsgi date arch.
     */
    public function setFsgiDateArch(DateTime $fsgiDateArch = null) {
        $this->fsgiDateArch = $fsgiDateArch;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
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
     * Set the qualifiant1.
     *
     * @param string $qualifiant1 The qualifiant1.
     */
    public function setQualifiant1($qualifiant1) {
        $this->qualifiant1 = $qualifiant1;
        return $this;
    }

    /**
     * Set the qualifiant2.
     *
     * @param string $qualifiant2 The qualifiant2.
     */
    public function setQualifiant2($qualifiant2) {
        $this->qualifiant2 = $qualifiant2;
        return $this;
    }

    /**
     * Set the qualifiant3.
     *
     * @param string $qualifiant3 The qualifiant3.
     */
    public function setQualifiant3($qualifiant3) {
        $this->qualifiant3 = $qualifiant3;
        return $this;
    }

    /**
     * Set the racine cpt.
     *
     * @param string $racineCpt The racine cpt.
     */
    public function setRacineCpt($racineCpt) {
        $this->racineCpt = $racineCpt;
        return $this;
    }

    /**
     * Set the regle.
     *
     * @param bool $regle The regle.
     */
    public function setRegle($regle) {
        $this->regle = $regle;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type evt.
     *
     * @param string $typeEvt The type evt.
     */
    public function setTypeEvt($typeEvt) {
        $this->typeEvt = $typeEvt;
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
