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
 * Code activite7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActivite7Trait {

    /**
     * Code activite7.
     *
     * @var string
     */
    private $codeActivite7;

    /**
     * Get the code activite7.
     *
     * @return string Returns the code activite7.
     */
    public function getCodeActivite7() {
        return $this->codeActivite7;
    }

    /**
     * Set the code activite7.
     *
     * @param string $codeActivite7 The code activite7.
     */
    public function setCodeActivite7($codeActivite7) {
        $this->codeActivite7 = $codeActivite7;
        return $this;
    }
}
