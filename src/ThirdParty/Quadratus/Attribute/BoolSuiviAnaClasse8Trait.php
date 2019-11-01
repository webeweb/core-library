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
 * Suivi ana classe8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse8Trait {

    /**
     * Suivi ana classe8.
     *
     * @var bool
     */
    private $suiviAnaClasse8;

    /**
     * Get the suivi ana classe8.
     *
     * @return bool Returns the suivi ana classe8.
     */
    public function getSuiviAnaClasse8() {
        return $this->suiviAnaClasse8;
    }

    /**
     * Set the suivi ana classe8.
     *
     * @param bool $suiviAnaClasse8 The suivi ana classe8.
     */
    public function setSuiviAnaClasse8($suiviAnaClasse8) {
        $this->suiviAnaClasse8 = $suiviAnaClasse8;
        return $this;
    }
}
