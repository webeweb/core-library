<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Inspecteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInspecteurTrait {

    /**
     * Inspecteur.
     *
     * @var bool
     */
    private $inspecteur;

    /**
     * Get the inspecteur.
     *
     * @return bool Returns the inspecteur.
     */
    public function getInspecteur() {
        return $this->inspecteur;
    }

    /**
     * Set the inspecteur.
     *
     * @param bool $inspecteur The inspecteur.
     */
    public function setInspecteur($inspecteur) {
        $this->inspecteur = $inspecteur;
        return $this;
    }
}
