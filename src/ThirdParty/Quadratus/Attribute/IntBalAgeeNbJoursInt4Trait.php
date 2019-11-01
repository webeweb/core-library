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
 * Bal agee nb jours int4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBalAgeeNbJoursInt4Trait {

    /**
     * Bal agee nb jours int4.
     *
     * @var int
     */
    private $balAgeeNbJoursInt4;

    /**
     * Get the bal agee nb jours int4.
     *
     * @return int Returns the bal agee nb jours int4.
     */
    public function getBalAgeeNbJoursInt4() {
        return $this->balAgeeNbJoursInt4;
    }

    /**
     * Set the bal agee nb jours int4.
     *
     * @param int $balAgeeNbJoursInt4 The bal agee nb jours int4.
     */
    public function setBalAgeeNbJoursInt4($balAgeeNbJoursInt4) {
        $this->balAgeeNbJoursInt4 = $balAgeeNbJoursInt4;
        return $this;
    }
}
