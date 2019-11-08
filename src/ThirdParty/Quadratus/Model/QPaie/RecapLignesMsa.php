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
 * Recap lignes msa.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesMsa {

    /**
     * Adresse msa.
     *
     * @var string
     */
    private $adresseMsa;

    /**
     * C collect.
     *
     * @var string
     */
    private $cCollect;

    /**
     * Code activite.
     *
     * @var string
     */
    private $codeActivite;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Date reglement.
     *
     * @var DateTime|null
     */
    private $dateReglement;

    /**
     * Effectif cice.
     *
     * @var int
     */
    private $effectifCice;

    /**
     * Fait a.
     *
     * @var string
     */
    private $faitA;

    /**
     * Fait le.
     *
     * @var DateTime|null
     */
    private $faitLe;

    /**
     * Fin per.
     *
     * @var DateTime|null
     */
    private $finPer;

    /**
     * Intitule code unite.
     *
     * @var string
     */
    private $intituleCodeUnite;

    /**
     * Liste services.
     *
     * @var string
     */
    private $listeServices;

    /**
     * Mt csg.
     *
     * @var int
     */
    private $mtCsg;

    /**
     * Mt csgrdsrr imp.
     *
     * @var int
     */
    private $mtCsgrdsrrImp;

    /**
     * Mt csgrdsrr non imp.
     *
     * @var int
     */
    private $mtCsgrdsrrNonImp;

    /**
     * Mt elem calcul57.
     *
     * @var int
     */
    private $mtElemCalcul57;

    /**
     * Mt elem calcul58.
     *
     * @var int
     */
    private $mtElemCalcul58;

    /**
     * Mt elem calcul59.
     *
     * @var int
     */
    private $mtElemCalcul59;

    /**
     * Mt elem calcul60.
     *
     * @var int
     */
    private $mtElemCalcul60;

    /**
     * Mt elem calcul61.
     *
     * @var int
     */
    private $mtElemCalcul61;

    /**
     * Mt elem calcul62.
     *
     * @var int
     */
    private $mtElemCalcul62;

    /**
     * Mt elem calcul63.
     *
     * @var int
     */
    private $mtElemCalcul63;

    /**
     * Mt elem calcul65.
     *
     * @var int
     */
    private $mtElemCalcul65;

    /**
     * Mt elem calcul66.
     *
     * @var int
     */
    private $mtElemCalcul66;

    /**
     * Mt elem calcul67.
     *
     * @var int
     */
    private $mtElemCalcul67;

    /**
     * Mt elem calcul68.
     *
     * @var int
     */
    private $mtElemCalcul68;

    /**
     * Mt elem calcul69.
     *
     * @var int
     */
    private $mtElemCalcul69;

    /**
     * Mt elem calcul70.
     *
     * @var int
     */
    private $mtElemCalcul70;

    /**
     * Mt elem calcul71.
     *
     * @var int
     */
    private $mtElemCalcul71;

    /**
     * Mt elem calcul72.
     *
     * @var int
     */
    private $mtElemCalcul72;

    /**
     * Mt elem calcul73.
     *
     * @var int
     */
    private $mtElemCalcul73;

    /**
     * Mt elem calcul74.
     *
     * @var int
     */
    private $mtElemCalcul74;

    /**
     * Mt elem calcul75.
     *
     * @var int
     */
    private $mtElemCalcul75;

    /**
     * Mt elem calcul76.
     *
     * @var int
     */
    private $mtElemCalcul76;

    /**
     * Mt elem calcul77.
     *
     * @var int
     */
    private $mtElemCalcul77;

    /**
     * Mt elem calcul78.
     *
     * @var int
     */
    private $mtElemCalcul78;

    /**
     * Mt elem calcul79.
     *
     * @var int
     */
    private $mtElemCalcul79;

    /**
     * Mt elem calcul97.
     *
     * @var int
     */
    private $mtElemCalcul97;

    /**
     * Mt elem calcul98.
     *
     * @var int
     */
    private $mtElemCalcul98;

    /**
     * Mt tcp.
     *
     * @var int
     */
    private $mtTcp;

    /**
     * Per deb cice.
     *
     * @var DateTime|null
     */
    private $perDebCice;

    /**
     * Per fin cice.
     *
     * @var DateTime|null
     */
    private $perFinCice;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Personne contact.
     *
     * @var string
     */
    private $personneContact;

    /**
     * Prem mois.
     *
     * @var DateTime|null
     */
    private $premMois;

    /**
     * Salaries de.
     *
     * @var string
     */
    private $salariesDe;

    /**
     * Selection service.
     *
     * @var string
     */
    private $selectionService;

    /**
     * Siren.
     *
     * @var string
     */
    private $siren;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Suivi par.
     *
     * @var string
     */
    private $suiviPar;

    /**
     * Tel personne.
     *
     * @var string
     */
    private $telPersonne;

    /**
     * Tri decl msa.
     *
     * @var string
     */
    private $triDeclMsa;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse msa.
     *
     * @return string Returns the adresse msa.
     */
    public function getAdresseMsa() {
        return $this->adresseMsa;
    }

    /**
     * Get the c collect.
     *
     * @return string Returns the c collect.
     */
    public function getCCollect() {
        return $this->cCollect;
    }

    /**
     * Get the code activite.
     *
     * @return string Returns the code activite.
     */
    public function getCodeActivite() {
        return $this->codeActivite;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the date reglement.
     *
     * @return DateTime|null Returns the date reglement.
     */
    public function getDateReglement() {
        return $this->dateReglement;
    }

    /**
     * Get the effectif cice.
     *
     * @return int Returns the effectif cice.
     */
    public function getEffectifCice() {
        return $this->effectifCice;
    }

    /**
     * Get the fait a.
     *
     * @return string Returns the fait a.
     */
    public function getFaitA() {
        return $this->faitA;
    }

    /**
     * Get the fait le.
     *
     * @return DateTime|null Returns the fait le.
     */
    public function getFaitLe() {
        return $this->faitLe;
    }

    /**
     * Get the fin per.
     *
     * @return DateTime|null Returns the fin per.
     */
    public function getFinPer() {
        return $this->finPer;
    }

    /**
     * Get the intitule code unite.
     *
     * @return string Returns the intitule code unite.
     */
    public function getIntituleCodeUnite() {
        return $this->intituleCodeUnite;
    }

    /**
     * Get the liste services.
     *
     * @return string Returns the liste services.
     */
    public function getListeServices() {
        return $this->listeServices;
    }

    /**
     * Get the mt csg.
     *
     * @return int Returns the mt csg.
     */
    public function getMtCsg() {
        return $this->mtCsg;
    }

    /**
     * Get the mt csgrdsrr imp.
     *
     * @return int Returns the mt csgrdsrr imp.
     */
    public function getMtCsgrdsrrImp() {
        return $this->mtCsgrdsrrImp;
    }

    /**
     * Get the mt csgrdsrr non imp.
     *
     * @return int Returns the mt csgrdsrr non imp.
     */
    public function getMtCsgrdsrrNonImp() {
        return $this->mtCsgrdsrrNonImp;
    }

    /**
     * Get the mt elem calcul57.
     *
     * @return int Returns the mt elem calcul57.
     */
    public function getMtElemCalcul57() {
        return $this->mtElemCalcul57;
    }

    /**
     * Get the mt elem calcul58.
     *
     * @return int Returns the mt elem calcul58.
     */
    public function getMtElemCalcul58() {
        return $this->mtElemCalcul58;
    }

    /**
     * Get the mt elem calcul59.
     *
     * @return int Returns the mt elem calcul59.
     */
    public function getMtElemCalcul59() {
        return $this->mtElemCalcul59;
    }

    /**
     * Get the mt elem calcul60.
     *
     * @return int Returns the mt elem calcul60.
     */
    public function getMtElemCalcul60() {
        return $this->mtElemCalcul60;
    }

    /**
     * Get the mt elem calcul61.
     *
     * @return int Returns the mt elem calcul61.
     */
    public function getMtElemCalcul61() {
        return $this->mtElemCalcul61;
    }

    /**
     * Get the mt elem calcul62.
     *
     * @return int Returns the mt elem calcul62.
     */
    public function getMtElemCalcul62() {
        return $this->mtElemCalcul62;
    }

    /**
     * Get the mt elem calcul63.
     *
     * @return int Returns the mt elem calcul63.
     */
    public function getMtElemCalcul63() {
        return $this->mtElemCalcul63;
    }

    /**
     * Get the mt elem calcul65.
     *
     * @return int Returns the mt elem calcul65.
     */
    public function getMtElemCalcul65() {
        return $this->mtElemCalcul65;
    }

    /**
     * Get the mt elem calcul66.
     *
     * @return int Returns the mt elem calcul66.
     */
    public function getMtElemCalcul66() {
        return $this->mtElemCalcul66;
    }

    /**
     * Get the mt elem calcul67.
     *
     * @return int Returns the mt elem calcul67.
     */
    public function getMtElemCalcul67() {
        return $this->mtElemCalcul67;
    }

    /**
     * Get the mt elem calcul68.
     *
     * @return int Returns the mt elem calcul68.
     */
    public function getMtElemCalcul68() {
        return $this->mtElemCalcul68;
    }

    /**
     * Get the mt elem calcul69.
     *
     * @return int Returns the mt elem calcul69.
     */
    public function getMtElemCalcul69() {
        return $this->mtElemCalcul69;
    }

    /**
     * Get the mt elem calcul70.
     *
     * @return int Returns the mt elem calcul70.
     */
    public function getMtElemCalcul70() {
        return $this->mtElemCalcul70;
    }

    /**
     * Get the mt elem calcul71.
     *
     * @return int Returns the mt elem calcul71.
     */
    public function getMtElemCalcul71() {
        return $this->mtElemCalcul71;
    }

    /**
     * Get the mt elem calcul72.
     *
     * @return int Returns the mt elem calcul72.
     */
    public function getMtElemCalcul72() {
        return $this->mtElemCalcul72;
    }

    /**
     * Get the mt elem calcul73.
     *
     * @return int Returns the mt elem calcul73.
     */
    public function getMtElemCalcul73() {
        return $this->mtElemCalcul73;
    }

    /**
     * Get the mt elem calcul74.
     *
     * @return int Returns the mt elem calcul74.
     */
    public function getMtElemCalcul74() {
        return $this->mtElemCalcul74;
    }

    /**
     * Get the mt elem calcul75.
     *
     * @return int Returns the mt elem calcul75.
     */
    public function getMtElemCalcul75() {
        return $this->mtElemCalcul75;
    }

    /**
     * Get the mt elem calcul76.
     *
     * @return int Returns the mt elem calcul76.
     */
    public function getMtElemCalcul76() {
        return $this->mtElemCalcul76;
    }

    /**
     * Get the mt elem calcul77.
     *
     * @return int Returns the mt elem calcul77.
     */
    public function getMtElemCalcul77() {
        return $this->mtElemCalcul77;
    }

    /**
     * Get the mt elem calcul78.
     *
     * @return int Returns the mt elem calcul78.
     */
    public function getMtElemCalcul78() {
        return $this->mtElemCalcul78;
    }

    /**
     * Get the mt elem calcul79.
     *
     * @return int Returns the mt elem calcul79.
     */
    public function getMtElemCalcul79() {
        return $this->mtElemCalcul79;
    }

    /**
     * Get the mt elem calcul97.
     *
     * @return int Returns the mt elem calcul97.
     */
    public function getMtElemCalcul97() {
        return $this->mtElemCalcul97;
    }

    /**
     * Get the mt elem calcul98.
     *
     * @return int Returns the mt elem calcul98.
     */
    public function getMtElemCalcul98() {
        return $this->mtElemCalcul98;
    }

    /**
     * Get the mt tcp.
     *
     * @return int Returns the mt tcp.
     */
    public function getMtTcp() {
        return $this->mtTcp;
    }

    /**
     * Get the per deb cice.
     *
     * @return DateTime|null Returns the per deb cice.
     */
    public function getPerDebCice() {
        return $this->perDebCice;
    }

    /**
     * Get the per fin cice.
     *
     * @return DateTime|null Returns the per fin cice.
     */
    public function getPerFinCice() {
        return $this->perFinCice;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the personne contact.
     *
     * @return string Returns the personne contact.
     */
    public function getPersonneContact() {
        return $this->personneContact;
    }

    /**
     * Get the prem mois.
     *
     * @return DateTime|null Returns the prem mois.
     */
    public function getPremMois() {
        return $this->premMois;
    }

    /**
     * Get the salaries de.
     *
     * @return string Returns the salaries de.
     */
    public function getSalariesDe() {
        return $this->salariesDe;
    }

    /**
     * Get the selection service.
     *
     * @return string Returns the selection service.
     */
    public function getSelectionService() {
        return $this->selectionService;
    }

    /**
     * Get the siren.
     *
     * @return string Returns the siren.
     */
    public function getSiren() {
        return $this->siren;
    }

    /**
     * Get the siret.
     *
     * @return string Returns the siret.
     */
    public function getSiret() {
        return $this->siret;
    }

    /**
     * Get the suivi par.
     *
     * @return string Returns the suivi par.
     */
    public function getSuiviPar() {
        return $this->suiviPar;
    }

    /**
     * Get the tel personne.
     *
     * @return string Returns the tel personne.
     */
    public function getTelPersonne() {
        return $this->telPersonne;
    }

    /**
     * Get the tri decl msa.
     *
     * @return string Returns the tri decl msa.
     */
    public function getTriDeclMsa() {
        return $this->triDeclMsa;
    }

    /**
     * Set the adresse msa.
     *
     * @param string $adresseMsa The adresse msa.
     */
    public function setAdresseMsa($adresseMsa) {
        $this->adresseMsa = $adresseMsa;
        return $this;
    }

    /**
     * Set the c collect.
     *
     * @param string $cCollect The c collect.
     */
    public function setCCollect($cCollect) {
        $this->cCollect = $cCollect;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string $codeActivite The code activite.
     */
    public function setCodeActivite($codeActivite) {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the date reglement.
     *
     * @param DateTime|null $dateReglement The date reglement.
     */
    public function setDateReglement(DateTime $dateReglement = null) {
        $this->dateReglement = $dateReglement;
        return $this;
    }

    /**
     * Set the effectif cice.
     *
     * @param int $effectifCice The effectif cice.
     */
    public function setEffectifCice($effectifCice) {
        $this->effectifCice = $effectifCice;
        return $this;
    }

    /**
     * Set the fait a.
     *
     * @param string $faitA The fait a.
     */
    public function setFaitA($faitA) {
        $this->faitA = $faitA;
        return $this;
    }

    /**
     * Set the fait le.
     *
     * @param DateTime|null $faitLe The fait le.
     */
    public function setFaitLe(DateTime $faitLe = null) {
        $this->faitLe = $faitLe;
        return $this;
    }

    /**
     * Set the fin per.
     *
     * @param DateTime|null $finPer The fin per.
     */
    public function setFinPer(DateTime $finPer = null) {
        $this->finPer = $finPer;
        return $this;
    }

    /**
     * Set the intitule code unite.
     *
     * @param string $intituleCodeUnite The intitule code unite.
     */
    public function setIntituleCodeUnite($intituleCodeUnite) {
        $this->intituleCodeUnite = $intituleCodeUnite;
        return $this;
    }

    /**
     * Set the liste services.
     *
     * @param string $listeServices The liste services.
     */
    public function setListeServices($listeServices) {
        $this->listeServices = $listeServices;
        return $this;
    }

    /**
     * Set the mt csg.
     *
     * @param int $mtCsg The mt csg.
     */
    public function setMtCsg($mtCsg) {
        $this->mtCsg = $mtCsg;
        return $this;
    }

    /**
     * Set the mt csgrdsrr imp.
     *
     * @param int $mtCsgrdsrrImp The mt csgrdsrr imp.
     */
    public function setMtCsgrdsrrImp($mtCsgrdsrrImp) {
        $this->mtCsgrdsrrImp = $mtCsgrdsrrImp;
        return $this;
    }

    /**
     * Set the mt csgrdsrr non imp.
     *
     * @param int $mtCsgrdsrrNonImp The mt csgrdsrr non imp.
     */
    public function setMtCsgrdsrrNonImp($mtCsgrdsrrNonImp) {
        $this->mtCsgrdsrrNonImp = $mtCsgrdsrrNonImp;
        return $this;
    }

    /**
     * Set the mt elem calcul57.
     *
     * @param int $mtElemCalcul57 The mt elem calcul57.
     */
    public function setMtElemCalcul57($mtElemCalcul57) {
        $this->mtElemCalcul57 = $mtElemCalcul57;
        return $this;
    }

    /**
     * Set the mt elem calcul58.
     *
     * @param int $mtElemCalcul58 The mt elem calcul58.
     */
    public function setMtElemCalcul58($mtElemCalcul58) {
        $this->mtElemCalcul58 = $mtElemCalcul58;
        return $this;
    }

    /**
     * Set the mt elem calcul59.
     *
     * @param int $mtElemCalcul59 The mt elem calcul59.
     */
    public function setMtElemCalcul59($mtElemCalcul59) {
        $this->mtElemCalcul59 = $mtElemCalcul59;
        return $this;
    }

    /**
     * Set the mt elem calcul60.
     *
     * @param int $mtElemCalcul60 The mt elem calcul60.
     */
    public function setMtElemCalcul60($mtElemCalcul60) {
        $this->mtElemCalcul60 = $mtElemCalcul60;
        return $this;
    }

    /**
     * Set the mt elem calcul61.
     *
     * @param int $mtElemCalcul61 The mt elem calcul61.
     */
    public function setMtElemCalcul61($mtElemCalcul61) {
        $this->mtElemCalcul61 = $mtElemCalcul61;
        return $this;
    }

    /**
     * Set the mt elem calcul62.
     *
     * @param int $mtElemCalcul62 The mt elem calcul62.
     */
    public function setMtElemCalcul62($mtElemCalcul62) {
        $this->mtElemCalcul62 = $mtElemCalcul62;
        return $this;
    }

    /**
     * Set the mt elem calcul63.
     *
     * @param int $mtElemCalcul63 The mt elem calcul63.
     */
    public function setMtElemCalcul63($mtElemCalcul63) {
        $this->mtElemCalcul63 = $mtElemCalcul63;
        return $this;
    }

    /**
     * Set the mt elem calcul65.
     *
     * @param int $mtElemCalcul65 The mt elem calcul65.
     */
    public function setMtElemCalcul65($mtElemCalcul65) {
        $this->mtElemCalcul65 = $mtElemCalcul65;
        return $this;
    }

    /**
     * Set the mt elem calcul66.
     *
     * @param int $mtElemCalcul66 The mt elem calcul66.
     */
    public function setMtElemCalcul66($mtElemCalcul66) {
        $this->mtElemCalcul66 = $mtElemCalcul66;
        return $this;
    }

    /**
     * Set the mt elem calcul67.
     *
     * @param int $mtElemCalcul67 The mt elem calcul67.
     */
    public function setMtElemCalcul67($mtElemCalcul67) {
        $this->mtElemCalcul67 = $mtElemCalcul67;
        return $this;
    }

    /**
     * Set the mt elem calcul68.
     *
     * @param int $mtElemCalcul68 The mt elem calcul68.
     */
    public function setMtElemCalcul68($mtElemCalcul68) {
        $this->mtElemCalcul68 = $mtElemCalcul68;
        return $this;
    }

    /**
     * Set the mt elem calcul69.
     *
     * @param int $mtElemCalcul69 The mt elem calcul69.
     */
    public function setMtElemCalcul69($mtElemCalcul69) {
        $this->mtElemCalcul69 = $mtElemCalcul69;
        return $this;
    }

    /**
     * Set the mt elem calcul70.
     *
     * @param int $mtElemCalcul70 The mt elem calcul70.
     */
    public function setMtElemCalcul70($mtElemCalcul70) {
        $this->mtElemCalcul70 = $mtElemCalcul70;
        return $this;
    }

    /**
     * Set the mt elem calcul71.
     *
     * @param int $mtElemCalcul71 The mt elem calcul71.
     */
    public function setMtElemCalcul71($mtElemCalcul71) {
        $this->mtElemCalcul71 = $mtElemCalcul71;
        return $this;
    }

    /**
     * Set the mt elem calcul72.
     *
     * @param int $mtElemCalcul72 The mt elem calcul72.
     */
    public function setMtElemCalcul72($mtElemCalcul72) {
        $this->mtElemCalcul72 = $mtElemCalcul72;
        return $this;
    }

    /**
     * Set the mt elem calcul73.
     *
     * @param int $mtElemCalcul73 The mt elem calcul73.
     */
    public function setMtElemCalcul73($mtElemCalcul73) {
        $this->mtElemCalcul73 = $mtElemCalcul73;
        return $this;
    }

    /**
     * Set the mt elem calcul74.
     *
     * @param int $mtElemCalcul74 The mt elem calcul74.
     */
    public function setMtElemCalcul74($mtElemCalcul74) {
        $this->mtElemCalcul74 = $mtElemCalcul74;
        return $this;
    }

    /**
     * Set the mt elem calcul75.
     *
     * @param int $mtElemCalcul75 The mt elem calcul75.
     */
    public function setMtElemCalcul75($mtElemCalcul75) {
        $this->mtElemCalcul75 = $mtElemCalcul75;
        return $this;
    }

    /**
     * Set the mt elem calcul76.
     *
     * @param int $mtElemCalcul76 The mt elem calcul76.
     */
    public function setMtElemCalcul76($mtElemCalcul76) {
        $this->mtElemCalcul76 = $mtElemCalcul76;
        return $this;
    }

    /**
     * Set the mt elem calcul77.
     *
     * @param int $mtElemCalcul77 The mt elem calcul77.
     */
    public function setMtElemCalcul77($mtElemCalcul77) {
        $this->mtElemCalcul77 = $mtElemCalcul77;
        return $this;
    }

    /**
     * Set the mt elem calcul78.
     *
     * @param int $mtElemCalcul78 The mt elem calcul78.
     */
    public function setMtElemCalcul78($mtElemCalcul78) {
        $this->mtElemCalcul78 = $mtElemCalcul78;
        return $this;
    }

    /**
     * Set the mt elem calcul79.
     *
     * @param int $mtElemCalcul79 The mt elem calcul79.
     */
    public function setMtElemCalcul79($mtElemCalcul79) {
        $this->mtElemCalcul79 = $mtElemCalcul79;
        return $this;
    }

    /**
     * Set the mt elem calcul97.
     *
     * @param int $mtElemCalcul97 The mt elem calcul97.
     */
    public function setMtElemCalcul97($mtElemCalcul97) {
        $this->mtElemCalcul97 = $mtElemCalcul97;
        return $this;
    }

    /**
     * Set the mt elem calcul98.
     *
     * @param int $mtElemCalcul98 The mt elem calcul98.
     */
    public function setMtElemCalcul98($mtElemCalcul98) {
        $this->mtElemCalcul98 = $mtElemCalcul98;
        return $this;
    }

    /**
     * Set the mt tcp.
     *
     * @param int $mtTcp The mt tcp.
     */
    public function setMtTcp($mtTcp) {
        $this->mtTcp = $mtTcp;
        return $this;
    }

    /**
     * Set the per deb cice.
     *
     * @param DateTime|null $perDebCice The per deb cice.
     */
    public function setPerDebCice(DateTime $perDebCice = null) {
        $this->perDebCice = $perDebCice;
        return $this;
    }

    /**
     * Set the per fin cice.
     *
     * @param DateTime|null $perFinCice The per fin cice.
     */
    public function setPerFinCice(DateTime $perFinCice = null) {
        $this->perFinCice = $perFinCice;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the personne contact.
     *
     * @param string $personneContact The personne contact.
     */
    public function setPersonneContact($personneContact) {
        $this->personneContact = $personneContact;
        return $this;
    }

    /**
     * Set the prem mois.
     *
     * @param DateTime|null $premMois The prem mois.
     */
    public function setPremMois(DateTime $premMois = null) {
        $this->premMois = $premMois;
        return $this;
    }

    /**
     * Set the salaries de.
     *
     * @param string $salariesDe The salaries de.
     */
    public function setSalariesDe($salariesDe) {
        $this->salariesDe = $salariesDe;
        return $this;
    }

    /**
     * Set the selection service.
     *
     * @param string $selectionService The selection service.
     */
    public function setSelectionService($selectionService) {
        $this->selectionService = $selectionService;
        return $this;
    }

    /**
     * Set the siren.
     *
     * @param string $siren The siren.
     */
    public function setSiren($siren) {
        $this->siren = $siren;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the suivi par.
     *
     * @param string $suiviPar The suivi par.
     */
    public function setSuiviPar($suiviPar) {
        $this->suiviPar = $suiviPar;
        return $this;
    }

    /**
     * Set the tel personne.
     *
     * @param string $telPersonne The tel personne.
     */
    public function setTelPersonne($telPersonne) {
        $this->telPersonne = $telPersonne;
        return $this;
    }

    /**
     * Set the tri decl msa.
     *
     * @param string $triDeclMsa The tri decl msa.
     */
    public function setTriDeclMsa($triDeclMsa) {
        $this->triDeclMsa = $triDeclMsa;
        return $this;
    }
}
