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
 * Tvatlra iban1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraIban1Trait {

    /**
     * Tvatlra iban1.
     *
     * @var string
     */
    private $tvatlraIban1;

    /**
     * Get the tvatlra iban1.
     *
     * @return string Returns the tvatlra iban1.
     */
    public function getTvatlraIban1() {
        return $this->tvatlraIban1;
    }

    /**
     * Set the tvatlra iban1.
     *
     * @param string $tvatlraIban1 The tvatlra iban1.
     */
    public function setTvatlraIban1($tvatlraIban1) {
        $this->tvatlraIban1 = $tvatlraIban1;
        return $this;
    }
}
