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
 * Suivi ana classe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse5Trait {

    /**
     * Suivi ana classe5.
     *
     * @var bool
     */
    private $suiviAnaClasse5;

    /**
     * Get the suivi ana classe5.
     *
     * @return bool Returns the suivi ana classe5.
     */
    public function getSuiviAnaClasse5() {
        return $this->suiviAnaClasse5;
    }

    /**
     * Set the suivi ana classe5.
     *
     * @param bool $suiviAnaClasse5 The suivi ana classe5.
     */
    public function setSuiviAnaClasse5($suiviAnaClasse5) {
        $this->suiviAnaClasse5 = $suiviAnaClasse5;
        return $this;
    }
}
