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
 * Jf type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJfType2Trait {

    /**
     * Jf type2.
     *
     * @var string
     */
    private $jfType2;

    /**
     * Get the jf type2.
     *
     * @return string Returns the jf type2.
     */
    public function getJfType2() {
        return $this->jfType2;
    }

    /**
     * Set the jf type2.
     *
     * @param string $jfType2 The jf type2.
     */
    public function setJfType2($jfType2) {
        $this->jfType2 = $jfType2;
        return $this;
    }
}
