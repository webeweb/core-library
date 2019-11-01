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
 * Code analytique proprete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalytiquePropreteTrait {

    /**
     * Code analytique proprete.
     *
     * @var string
     */
    private $codeAnalytiqueProprete;

    /**
     * Get the code analytique proprete.
     *
     * @return string Returns the code analytique proprete.
     */
    public function getCodeAnalytiqueProprete() {
        return $this->codeAnalytiqueProprete;
    }

    /**
     * Set the code analytique proprete.
     *
     * @param string $codeAnalytiqueProprete The code analytique proprete.
     */
    public function setCodeAnalytiqueProprete($codeAnalytiqueProprete) {
        $this->codeAnalytiqueProprete = $codeAnalytiqueProprete;
        return $this;
    }
}
