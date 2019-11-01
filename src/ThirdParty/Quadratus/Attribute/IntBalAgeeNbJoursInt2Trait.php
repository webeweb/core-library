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
 * Bal agee nb jours int2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBalAgeeNbJoursInt2Trait {

    /**
     * Bal agee nb jours int2.
     *
     * @var int
     */
    private $balAgeeNbJoursInt2;

    /**
     * Get the bal agee nb jours int2.
     *
     * @return int Returns the bal agee nb jours int2.
     */
    public function getBalAgeeNbJoursInt2() {
        return $this->balAgeeNbJoursInt2;
    }

    /**
     * Set the bal agee nb jours int2.
     *
     * @param int $balAgeeNbJoursInt2 The bal agee nb jours int2.
     */
    public function setBalAgeeNbJoursInt2($balAgeeNbJoursInt2) {
        $this->balAgeeNbJoursInt2 = $balAgeeNbJoursInt2;
        return $this;
    }
}
