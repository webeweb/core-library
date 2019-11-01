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
 * Sous rep ref guid trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSousRepRefGuidTrait {

    /**
     * Sous rep ref guid.
     *
     * @var string
     */
    private $sousRepRefGuid;

    /**
     * Get the sous rep ref guid.
     *
     * @return string Returns the sous rep ref guid.
     */
    public function getSousRepRefGuid() {
        return $this->sousRepRefGuid;
    }

    /**
     * Set the sous rep ref guid.
     *
     * @param string $sousRepRefGuid The sous rep ref guid.
     */
    public function setSousRepRefGuid($sousRepRefGuid) {
        $this->sousRepRefGuid = $sousRepRefGuid;
        return $this;
    }
}
