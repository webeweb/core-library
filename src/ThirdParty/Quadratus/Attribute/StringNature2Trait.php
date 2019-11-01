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
 * Nature2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNature2Trait {

    /**
     * Nature2.
     *
     * @var string
     */
    private $nature2;

    /**
     * Get the nature2.
     *
     * @return string Returns the nature2.
     */
    public function getNature2() {
        return $this->nature2;
    }

    /**
     * Set the nature2.
     *
     * @param string $nature2 The nature2.
     */
    public function setNature2($nature2) {
        $this->nature2 = $nature2;
        return $this;
    }
}
