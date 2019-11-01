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
 * Demo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDemoTrait {

    /**
     * Demo.
     *
     * @var bool
     */
    private $demo;

    /**
     * Get the demo.
     *
     * @return bool Returns the demo.
     */
    public function getDemo() {
        return $this->demo;
    }

    /**
     * Set the demo.
     *
     * @param bool $demo The demo.
     */
    public function setDemo($demo) {
        $this->demo = $demo;
        return $this;
    }
}
