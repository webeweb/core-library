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
 * Type visu taches trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVisuTachesTrait {

    /**
     * Type visu taches.
     *
     * @var string
     */
    private $typeVisuTaches;

    /**
     * Get the type visu taches.
     *
     * @return string Returns the type visu taches.
     */
    public function getTypeVisuTaches() {
        return $this->typeVisuTaches;
    }

    /**
     * Set the type visu taches.
     *
     * @param string $typeVisuTaches The type visu taches.
     */
    public function setTypeVisuTaches($typeVisuTaches) {
        $this->typeVisuTaches = $typeVisuTaches;
        return $this;
    }
}
