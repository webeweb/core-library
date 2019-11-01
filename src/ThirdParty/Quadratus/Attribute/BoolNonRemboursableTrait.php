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
 * Non remboursable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonRemboursableTrait {

    /**
     * Non remboursable.
     *
     * @var bool
     */
    private $nonRemboursable;

    /**
     * Get the non remboursable.
     *
     * @return bool Returns the non remboursable.
     */
    public function getNonRemboursable() {
        return $this->nonRemboursable;
    }

    /**
     * Set the non remboursable.
     *
     * @param bool $nonRemboursable The non remboursable.
     */
    public function setNonRemboursable($nonRemboursable) {
        $this->nonRemboursable = $nonRemboursable;
        return $this;
    }
}
