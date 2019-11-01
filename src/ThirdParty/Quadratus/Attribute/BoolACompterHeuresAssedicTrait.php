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
 * A compter heures assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolACompterHeuresAssedicTrait {

    /**
     * A compter heures assedic.
     *
     * @var bool
     */
    private $aCompterHeuresAssedic;

    /**
     * Get the a compter heures assedic.
     *
     * @return bool Returns the a compter heures assedic.
     */
    public function getACompterHeuresAssedic() {
        return $this->aCompterHeuresAssedic;
    }

    /**
     * Set the a compter heures assedic.
     *
     * @param bool $aCompterHeuresAssedic The a compter heures assedic.
     */
    public function setACompterHeuresAssedic($aCompterHeuresAssedic) {
        $this->aCompterHeuresAssedic = $aCompterHeuresAssedic;
        return $this;
    }
}
