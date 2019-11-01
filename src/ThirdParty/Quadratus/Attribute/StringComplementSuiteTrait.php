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
 * Complement suite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplementSuiteTrait {

    /**
     * Complement suite.
     *
     * @var string
     */
    private $complementSuite;

    /**
     * Get the complement suite.
     *
     * @return string Returns the complement suite.
     */
    public function getComplementSuite() {
        return $this->complementSuite;
    }

    /**
     * Set the complement suite.
     *
     * @param string $complementSuite The complement suite.
     */
    public function setComplementSuite($complementSuite) {
        $this->complementSuite = $complementSuite;
        return $this;
    }
}
