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

use DateTime;

/**
 * Debut affect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutAffectTrait {

    /**
     * Debut affect.
     *
     * @var DateTime|null
     */
    private $debutAffect;

    /**
     * Get the debut affect.
     *
     * @return DateTime|null Returns the debut affect.
     */
    public function getDebutAffect() {
        return $this->debutAffect;
    }

    /**
     * Set the debut affect.
     *
     * @param DateTime|null $debutAffect The debut affect.
     */
    public function setDebutAffect(DateTime $debutAffect = null) {
        $this->debutAffect = $debutAffect;
        return $this;
    }
}
