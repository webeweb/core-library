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
 * Plusde800h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlusde800hTrait {

    /**
     * Plusde800h.
     *
     * @var bool
     */
    private $plusde800h;

    /**
     * Get the plusde800h.
     *
     * @return bool Returns the plusde800h.
     */
    public function getPlusde800h() {
        return $this->plusde800h;
    }

    /**
     * Set the plusde800h.
     *
     * @param bool $plusde800h The plusde800h.
     */
    public function setPlusde800h($plusde800h) {
        $this->plusde800h = $plusde800h;
        return $this;
    }
}
