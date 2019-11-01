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
 * Type es trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEsTrait {

    /**
     * Type es.
     *
     * @var string
     */
    private $typeEs;

    /**
     * Get the type es.
     *
     * @return string Returns the type es.
     */
    public function getTypeEs() {
        return $this->typeEs;
    }

    /**
     * Set the type es.
     *
     * @param string $typeEs The type es.
     */
    public function setTypeEs($typeEs) {
        $this->typeEs = $typeEs;
        return $this;
    }
}
