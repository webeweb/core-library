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
 * Cout global trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCoutGlobalTrait {

    /**
     * Cout global.
     *
     * @var bool
     */
    private $coutGlobal;

    /**
     * Get the cout global.
     *
     * @return bool Returns the cout global.
     */
    public function getCoutGlobal() {
        return $this->coutGlobal;
    }

    /**
     * Set the cout global.
     *
     * @param bool $coutGlobal The cout global.
     */
    public function setCoutGlobal($coutGlobal) {
        $this->coutGlobal = $coutGlobal;
        return $this;
    }
}
