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
 * Masquer base access trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMasquerBaseAccessTrait {

    /**
     * Masquer base access.
     *
     * @var bool
     */
    private $masquerBaseAccess;

    /**
     * Get the masquer base access.
     *
     * @return bool Returns the masquer base access.
     */
    public function getMasquerBaseAccess() {
        return $this->masquerBaseAccess;
    }

    /**
     * Set the masquer base access.
     *
     * @param bool $masquerBaseAccess The masquer base access.
     */
    public function setMasquerBaseAccess($masquerBaseAccess) {
        $this->masquerBaseAccess = $masquerBaseAccess;
        return $this;
    }
}
