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
 * Tds128 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds128Trait {

    /**
     * Tds128.
     *
     * @var string
     */
    private $tds128;

    /**
     * Get the tds128.
     *
     * @return string Returns the tds128.
     */
    public function getTds128() {
        return $this->tds128;
    }

    /**
     * Set the tds128.
     *
     * @param string $tds128 The tds128.
     */
    public function setTds128($tds128) {
        $this->tds128 = $tds128;
        return $this;
    }
}
