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
 * Code activite8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActivite8Trait {

    /**
     * Code activite8.
     *
     * @var string
     */
    private $codeActivite8;

    /**
     * Get the code activite8.
     *
     * @return string Returns the code activite8.
     */
    public function getCodeActivite8() {
        return $this->codeActivite8;
    }

    /**
     * Set the code activite8.
     *
     * @param string $codeActivite8 The code activite8.
     */
    public function setCodeActivite8($codeActivite8) {
        $this->codeActivite8 = $codeActivite8;
        return $this;
    }
}
