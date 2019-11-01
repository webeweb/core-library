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
 * Code autre1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAutre1Trait {

    /**
     * Code autre1.
     *
     * @var string
     */
    private $codeAutre1;

    /**
     * Get the code autre1.
     *
     * @return string Returns the code autre1.
     */
    public function getCodeAutre1() {
        return $this->codeAutre1;
    }

    /**
     * Set the code autre1.
     *
     * @param string $codeAutre1 The code autre1.
     */
    public function setCodeAutre1($codeAutre1) {
        $this->codeAutre1 = $codeAutre1;
        return $this;
    }
}
