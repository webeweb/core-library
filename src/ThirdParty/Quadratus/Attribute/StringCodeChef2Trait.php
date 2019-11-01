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
 * Code chef2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeChef2Trait {

    /**
     * Code chef2.
     *
     * @var string
     */
    private $codeChef2;

    /**
     * Get the code chef2.
     *
     * @return string Returns the code chef2.
     */
    public function getCodeChef2() {
        return $this->codeChef2;
    }

    /**
     * Set the code chef2.
     *
     * @param string $codeChef2 The code chef2.
     */
    public function setCodeChef2($codeChef2) {
        $this->codeChef2 = $codeChef2;
        return $this;
    }
}
