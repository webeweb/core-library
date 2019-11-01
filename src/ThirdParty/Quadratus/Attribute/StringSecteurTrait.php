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
 * Secteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSecteurTrait {

    /**
     * Secteur.
     *
     * @var string
     */
    private $secteur;

    /**
     * Get the secteur.
     *
     * @return string Returns the secteur.
     */
    public function getSecteur() {
        return $this->secteur;
    }

    /**
     * Set the secteur.
     *
     * @param string $secteur The secteur.
     */
    public function setSecteur($secteur) {
        $this->secteur = $secteur;
        return $this;
    }
}
