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
 * Prud section trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudSectionTrait {

    /**
     * Prud section.
     *
     * @var string
     */
    private $prudSection;

    /**
     * Get the prud section.
     *
     * @return string Returns the prud section.
     */
    public function getPrudSection() {
        return $this->prudSection;
    }

    /**
     * Set the prud section.
     *
     * @param string $prudSection The prud section.
     */
    public function setPrudSection($prudSection) {
        $this->prudSection = $prudSection;
        return $this;
    }
}
