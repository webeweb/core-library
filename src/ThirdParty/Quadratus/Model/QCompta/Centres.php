<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Centres.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Centres {

    /**
     * Adresse rue1.
     *
     * @var string
     */
    private $adresseRue1;

    /**
     * Adresse rue2.
     *
     * @var string
     */
    private $adresseRue2;

    /**
     * Adresse ville.
     *
     * @var string
     */
    private $adresseVille;

    /**
     * Centre inactif.
     *
     * @var bool
     */
    private $centreInactif;

    /**
     * Cle repartition.
     *
     * @var string
     */
    private $cleRepartition;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Marge directe.
     *
     * @var bool
     */
    private $margeDirecte;

    /**
     * Niveau repartition.
     *
     * @var string
     */
    private $niveauRepartition;

    /**
     * Ordre edition.
     *
     * @var int
     */
    private $ordreEdition;

    /**
     * Repartition ana.
     *
     * @var string
     */
    private $repartitionAna;

    /**
     * Repartition auto.
     *
     * @var bool
     */
    private $repartitionAuto;

    /**
     * Responsable.
     *
     * @var string
     */
    private $responsable;

    /**
     * Restrictions.
     *
     * @var string
     */
    private $restrictions;

    /**
     * Suivi annee recolte.
     *
     * @var bool
     */
    private $suiviAnneeRecolte;

    /**
     * Superficie.
     *
     * @var float
     */
    private $superficie;

    /**
     * Type centre.
     *
     * @var string
     */
    private $typeCentre;

    /**
     * Type suivi.
     *
     * @var string
     */
    private $typeSuivi;

    /**
     * Type suivi autre texte.
     *
     * @var string
     */
    private $typeSuiviAutreTexte;

    /**
     * Type suivi autre valeur.
     *
     * @var float
     */
    private $typeSuiviAutreValeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse rue1.
     *
     * @return string Returns the adresse rue1.
     */
    public function getAdresseRue1() {
        return $this->adresseRue1;
    }

    /**
     * Get the adresse rue2.
     *
     * @return string Returns the adresse rue2.
     */
    public function getAdresseRue2() {
        return $this->adresseRue2;
    }

    /**
     * Get the adresse ville.
     *
     * @return string Returns the adresse ville.
     */
    public function getAdresseVille() {
        return $this->adresseVille;
    }

    /**
     * Get the centre inactif.
     *
     * @return bool Returns the centre inactif.
     */
    public function getCentreInactif() {
        return $this->centreInactif;
    }

    /**
     * Get the cle repartition.
     *
     * @return string Returns the cle repartition.
     */
    public function getCleRepartition() {
        return $this->cleRepartition;
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
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis() {
        return $this->dateDevis;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the marge directe.
     *
     * @return bool Returns the marge directe.
     */
    public function getMargeDirecte() {
        return $this->margeDirecte;
    }

    /**
     * Get the niveau repartition.
     *
     * @return string Returns the niveau repartition.
     */
    public function getNiveauRepartition() {
        return $this->niveauRepartition;
    }

    /**
     * Get the ordre edition.
     *
     * @return int Returns the ordre edition.
     */
    public function getOrdreEdition() {
        return $this->ordreEdition;
    }

    /**
     * Get the repartition ana.
     *
     * @return string Returns the repartition ana.
     */
    public function getRepartitionAna() {
        return $this->repartitionAna;
    }

    /**
     * Get the repartition auto.
     *
     * @return bool Returns the repartition auto.
     */
    public function getRepartitionAuto() {
        return $this->repartitionAuto;
    }

    /**
     * Get the responsable.
     *
     * @return string Returns the responsable.
     */
    public function getResponsable() {
        return $this->responsable;
    }

    /**
     * Get the restrictions.
     *
     * @return string Returns the restrictions.
     */
    public function getRestrictions() {
        return $this->restrictions;
    }

    /**
     * Get the suivi annee recolte.
     *
     * @return bool Returns the suivi annee recolte.
     */
    public function getSuiviAnneeRecolte() {
        return $this->suiviAnneeRecolte;
    }

    /**
     * Get the superficie.
     *
     * @return float Returns the superficie.
     */
    public function getSuperficie() {
        return $this->superficie;
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
     * Get the type suivi.
     *
     * @return string Returns the type suivi.
     */
    public function getTypeSuivi() {
        return $this->typeSuivi;
    }

    /**
     * Get the type suivi autre texte.
     *
     * @return string Returns the type suivi autre texte.
     */
    public function getTypeSuiviAutreTexte() {
        return $this->typeSuiviAutreTexte;
    }

    /**
     * Get the type suivi autre valeur.
     *
     * @return float Returns the type suivi autre valeur.
     */
    public function getTypeSuiviAutreValeur() {
        return $this->typeSuiviAutreValeur;
    }

    /**
     * Set the adresse rue1.
     *
     * @param string $adresseRue1 The adresse rue1.
     * @return Centres Returns this Centres.
     */
    public function setAdresseRue1($adresseRue1) {
        $this->adresseRue1 = $adresseRue1;
        return $this;
    }

    /**
     * Set the adresse rue2.
     *
     * @param string $adresseRue2 The adresse rue2.
     * @return Centres Returns this Centres.
     */
    public function setAdresseRue2($adresseRue2) {
        $this->adresseRue2 = $adresseRue2;
        return $this;
    }

    /**
     * Set the adresse ville.
     *
     * @param string $adresseVille The adresse ville.
     * @return Centres Returns this Centres.
     */
    public function setAdresseVille($adresseVille) {
        $this->adresseVille = $adresseVille;
        return $this;
    }

    /**
     * Set the centre inactif.
     *
     * @param bool $centreInactif The centre inactif.
     * @return Centres Returns this Centres.
     */
    public function setCentreInactif($centreInactif) {
        $this->centreInactif = $centreInactif;
        return $this;
    }

    /**
     * Set the cle repartition.
     *
     * @param string $cleRepartition The cle repartition.
     * @return Centres Returns this Centres.
     */
    public function setCleRepartition($cleRepartition) {
        $this->cleRepartition = $cleRepartition;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Centres Returns this Centres.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Centres Returns this Centres.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     * @return Centres Returns this Centres.
     */
    public function setDateDevis(DateTime $dateDevis = null) {
        $this->dateDevis = $dateDevis;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return Centres Returns this Centres.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Centres Returns this Centres.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the marge directe.
     *
     * @param bool $margeDirecte The marge directe.
     * @return Centres Returns this Centres.
     */
    public function setMargeDirecte($margeDirecte) {
        $this->margeDirecte = $margeDirecte;
        return $this;
    }

    /**
     * Set the niveau repartition.
     *
     * @param string $niveauRepartition The niveau repartition.
     * @return Centres Returns this Centres.
     */
    public function setNiveauRepartition($niveauRepartition) {
        $this->niveauRepartition = $niveauRepartition;
        return $this;
    }

    /**
     * Set the ordre edition.
     *
     * @param int $ordreEdition The ordre edition.
     * @return Centres Returns this Centres.
     */
    public function setOrdreEdition($ordreEdition) {
        $this->ordreEdition = $ordreEdition;
        return $this;
    }

    /**
     * Set the repartition ana.
     *
     * @param string $repartitionAna The repartition ana.
     * @return Centres Returns this Centres.
     */
    public function setRepartitionAna($repartitionAna) {
        $this->repartitionAna = $repartitionAna;
        return $this;
    }

    /**
     * Set the repartition auto.
     *
     * @param bool $repartitionAuto The repartition auto.
     * @return Centres Returns this Centres.
     */
    public function setRepartitionAuto($repartitionAuto) {
        $this->repartitionAuto = $repartitionAuto;
        return $this;
    }

    /**
     * Set the responsable.
     *
     * @param string $responsable The responsable.
     * @return Centres Returns this Centres.
     */
    public function setResponsable($responsable) {
        $this->responsable = $responsable;
        return $this;
    }

    /**
     * Set the restrictions.
     *
     * @param string $restrictions The restrictions.
     * @return Centres Returns this Centres.
     */
    public function setRestrictions($restrictions) {
        $this->restrictions = $restrictions;
        return $this;
    }

    /**
     * Set the suivi annee recolte.
     *
     * @param bool $suiviAnneeRecolte The suivi annee recolte.
     * @return Centres Returns this Centres.
     */
    public function setSuiviAnneeRecolte($suiviAnneeRecolte) {
        $this->suiviAnneeRecolte = $suiviAnneeRecolte;
        return $this;
    }

    /**
     * Set the superficie.
     *
     * @param float $superficie The superficie.
     * @return Centres Returns this Centres.
     */
    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
        return $this;
    }

    /**
     * Set the type centre.
     *
     * @param string $typeCentre The type centre.
     * @return Centres Returns this Centres.
     */
    public function setTypeCentre($typeCentre) {
        $this->typeCentre = $typeCentre;
        return $this;
    }

    /**
     * Set the type suivi.
     *
     * @param string $typeSuivi The type suivi.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuivi($typeSuivi) {
        $this->typeSuivi = $typeSuivi;
        return $this;
    }

    /**
     * Set the type suivi autre texte.
     *
     * @param string $typeSuiviAutreTexte The type suivi autre texte.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuiviAutreTexte($typeSuiviAutreTexte) {
        $this->typeSuiviAutreTexte = $typeSuiviAutreTexte;
        return $this;
    }

    /**
     * Set the type suivi autre valeur.
     *
     * @param float $typeSuiviAutreValeur The type suivi autre valeur.
     * @return Centres Returns this Centres.
     */
    public function setTypeSuiviAutreValeur($typeSuiviAutreValeur) {
        $this->typeSuiviAutreValeur = $typeSuiviAutreValeur;
        return $this;
    }
}
