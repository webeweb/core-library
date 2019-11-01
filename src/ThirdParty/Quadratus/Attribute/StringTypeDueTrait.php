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
 * Type due trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDueTrait {

    /**
     * Type due.
     *
     * @var string
     */
    private $typeDue;

    /**
     * Get the type due.
     *
     * @return string Returns the type due.
     */
    public function getTypeDue() {
        return $this->typeDue;
    }

    /**
     * Set the type due.
     *
     * @param string $typeDue The type due.
     */
    public function setTypeDue($typeDue) {
        $this->typeDue = $typeDue;
        return $this;
    }
}
