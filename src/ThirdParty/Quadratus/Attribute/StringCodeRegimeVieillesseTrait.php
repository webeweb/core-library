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
 * Code regime vieillesse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeVieillesseTrait {

    /**
     * Code regime vieillesse.
     *
     * @var string
     */
    private $codeRegimeVieillesse;

    /**
     * Get the code regime vieillesse.
     *
     * @return string Returns the code regime vieillesse.
     */
    public function getCodeRegimeVieillesse() {
        return $this->codeRegimeVieillesse;
    }

    /**
     * Set the code regime vieillesse.
     *
     * @param string $codeRegimeVieillesse The code regime vieillesse.
     */
    public function setCodeRegimeVieillesse($codeRegimeVieillesse) {
        $this->codeRegimeVieillesse = $codeRegimeVieillesse;
        return $this;
    }
}
