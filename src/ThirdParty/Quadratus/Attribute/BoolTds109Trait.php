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
 * Tds109 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds109Trait {

    /**
     * Tds109.
     *
     * @var bool
     */
    private $tds109;

    /**
     * Get the tds109.
     *
     * @return bool Returns the tds109.
     */
    public function getTds109() {
        return $this->tds109;
    }

    /**
     * Set the tds109.
     *
     * @param bool $tds109 The tds109.
     */
    public function setTds109($tds109) {
        $this->tds109 = $tds109;
        return $this;
    }
}
