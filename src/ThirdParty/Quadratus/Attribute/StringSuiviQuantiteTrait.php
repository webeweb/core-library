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
 * Suivi quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviQuantiteTrait {

    /**
     * Suivi quantite.
     *
     * @var string
     */
    private $suiviQuantite;

    /**
     * Get the suivi quantite.
     *
     * @return string Returns the suivi quantite.
     */
    public function getSuiviQuantite() {
        return $this->suiviQuantite;
    }

    /**
     * Set the suivi quantite.
     *
     * @param string $suiviQuantite The suivi quantite.
     */
    public function setSuiviQuantite($suiviQuantite) {
        $this->suiviQuantite = $suiviQuantite;
        return $this;
    }
}
