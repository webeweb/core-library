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
 * Type collectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeCollectifTrait {

    /**
     * Type collectif.
     *
     * @var bool
     */
    private $typeCollectif;

    /**
     * Get the type collectif.
     *
     * @return bool Returns the type collectif.
     */
    public function getTypeCollectif() {
        return $this->typeCollectif;
    }

    /**
     * Set the type collectif.
     *
     * @param bool $typeCollectif The type collectif.
     */
    public function setTypeCollectif($typeCollectif) {
        $this->typeCollectif = $typeCollectif;
        return $this;
    }
}
