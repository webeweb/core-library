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
 * Text2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText2Trait {

    /**
     * Text2.
     *
     * @var string
     */
    private $text2;

    /**
     * Get the text2.
     *
     * @return string Returns the text2.
     */
    public function getText2() {
        return $this->text2;
    }

    /**
     * Set the text2.
     *
     * @param string $text2 The text2.
     */
    public function setText2($text2) {
        $this->text2 = $text2;
        return $this;
    }
}
