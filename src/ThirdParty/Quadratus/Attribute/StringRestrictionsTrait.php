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
 * Restrictions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrictionsTrait {

    /**
     * Restrictions.
     *
     * @var string
     */
    private $restrictions;

    /**
     * Get the restrictions.
     *
     * @return string Returns the restrictions.
     */
    public function getRestrictions() {
        return $this->restrictions;
    }

    /**
     * Set the restrictions.
     *
     * @param string $restrictions The restrictions.
     */
    public function setRestrictions($restrictions) {
        $this->restrictions = $restrictions;
        return $this;
    }
}
