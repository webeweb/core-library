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
 * Code ja trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJaTrait {

    /**
     * Code ja.
     *
     * @var string
     */
    private $codeJa;

    /**
     * Get the code ja.
     *
     * @return string Returns the code ja.
     */
    public function getCodeJa() {
        return $this->codeJa;
    }

    /**
     * Set the code ja.
     *
     * @param string $codeJa The code ja.
     */
    public function setCodeJa($codeJa) {
        $this->codeJa = $codeJa;
        return $this;
    }
}
