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
 * Livreur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLivreurTrait {

    /**
     * Livreur.
     *
     * @var bool
     */
    private $livreur;

    /**
     * Get the livreur.
     *
     * @return bool Returns the livreur.
     */
    public function getLivreur() {
        return $this->livreur;
    }

    /**
     * Set the livreur.
     *
     * @param bool $livreur The livreur.
     */
    public function setLivreur($livreur) {
        $this->livreur = $livreur;
        return $this;
    }
}
