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
 * Organisme cacm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganismeCacmTrait {

    /**
     * Organisme cacm.
     *
     * @var string
     */
    private $organismeCacm;

    /**
     * Get the organisme cacm.
     *
     * @return string Returns the organisme cacm.
     */
    public function getOrganismeCacm() {
        return $this->organismeCacm;
    }

    /**
     * Set the organisme cacm.
     *
     * @param string $organismeCacm The organisme cacm.
     */
    public function setOrganismeCacm($organismeCacm) {
        $this->organismeCacm = $organismeCacm;
        return $this;
    }
}
