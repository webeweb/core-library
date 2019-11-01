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
 * Code cli four trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCliFourTrait {

    /**
     * Code cli four.
     *
     * @var string
     */
    private $codeCliFour;

    /**
     * Get the code cli four.
     *
     * @return string Returns the code cli four.
     */
    public function getCodeCliFour() {
        return $this->codeCliFour;
    }

    /**
     * Set the code cli four.
     *
     * @param string $codeCliFour The code cli four.
     */
    public function setCodeCliFour($codeCliFour) {
        $this->codeCliFour = $codeCliFour;
        return $this;
    }
}
