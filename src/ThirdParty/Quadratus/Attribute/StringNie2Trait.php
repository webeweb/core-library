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
 * Nie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNie2Trait {

    /**
     * Nie2.
     *
     * @var string
     */
    private $nie2;

    /**
     * Get the nie2.
     *
     * @return string Returns the nie2.
     */
    public function getNie2() {
        return $this->nie2;
    }

    /**
     * Set the nie2.
     *
     * @param string $nie2 The nie2.
     */
    public function setNie2($nie2) {
        $this->nie2 = $nie2;
        return $this;
    }
}
