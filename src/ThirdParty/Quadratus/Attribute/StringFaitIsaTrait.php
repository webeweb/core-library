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
 * Fait isa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitIsaTrait {

    /**
     * Fait isa.
     *
     * @var string
     */
    private $faitIsa;

    /**
     * Get the fait isa.
     *
     * @return string Returns the fait isa.
     */
    public function getFaitIsa() {
        return $this->faitIsa;
    }

    /**
     * Set the fait isa.
     *
     * @param string $faitIsa The fait isa.
     */
    public function setFaitIsa($faitIsa) {
        $this->faitIsa = $faitIsa;
        return $this;
    }
}
