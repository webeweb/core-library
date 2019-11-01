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
 * Num declaration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDeclarationTrait {

    /**
     * Num declaration.
     *
     * @var string
     */
    private $numDeclaration;

    /**
     * Get the num declaration.
     *
     * @return string Returns the num declaration.
     */
    public function getNumDeclaration() {
        return $this->numDeclaration;
    }

    /**
     * Set the num declaration.
     *
     * @param string $numDeclaration The num declaration.
     */
    public function setNumDeclaration($numDeclaration) {
        $this->numDeclaration = $numDeclaration;
        return $this;
    }
}
