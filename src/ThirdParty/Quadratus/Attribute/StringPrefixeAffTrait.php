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
 * Prefixe aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrefixeAffTrait {

    /**
     * Prefixe aff.
     *
     * @var string
     */
    private $prefixeAff;

    /**
     * Get the prefixe aff.
     *
     * @return string Returns the prefixe aff.
     */
    public function getPrefixeAff() {
        return $this->prefixeAff;
    }

    /**
     * Set the prefixe aff.
     *
     * @param string $prefixeAff The prefixe aff.
     */
    public function setPrefixeAff($prefixeAff) {
        $this->prefixeAff = $prefixeAff;
        return $this;
    }
}
