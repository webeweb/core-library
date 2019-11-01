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
 * Text6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText6Trait {

    /**
     * Text6.
     *
     * @var string
     */
    private $text6;

    /**
     * Get the text6.
     *
     * @return string Returns the text6.
     */
    public function getText6() {
        return $this->text6;
    }

    /**
     * Set the text6.
     *
     * @param string $text6 The text6.
     */
    public function setText6($text6) {
        $this->text6 = $text6;
        return $this;
    }
}
