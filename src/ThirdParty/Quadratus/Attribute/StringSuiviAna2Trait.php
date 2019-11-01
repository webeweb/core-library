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
 * Suivi ana2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSuiviAna2Trait {

    /**
     * Suivi ana2.
     *
     * @var string
     */
    private $suiviAna2;

    /**
     * Get the suivi ana2.
     *
     * @return string Returns the suivi ana2.
     */
    public function getSuiviAna2() {
        return $this->suiviAna2;
    }

    /**
     * Set the suivi ana2.
     *
     * @param string $suiviAna2 The suivi ana2.
     */
    public function setSuiviAna2($suiviAna2) {
        $this->suiviAna2 = $suiviAna2;
        return $this;
    }
}
