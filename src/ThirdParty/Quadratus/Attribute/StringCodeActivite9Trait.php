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
 * Code activite9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeActivite9Trait {

    /**
     * Code activite9.
     *
     * @var string
     */
    private $codeActivite9;

    /**
     * Get the code activite9.
     *
     * @return string Returns the code activite9.
     */
    public function getCodeActivite9() {
        return $this->codeActivite9;
    }

    /**
     * Set the code activite9.
     *
     * @param string $codeActivite9 The code activite9.
     */
    public function setCodeActivite9($codeActivite9) {
        $this->codeActivite9 = $codeActivite9;
        return $this;
    }
}
