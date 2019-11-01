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
 * Suivi aux frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAuxFrnTrait {

    /**
     * Suivi aux frn.
     *
     * @var bool
     */
    private $suiviAuxFrn;

    /**
     * Get the suivi aux frn.
     *
     * @return bool Returns the suivi aux frn.
     */
    public function getSuiviAuxFrn() {
        return $this->suiviAuxFrn;
    }

    /**
     * Set the suivi aux frn.
     *
     * @param bool $suiviAuxFrn The suivi aux frn.
     */
    public function setSuiviAuxFrn($suiviAuxFrn) {
        $this->suiviAuxFrn = $suiviAuxFrn;
        return $this;
    }
}
