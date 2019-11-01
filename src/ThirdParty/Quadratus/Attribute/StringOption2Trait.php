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
 * Option2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOption2Trait {

    /**
     * Option2.
     *
     * @var string
     */
    private $option2;

    /**
     * Get the option2.
     *
     * @return string Returns the option2.
     */
    public function getOption2() {
        return $this->option2;
    }

    /**
     * Set the option2.
     *
     * @param string $option2 The option2.
     */
    public function setOption2($option2) {
        $this->option2 = $option2;
        return $this;
    }
}
