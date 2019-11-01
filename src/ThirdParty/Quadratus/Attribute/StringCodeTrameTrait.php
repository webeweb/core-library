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
 * Code trame trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTrameTrait {

    /**
     * Code trame.
     *
     * @var string
     */
    private $codeTrame;

    /**
     * Get the code trame.
     *
     * @return string Returns the code trame.
     */
    public function getCodeTrame() {
        return $this->codeTrame;
    }

    /**
     * Set the code trame.
     *
     * @param string $codeTrame The code trame.
     */
    public function setCodeTrame($codeTrame) {
        $this->codeTrame = $codeTrame;
        return $this;
    }
}
