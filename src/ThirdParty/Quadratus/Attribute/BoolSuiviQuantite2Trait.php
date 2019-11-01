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
 * Suivi quantite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviQuantite2Trait {

    /**
     * Suivi quantite2.
     *
     * @var bool
     */
    private $suiviQuantite2;

    /**
     * Get the suivi quantite2.
     *
     * @return bool Returns the suivi quantite2.
     */
    public function getSuiviQuantite2() {
        return $this->suiviQuantite2;
    }

    /**
     * Set the suivi quantite2.
     *
     * @param bool $suiviQuantite2 The suivi quantite2.
     */
    public function setSuiviQuantite2($suiviQuantite2) {
        $this->suiviQuantite2 = $suiviQuantite2;
        return $this;
    }
}
