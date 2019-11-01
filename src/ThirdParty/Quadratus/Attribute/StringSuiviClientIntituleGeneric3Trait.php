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
 * Suivi client intitule generic3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric3Trait {

    /**
     * Suivi client intitule generic3.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric3;

    /**
     * Get the suivi client intitule generic3.
     *
     * @return string Returns the suivi client intitule generic3.
     */
    public function getSuiviClientIntituleGeneric3() {
        return $this->suiviClientIntituleGeneric3;
    }

    /**
     * Set the suivi client intitule generic3.
     *
     * @param string $suiviClientIntituleGeneric3 The suivi client intitule generic3.
     */
    public function setSuiviClientIntituleGeneric3($suiviClientIntituleGeneric3) {
        $this->suiviClientIntituleGeneric3 = $suiviClientIntituleGeneric3;
        return $this;
    }
}
