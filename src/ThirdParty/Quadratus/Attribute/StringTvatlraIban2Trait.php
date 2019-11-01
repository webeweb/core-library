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
 * Tvatlra iban2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraIban2Trait {

    /**
     * Tvatlra iban2.
     *
     * @var string
     */
    private $tvatlraIban2;

    /**
     * Get the tvatlra iban2.
     *
     * @return string Returns the tvatlra iban2.
     */
    public function getTvatlraIban2() {
        return $this->tvatlraIban2;
    }

    /**
     * Set the tvatlra iban2.
     *
     * @param string $tvatlraIban2 The tvatlra iban2.
     */
    public function setTvatlraIban2($tvatlraIban2) {
        $this->tvatlraIban2 = $tvatlraIban2;
        return $this;
    }
}
