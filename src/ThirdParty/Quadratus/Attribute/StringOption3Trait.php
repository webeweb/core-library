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
 * Option3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOption3Trait {

    /**
     * Option3.
     *
     * @var string
     */
    private $option3;

    /**
     * Get the option3.
     *
     * @return string Returns the option3.
     */
    public function getOption3() {
        return $this->option3;
    }

    /**
     * Set the option3.
     *
     * @param string $option3 The option3.
     */
    public function setOption3($option3) {
        $this->option3 = $option3;
        return $this;
    }
}
