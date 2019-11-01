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
 * Type selection trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSelectionTrait {

    /**
     * Type selection.
     *
     * @var string
     */
    private $typeSelection;

    /**
     * Get the type selection.
     *
     * @return string Returns the type selection.
     */
    public function getTypeSelection() {
        return $this->typeSelection;
    }

    /**
     * Set the type selection.
     *
     * @param string $typeSelection The type selection.
     */
    public function setTypeSelection($typeSelection) {
        $this->typeSelection = $typeSelection;
        return $this;
    }
}
