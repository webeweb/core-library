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
 * Code agence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAgenceTrait {

    /**
     * Code agence.
     *
     * @var string
     */
    private $codeAgence;

    /**
     * Get the code agence.
     *
     * @return string Returns the code agence.
     */
    public function getCodeAgence() {
        return $this->codeAgence;
    }

    /**
     * Set the code agence.
     *
     * @param string $codeAgence The code agence.
     */
    public function setCodeAgence($codeAgence) {
        $this->codeAgence = $codeAgence;
        return $this;
    }
}
