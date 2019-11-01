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
 * Suivi ana classe9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse9Trait {

    /**
     * Suivi ana classe9.
     *
     * @var bool
     */
    private $suiviAnaClasse9;

    /**
     * Get the suivi ana classe9.
     *
     * @return bool Returns the suivi ana classe9.
     */
    public function getSuiviAnaClasse9() {
        return $this->suiviAnaClasse9;
    }

    /**
     * Set the suivi ana classe9.
     *
     * @param bool $suiviAnaClasse9 The suivi ana classe9.
     */
    public function setSuiviAnaClasse9($suiviAnaClasse9) {
        $this->suiviAnaClasse9 = $suiviAnaClasse9;
        return $this;
    }
}
