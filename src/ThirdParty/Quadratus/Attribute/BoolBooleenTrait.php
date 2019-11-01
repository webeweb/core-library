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
 * Booleen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleenTrait {

    /**
     * Booleen.
     *
     * @var bool
     */
    private $booleen;

    /**
     * Get the booleen.
     *
     * @return bool Returns the booleen.
     */
    public function getBooleen() {
        return $this->booleen;
    }

    /**
     * Set the booleen.
     *
     * @param bool $booleen The booleen.
     */
    public function setBooleen($booleen) {
        $this->booleen = $booleen;
        return $this;
    }
}
