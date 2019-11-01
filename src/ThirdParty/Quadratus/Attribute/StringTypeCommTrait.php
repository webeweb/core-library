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
 * Type comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCommTrait {

    /**
     * Type comm.
     *
     * @var string
     */
    private $typeComm;

    /**
     * Get the type comm.
     *
     * @return string Returns the type comm.
     */
    public function getTypeComm() {
        return $this->typeComm;
    }

    /**
     * Set the type comm.
     *
     * @param string $typeComm The type comm.
     */
    public function setTypeComm($typeComm) {
        $this->typeComm = $typeComm;
        return $this;
    }
}
