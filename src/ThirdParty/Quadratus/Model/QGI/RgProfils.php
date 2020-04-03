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

/**
 * Rg profils.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class RgProfils {

    /**
     * Fichiers move.
     *
     * @var string
     */
    private $fichiersMove;

    /**
     * Fichiers publier web.
     *
     * @var string
     */
    private $fichiersPublierWeb;

    /**
     * Niveau maxi.
     *
     * @var string
     */
    private $niveauMaxi;

    /**
     * Niveau supplementairelibelle.
     *
     * @var bool
     */
    private $niveauSupplementairelibelle;

    /**
     * Path.
     *
     * @var string
     */
    private $path;

    /**
     * Path format.
     *
     * @var string
     */
    private $pathFormat;

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
     * Get the fichiers move.
     *
     * @return string Returns the fichiers move.
     */
    public function getFichiersMove() {
        return $this->fichiersMove;
    }

    /**
     * Get the fichiers publier web.
     *
     * @return string Returns the fichiers publier web.
     */
    public function getFichiersPublierWeb() {
        return $this->fichiersPublierWeb;
    }

    /**
     * Get the niveau maxi.
     *
     * @return string Returns the niveau maxi.
     */
    public function getNiveauMaxi() {
        return $this->niveauMaxi;
    }

    /**
     * Get the niveau supplementairelibelle.
     *
     * @return bool Returns the niveau supplementairelibelle.
     */
    public function getNiveauSupplementairelibelle() {
        return $this->niveauSupplementairelibelle;
    }

    /**
     * Get the path.
     *
     * @return string Returns the path.
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Get the path format.
     *
     * @return string Returns the path format.
     */
    public function getPathFormat() {
        return $this->pathFormat;
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
     * Set the fichiers move.
     *
     * @param string $fichiersMove The fichiers move.
     * @return RgProfils Returns this Rg profils.
     */
    public function setFichiersMove($fichiersMove) {
        $this->fichiersMove = $fichiersMove;
        return $this;
    }

    /**
     * Set the fichiers publier web.
     *
     * @param string $fichiersPublierWeb The fichiers publier web.
     * @return RgProfils Returns this Rg profils.
     */
    public function setFichiersPublierWeb($fichiersPublierWeb) {
        $this->fichiersPublierWeb = $fichiersPublierWeb;
        return $this;
    }

    /**
     * Set the niveau maxi.
     *
     * @param string $niveauMaxi The niveau maxi.
     * @return RgProfils Returns this Rg profils.
     */
    public function setNiveauMaxi($niveauMaxi) {
        $this->niveauMaxi = $niveauMaxi;
        return $this;
    }

    /**
     * Set the niveau supplementairelibelle.
     *
     * @param bool $niveauSupplementairelibelle The niveau supplementairelibelle.
     * @return RgProfils Returns this Rg profils.
     */
    public function setNiveauSupplementairelibelle($niveauSupplementairelibelle) {
        $this->niveauSupplementairelibelle = $niveauSupplementairelibelle;
        return $this;
    }

    /**
     * Set the path.
     *
     * @param string $path The path.
     * @return RgProfils Returns this Rg profils.
     */
    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    /**
     * Set the path format.
     *
     * @param string $pathFormat The path format.
     * @return RgProfils Returns this Rg profils.
     */
    public function setPathFormat($pathFormat) {
        $this->pathFormat = $pathFormat;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string $uniqId The uniq id.
     * @return RgProfils Returns this Rg profils.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }
}
