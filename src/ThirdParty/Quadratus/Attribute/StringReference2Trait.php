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
 * Reference2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReference2Trait {

    /**
     * Reference2.
     *
     * @var string
     */
    private $reference2;

    /**
     * Get the reference2.
     *
     * @return string Returns the reference2.
     */
    public function getReference2() {
        return $this->reference2;
    }

    /**
     * Set the reference2.
     *
     * @param string $reference2 The reference2.
     */
    public function setReference2($reference2) {
        $this->reference2 = $reference2;
        return $this;
    }
}
