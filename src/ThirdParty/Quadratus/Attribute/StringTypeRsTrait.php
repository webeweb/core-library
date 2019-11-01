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
 * Type rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRsTrait {

    /**
     * Type rs.
     *
     * @var string
     */
    private $typeRs;

    /**
     * Get the type rs.
     *
     * @return string Returns the type rs.
     */
    public function getTypeRs() {
        return $this->typeRs;
    }

    /**
     * Set the type rs.
     *
     * @param string $typeRs The type rs.
     */
    public function setTypeRs($typeRs) {
        $this->typeRs = $typeRs;
        return $this;
    }
}
