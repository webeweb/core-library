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
 * Autres ope1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresOpe1Trait {

    /**
     * Autres ope1.
     *
     * @var float
     */
    private $autresOpe1;

    /**
     * Get the autres ope1.
     *
     * @return float Returns the autres ope1.
     */
    public function getAutresOpe1() {
        return $this->autresOpe1;
    }

    /**
     * Set the autres ope1.
     *
     * @param float $autresOpe1 The autres ope1.
     */
    public function setAutresOpe1($autresOpe1) {
        $this->autresOpe1 = $autresOpe1;
        return $this;
    }
}
