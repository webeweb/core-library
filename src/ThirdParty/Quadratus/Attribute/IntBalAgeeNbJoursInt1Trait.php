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
 * Bal agee nb jours int1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBalAgeeNbJoursInt1Trait {

    /**
     * Bal agee nb jours int1.
     *
     * @var int
     */
    private $balAgeeNbJoursInt1;

    /**
     * Get the bal agee nb jours int1.
     *
     * @return int Returns the bal agee nb jours int1.
     */
    public function getBalAgeeNbJoursInt1() {
        return $this->balAgeeNbJoursInt1;
    }

    /**
     * Set the bal agee nb jours int1.
     *
     * @param int $balAgeeNbJoursInt1 The bal agee nb jours int1.
     */
    public function setBalAgeeNbJoursInt1($balAgeeNbJoursInt1) {
        $this->balAgeeNbJoursInt1 = $balAgeeNbJoursInt1;
        return $this;
    }
}
