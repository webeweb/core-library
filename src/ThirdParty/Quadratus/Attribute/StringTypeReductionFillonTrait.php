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
 * Type reduction fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeReductionFillonTrait {

    /**
     * Type reduction fillon.
     *
     * @var string
     */
    private $typeReductionFillon;

    /**
     * Get the type reduction fillon.
     *
     * @return string Returns the type reduction fillon.
     */
    public function getTypeReductionFillon() {
        return $this->typeReductionFillon;
    }

    /**
     * Set the type reduction fillon.
     *
     * @param string $typeReductionFillon The type reduction fillon.
     */
    public function setTypeReductionFillon($typeReductionFillon) {
        $this->typeReductionFillon = $typeReductionFillon;
        return $this;
    }
}
