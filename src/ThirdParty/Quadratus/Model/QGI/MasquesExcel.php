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
 * Masques excel model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class MasquesExcel {

    /**
     * Modele.
     *
     * @var string
     */
    private $modele;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Type masque.
     *
     * @var string
     */
    private $typeMasque;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the modele.
     *
     * @return string Returns the modele.
     */
    public function getModele() {
        return $this->modele;
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
     * Get the type masque.
     *
     * @return string Returns the type masque.
     */
    public function getTypeMasque() {
        return $this->typeMasque;
    }

    /**
     * Set the modele.
     *
     * @param string $modele The modele.
     * @return MasquesExcel Returns this masques excel.
     */
    public function setModele($modele) {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return MasquesExcel Returns this masques excel.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Set the type masque.
     *
     * @param string $typeMasque The type masque.
     * @return MasquesExcel Returns this masques excel.
     */
    public function setTypeMasque($typeMasque) {
        $this->typeMasque = $typeMasque;
        return $this;
    }
}
