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
 * Suivi client intitule generic4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric4Trait {

    /**
     * Suivi client intitule generic4.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric4;

    /**
     * Get the suivi client intitule generic4.
     *
     * @return string Returns the suivi client intitule generic4.
     */
    public function getSuiviClientIntituleGeneric4() {
        return $this->suiviClientIntituleGeneric4;
    }

    /**
     * Set the suivi client intitule generic4.
     *
     * @param string $suiviClientIntituleGeneric4 The suivi client intitule generic4.
     */
    public function setSuiviClientIntituleGeneric4($suiviClientIntituleGeneric4) {
        $this->suiviClientIntituleGeneric4 = $suiviClientIntituleGeneric4;
        return $this;
    }
}
