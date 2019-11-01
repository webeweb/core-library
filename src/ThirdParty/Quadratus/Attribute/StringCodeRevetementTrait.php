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
 * Code revetement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRevetementTrait {

    /**
     * Code revetement.
     *
     * @var string
     */
    private $codeRevetement;

    /**
     * Get the code revetement.
     *
     * @return string Returns the code revetement.
     */
    public function getCodeRevetement() {
        return $this->codeRevetement;
    }

    /**
     * Set the code revetement.
     *
     * @param string $codeRevetement The code revetement.
     */
    public function setCodeRevetement($codeRevetement) {
        $this->codeRevetement = $codeRevetement;
        return $this;
    }
}
