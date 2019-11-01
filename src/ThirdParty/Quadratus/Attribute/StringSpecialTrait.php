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
 * Special trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSpecialTrait {

    /**
     * Special.
     *
     * @var string
     */
    private $special;

    /**
     * Get the special.
     *
     * @return string Returns the special.
     */
    public function getSpecial() {
        return $this->special;
    }

    /**
     * Set the special.
     *
     * @param string $special The special.
     */
    public function setSpecial($special) {
        $this->special = $special;
        return $this;
    }
}
