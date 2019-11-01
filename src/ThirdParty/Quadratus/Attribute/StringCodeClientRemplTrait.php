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
 * Code client rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClientRemplTrait {

    /**
     * Code client rempl.
     *
     * @var string
     */
    private $codeClientRempl;

    /**
     * Get the code client rempl.
     *
     * @return string Returns the code client rempl.
     */
    public function getCodeClientRempl() {
        return $this->codeClientRempl;
    }

    /**
     * Set the code client rempl.
     *
     * @param string $codeClientRempl The code client rempl.
     */
    public function setCodeClientRempl($codeClientRempl) {
        $this->codeClientRempl = $codeClientRempl;
        return $this;
    }
}
