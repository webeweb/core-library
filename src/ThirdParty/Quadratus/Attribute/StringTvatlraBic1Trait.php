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
 * Tvatlra bic1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraBic1Trait {

    /**
     * Tvatlra bic1.
     *
     * @var string
     */
    private $tvatlraBic1;

    /**
     * Get the tvatlra bic1.
     *
     * @return string Returns the tvatlra bic1.
     */
    public function getTvatlraBic1() {
        return $this->tvatlraBic1;
    }

    /**
     * Set the tvatlra bic1.
     *
     * @param string $tvatlraBic1 The tvatlra bic1.
     */
    public function setTvatlraBic1($tvatlraBic1) {
        $this->tvatlraBic1 = $tvatlraBic1;
        return $this;
    }
}
