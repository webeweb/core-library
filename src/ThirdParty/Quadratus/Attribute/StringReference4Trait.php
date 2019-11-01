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
 * Reference4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReference4Trait {

    /**
     * Reference4.
     *
     * @var string
     */
    private $reference4;

    /**
     * Get the reference4.
     *
     * @return string Returns the reference4.
     */
    public function getReference4() {
        return $this->reference4;
    }

    /**
     * Set the reference4.
     *
     * @param string $reference4 The reference4.
     */
    public function setReference4($reference4) {
        $this->reference4 = $reference4;
        return $this;
    }
}
