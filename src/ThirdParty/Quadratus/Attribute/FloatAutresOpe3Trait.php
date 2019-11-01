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
 * Autres ope3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresOpe3Trait {

    /**
     * Autres ope3.
     *
     * @var float
     */
    private $autresOpe3;

    /**
     * Get the autres ope3.
     *
     * @return float Returns the autres ope3.
     */
    public function getAutresOpe3() {
        return $this->autresOpe3;
    }

    /**
     * Set the autres ope3.
     *
     * @param float $autresOpe3 The autres ope3.
     */
    public function setAutresOpe3($autresOpe3) {
        $this->autresOpe3 = $autresOpe3;
        return $this;
    }
}
