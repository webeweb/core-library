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
 * Plusde200h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlusde200hTrait {

    /**
     * Plusde200h.
     *
     * @var bool
     */
    private $plusde200h;

    /**
     * Get the plusde200h.
     *
     * @return bool Returns the plusde200h.
     */
    public function getPlusde200h() {
        return $this->plusde200h;
    }

    /**
     * Set the plusde200h.
     *
     * @param bool $plusde200h The plusde200h.
     */
    public function setPlusde200h($plusde200h) {
        $this->plusde200h = $plusde200h;
        return $this;
    }
}
