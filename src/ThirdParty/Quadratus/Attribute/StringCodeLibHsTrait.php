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
 * Code lib hs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibHsTrait {

    /**
     * Code lib hs.
     *
     * @var string
     */
    private $codeLibHs;

    /**
     * Get the code lib hs.
     *
     * @return string Returns the code lib hs.
     */
    public function getCodeLibHs() {
        return $this->codeLibHs;
    }

    /**
     * Set the code lib hs.
     *
     * @param string $codeLibHs The code lib hs.
     */
    public function setCodeLibHs($codeLibHs) {
        $this->codeLibHs = $codeLibHs;
        return $this;
    }
}
