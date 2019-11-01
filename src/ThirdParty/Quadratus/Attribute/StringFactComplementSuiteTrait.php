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
 * Fact complement suite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactComplementSuiteTrait {

    /**
     * Fact complement suite.
     *
     * @var string
     */
    private $factComplementSuite;

    /**
     * Get the fact complement suite.
     *
     * @return string Returns the fact complement suite.
     */
    public function getFactComplementSuite() {
        return $this->factComplementSuite;
    }

    /**
     * Set the fact complement suite.
     *
     * @param string $factComplementSuite The fact complement suite.
     */
    public function setFactComplementSuite($factComplementSuite) {
        $this->factComplementSuite = $factComplementSuite;
        return $this;
    }
}
