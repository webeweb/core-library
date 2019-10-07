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
 * Compteur model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Compteur {

    /**
     * Nb activite imprimees.
     *
     * @var int
     */
    private $nbActiviteImprimees;

    /**
     * Nb activite imprimees a deduire.
     *
     * @var int
     */
    private $nbActiviteImprimeesADeduire;

    /**
     * Nb activite imprimees fact.
     *
     * @var int
     */
    private $nbActiviteImprimeesFact;

    /**
     * Nb ana imprimees.
     *
     * @var int
     */
    private $nbAnaImprimees;

    /**
     * Nb ana imprimees a deduire.
     *
     * @var int
     */
    private $nbAnaImprimeesADeduire;

    /**
     * Nb ana imprimees fact.
     *
     * @var int
     */
    private $nbAnaImprimeesFact;

    /**
     * Nb annexes editees.
     *
     * @var int
     */
    private $nbAnnexesEditees;

    /**
     * Nb annexes editees a deduire.
     *
     * @var int
     */
    private $nbAnnexesEditeesADeduire;

    /**
     * Nb annexes editees fact.
     *
     * @var int
     */
    private $nbAnnexesEditeesFact;

    /**
     * Nb bal agee imprimees.
     *
     * @var int
     */
    private $nbBalAgeeImprimees;

    /**
     * Nb bal agee imprimees a deduire.
     *
     * @var int
     */
    private $nbBalAgeeImprimeesADeduire;

    /**
     * Nb bal agee imprimees fact.
     *
     * @var int
     */
    private $nbBalAgeeImprimeesFact;

    /**
     * Nb bal imprimees.
     *
     * @var int
     */
    private $nbBalImprimees;

    /**
     * Nb bal imprimees a deduire.
     *
     * @var int
     */
    private $nbBalImprimeesADeduire;

    /**
     * Nb bal imprimees fact.
     *
     * @var int
     */
    private $nbBalImprimeesFact;

    /**
     * Nb bilans edites.
     *
     * @var int
     */
    private $nbBilansEdites;

    /**
     * Nb bilans edites a deduire.
     *
     * @var int
     */
    private $nbBilansEditesADeduire;

    /**
     * Nb bilans edites fact.
     *
     * @var int
     */
    private $nbBilansEditesFact;

    /**
     * Nb cedage edites.
     *
     * @var int
     */
    private $nbCedageEdites;

    /**
     * Nb cedage edites a deduire.
     *
     * @var int
     */
    private $nbCedageEditesADeduire;

    /**
     * Nb cedage edites fact.
     *
     * @var int
     */
    private $nbCedageEditesFact;

    /**
     * Nb centr imprimees.
     *
     * @var int
     */
    private $nbCentrImprimees;

    /**
     * Nb centr imprimees a deduire.
     *
     * @var int
     */
    private $nbCentrImprimeesADeduire;

    /**
     * Nb centr imprimees fact.
     *
     * @var int
     */
    private $nbCentrImprimeesFact;

    /**
     * Nb ech imprimees.
     *
     * @var int
     */
    private $nbEchImprimees;

    /**
     * Nb ech imprimees a deduire.
     *
     * @var int
     */
    private $nbEchImprimeesADeduire;

    /**
     * Nb ech imprimees fact.
     *
     * @var int
     */
    private $nbEchImprimeesFact;

    /**
     * Nb fic a s c i i emis.
     *
     * @var int
     */
    private $nbFicASCIIEmis;

    /**
     * Nb fic a s c i i emis a deduire.
     *
     * @var int
     */
    private $nbFicASCIIEmisADeduire;

    /**
     * Nb fic a s c i i emis fact.
     *
     * @var int
     */
    private $nbFicASCIIEmisFact;

    /**
     * Nb g l imprimees.
     *
     * @var int
     */
    private $nbGLImprimees;

    /**
     * Nb g l imprimees a deduire.
     *
     * @var int
     */
    private $nbGLImprimeesADeduire;

    /**
     * Nb g l imprimees fact.
     *
     * @var int
     */
    private $nbGLImprimeesFact;

    /**
     * Nb jrn imprimees.
     *
     * @var int
     */
    private $nbJrnImprimees;

    /**
     * Nb jrn imprimees a deduire.
     *
     * @var int
     */
    private $nbJrnImprimeesADeduire;

    /**
     * Nb jrn imprimees fact.
     *
     * @var int
     */
    private $nbJrnImprimeesFact;

    /**
     * Nb liasses fisc editees.
     *
     * @var int
     */
    private $nbLiassesFiscEditees;

    /**
     * Nb liasses fisc editees a deduire.
     *
     * @var int
     */
    private $nbLiassesFiscEditeesADeduire;

    /**
     * Nb liasses fisc editees fact.
     *
     * @var int
     */
    private $nbLiassesFiscEditeesFact;

    /**
     * Nb lig etebac traitees.
     *
     * @var int
     */
    private $nbLigEtebacTraitees;

    /**
     * Nb lig etebac traitees a deduire.
     *
     * @var int
     */
    private $nbLigEtebacTraiteesADeduire;

    /**
     * Nb lig etebac traitees fact.
     *
     * @var int
     */
    private $nbLigEtebacTraiteesFact;

    /**
     * Nb rel cli imprimees.
     *
     * @var int
     */
    private $nbRelCliImprimees;

    /**
     * Nb rel cli imprimees a deduire.
     *
     * @var int
     */
    private $nbRelCliImprimeesADeduire;

    /**
     * Nb rel cli imprimees fact.
     *
     * @var int
     */
    private $nbRelCliImprimeesFact;

    /**
     * Nb tab amort imprimes.
     *
     * @var int
     */
    private $nbTabAmortImprimes;

    /**
     * Nb tab amort imprimes a deduire.
     *
     * @var int
     */
    private $nbTabAmortImprimesADeduire;

    /**
     * Nb tab amort imprimes fact.
     *
     * @var int
     */
    private $nbTabAmortImprimesFact;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the nb activite imprimees.
     *
     * @return int Returns the nb activite imprimees.
     */
    public function getNbActiviteImprimees() {
        return $this->nbActiviteImprimees;
    }

    /**
     * Get the nb activite imprimees a deduire.
     *
     * @return int Returns the nb activite imprimees a deduire.
     */
    public function getNbActiviteImprimeesADeduire() {
        return $this->nbActiviteImprimeesADeduire;
    }

    /**
     * Get the nb activite imprimees fact.
     *
     * @return int Returns the nb activite imprimees fact.
     */
    public function getNbActiviteImprimeesFact() {
        return $this->nbActiviteImprimeesFact;
    }

    /**
     * Get the nb ana imprimees.
     *
     * @return int Returns the nb ana imprimees.
     */
    public function getNbAnaImprimees() {
        return $this->nbAnaImprimees;
    }

    /**
     * Get the nb ana imprimees a deduire.
     *
     * @return int Returns the nb ana imprimees a deduire.
     */
    public function getNbAnaImprimeesADeduire() {
        return $this->nbAnaImprimeesADeduire;
    }

    /**
     * Get the nb ana imprimees fact.
     *
     * @return int Returns the nb ana imprimees fact.
     */
    public function getNbAnaImprimeesFact() {
        return $this->nbAnaImprimeesFact;
    }

    /**
     * Get the nb annexes editees.
     *
     * @return int Returns the nb annexes editees.
     */
    public function getNbAnnexesEditees() {
        return $this->nbAnnexesEditees;
    }

    /**
     * Get the nb annexes editees a deduire.
     *
     * @return int Returns the nb annexes editees a deduire.
     */
    public function getNbAnnexesEditeesADeduire() {
        return $this->nbAnnexesEditeesADeduire;
    }

    /**
     * Get the nb annexes editees fact.
     *
     * @return int Returns the nb annexes editees fact.
     */
    public function getNbAnnexesEditeesFact() {
        return $this->nbAnnexesEditeesFact;
    }

    /**
     * Get the nb bal agee imprimees.
     *
     * @return int Returns the nb bal agee imprimees.
     */
    public function getNbBalAgeeImprimees() {
        return $this->nbBalAgeeImprimees;
    }

    /**
     * Get the nb bal agee imprimees a deduire.
     *
     * @return int Returns the nb bal agee imprimees a deduire.
     */
    public function getNbBalAgeeImprimeesADeduire() {
        return $this->nbBalAgeeImprimeesADeduire;
    }

    /**
     * Get the nb bal agee imprimees fact.
     *
     * @return int Returns the nb bal agee imprimees fact.
     */
    public function getNbBalAgeeImprimeesFact() {
        return $this->nbBalAgeeImprimeesFact;
    }

    /**
     * Get the nb bal imprimees.
     *
     * @return int Returns the nb bal imprimees.
     */
    public function getNbBalImprimees() {
        return $this->nbBalImprimees;
    }

    /**
     * Get the nb bal imprimees a deduire.
     *
     * @return int Returns the nb bal imprimees a deduire.
     */
    public function getNbBalImprimeesADeduire() {
        return $this->nbBalImprimeesADeduire;
    }

    /**
     * Get the nb bal imprimees fact.
     *
     * @return int Returns the nb bal imprimees fact.
     */
    public function getNbBalImprimeesFact() {
        return $this->nbBalImprimeesFact;
    }

    /**
     * Get the nb bilans edites.
     *
     * @return int Returns the nb bilans edites.
     */
    public function getNbBilansEdites() {
        return $this->nbBilansEdites;
    }

    /**
     * Get the nb bilans edites a deduire.
     *
     * @return int Returns the nb bilans edites a deduire.
     */
    public function getNbBilansEditesADeduire() {
        return $this->nbBilansEditesADeduire;
    }

    /**
     * Get the nb bilans edites fact.
     *
     * @return int Returns the nb bilans edites fact.
     */
    public function getNbBilansEditesFact() {
        return $this->nbBilansEditesFact;
    }

    /**
     * Get the nb cedage edites.
     *
     * @return int Returns the nb cedage edites.
     */
    public function getNbCedageEdites() {
        return $this->nbCedageEdites;
    }

    /**
     * Get the nb cedage edites a deduire.
     *
     * @return int Returns the nb cedage edites a deduire.
     */
    public function getNbCedageEditesADeduire() {
        return $this->nbCedageEditesADeduire;
    }

    /**
     * Get the nb cedage edites fact.
     *
     * @return int Returns the nb cedage edites fact.
     */
    public function getNbCedageEditesFact() {
        return $this->nbCedageEditesFact;
    }

    /**
     * Get the nb centr imprimees.
     *
     * @return int Returns the nb centr imprimees.
     */
    public function getNbCentrImprimees() {
        return $this->nbCentrImprimees;
    }

    /**
     * Get the nb centr imprimees a deduire.
     *
     * @return int Returns the nb centr imprimees a deduire.
     */
    public function getNbCentrImprimeesADeduire() {
        return $this->nbCentrImprimeesADeduire;
    }

    /**
     * Get the nb centr imprimees fact.
     *
     * @return int Returns the nb centr imprimees fact.
     */
    public function getNbCentrImprimeesFact() {
        return $this->nbCentrImprimeesFact;
    }

    /**
     * Get the nb ech imprimees.
     *
     * @return int Returns the nb ech imprimees.
     */
    public function getNbEchImprimees() {
        return $this->nbEchImprimees;
    }

    /**
     * Get the nb ech imprimees a deduire.
     *
     * @return int Returns the nb ech imprimees a deduire.
     */
    public function getNbEchImprimeesADeduire() {
        return $this->nbEchImprimeesADeduire;
    }

    /**
     * Get the nb ech imprimees fact.
     *
     * @return int Returns the nb ech imprimees fact.
     */
    public function getNbEchImprimeesFact() {
        return $this->nbEchImprimeesFact;
    }

    /**
     * Get the nb fic a s c i i emis.
     *
     * @return int Returns the nb fic a s c i i emis.
     */
    public function getNbFicASCIIEmis() {
        return $this->nbFicASCIIEmis;
    }

    /**
     * Get the nb fic a s c i i emis a deduire.
     *
     * @return int Returns the nb fic a s c i i emis a deduire.
     */
    public function getNbFicASCIIEmisADeduire() {
        return $this->nbFicASCIIEmisADeduire;
    }

    /**
     * Get the nb fic a s c i i emis fact.
     *
     * @return int Returns the nb fic a s c i i emis fact.
     */
    public function getNbFicASCIIEmisFact() {
        return $this->nbFicASCIIEmisFact;
    }

    /**
     * Get the nb g l imprimees.
     *
     * @return int Returns the nb g l imprimees.
     */
    public function getNbGLImprimees() {
        return $this->nbGLImprimees;
    }

    /**
     * Get the nb g l imprimees a deduire.
     *
     * @return int Returns the nb g l imprimees a deduire.
     */
    public function getNbGLImprimeesADeduire() {
        return $this->nbGLImprimeesADeduire;
    }

    /**
     * Get the nb g l imprimees fact.
     *
     * @return int Returns the nb g l imprimees fact.
     */
    public function getNbGLImprimeesFact() {
        return $this->nbGLImprimeesFact;
    }

    /**
     * Get the nb jrn imprimees.
     *
     * @return int Returns the nb jrn imprimees.
     */
    public function getNbJrnImprimees() {
        return $this->nbJrnImprimees;
    }

    /**
     * Get the nb jrn imprimees a deduire.
     *
     * @return int Returns the nb jrn imprimees a deduire.
     */
    public function getNbJrnImprimeesADeduire() {
        return $this->nbJrnImprimeesADeduire;
    }

    /**
     * Get the nb jrn imprimees fact.
     *
     * @return int Returns the nb jrn imprimees fact.
     */
    public function getNbJrnImprimeesFact() {
        return $this->nbJrnImprimeesFact;
    }

    /**
     * Get the nb liasses fisc editees.
     *
     * @return int Returns the nb liasses fisc editees.
     */
    public function getNbLiassesFiscEditees() {
        return $this->nbLiassesFiscEditees;
    }

    /**
     * Get the nb liasses fisc editees a deduire.
     *
     * @return int Returns the nb liasses fisc editees a deduire.
     */
    public function getNbLiassesFiscEditeesADeduire() {
        return $this->nbLiassesFiscEditeesADeduire;
    }

    /**
     * Get the nb liasses fisc editees fact.
     *
     * @return int Returns the nb liasses fisc editees fact.
     */
    public function getNbLiassesFiscEditeesFact() {
        return $this->nbLiassesFiscEditeesFact;
    }

    /**
     * Get the nb lig etebac traitees.
     *
     * @return int Returns the nb lig etebac traitees.
     */
    public function getNbLigEtebacTraitees() {
        return $this->nbLigEtebacTraitees;
    }

    /**
     * Get the nb lig etebac traitees a deduire.
     *
     * @return int Returns the nb lig etebac traitees a deduire.
     */
    public function getNbLigEtebacTraiteesADeduire() {
        return $this->nbLigEtebacTraiteesADeduire;
    }

    /**
     * Get the nb lig etebac traitees fact.
     *
     * @return int Returns the nb lig etebac traitees fact.
     */
    public function getNbLigEtebacTraiteesFact() {
        return $this->nbLigEtebacTraiteesFact;
    }

    /**
     * Get the nb rel cli imprimees.
     *
     * @return int Returns the nb rel cli imprimees.
     */
    public function getNbRelCliImprimees() {
        return $this->nbRelCliImprimees;
    }

    /**
     * Get the nb rel cli imprimees a deduire.
     *
     * @return int Returns the nb rel cli imprimees a deduire.
     */
    public function getNbRelCliImprimeesADeduire() {
        return $this->nbRelCliImprimeesADeduire;
    }

    /**
     * Get the nb rel cli imprimees fact.
     *
     * @return int Returns the nb rel cli imprimees fact.
     */
    public function getNbRelCliImprimeesFact() {
        return $this->nbRelCliImprimeesFact;
    }

    /**
     * Get the nb tab amort imprimes.
     *
     * @return int Returns the nb tab amort imprimes.
     */
    public function getNbTabAmortImprimes() {
        return $this->nbTabAmortImprimes;
    }

    /**
     * Get the nb tab amort imprimes a deduire.
     *
     * @return int Returns the nb tab amort imprimes a deduire.
     */
    public function getNbTabAmortImprimesADeduire() {
        return $this->nbTabAmortImprimesADeduire;
    }

    /**
     * Get the nb tab amort imprimes fact.
     *
     * @return int Returns the nb tab amort imprimes fact.
     */
    public function getNbTabAmortImprimesFact() {
        return $this->nbTabAmortImprimesFact;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Set the nb activite imprimees.
     *
     * @param int $nbActiviteImprimees The nb activite imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbActiviteImprimees($nbActiviteImprimees) {
        $this->nbActiviteImprimees = $nbActiviteImprimees;
        return $this;
    }

    /**
     * Set the nb activite imprimees a deduire.
     *
     * @param int $nbActiviteImprimeesADeduire The nb activite imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbActiviteImprimeesADeduire($nbActiviteImprimeesADeduire) {
        $this->nbActiviteImprimeesADeduire = $nbActiviteImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb activite imprimees fact.
     *
     * @param int $nbActiviteImprimeesFact The nb activite imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbActiviteImprimeesFact($nbActiviteImprimeesFact) {
        $this->nbActiviteImprimeesFact = $nbActiviteImprimeesFact;
        return $this;
    }

    /**
     * Set the nb ana imprimees.
     *
     * @param int $nbAnaImprimees The nb ana imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnaImprimees($nbAnaImprimees) {
        $this->nbAnaImprimees = $nbAnaImprimees;
        return $this;
    }

    /**
     * Set the nb ana imprimees a deduire.
     *
     * @param int $nbAnaImprimeesADeduire The nb ana imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnaImprimeesADeduire($nbAnaImprimeesADeduire) {
        $this->nbAnaImprimeesADeduire = $nbAnaImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb ana imprimees fact.
     *
     * @param int $nbAnaImprimeesFact The nb ana imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnaImprimeesFact($nbAnaImprimeesFact) {
        $this->nbAnaImprimeesFact = $nbAnaImprimeesFact;
        return $this;
    }

    /**
     * Set the nb annexes editees.
     *
     * @param int $nbAnnexesEditees The nb annexes editees.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnnexesEditees($nbAnnexesEditees) {
        $this->nbAnnexesEditees = $nbAnnexesEditees;
        return $this;
    }

    /**
     * Set the nb annexes editees a deduire.
     *
     * @param int $nbAnnexesEditeesADeduire The nb annexes editees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnnexesEditeesADeduire($nbAnnexesEditeesADeduire) {
        $this->nbAnnexesEditeesADeduire = $nbAnnexesEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb annexes editees fact.
     *
     * @param int $nbAnnexesEditeesFact The nb annexes editees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbAnnexesEditeesFact($nbAnnexesEditeesFact) {
        $this->nbAnnexesEditeesFact = $nbAnnexesEditeesFact;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees.
     *
     * @param int $nbBalAgeeImprimees The nb bal agee imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalAgeeImprimees($nbBalAgeeImprimees) {
        $this->nbBalAgeeImprimees = $nbBalAgeeImprimees;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees a deduire.
     *
     * @param int $nbBalAgeeImprimeesADeduire The nb bal agee imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalAgeeImprimeesADeduire($nbBalAgeeImprimeesADeduire) {
        $this->nbBalAgeeImprimeesADeduire = $nbBalAgeeImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb bal agee imprimees fact.
     *
     * @param int $nbBalAgeeImprimeesFact The nb bal agee imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalAgeeImprimeesFact($nbBalAgeeImprimeesFact) {
        $this->nbBalAgeeImprimeesFact = $nbBalAgeeImprimeesFact;
        return $this;
    }

    /**
     * Set the nb bal imprimees.
     *
     * @param int $nbBalImprimees The nb bal imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalImprimees($nbBalImprimees) {
        $this->nbBalImprimees = $nbBalImprimees;
        return $this;
    }

    /**
     * Set the nb bal imprimees a deduire.
     *
     * @param int $nbBalImprimeesADeduire The nb bal imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalImprimeesADeduire($nbBalImprimeesADeduire) {
        $this->nbBalImprimeesADeduire = $nbBalImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb bal imprimees fact.
     *
     * @param int $nbBalImprimeesFact The nb bal imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbBalImprimeesFact($nbBalImprimeesFact) {
        $this->nbBalImprimeesFact = $nbBalImprimeesFact;
        return $this;
    }

    /**
     * Set the nb bilans edites.
     *
     * @param int $nbBilansEdites The nb bilans edites.
     * @return Compteur Returns this compteur.
     */
    public function setNbBilansEdites($nbBilansEdites) {
        $this->nbBilansEdites = $nbBilansEdites;
        return $this;
    }

    /**
     * Set the nb bilans edites a deduire.
     *
     * @param int $nbBilansEditesADeduire The nb bilans edites a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbBilansEditesADeduire($nbBilansEditesADeduire) {
        $this->nbBilansEditesADeduire = $nbBilansEditesADeduire;
        return $this;
    }

    /**
     * Set the nb bilans edites fact.
     *
     * @param int $nbBilansEditesFact The nb bilans edites fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbBilansEditesFact($nbBilansEditesFact) {
        $this->nbBilansEditesFact = $nbBilansEditesFact;
        return $this;
    }

    /**
     * Set the nb cedage edites.
     *
     * @param int $nbCedageEdites The nb cedage edites.
     * @return Compteur Returns this compteur.
     */
    public function setNbCedageEdites($nbCedageEdites) {
        $this->nbCedageEdites = $nbCedageEdites;
        return $this;
    }

    /**
     * Set the nb cedage edites a deduire.
     *
     * @param int $nbCedageEditesADeduire The nb cedage edites a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbCedageEditesADeduire($nbCedageEditesADeduire) {
        $this->nbCedageEditesADeduire = $nbCedageEditesADeduire;
        return $this;
    }

    /**
     * Set the nb cedage edites fact.
     *
     * @param int $nbCedageEditesFact The nb cedage edites fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbCedageEditesFact($nbCedageEditesFact) {
        $this->nbCedageEditesFact = $nbCedageEditesFact;
        return $this;
    }

    /**
     * Set the nb centr imprimees.
     *
     * @param int $nbCentrImprimees The nb centr imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbCentrImprimees($nbCentrImprimees) {
        $this->nbCentrImprimees = $nbCentrImprimees;
        return $this;
    }

    /**
     * Set the nb centr imprimees a deduire.
     *
     * @param int $nbCentrImprimeesADeduire The nb centr imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbCentrImprimeesADeduire($nbCentrImprimeesADeduire) {
        $this->nbCentrImprimeesADeduire = $nbCentrImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb centr imprimees fact.
     *
     * @param int $nbCentrImprimeesFact The nb centr imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbCentrImprimeesFact($nbCentrImprimeesFact) {
        $this->nbCentrImprimeesFact = $nbCentrImprimeesFact;
        return $this;
    }

    /**
     * Set the nb ech imprimees.
     *
     * @param int $nbEchImprimees The nb ech imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbEchImprimees($nbEchImprimees) {
        $this->nbEchImprimees = $nbEchImprimees;
        return $this;
    }

    /**
     * Set the nb ech imprimees a deduire.
     *
     * @param int $nbEchImprimeesADeduire The nb ech imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbEchImprimeesADeduire($nbEchImprimeesADeduire) {
        $this->nbEchImprimeesADeduire = $nbEchImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb ech imprimees fact.
     *
     * @param int $nbEchImprimeesFact The nb ech imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbEchImprimeesFact($nbEchImprimeesFact) {
        $this->nbEchImprimeesFact = $nbEchImprimeesFact;
        return $this;
    }

    /**
     * Set the nb fic a s c i i emis.
     *
     * @param int $nbFicASCIIEmis The nb fic a s c i i emis.
     * @return Compteur Returns this compteur.
     */
    public function setNbFicASCIIEmis($nbFicASCIIEmis) {
        $this->nbFicASCIIEmis = $nbFicASCIIEmis;
        return $this;
    }

    /**
     * Set the nb fic a s c i i emis a deduire.
     *
     * @param int $nbFicASCIIEmisADeduire The nb fic a s c i i emis a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbFicASCIIEmisADeduire($nbFicASCIIEmisADeduire) {
        $this->nbFicASCIIEmisADeduire = $nbFicASCIIEmisADeduire;
        return $this;
    }

    /**
     * Set the nb fic a s c i i emis fact.
     *
     * @param int $nbFicASCIIEmisFact The nb fic a s c i i emis fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbFicASCIIEmisFact($nbFicASCIIEmisFact) {
        $this->nbFicASCIIEmisFact = $nbFicASCIIEmisFact;
        return $this;
    }

    /**
     * Set the nb g l imprimees.
     *
     * @param int $nbGLImprimees The nb g l imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbGLImprimees($nbGLImprimees) {
        $this->nbGLImprimees = $nbGLImprimees;
        return $this;
    }

    /**
     * Set the nb g l imprimees a deduire.
     *
     * @param int $nbGLImprimeesADeduire The nb g l imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbGLImprimeesADeduire($nbGLImprimeesADeduire) {
        $this->nbGLImprimeesADeduire = $nbGLImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb g l imprimees fact.
     *
     * @param int $nbGLImprimeesFact The nb g l imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbGLImprimeesFact($nbGLImprimeesFact) {
        $this->nbGLImprimeesFact = $nbGLImprimeesFact;
        return $this;
    }

    /**
     * Set the nb jrn imprimees.
     *
     * @param int $nbJrnImprimees The nb jrn imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbJrnImprimees($nbJrnImprimees) {
        $this->nbJrnImprimees = $nbJrnImprimees;
        return $this;
    }

    /**
     * Set the nb jrn imprimees a deduire.
     *
     * @param int $nbJrnImprimeesADeduire The nb jrn imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbJrnImprimeesADeduire($nbJrnImprimeesADeduire) {
        $this->nbJrnImprimeesADeduire = $nbJrnImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb jrn imprimees fact.
     *
     * @param int $nbJrnImprimeesFact The nb jrn imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbJrnImprimeesFact($nbJrnImprimeesFact) {
        $this->nbJrnImprimeesFact = $nbJrnImprimeesFact;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees.
     *
     * @param int $nbLiassesFiscEditees The nb liasses fisc editees.
     * @return Compteur Returns this compteur.
     */
    public function setNbLiassesFiscEditees($nbLiassesFiscEditees) {
        $this->nbLiassesFiscEditees = $nbLiassesFiscEditees;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees a deduire.
     *
     * @param int $nbLiassesFiscEditeesADeduire The nb liasses fisc editees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbLiassesFiscEditeesADeduire($nbLiassesFiscEditeesADeduire) {
        $this->nbLiassesFiscEditeesADeduire = $nbLiassesFiscEditeesADeduire;
        return $this;
    }

    /**
     * Set the nb liasses fisc editees fact.
     *
     * @param int $nbLiassesFiscEditeesFact The nb liasses fisc editees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbLiassesFiscEditeesFact($nbLiassesFiscEditeesFact) {
        $this->nbLiassesFiscEditeesFact = $nbLiassesFiscEditeesFact;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees.
     *
     * @param int $nbLigEtebacTraitees The nb lig etebac traitees.
     * @return Compteur Returns this compteur.
     */
    public function setNbLigEtebacTraitees($nbLigEtebacTraitees) {
        $this->nbLigEtebacTraitees = $nbLigEtebacTraitees;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees a deduire.
     *
     * @param int $nbLigEtebacTraiteesADeduire The nb lig etebac traitees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbLigEtebacTraiteesADeduire($nbLigEtebacTraiteesADeduire) {
        $this->nbLigEtebacTraiteesADeduire = $nbLigEtebacTraiteesADeduire;
        return $this;
    }

    /**
     * Set the nb lig etebac traitees fact.
     *
     * @param int $nbLigEtebacTraiteesFact The nb lig etebac traitees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbLigEtebacTraiteesFact($nbLigEtebacTraiteesFact) {
        $this->nbLigEtebacTraiteesFact = $nbLigEtebacTraiteesFact;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees.
     *
     * @param int $nbRelCliImprimees The nb rel cli imprimees.
     * @return Compteur Returns this compteur.
     */
    public function setNbRelCliImprimees($nbRelCliImprimees) {
        $this->nbRelCliImprimees = $nbRelCliImprimees;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees a deduire.
     *
     * @param int $nbRelCliImprimeesADeduire The nb rel cli imprimees a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbRelCliImprimeesADeduire($nbRelCliImprimeesADeduire) {
        $this->nbRelCliImprimeesADeduire = $nbRelCliImprimeesADeduire;
        return $this;
    }

    /**
     * Set the nb rel cli imprimees fact.
     *
     * @param int $nbRelCliImprimeesFact The nb rel cli imprimees fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbRelCliImprimeesFact($nbRelCliImprimeesFact) {
        $this->nbRelCliImprimeesFact = $nbRelCliImprimeesFact;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes.
     *
     * @param int $nbTabAmortImprimes The nb tab amort imprimes.
     * @return Compteur Returns this compteur.
     */
    public function setNbTabAmortImprimes($nbTabAmortImprimes) {
        $this->nbTabAmortImprimes = $nbTabAmortImprimes;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes a deduire.
     *
     * @param int $nbTabAmortImprimesADeduire The nb tab amort imprimes a deduire.
     * @return Compteur Returns this compteur.
     */
    public function setNbTabAmortImprimesADeduire($nbTabAmortImprimesADeduire) {
        $this->nbTabAmortImprimesADeduire = $nbTabAmortImprimesADeduire;
        return $this;
    }

    /**
     * Set the nb tab amort imprimes fact.
     *
     * @param int $nbTabAmortImprimesFact The nb tab amort imprimes fact.
     * @return Compteur Returns this compteur.
     */
    public function setNbTabAmortImprimesFact($nbTabAmortImprimesFact) {
        $this->nbTabAmortImprimesFact = $nbTabAmortImprimesFact;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return Compteur Returns this compteur.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }
}
