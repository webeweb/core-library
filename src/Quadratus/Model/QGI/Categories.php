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
 * Categories model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Categories {

    /**
     * Car tec.
     *
     * @var string
     */
    private $carTec;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Parent.
     *
     * @var string
     */
    private $parent;

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
     * Get the car tec.
     *
     * @return string Returns the car tec.
     */
    public function getCarTec() {
        return $this->carTec;
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
     * Get the parent.
     *
     * @return string Returns the parent.
     */
    public function getParent() {
        return $this->parent;
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
     * Set the car tec.
     *
     * @param string $carTec The car tec.
     * @return Categories Returns this categories.
     */
    public function setCarTec($carTec) {
        $this->carTec = $carTec;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Categories Returns this categories.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param string $parent The parent.
     * @return Categories Returns this categories.
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Categories Returns this categories.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

}
