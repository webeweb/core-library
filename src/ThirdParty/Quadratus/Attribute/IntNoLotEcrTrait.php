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
 * No lot ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotEcrTrait {

    /**
     * No lot ecr.
     *
     * @var int
     */
    private $noLotEcr;

    /**
     * Get the no lot ecr.
     *
     * @return int Returns the no lot ecr.
     */
    public function getNoLotEcr() {
        return $this->noLotEcr;
    }

    /**
     * Set the no lot ecr.
     *
     * @param int $noLotEcr The no lot ecr.
     */
    public function setNoLotEcr($noLotEcr) {
        $this->noLotEcr = $noLotEcr;
        return $this;
    }
}
