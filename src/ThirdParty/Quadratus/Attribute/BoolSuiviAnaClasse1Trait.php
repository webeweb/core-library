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
 * Suivi ana classe1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAnaClasse1Trait {

    /**
     * Suivi ana classe1.
     *
     * @var bool
     */
    private $suiviAnaClasse1;

    /**
     * Get the suivi ana classe1.
     *
     * @return bool Returns the suivi ana classe1.
     */
    public function getSuiviAnaClasse1() {
        return $this->suiviAnaClasse1;
    }

    /**
     * Set the suivi ana classe1.
     *
     * @param bool $suiviAnaClasse1 The suivi ana classe1.
     */
    public function setSuiviAnaClasse1($suiviAnaClasse1) {
        $this->suiviAnaClasse1 = $suiviAnaClasse1;
        return $this;
    }
}
