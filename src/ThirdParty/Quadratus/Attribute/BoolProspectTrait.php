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
 * Prospect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProspectTrait {

    /**
     * Prospect.
     *
     * @var bool
     */
    private $prospect;

    /**
     * Get the prospect.
     *
     * @return bool Returns the prospect.
     */
    public function getProspect() {
        return $this->prospect;
    }

    /**
     * Set the prospect.
     *
     * @param bool $prospect The prospect.
     */
    public function setProspect($prospect) {
        $this->prospect = $prospect;
        return $this;
    }
}
