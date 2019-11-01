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
 * Text1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText1Trait {

    /**
     * Text1.
     *
     * @var string
     */
    private $text1;

    /**
     * Get the text1.
     *
     * @return string Returns the text1.
     */
    public function getText1() {
        return $this->text1;
    }

    /**
     * Set the text1.
     *
     * @param string $text1 The text1.
     */
    public function setText1($text1) {
        $this->text1 = $text1;
        return $this;
    }
}
