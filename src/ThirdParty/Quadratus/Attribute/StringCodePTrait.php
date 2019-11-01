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
 * Code p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePTrait {

    /**
     * Code p.
     *
     * @var string
     */
    private $codeP;

    /**
     * Get the code p.
     *
     * @return string Returns the code p.
     */
    public function getCodeP() {
        return $this->codeP;
    }

    /**
     * Set the code p.
     *
     * @param string $codeP The code p.
     */
    public function setCodeP($codeP) {
        $this->codeP = $codeP;
        return $this;
    }
}
