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
 * Tvatlra bic2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraBic2Trait {

    /**
     * Tvatlra bic2.
     *
     * @var string
     */
    private $tvatlraBic2;

    /**
     * Get the tvatlra bic2.
     *
     * @return string Returns the tvatlra bic2.
     */
    public function getTvatlraBic2() {
        return $this->tvatlraBic2;
    }

    /**
     * Set the tvatlra bic2.
     *
     * @param string $tvatlraBic2 The tvatlra bic2.
     */
    public function setTvatlraBic2($tvatlraBic2) {
        $this->tvatlraBic2 = $tvatlraBic2;
        return $this;
    }
}
