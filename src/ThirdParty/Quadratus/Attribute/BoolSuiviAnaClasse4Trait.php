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
 * Suivi ana classe4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse4Trait {

    /**
     * Suivi ana classe4.
     *
     * @var bool
     */
    private $suiviAnaClasse4;

    /**
     * Get the suivi ana classe4.
     *
     * @return bool Returns the suivi ana classe4.
     */
    public function getSuiviAnaClasse4() {
        return $this->suiviAnaClasse4;
    }

    /**
     * Set the suivi ana classe4.
     *
     * @param bool $suiviAnaClasse4 The suivi ana classe4.
     */
    public function setSuiviAnaClasse4($suiviAnaClasse4) {
        $this->suiviAnaClasse4 = $suiviAnaClasse4;
        return $this;
    }
}
