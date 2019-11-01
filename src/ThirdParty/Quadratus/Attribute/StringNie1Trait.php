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
 * Nie1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNie1Trait {

    /**
     * Nie1.
     *
     * @var string
     */
    private $nie1;

    /**
     * Get the nie1.
     *
     * @return string Returns the nie1.
     */
    public function getNie1() {
        return $this->nie1;
    }

    /**
     * Set the nie1.
     *
     * @param string $nie1 The nie1.
     */
    public function setNie1($nie1) {
        $this->nie1 = $nie1;
        return $this;
    }
}
