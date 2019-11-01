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
 * Code autre2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAutre2Trait {

    /**
     * Code autre2.
     *
     * @var string
     */
    private $codeAutre2;

    /**
     * Get the code autre2.
     *
     * @return string Returns the code autre2.
     */
    public function getCodeAutre2() {
        return $this->codeAutre2;
    }

    /**
     * Set the code autre2.
     *
     * @param string $codeAutre2 The code autre2.
     */
    public function setCodeAutre2($codeAutre2) {
        $this->codeAutre2 = $codeAutre2;
        return $this;
    }
}
