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
 * Code classe cnbf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClasseCnbfTrait {

    /**
     * Code classe cnbf.
     *
     * @var string
     */
    private $codeClasseCnbf;

    /**
     * Get the code classe cnbf.
     *
     * @return string Returns the code classe cnbf.
     */
    public function getCodeClasseCnbf() {
        return $this->codeClasseCnbf;
    }

    /**
     * Set the code classe cnbf.
     *
     * @param string $codeClasseCnbf The code classe cnbf.
     */
    public function setCodeClasseCnbf($codeClasseCnbf) {
        $this->codeClasseCnbf = $codeClasseCnbf;
        return $this;
    }
}
