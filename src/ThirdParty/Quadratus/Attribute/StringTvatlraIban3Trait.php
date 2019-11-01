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
 * Tvatlra iban3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraIban3Trait {

    /**
     * Tvatlra iban3.
     *
     * @var string
     */
    private $tvatlraIban3;

    /**
     * Get the tvatlra iban3.
     *
     * @return string Returns the tvatlra iban3.
     */
    public function getTvatlraIban3() {
        return $this->tvatlraIban3;
    }

    /**
     * Set the tvatlra iban3.
     *
     * @param string $tvatlraIban3 The tvatlra iban3.
     */
    public function setTvatlraIban3($tvatlraIban3) {
        $this->tvatlraIban3 = $tvatlraIban3;
        return $this;
    }
}
