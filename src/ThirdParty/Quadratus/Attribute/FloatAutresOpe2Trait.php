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
 * Autres ope2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresOpe2Trait {

    /**
     * Autres ope2.
     *
     * @var float
     */
    private $autresOpe2;

    /**
     * Get the autres ope2.
     *
     * @return float Returns the autres ope2.
     */
    public function getAutresOpe2() {
        return $this->autresOpe2;
    }

    /**
     * Set the autres ope2.
     *
     * @param float $autresOpe2 The autres ope2.
     */
    public function setAutresOpe2($autresOpe2) {
        $this->autresOpe2 = $autresOpe2;
        return $this;
    }
}
