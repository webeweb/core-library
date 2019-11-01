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
 * Code regime tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeTvaTrait {

    /**
     * Code regime tva.
     *
     * @var string
     */
    private $codeRegimeTva;

    /**
     * Get the code regime tva.
     *
     * @return string Returns the code regime tva.
     */
    public function getCodeRegimeTva() {
        return $this->codeRegimeTva;
    }

    /**
     * Set the code regime tva.
     *
     * @param string $codeRegimeTva The code regime tva.
     */
    public function setCodeRegimeTva($codeRegimeTva) {
        $this->codeRegimeTva = $codeRegimeTva;
        return $this;
    }
}
