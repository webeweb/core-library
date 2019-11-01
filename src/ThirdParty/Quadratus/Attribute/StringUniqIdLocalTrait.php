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
 * Uniq id local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdLocalTrait {

    /**
     * Uniq id local.
     *
     * @var string
     */
    private $uniqIdLocal;

    /**
     * Get the uniq id local.
     *
     * @return string Returns the uniq id local.
     */
    public function getUniqIdLocal() {
        return $this->uniqIdLocal;
    }

    /**
     * Set the uniq id local.
     *
     * @param string $uniqIdLocal The uniq id local.
     */
    public function setUniqIdLocal($uniqIdLocal) {
        $this->uniqIdLocal = $uniqIdLocal;
        return $this;
    }
}
