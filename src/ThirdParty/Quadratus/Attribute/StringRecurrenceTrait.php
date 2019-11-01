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
 * Recurrence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRecurrenceTrait {

    /**
     * Recurrence.
     *
     * @var string
     */
    private $recurrence;

    /**
     * Get the recurrence.
     *
     * @return string Returns the recurrence.
     */
    public function getRecurrence() {
        return $this->recurrence;
    }

    /**
     * Set the recurrence.
     *
     * @param string $recurrence The recurrence.
     */
    public function setRecurrence($recurrence) {
        $this->recurrence = $recurrence;
        return $this;
    }
}
