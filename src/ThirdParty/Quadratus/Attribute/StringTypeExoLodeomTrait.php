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
 * Type exo lodeom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeExoLodeomTrait {

    /**
     * Type exo lodeom.
     *
     * @var string
     */
    private $typeExoLodeom;

    /**
     * Get the type exo lodeom.
     *
     * @return string Returns the type exo lodeom.
     */
    public function getTypeExoLodeom() {
        return $this->typeExoLodeom;
    }

    /**
     * Set the type exo lodeom.
     *
     * @param string $typeExoLodeom The type exo lodeom.
     */
    public function setTypeExoLodeom($typeExoLodeom) {
        $this->typeExoLodeom = $typeExoLodeom;
        return $this;
    }
}
