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
 * Code anal client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalClientTrait {

    /**
     * Code anal client.
     *
     * @var string
     */
    private $codeAnalClient;

    /**
     * Get the code anal client.
     *
     * @return string Returns the code anal client.
     */
    public function getCodeAnalClient() {
        return $this->codeAnalClient;
    }

    /**
     * Set the code anal client.
     *
     * @param string $codeAnalClient The code anal client.
     */
    public function setCodeAnalClient($codeAnalClient) {
        $this->codeAnalClient = $codeAnalClient;
        return $this;
    }
}
