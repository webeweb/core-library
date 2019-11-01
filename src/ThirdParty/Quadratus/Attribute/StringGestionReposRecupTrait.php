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
 * Gestion repos recup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionReposRecupTrait {

    /**
     * Gestion repos recup.
     *
     * @var string
     */
    private $gestionReposRecup;

    /**
     * Get the gestion repos recup.
     *
     * @return string Returns the gestion repos recup.
     */
    public function getGestionReposRecup() {
        return $this->gestionReposRecup;
    }

    /**
     * Set the gestion repos recup.
     *
     * @param string $gestionReposRecup The gestion repos recup.
     */
    public function setGestionReposRecup($gestionReposRecup) {
        $this->gestionReposRecup = $gestionReposRecup;
        return $this;
    }
}
