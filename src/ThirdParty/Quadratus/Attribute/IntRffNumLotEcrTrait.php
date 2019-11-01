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
 * Rff num lot ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRffNumLotEcrTrait {

    /**
     * Rff num lot ecr.
     *
     * @var int
     */
    private $rffNumLotEcr;

    /**
     * Get the rff num lot ecr.
     *
     * @return int Returns the rff num lot ecr.
     */
    public function getRffNumLotEcr() {
        return $this->rffNumLotEcr;
    }

    /**
     * Set the rff num lot ecr.
     *
     * @param int $rffNumLotEcr The rff num lot ecr.
     */
    public function setRffNumLotEcr($rffNumLotEcr) {
        $this->rffNumLotEcr = $rffNumLotEcr;
        return $this;
    }
}
