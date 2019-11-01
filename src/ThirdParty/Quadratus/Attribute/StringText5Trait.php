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
 * Text5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringText5Trait {

    /**
     * Text5.
     *
     * @var string
     */
    private $text5;

    /**
     * Get the text5.
     *
     * @return string Returns the text5.
     */
    public function getText5() {
        return $this->text5;
    }

    /**
     * Set the text5.
     *
     * @param string $text5 The text5.
     */
    public function setText5($text5) {
        $this->text5 = $text5;
        return $this;
    }
}
