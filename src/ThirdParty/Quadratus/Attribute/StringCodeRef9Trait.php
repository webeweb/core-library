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
 * Code ref9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRef9Trait {

    /**
     * Code ref9.
     *
     * @var string
     */
    private $codeRef9;

    /**
     * Get the code ref9.
     *
     * @return string Returns the code ref9.
     */
    public function getCodeRef9() {
        return $this->codeRef9;
    }

    /**
     * Set the code ref9.
     *
     * @param string $codeRef9 The code ref9.
     */
    public function setCodeRef9($codeRef9) {
        $this->codeRef9 = $codeRef9;
        return $this;
    }
}
