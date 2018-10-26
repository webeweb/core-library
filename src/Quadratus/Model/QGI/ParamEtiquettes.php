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
 * Param etiquettes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ParamEtiquettes {

	/**
	 * Avec code barre.
	 *
	 * @var boolean
	 */
	private $avecCodeBarre;

	/**
	 * Avec prix vente.
	 *
	 * @var boolean
	 */
	private $avecPrixVente;

	/**
	 * Code modele.
	 *
	 * @var string
	 */
	private $codeModele;

	/**
	 * Etiq de front.
	 *
	 * @var int
	 */
	private $etiqDeFront;

	/**
	 * Etiq masque.
	 *
	 * @var boolean
	 */
	private $etiqMasque;

	/**
	 * Etiq plus.
	 *
	 * @var boolean
	 */
	private $etiqPlus;

	/**
	 * Imprimante.
	 *
	 * @var string
	 */
	private $imprimante;

	/**
	 * Init champ.
	 *
	 * @var string
	 */
	private $initChamp;

	/**
	 * Init table.
	 *
	 * @var string
	 */
	private $initTable;

	/**
	 * Init valeur.
	 *
	 * @var string
	 */
	private $initValeur;

	/**
	 * Lg zone.
	 *
	 * @var string
	 */
	private $lgZone;

	/**
	 * Lib zone.
	 *
	 * @var string
	 */
	private $libZone;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Numero ligne.
	 *
	 * @var int
	 */
	private $numeroLigne;

	/**
	 * Qte ent.
	 *
	 * @var boolean
	 */
	private $qteEnt;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the avec code barre.
	 *
	 * @return boolean Returns the avec code barre.
	 */
	public function getAvecCodeBarre() {
		return $this->avecCodeBarre;
	}

	/**
	 * Get the avec prix vente.
	 *
	 * @return boolean Returns the avec prix vente.
	 */
	public function getAvecPrixVente() {
		return $this->avecPrixVente;
	}

	/**
	 * Get the code modele.
	 *
	 * @return string Returns the code modele.
	 */
	public function getCodeModele() {
		return $this->codeModele;
	}

	/**
	 * Get the etiq de front.
	 *
	 * @return int Returns the etiq de front.
	 */
	public function getEtiqDeFront() {
		return $this->etiqDeFront;
	}

	/**
	 * Get the etiq masque.
	 *
	 * @return boolean Returns the etiq masque.
	 */
	public function getEtiqMasque() {
		return $this->etiqMasque;
	}

	/**
	 * Get the etiq plus.
	 *
	 * @return boolean Returns the etiq plus.
	 */
	public function getEtiqPlus() {
		return $this->etiqPlus;
	}

	/**
	 * Get the imprimante.
	 *
	 * @return string Returns the imprimante.
	 */
	public function getImprimante() {
		return $this->imprimante;
	}

	/**
	 * Get the init champ.
	 *
	 * @return string Returns the init champ.
	 */
	public function getInitChamp() {
		return $this->initChamp;
	}

	/**
	 * Get the init table.
	 *
	 * @return string Returns the init table.
	 */
	public function getInitTable() {
		return $this->initTable;
	}

	/**
	 * Get the init valeur.
	 *
	 * @return string Returns the init valeur.
	 */
	public function getInitValeur() {
		return $this->initValeur;
	}

	/**
	 * Get the lg zone.
	 *
	 * @return string Returns the lg zone.
	 */
	public function getLgZone() {
		return $this->lgZone;
	}

	/**
	 * Get the lib zone.
	 *
	 * @return string Returns the lib zone.
	 */
	public function getLibZone() {
		return $this->libZone;
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
	 * Get the numero ligne.
	 *
	 * @return int Returns the numero ligne.
	 */
	public function getNumeroLigne() {
		return $this->numeroLigne;
	}

	/**
	 * Get the qte ent.
	 *
	 * @return boolean Returns the qte ent.
	 */
	public function getQteEnt() {
		return $this->qteEnt;
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
	 * Set the avec code barre.
	 *
	 * @param boolean $avecCodeBarre The avec code barre.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setAvecCodeBarre($avecCodeBarre) {
		$this->avecCodeBarre = $avecCodeBarre;
		return $this;
	}

	/**
	 * Set the avec prix vente.
	 *
	 * @param boolean $avecPrixVente The avec prix vente.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setAvecPrixVente($avecPrixVente) {
		$this->avecPrixVente = $avecPrixVente;
		return $this;
	}

	/**
	 * Set the code modele.
	 *
	 * @param string $codeModele The code modele.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setCodeModele($codeModele) {
		$this->codeModele = $codeModele;
		return $this;
	}

	/**
	 * Set the etiq de front.
	 *
	 * @param int $etiqDeFront The etiq de front.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setEtiqDeFront($etiqDeFront) {
		$this->etiqDeFront = $etiqDeFront;
		return $this;
	}

	/**
	 * Set the etiq masque.
	 *
	 * @param boolean $etiqMasque The etiq masque.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setEtiqMasque($etiqMasque) {
		$this->etiqMasque = $etiqMasque;
		return $this;
	}

	/**
	 * Set the etiq plus.
	 *
	 * @param boolean $etiqPlus The etiq plus.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setEtiqPlus($etiqPlus) {
		$this->etiqPlus = $etiqPlus;
		return $this;
	}

	/**
	 * Set the imprimante.
	 *
	 * @param string $imprimante The imprimante.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setImprimante($imprimante) {
		$this->imprimante = $imprimante;
		return $this;
	}

	/**
	 * Set the init champ.
	 *
	 * @param string $initChamp The init champ.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setInitChamp($initChamp) {
		$this->initChamp = $initChamp;
		return $this;
	}

	/**
	 * Set the init table.
	 *
	 * @param string $initTable The init table.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setInitTable($initTable) {
		$this->initTable = $initTable;
		return $this;
	}

	/**
	 * Set the init valeur.
	 *
	 * @param string $initValeur The init valeur.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setInitValeur($initValeur) {
		$this->initValeur = $initValeur;
		return $this;
	}

	/**
	 * Set the lg zone.
	 *
	 * @param string $lgZone The lg zone.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setLgZone($lgZone) {
		$this->lgZone = $lgZone;
		return $this;
	}

	/**
	 * Set the lib zone.
	 *
	 * @param string $libZone The lib zone.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setLibZone($libZone) {
		$this->libZone = $libZone;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the numero ligne.
	 *
	 * @param int $numeroLigne The numero ligne.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setNumeroLigne($numeroLigne) {
		$this->numeroLigne = $numeroLigne;
		return $this;
	}

	/**
	 * Set the qte ent.
	 *
	 * @param boolean $qteEnt The qte ent.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setQteEnt($qteEnt) {
		$this->qteEnt = $qteEnt;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return ParamEtiquettes Returns this param etiquettes.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
