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
 * Bal agee nb jours int3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBalAgeeNbJoursInt3Trait {

    /**
     * Bal agee nb jours int3.
     *
     * @var int
     */
    private $balAgeeNbJoursInt3;

    /**
     * Get the bal agee nb jours int3.
     *
     * @return int Returns the bal agee nb jours int3.
     */
    public function getBalAgeeNbJoursInt3() {
        return $this->balAgeeNbJoursInt3;
    }

    /**
     * Set the bal agee nb jours int3.
     *
     * @param int $balAgeeNbJoursInt3 The bal agee nb jours int3.
     */
    public function setBalAgeeNbJoursInt3($balAgeeNbJoursInt3) {
        $this->balAgeeNbJoursInt3 = $balAgeeNbJoursInt3;
        return $this;
    }
}
