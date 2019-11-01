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
 * Adresse ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseVilleTrait {

    /**
     * Adresse ville.
     *
     * @var string
     */
    private $adresseVille;

    /**
     * Get the adresse ville.
     *
     * @return string Returns the adresse ville.
     */
    public function getAdresseVille() {
        return $this->adresseVille;
    }

    /**
     * Set the adresse ville.
     *
     * @param string $adresseVille The adresse ville.
     */
    public function setAdresseVille($adresseVille) {
        $this->adresseVille = $adresseVille;
        return $this;
    }
}
