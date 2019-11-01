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
 * Superviseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuperviseurTrait {

    /**
     * Superviseur.
     *
     * @var bool
     */
    private $superviseur;

    /**
     * Get the superviseur.
     *
     * @return bool Returns the superviseur.
     */
    public function getSuperviseur() {
        return $this->superviseur;
    }

    /**
     * Set the superviseur.
     *
     * @param bool $superviseur The superviseur.
     */
    public function setSuperviseur($superviseur) {
        $this->superviseur = $superviseur;
        return $this;
    }
}
