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
 * Code retraite agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRetraiteAgircTrait {

    /**
     * Code retraite agirc.
     *
     * @var string
     */
    private $codeRetraiteAgirc;

    /**
     * Get the code retraite agirc.
     *
     * @return string Returns the code retraite agirc.
     */
    public function getCodeRetraiteAgirc() {
        return $this->codeRetraiteAgirc;
    }

    /**
     * Set the code retraite agirc.
     *
     * @param string $codeRetraiteAgirc The code retraite agirc.
     */
    public function setCodeRetraiteAgirc($codeRetraiteAgirc) {
        $this->codeRetraiteAgirc = $codeRetraiteAgirc;
        return $this;
    }
}
