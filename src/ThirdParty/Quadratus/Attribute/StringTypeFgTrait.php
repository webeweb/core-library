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
 * Type fg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFgTrait {

    /**
     * Type fg.
     *
     * @var string
     */
    private $typeFg;

    /**
     * Get the type fg.
     *
     * @return string Returns the type fg.
     */
    public function getTypeFg() {
        return $this->typeFg;
    }

    /**
     * Set the type fg.
     *
     * @param string $typeFg The type fg.
     */
    public function setTypeFg($typeFg) {
        $this->typeFg = $typeFg;
        return $this;
    }
}
