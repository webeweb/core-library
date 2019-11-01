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
 * Tvatlra bic3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraBic3Trait {

    /**
     * Tvatlra bic3.
     *
     * @var string
     */
    private $tvatlraBic3;

    /**
     * Get the tvatlra bic3.
     *
     * @return string Returns the tvatlra bic3.
     */
    public function getTvatlraBic3() {
        return $this->tvatlraBic3;
    }

    /**
     * Set the tvatlra bic3.
     *
     * @param string $tvatlraBic3 The tvatlra bic3.
     */
    public function setTvatlraBic3($tvatlraBic3) {
        $this->tvatlraBic3 = $tvatlraBic3;
        return $this;
    }
}
