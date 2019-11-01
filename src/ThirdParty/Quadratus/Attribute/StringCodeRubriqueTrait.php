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
 * Code rubrique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRubriqueTrait {

    /**
     * Code rubrique.
     *
     * @var string
     */
    private $codeRubrique;

    /**
     * Get the code rubrique.
     *
     * @return string Returns the code rubrique.
     */
    public function getCodeRubrique() {
        return $this->codeRubrique;
    }

    /**
     * Set the code rubrique.
     *
     * @param string $codeRubrique The code rubrique.
     */
    public function setCodeRubrique($codeRubrique) {
        $this->codeRubrique = $codeRubrique;
        return $this;
    }
}
