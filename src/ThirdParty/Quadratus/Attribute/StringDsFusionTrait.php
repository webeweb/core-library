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
 * Ds fusion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDsFusionTrait {

    /**
     * Ds fusion.
     *
     * @var string
     */
    private $dsFusion;

    /**
     * Get the ds fusion.
     *
     * @return string Returns the ds fusion.
     */
    public function getDsFusion() {
        return $this->dsFusion;
    }

    /**
     * Set the ds fusion.
     *
     * @param string $dsFusion The ds fusion.
     */
    public function setDsFusion($dsFusion) {
        $this->dsFusion = $dsFusion;
        return $this;
    }
}
