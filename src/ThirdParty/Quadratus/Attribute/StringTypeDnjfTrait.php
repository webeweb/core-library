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
 * Type dnjf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDnjfTrait {

    /**
     * Type dnjf.
     *
     * @var string
     */
    private $typeDnjf;

    /**
     * Get the type dnjf.
     *
     * @return string Returns the type dnjf.
     */
    public function getTypeDnjf() {
        return $this->typeDnjf;
    }

    /**
     * Set the type dnjf.
     *
     * @param string $typeDnjf The type dnjf.
     */
    public function setTypeDnjf($typeDnjf) {
        $this->typeDnjf = $typeDnjf;
        return $this;
    }
}
