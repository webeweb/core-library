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
 * Code anal fourn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalFournTrait {

    /**
     * Code anal fourn.
     *
     * @var string
     */
    private $codeAnalFourn;

    /**
     * Get the code anal fourn.
     *
     * @return string Returns the code anal fourn.
     */
    public function getCodeAnalFourn() {
        return $this->codeAnalFourn;
    }

    /**
     * Set the code anal fourn.
     *
     * @param string $codeAnalFourn The code anal fourn.
     */
    public function setCodeAnalFourn($codeAnalFourn) {
        $this->codeAnalFourn = $codeAnalFourn;
        return $this;
    }
}
