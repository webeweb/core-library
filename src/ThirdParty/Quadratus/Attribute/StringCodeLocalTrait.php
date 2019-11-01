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
 * Code local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLocalTrait {

    /**
     * Code local.
     *
     * @var string
     */
    private $codeLocal;

    /**
     * Get the code local.
     *
     * @return string Returns the code local.
     */
    public function getCodeLocal() {
        return $this->codeLocal;
    }

    /**
     * Set the code local.
     *
     * @param string $codeLocal The code local.
     */
    public function setCodeLocal($codeLocal) {
        $this->codeLocal = $codeLocal;
        return $this;
    }
}
