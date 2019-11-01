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
 * Type ce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCeTrait {

    /**
     * Type ce.
     *
     * @var string
     */
    private $typeCe;

    /**
     * Get the type ce.
     *
     * @return string Returns the type ce.
     */
    public function getTypeCe() {
        return $this->typeCe;
    }

    /**
     * Set the type ce.
     *
     * @param string $typeCe The type ce.
     */
    public function setTypeCe($typeCe) {
        $this->typeCe = $typeCe;
        return $this;
    }
}
