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
 * Type visu appels trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVisuAppelsTrait {

    /**
     * Type visu appels.
     *
     * @var string
     */
    private $typeVisuAppels;

    /**
     * Get the type visu appels.
     *
     * @return string Returns the type visu appels.
     */
    public function getTypeVisuAppels() {
        return $this->typeVisuAppels;
    }

    /**
     * Set the type visu appels.
     *
     * @param string $typeVisuAppels The type visu appels.
     */
    public function setTypeVisuAppels($typeVisuAppels) {
        $this->typeVisuAppels = $typeVisuAppels;
        return $this;
    }
}
