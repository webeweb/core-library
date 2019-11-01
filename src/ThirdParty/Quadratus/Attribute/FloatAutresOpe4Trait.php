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
 * Autres ope4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresOpe4Trait {

    /**
     * Autres ope4.
     *
     * @var float
     */
    private $autresOpe4;

    /**
     * Get the autres ope4.
     *
     * @return float Returns the autres ope4.
     */
    public function getAutresOpe4() {
        return $this->autresOpe4;
    }

    /**
     * Set the autres ope4.
     *
     * @param float $autresOpe4 The autres ope4.
     */
    public function setAutresOpe4($autresOpe4) {
        $this->autresOpe4 = $autresOpe4;
        return $this;
    }
}
