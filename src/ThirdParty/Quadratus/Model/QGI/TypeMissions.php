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
 * Type missions.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class TypeMissions {

    /**
     * Article.
     *
     * @var string
     */
    private $article;

    /**
     * Centre analytique.
     *
     * @var string
     */
    private $centreAnalytique;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code responsable.
     *
     * @var string
     */
    private $codeResponsable;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Decalage fermeture auto.
     *
     * @var int
     */
    private $decalageFermetureAuto;

    /**
     * Decalage fermeture auto jours.
     *
     * @var int
     */
    private $decalageFermetureAutoJours;

    /**
     * Decalage ouverture auto.
     *
     * @var int
     */
    private $decalageOuvertureAuto;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Descriptif rtf.
     *
     * @var string
     */
    private $descriptifRtf;

    /**
     * Fermeture auto.
     *
     * @var bool
     */
    private $fermetureAuto;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Mois ouverture auto.
     *
     * @var int
     */
    private $moisOuvertureAuto;

    /**
     * Ordre.
     *
     * @var int
     */
    private $ordre;

    /**
     * Recurrente.
     *
     * @var bool
     */
    private $recurrente;

    /**
     * Taches groupe.
     *
     * @var string
     */
    private $tachesGroupe;

    /**
     * Transfert centre.
     *
     * @var bool
     */
    private $transfertCentre;

    /**
     * Type centre.
     *
     * @var string
     */
    private $typeCentre;

    /**
     * Type compteur.
     *
     * @var bool
     */
    private $typeCompteur;

    /**
     * Type responsable.
     *
     * @var string
     */
    private $typeResponsable;

    /**
     * Type visu taches.
     *
     * @var string
     */
    private $typeVisuTaches;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the article.
     *
     * @return string Returns the article.
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Get the centre analytique.
     *
     * @return string Returns the centre analytique.
     */
    public function getCentreAnalytique() {
        return $this->centreAnalytique;
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
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code responsable.
     *
     * @return string Returns the code responsable.
     */
    public function getCodeResponsable() {
        return $this->codeResponsable;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the decalage fermeture auto.
     *
     * @return int Returns the decalage fermeture auto.
     */
    public function getDecalageFermetureAuto() {
        return $this->decalageFermetureAuto;
    }

    /**
     * Get the decalage fermeture auto jours.
     *
     * @return int Returns the decalage fermeture auto jours.
     */
    public function getDecalageFermetureAutoJours() {
        return $this->decalageFermetureAutoJours;
    }

    /**
     * Get the decalage ouverture auto.
     *
     * @return int Returns the decalage ouverture auto.
     */
    public function getDecalageOuvertureAuto() {
        return $this->decalageOuvertureAuto;
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
     * Get the descriptif rtf.
     *
     * @return string Returns the descriptif rtf.
     */
    public function getDescriptifRtf() {
        return $this->descriptifRtf;
    }

    /**
     * Get the fermeture auto.
     *
     * @return bool Returns the fermeture auto.
     */
    public function getFermetureAuto() {
        return $this->fermetureAuto;
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
     * Get the mois ouverture auto.
     *
     * @return int Returns the mois ouverture auto.
     */
    public function getMoisOuvertureAuto() {
        return $this->moisOuvertureAuto;
    }

    /**
     * Get the ordre.
     *
     * @return int Returns the ordre.
     */
    public function getOrdre() {
        return $this->ordre;
    }

    /**
     * Get the recurrente.
     *
     * @return bool Returns the recurrente.
     */
    public function getRecurrente() {
        return $this->recurrente;
    }

    /**
     * Get the taches groupe.
     *
     * @return string Returns the taches groupe.
     */
    public function getTachesGroupe() {
        return $this->tachesGroupe;
    }

    /**
     * Get the transfert centre.
     *
     * @return bool Returns the transfert centre.
     */
    public function getTransfertCentre() {
        return $this->transfertCentre;
    }

    /**
     * Get the type centre.
     *
     * @return string Returns the type centre.
     */
    public function getTypeCentre() {
        return $this->typeCentre;
    }

    /**
     * Get the type compteur.
     *
     * @return bool Returns the type compteur.
     */
    public function getTypeCompteur() {
        return $this->typeCompteur;
    }

    /**
     * Get the type responsable.
     *
     * @return string Returns the type responsable.
     */
    public function getTypeResponsable() {
        return $this->typeResponsable;
    }

    /**
     * Get the type visu taches.
     *
     * @return string Returns the type visu taches.
     */
    public function getTypeVisuTaches() {
        return $this->typeVisuTaches;
    }

    /**
     * Set the article.
     *
     * @param string $article The article.
     * @return TypeMissions Returns this Type missions.
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the centre analytique.
     *
     * @param string $centreAnalytique The centre analytique.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCentreAnalytique($centreAnalytique) {
        $this->centreAnalytique = $centreAnalytique;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code responsable.
     *
     * @param string $codeResponsable The code responsable.
     * @return TypeMissions Returns this Type missions.
     */
    public function setCodeResponsable($codeResponsable) {
        $this->codeResponsable = $codeResponsable;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the decalage fermeture auto.
     *
     * @param int $decalageFermetureAuto The decalage fermeture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageFermetureAuto($decalageFermetureAuto) {
        $this->decalageFermetureAuto = $decalageFermetureAuto;
        return $this;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int $decalageFermetureAutoJours The decalage fermeture auto jours.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageFermetureAutoJours($decalageFermetureAutoJours) {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }

    /**
     * Set the decalage ouverture auto.
     *
     * @param int $decalageOuvertureAuto The decalage ouverture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDecalageOuvertureAuto($decalageOuvertureAuto) {
        $this->decalageOuvertureAuto = $decalageOuvertureAuto;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the descriptif rtf.
     *
     * @param string $descriptifRtf The descriptif rtf.
     * @return TypeMissions Returns this Type missions.
     */
    public function setDescriptifRtf($descriptifRtf) {
        $this->descriptifRtf = $descriptifRtf;
        return $this;
    }

    /**
     * Set the fermeture auto.
     *
     * @param bool $fermetureAuto The fermeture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setFermetureAuto($fermetureAuto) {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TypeMissions Returns this Type missions.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int $moisOuvertureAuto The mois ouverture auto.
     * @return TypeMissions Returns this Type missions.
     */
    public function setMoisOuvertureAuto($moisOuvertureAuto) {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int $ordre The ordre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setOrdre($ordre) {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the recurrente.
     *
     * @param bool $recurrente The recurrente.
     * @return TypeMissions Returns this Type missions.
     */
    public function setRecurrente($recurrente) {
        $this->recurrente = $recurrente;
        return $this;
    }

    /**
     * Set the taches groupe.
     *
     * @param string $tachesGroupe The taches groupe.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTachesGroupe($tachesGroupe) {
        $this->tachesGroupe = $tachesGroupe;
        return $this;
    }

    /**
     * Set the transfert centre.
     *
     * @param bool $transfertCentre The transfert centre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTransfertCentre($transfertCentre) {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string $typeCentre The type centre.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeCentre($typeCentre) {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type compteur.
     *
     * @param bool $typeCompteur The type compteur.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeCompteur($typeCompteur) {
        $this->typeCompteur = $typeCompteur;
        return $this;
    }

    /**
     * Set the type responsable.
     *
     * @param string $typeResponsable The type responsable.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeResponsable($typeResponsable) {
        $this->typeResponsable = $typeResponsable;
        return $this;
    }

    /**
     * Set the type visu taches.
     *
     * @param string $typeVisuTaches The type visu taches.
     * @return TypeMissions Returns this Type missions.
     */
    public function setTypeVisuTaches($typeVisuTaches) {
        $this->typeVisuTaches = $typeVisuTaches;
        return $this;
    }
}
