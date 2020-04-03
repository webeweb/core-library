<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Photos.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Photos {

    /**
     * A publier espace client.
     *
     * @var bool
     */
    private $aPublierEspaceClient;

    /**
     * Auteur.
     *
     * @var string
     */
    private $auteur;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Nom fichier id.
     *
     * @var string
     */
    private $nomFichierId;

    /**
     * Type id.
     *
     * @var string
     */
    private $typeId;

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
     * Get the a publier espace client.
     *
     * @return bool Returns the a publier espace client.
     */
    public function getAPublierEspaceClient() {
        return $this->aPublierEspaceClient;
    }

    /**
     * Get the auteur.
     *
     * @return string Returns the auteur.
     */
    public function getAuteur() {
        return $this->auteur;
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
     * Get the nom fichier id.
     *
     * @return string Returns the nom fichier id.
     */
    public function getNomFichierId() {
        return $this->nomFichierId;
    }

    /**
     * Get the type id.
     *
     * @return string Returns the type id.
     */
    public function getTypeId() {
        return $this->typeId;
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
     * Set the a publier espace client.
     *
     * @param bool $aPublierEspaceClient The a publier espace client.
     * @return Photos Returns this Photos.
     */
    public function setAPublierEspaceClient($aPublierEspaceClient) {
        $this->aPublierEspaceClient = $aPublierEspaceClient;
        return $this;
    }

    /**
     * Set the auteur.
     *
     * @param string $auteur The auteur.
     * @return Photos Returns this Photos.
     */
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return Photos Returns this Photos.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the nom fichier id.
     *
     * @param string $nomFichierId The nom fichier id.
     * @return Photos Returns this Photos.
     */
    public function setNomFichierId($nomFichierId) {
        $this->nomFichierId = $nomFichierId;
        return $this;
    }

    /**
     * Set the type id.
     *
     * @param string $typeId The type id.
     * @return Photos Returns this Photos.
     */
    public function setTypeId($typeId) {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return Photos Returns this Photos.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
