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
 * Code prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrevTrait {

    /**
     * Code prev.
     *
     * @var string
     */
    private $codePrev;

    /**
     * Get the code prev.
     *
     * @return string Returns the code prev.
     */
    public function getCodePrev() {
        return $this->codePrev;
    }

    /**
     * Set the code prev.
     *
     * @param string $codePrev The code prev.
     */
    public function setCodePrev($codePrev) {
        $this->codePrev = $codePrev;
        return $this;
    }
}
