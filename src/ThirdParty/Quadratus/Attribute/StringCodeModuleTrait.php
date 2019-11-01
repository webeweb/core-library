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
 * Code module trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeModuleTrait {

    /**
     * Code module.
     *
     * @var string
     */
    private $codeModule;

    /**
     * Get the code module.
     *
     * @return string Returns the code module.
     */
    public function getCodeModule() {
        return $this->codeModule;
    }

    /**
     * Set the code module.
     *
     * @param string $codeModule The code module.
     */
    public function setCodeModule($codeModule) {
        $this->codeModule = $codeModule;
        return $this;
    }
}
