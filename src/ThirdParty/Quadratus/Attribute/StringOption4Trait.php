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
 * Option4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOption4Trait {

    /**
     * Option4.
     *
     * @var string
     */
    private $option4;

    /**
     * Get the option4.
     *
     * @return string Returns the option4.
     */
    public function getOption4() {
        return $this->option4;
    }

    /**
     * Set the option4.
     *
     * @param string $option4 The option4.
     */
    public function setOption4($option4) {
        $this->option4 = $option4;
        return $this;
    }
}
