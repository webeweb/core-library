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
 * Date debut rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutRemplTrait {

    /**
     * Date debut rempl.
     *
     * @var DateTime|null
     */
    private $dateDebutRempl;

    /**
     * Get the date debut rempl.
     *
     * @return DateTime|null Returns the date debut rempl.
     */
    public function getDateDebutRempl() {
        return $this->dateDebutRempl;
    }

    /**
     * Set the date debut rempl.
     *
     * @param DateTime|null $dateDebutRempl The date debut rempl.
     */
    public function setDateDebutRempl(DateTime $dateDebutRempl = null) {
        $this->dateDebutRempl = $dateDebutRempl;
        return $this;
    }
}
