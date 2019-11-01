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
 * Date fin rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinRemplTrait {

    /**
     * Date fin rempl.
     *
     * @var DateTime|null
     */
    private $dateFinRempl;

    /**
     * Get the date fin rempl.
     *
     * @return DateTime|null Returns the date fin rempl.
     */
    public function getDateFinRempl() {
        return $this->dateFinRempl;
    }

    /**
     * Set the date fin rempl.
     *
     * @param DateTime|null $dateFinRempl The date fin rempl.
     */
    public function setDateFinRempl(DateTime $dateFinRempl = null) {
        $this->dateFinRempl = $dateFinRempl;
        return $this;
    }
}
