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
 * Fact complement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactComplementTrait {

    /**
     * Fact complement.
     *
     * @var string
     */
    private $factComplement;

    /**
     * Get the fact complement.
     *
     * @return string Returns the fact complement.
     */
    public function getFactComplement() {
        return $this->factComplement;
    }

    /**
     * Set the fact complement.
     *
     * @param string $factComplement The fact complement.
     */
    public function setFactComplement($factComplement) {
        $this->factComplement = $factComplement;
        return $this;
    }
}
