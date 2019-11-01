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
 * Option1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOption1Trait {

    /**
     * Option1.
     *
     * @var string
     */
    private $option1;

    /**
     * Get the option1.
     *
     * @return string Returns the option1.
     */
    public function getOption1() {
        return $this->option1;
    }

    /**
     * Set the option1.
     *
     * @param string $option1 The option1.
     */
    public function setOption1($option1) {
        $this->option1 = $option1;
        return $this;
    }
}
