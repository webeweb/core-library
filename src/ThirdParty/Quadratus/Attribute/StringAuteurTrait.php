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
 * Auteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAuteurTrait {

    /**
     * Auteur.
     *
     * @var string
     */
    private $auteur;

    /**
     * Get the auteur.
     *
     * @return string Returns the auteur.
     */
    public function getAuteur() {
        return $this->auteur;
    }

    /**
     * Set the auteur.
     *
     * @param string $auteur The auteur.
     */
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }
}
