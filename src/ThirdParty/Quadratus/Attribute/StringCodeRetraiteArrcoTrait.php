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
 * Code retraite arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRetraiteArrcoTrait {

    /**
     * Code retraite arrco.
     *
     * @var string
     */
    private $codeRetraiteArrco;

    /**
     * Get the code retraite arrco.
     *
     * @return string Returns the code retraite arrco.
     */
    public function getCodeRetraiteArrco() {
        return $this->codeRetraiteArrco;
    }

    /**
     * Set the code retraite arrco.
     *
     * @param string $codeRetraiteArrco The code retraite arrco.
     */
    public function setCodeRetraiteArrco($codeRetraiteArrco) {
        $this->codeRetraiteArrco = $codeRetraiteArrco;
        return $this;
    }
}
