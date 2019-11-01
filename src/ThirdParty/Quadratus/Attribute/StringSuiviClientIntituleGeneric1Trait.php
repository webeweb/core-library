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
 * Suivi client intitule generic1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviClientIntituleGeneric1Trait {

    /**
     * Suivi client intitule generic1.
     *
     * @var string
     */
    private $suiviClientIntituleGeneric1;

    /**
     * Get the suivi client intitule generic1.
     *
     * @return string Returns the suivi client intitule generic1.
     */
    public function getSuiviClientIntituleGeneric1() {
        return $this->suiviClientIntituleGeneric1;
    }

    /**
     * Set the suivi client intitule generic1.
     *
     * @param string $suiviClientIntituleGeneric1 The suivi client intitule generic1.
     */
    public function setSuiviClientIntituleGeneric1($suiviClientIntituleGeneric1) {
        $this->suiviClientIntituleGeneric1 = $suiviClientIntituleGeneric1;
        return $this;
    }
}
