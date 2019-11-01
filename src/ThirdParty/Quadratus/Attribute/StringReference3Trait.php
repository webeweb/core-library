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
 * Reference3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReference3Trait {

    /**
     * Reference3.
     *
     * @var string
     */
    private $reference3;

    /**
     * Get the reference3.
     *
     * @return string Returns the reference3.
     */
    public function getReference3() {
        return $this->reference3;
    }

    /**
     * Set the reference3.
     *
     * @param string $reference3 The reference3.
     */
    public function setReference3($reference3) {
        $this->reference3 = $reference3;
        return $this;
    }
}
