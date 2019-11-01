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
 * Type piece global trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypePieceGlobalTrait {

    /**
     * Type piece global.
     *
     * @var bool
     */
    private $typePieceGlobal;

    /**
     * Get the type piece global.
     *
     * @return bool Returns the type piece global.
     */
    public function getTypePieceGlobal() {
        return $this->typePieceGlobal;
    }

    /**
     * Set the type piece global.
     *
     * @param bool $typePieceGlobal The type piece global.
     */
    public function setTypePieceGlobal($typePieceGlobal) {
        $this->typePieceGlobal = $typePieceGlobal;
        return $this;
    }
}
