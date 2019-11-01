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
 * Declaration a rediger trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDeclarationARedigerTrait {

    /**
     * Declaration a rediger.
     *
     * @var bool
     */
    private $declarationARediger;

    /**
     * Get the declaration a rediger.
     *
     * @return bool Returns the declaration a rediger.
     */
    public function getDeclarationARediger() {
        return $this->declarationARediger;
    }

    /**
     * Set the declaration a rediger.
     *
     * @param bool $declarationARediger The declaration a rediger.
     */
    public function setDeclarationARediger($declarationARediger) {
        $this->declarationARediger = $declarationARediger;
        return $this;
    }
}
