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
 * Tds111 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds111Trait {

    /**
     * Tds111.
     *
     * @var bool
     */
    private $tds111;

    /**
     * Get the tds111.
     *
     * @return bool Returns the tds111.
     */
    public function getTds111() {
        return $this->tds111;
    }

    /**
     * Set the tds111.
     *
     * @param bool $tds111 The tds111.
     */
    public function setTds111($tds111) {
        $this->tds111 = $tds111;
        return $this;
    }
}
