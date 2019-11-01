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
 * Commune naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommuneNaissanceTrait {

    /**
     * Commune naissance.
     *
     * @var string
     */
    private $communeNaissance;

    /**
     * Get the commune naissance.
     *
     * @return string Returns the commune naissance.
     */
    public function getCommuneNaissance() {
        return $this->communeNaissance;
    }

    /**
     * Set the commune naissance.
     *
     * @param string $communeNaissance The commune naissance.
     */
    public function setCommuneNaissance($communeNaissance) {
        $this->communeNaissance = $communeNaissance;
        return $this;
    }
}
