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
 * Suivi client intitule generic5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric5Trait {

    /**
     * Suivi client intitule generic5.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric5;

    /**
     * Get the suivi client intitule generic5.
     *
     * @return string Returns the suivi client intitule generic5.
     */
    public function getSuiviClientIntituleGeneric5() {
        return $this->suiviClientIntituleGeneric5;
    }

    /**
     * Set the suivi client intitule generic5.
     *
     * @param string $suiviClientIntituleGeneric5 The suivi client intitule generic5.
     */
    public function setSuiviClientIntituleGeneric5($suiviClientIntituleGeneric5) {
        $this->suiviClientIntituleGeneric5 = $suiviClientIntituleGeneric5;
        return $this;
    }
}
