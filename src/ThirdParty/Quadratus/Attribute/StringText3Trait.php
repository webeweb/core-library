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
 * Text3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText3Trait {

    /**
     * Text3.
     *
     * @var string
     */
    private $text3;

    /**
     * Get the text3.
     *
     * @return string Returns the text3.
     */
    public function getText3() {
        return $this->text3;
    }

    /**
     * Set the text3.
     *
     * @param string $text3 The text3.
     */
    public function setText3($text3) {
        $this->text3 = $text3;
        return $this;
    }
}
