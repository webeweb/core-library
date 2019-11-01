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
 * Text4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText4Trait {

    /**
     * Text4.
     *
     * @var string
     */
    private $text4;

    /**
     * Get the text4.
     *
     * @return string Returns the text4.
     */
    public function getText4() {
        return $this->text4;
    }

    /**
     * Set the text4.
     *
     * @param string $text4 The text4.
     */
    public function setText4($text4) {
        $this->text4 = $text4;
        return $this;
    }
}
