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
 * Suivi ana classe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse3Trait {

    /**
     * Suivi ana classe3.
     *
     * @var bool
     */
    private $suiviAnaClasse3;

    /**
     * Get the suivi ana classe3.
     *
     * @return bool Returns the suivi ana classe3.
     */
    public function getSuiviAnaClasse3() {
        return $this->suiviAnaClasse3;
    }

    /**
     * Set the suivi ana classe3.
     *
     * @param bool $suiviAnaClasse3 The suivi ana classe3.
     */
    public function setSuiviAnaClasse3($suiviAnaClasse3) {
        $this->suiviAnaClasse3 = $suiviAnaClasse3;
        return $this;
    }
}
