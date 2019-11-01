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
 * Correspondance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCorrespondanceTrait {

    /**
     * Correspondance.
     *
     * @var string
     */
    private $correspondance;

    /**
     * Get the correspondance.
     *
     * @return string Returns the correspondance.
     */
    public function getCorrespondance() {
        return $this->correspondance;
    }

    /**
     * Set the correspondance.
     *
     * @param string $correspondance The correspondance.
     */
    public function setCorrespondance($correspondance) {
        $this->correspondance = $correspondance;
        return $this;
    }
}
