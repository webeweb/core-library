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
 * Sep trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSepTrait {

    /**
     * Sep.
     *
     * @var bool
     */
    private $sep;

    /**
     * Get the sep.
     *
     * @return bool Returns the sep.
     */
    public function getSep() {
        return $this->sep;
    }

    /**
     * Set the sep.
     *
     * @param bool $sep The sep.
     */
    public function setSep($sep) {
        $this->sep = $sep;
        return $this;
    }
}
