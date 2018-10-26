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


/**
 * R g_ profils model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class RG_Profils {

	/**
	 * Fichiers_ move.
	 *
	 * @var string
	 */
	private $fichiers_Move;

	/**
	 * Fichiers_ publier web.
	 *
	 * @var string
	 */
	private $fichiers_PublierWeb;

	/**
	 * Niveau_ maxi.
	 *
	 * @var string
	 */
	private $niveau_Maxi;

	/**
	 * Niveau_ supplementaire_libelle.
	 *
	 * @var boolean
	 */
	private $niveau_Supplementaire_libelle;

	/**
	 * Path.
	 *
	 * @var string
	 */
	private $path;

	/**
	 * Path_ format.
	 *
	 * @var string
	 */
	private $path_Format;

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
	 * Get the fichiers_ move.
	 *
	 * @return string Returns the fichiers_ move.
	 */
	public function getFichiers_Move() {
		return $this->fichiers_Move;
	}

	/**
	 * Get the fichiers_ publier web.
	 *
	 * @return string Returns the fichiers_ publier web.
	 */
	public function getFichiers_PublierWeb() {
		return $this->fichiers_PublierWeb;
	}

	/**
	 * Get the niveau_ maxi.
	 *
	 * @return string Returns the niveau_ maxi.
	 */
	public function getNiveau_Maxi() {
		return $this->niveau_Maxi;
	}

	/**
	 * Get the niveau_ supplementaire_libelle.
	 *
	 * @return boolean Returns the niveau_ supplementaire_libelle.
	 */
	public function getNiveau_Supplementaire_libelle() {
		return $this->niveau_Supplementaire_libelle;
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
	 * Get the path_ format.
	 *
	 * @return string Returns the path_ format.
	 */
	public function getPath_Format() {
		return $this->path_Format;
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
	 * Set the fichiers_ move.
	 *
	 * @param string $fichiers_Move The fichiers_ move.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setFichiers_Move($fichiers_Move) {
		$this->fichiers_Move = $fichiers_Move;
		return $this;
	}

	/**
	 * Set the fichiers_ publier web.
	 *
	 * @param string $fichiers_PublierWeb The fichiers_ publier web.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setFichiers_PublierWeb($fichiers_PublierWeb) {
		$this->fichiers_PublierWeb = $fichiers_PublierWeb;
		return $this;
	}

	/**
	 * Set the niveau_ maxi.
	 *
	 * @param string $niveau_Maxi The niveau_ maxi.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setNiveau_Maxi($niveau_Maxi) {
		$this->niveau_Maxi = $niveau_Maxi;
		return $this;
	}

	/**
	 * Set the niveau_ supplementaire_libelle.
	 *
	 * @param boolean $niveau_Supplementaire_libelle The niveau_ supplementaire_libelle.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setNiveau_Supplementaire_libelle($niveau_Supplementaire_libelle) {
		$this->niveau_Supplementaire_libelle = $niveau_Supplementaire_libelle;
		return $this;
	}

	/**
	 * Set the path.
	 *
	 * @param string $path The path.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setPath($path) {
		$this->path = $path;
		return $this;
	}

	/**
	 * Set the path_ format.
	 *
	 * @param string $path_Format The path_ format.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setPath_Format($path_Format) {
		$this->path_Format = $path_Format;
		return $this;
	}

	/**
	 * Set the uniq i d.
	 *
	 * @param string $uniqID The uniq i d.
	 * @return RG_Profils Returns this r g_ profils.
	 */
	public function setUniqID($uniqID) {
		$this->uniqID = $uniqID;
		return $this;
	}

}
