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
 * Suivi ana classe0 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse0Trait {

    /**
     * Suivi ana classe0.
     *
     * @var bool
     */
    private $suiviAnaClasse0;

    /**
     * Get the suivi ana classe0.
     *
     * @return bool Returns the suivi ana classe0.
     */
    public function getSuiviAnaClasse0() {
        return $this->suiviAnaClasse0;
    }

    /**
     * Set the suivi ana classe0.
     *
     * @param bool $suiviAnaClasse0 The suivi ana classe0.
     */
    public function setSuiviAnaClasse0($suiviAnaClasse0) {
        $this->suiviAnaClasse0 = $suiviAnaClasse0;
        return $this;
    }
}
