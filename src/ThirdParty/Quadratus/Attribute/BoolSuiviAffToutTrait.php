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
 * Suivi aff tout trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSuiviAffToutTrait {

    /**
     * Suivi aff tout.
     *
     * @var bool
     */
    private $suiviAffTout;

    /**
     * Get the suivi aff tout.
     *
     * @return bool Returns the suivi aff tout.
     */
    public function getSuiviAffTout() {
        return $this->suiviAffTout;
    }

    /**
     * Set the suivi aff tout.
     *
     * @param bool $suiviAffTout The suivi aff tout.
     */
    public function setSuiviAffTout($suiviAffTout) {
        $this->suiviAffTout = $suiviAffTout;
        return $this;
    }
}
