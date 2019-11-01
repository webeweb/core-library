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
 * Reference1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReference1Trait {

    /**
     * Reference1.
     *
     * @var string
     */
    private $reference1;

    /**
     * Get the reference1.
     *
     * @return string Returns the reference1.
     */
    public function getReference1() {
        return $this->reference1;
    }

    /**
     * Set the reference1.
     *
     * @param string $reference1 The reference1.
     */
    public function setReference1($reference1) {
        $this->reference1 = $reference1;
        return $this;
    }
}
