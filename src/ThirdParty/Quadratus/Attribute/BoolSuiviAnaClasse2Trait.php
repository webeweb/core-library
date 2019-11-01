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
 * Suivi ana classe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse2Trait {

    /**
     * Suivi ana classe2.
     *
     * @var bool
     */
    private $suiviAnaClasse2;

    /**
     * Get the suivi ana classe2.
     *
     * @return bool Returns the suivi ana classe2.
     */
    public function getSuiviAnaClasse2() {
        return $this->suiviAnaClasse2;
    }

    /**
     * Set the suivi ana classe2.
     *
     * @param bool $suiviAnaClasse2 The suivi ana classe2.
     */
    public function setSuiviAnaClasse2($suiviAnaClasse2) {
        $this->suiviAnaClasse2 = $suiviAnaClasse2;
        return $this;
    }
}
