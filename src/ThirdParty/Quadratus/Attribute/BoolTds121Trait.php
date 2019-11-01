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
 * Tds121 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds121Trait {

    /**
     * Tds121.
     *
     * @var bool
     */
    private $tds121;

    /**
     * Get the tds121.
     *
     * @return bool Returns the tds121.
     */
    public function getTds121() {
        return $this->tds121;
    }

    /**
     * Set the tds121.
     *
     * @param bool $tds121 The tds121.
     */
    public function setTds121($tds121) {
        $this->tds121 = $tds121;
        return $this;
    }
}
