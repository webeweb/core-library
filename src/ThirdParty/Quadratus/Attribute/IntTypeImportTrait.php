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
 * Type import trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeImportTrait {

    /**
     * Type import.
     *
     * @var int
     */
    private $typeImport;

    /**
     * Get the type import.
     *
     * @return int Returns the type import.
     */
    public function getTypeImport() {
        return $this->typeImport;
    }

    /**
     * Set the type import.
     *
     * @param int $typeImport The type import.
     */
    public function setTypeImport($typeImport) {
        $this->typeImport = $typeImport;
        return $this;
    }
}
