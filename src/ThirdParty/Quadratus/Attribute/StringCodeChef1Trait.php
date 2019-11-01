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
 * Code chef1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeChef1Trait {

    /**
     * Code chef1.
     *
     * @var string
     */
    private $codeChef1;

    /**
     * Get the code chef1.
     *
     * @return string Returns the code chef1.
     */
    public function getCodeChef1() {
        return $this->codeChef1;
    }

    /**
     * Set the code chef1.
     *
     * @param string $codeChef1 The code chef1.
     */
    public function setCodeChef1($codeChef1) {
        $this->codeChef1 = $codeChef1;
        return $this;
    }
}
