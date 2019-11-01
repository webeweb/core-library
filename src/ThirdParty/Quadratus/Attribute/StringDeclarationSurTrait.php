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
 * Declaration sur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeclarationSurTrait {

    /**
     * Declaration sur.
     *
     * @var string
     */
    private $declarationSur;

    /**
     * Get the declaration sur.
     *
     * @return string Returns the declaration sur.
     */
    public function getDeclarationSur() {
        return $this->declarationSur;
    }

    /**
     * Set the declaration sur.
     *
     * @param string $declarationSur The declaration sur.
     */
    public function setDeclarationSur($declarationSur) {
        $this->declarationSur = $declarationSur;
        return $this;
    }
}
