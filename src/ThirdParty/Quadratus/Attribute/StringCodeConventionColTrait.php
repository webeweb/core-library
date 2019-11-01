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
 * Code convention col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeConventionColTrait {

    /**
     * Code convention col.
     *
     * @var string
     */
    private $codeConventionCol;

    /**
     * Get the code convention col.
     *
     * @return string Returns the code convention col.
     */
    public function getCodeConventionCol() {
        return $this->codeConventionCol;
    }

    /**
     * Set the code convention col.
     *
     * @param string $codeConventionCol The code convention col.
     */
    public function setCodeConventionCol($codeConventionCol) {
        $this->codeConventionCol = $codeConventionCol;
        return $this;
    }
}
