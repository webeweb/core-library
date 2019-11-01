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
 * Text7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText7Trait {

    /**
     * Text7.
     *
     * @var string
     */
    private $text7;

    /**
     * Get the text7.
     *
     * @return string Returns the text7.
     */
    public function getText7() {
        return $this->text7;
    }

    /**
     * Set the text7.
     *
     * @param string $text7 The text7.
     */
    public function setText7($text7) {
        $this->text7 = $text7;
        return $this;
    }
}
