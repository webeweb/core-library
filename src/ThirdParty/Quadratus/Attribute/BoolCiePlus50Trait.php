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
 * Cie plus50 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCiePlus50Trait {

    /**
     * Cie plus50.
     *
     * @var bool
     */
    private $ciePlus50;

    /**
     * Get the cie plus50.
     *
     * @return bool Returns the cie plus50.
     */
    public function getCiePlus50() {
        return $this->ciePlus50;
    }

    /**
     * Set the cie plus50.
     *
     * @param bool $ciePlus50 The cie plus50.
     */
    public function setCiePlus50($ciePlus50) {
        $this->ciePlus50 = $ciePlus50;
        return $this;
    }
}
