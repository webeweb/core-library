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
 * Code prime forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeForfaitTrait {

    /**
     * Code prime forfait.
     *
     * @var string
     */
    private $codePrimeForfait;

    /**
     * Get the code prime forfait.
     *
     * @return string Returns the code prime forfait.
     */
    public function getCodePrimeForfait() {
        return $this->codePrimeForfait;
    }

    /**
     * Set the code prime forfait.
     *
     * @param string $codePrimeForfait The code prime forfait.
     */
    public function setCodePrimeForfait($codePrimeForfait) {
        $this->codePrimeForfait = $codePrimeForfait;
        return $this;
    }
}
