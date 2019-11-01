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
 * Jour declaration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourDeclarationTrait {

    /**
     * Jour declaration.
     *
     * @var string
     */
    private $jourDeclaration;

    /**
     * Get the jour declaration.
     *
     * @return string Returns the jour declaration.
     */
    public function getJourDeclaration() {
        return $this->jourDeclaration;
    }

    /**
     * Set the jour declaration.
     *
     * @param string $jourDeclaration The jour declaration.
     */
    public function setJourDeclaration($jourDeclaration) {
        $this->jourDeclaration = $jourDeclaration;
        return $this;
    }
}
