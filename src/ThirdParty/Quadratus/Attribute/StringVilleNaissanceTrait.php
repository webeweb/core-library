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
 * Ville naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVilleNaissanceTrait {

    /**
     * Ville naissance.
     *
     * @var string
     */
    private $villeNaissance;

    /**
     * Get the ville naissance.
     *
     * @return string Returns the ville naissance.
     */
    public function getVilleNaissance() {
        return $this->villeNaissance;
    }

    /**
     * Set the ville naissance.
     *
     * @param string $villeNaissance The ville naissance.
     */
    public function setVilleNaissance($villeNaissance) {
        $this->villeNaissance = $villeNaissance;
        return $this;
    }
}
