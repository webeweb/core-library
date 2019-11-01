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
 * Code type sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypeSalTrait {

    /**
     * Code type sal.
     *
     * @var string
     */
    private $codeTypeSal;

    /**
     * Get the code type sal.
     *
     * @return string Returns the code type sal.
     */
    public function getCodeTypeSal() {
        return $this->codeTypeSal;
    }

    /**
     * Set the code type sal.
     *
     * @param string $codeTypeSal The code type sal.
     */
    public function setCodeTypeSal($codeTypeSal) {
        $this->codeTypeSal = $codeTypeSal;
        return $this;
    }
}
