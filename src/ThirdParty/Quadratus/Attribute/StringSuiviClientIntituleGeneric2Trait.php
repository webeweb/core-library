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
 * Suivi client intitule generic2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric2Trait {

    /**
     * Suivi client intitule generic2.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric2;

    /**
     * Get the suivi client intitule generic2.
     *
     * @return string Returns the suivi client intitule generic2.
     */
    public function getSuiviClientIntituleGeneric2() {
        return $this->suiviClientIntituleGeneric2;
    }

    /**
     * Set the suivi client intitule generic2.
     *
     * @param string $suiviClientIntituleGeneric2 The suivi client intitule generic2.
     */
    public function setSuiviClientIntituleGeneric2($suiviClientIntituleGeneric2) {
        $this->suiviClientIntituleGeneric2 = $suiviClientIntituleGeneric2;
        return $this;
    }
}
