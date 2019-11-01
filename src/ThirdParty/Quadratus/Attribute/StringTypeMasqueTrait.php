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
 * Type masque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMasqueTrait {

    /**
     * Type masque.
     *
     * @var string
     */
    private $typeMasque;

    /**
     * Get the type masque.
     *
     * @return string Returns the type masque.
     */
    public function getTypeMasque() {
        return $this->typeMasque;
    }

    /**
     * Set the type masque.
     *
     * @param string $typeMasque The type masque.
     */
    public function setTypeMasque($typeMasque) {
        $this->typeMasque = $typeMasque;
        return $this;
    }
}
