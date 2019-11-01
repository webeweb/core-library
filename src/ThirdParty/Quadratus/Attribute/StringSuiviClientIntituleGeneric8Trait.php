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
 * Suivi client intitule generic8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric8Trait {

    /**
     * Suivi client intitule generic8.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric8;

    /**
     * Get the suivi client intitule generic8.
     *
     * @return string Returns the suivi client intitule generic8.
     */
    public function getSuiviClientIntituleGeneric8() {
        return $this->suiviClientIntituleGeneric8;
    }

    /**
     * Set the suivi client intitule generic8.
     *
     * @param string $suiviClientIntituleGeneric8 The suivi client intitule generic8.
     */
    public function setSuiviClientIntituleGeneric8($suiviClientIntituleGeneric8) {
        $this->suiviClientIntituleGeneric8 = $suiviClientIntituleGeneric8;
        return $this;
    }
}
