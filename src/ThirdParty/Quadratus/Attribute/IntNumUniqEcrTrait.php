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
 * Num uniq ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumUniqEcrTrait {

    /**
     * Num uniq ecr.
     *
     * @var int
     */
    private $numUniqEcr;

    /**
     * Get the num uniq ecr.
     *
     * @return int Returns the num uniq ecr.
     */
    public function getNumUniqEcr() {
        return $this->numUniqEcr;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int $numUniqEcr The num uniq ecr.
     */
    public function setNumUniqEcr($numUniqEcr) {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }
}
