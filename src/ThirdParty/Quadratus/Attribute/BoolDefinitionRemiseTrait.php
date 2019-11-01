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
 * Definition remise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDefinitionRemiseTrait {

    /**
     * Definition remise.
     *
     * @var bool
     */
    private $definitionRemise;

    /**
     * Get the definition remise.
     *
     * @return bool Returns the definition remise.
     */
    public function getDefinitionRemise() {
        return $this->definitionRemise;
    }

    /**
     * Set the definition remise.
     *
     * @param bool $definitionRemise The definition remise.
     */
    public function setDefinitionRemise($definitionRemise) {
        $this->definitionRemise = $definitionRemise;
        return $this;
    }
}
