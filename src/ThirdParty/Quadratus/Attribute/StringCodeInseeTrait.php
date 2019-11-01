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
 * Code insee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeInseeTrait {

    /**
     * Code insee.
     *
     * @var string
     */
    private $codeInsee;

    /**
     * Get the code insee.
     *
     * @return string Returns the code insee.
     */
    public function getCodeInsee() {
        return $this->codeInsee;
    }

    /**
     * Set the code insee.
     *
     * @param string $codeInsee The code insee.
     */
    public function setCodeInsee($codeInsee) {
        $this->codeInsee = $codeInsee;
        return $this;
    }
}
