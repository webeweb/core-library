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
 * Date limite resiliation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLimiteResiliationTrait {

    /**
     * Date limite resiliation.
     *
     * @var DateTime|null
     */
    private $dateLimiteResiliation;

    /**
     * Get the date limite resiliation.
     *
     * @return DateTime|null Returns the date limite resiliation.
     */
    public function getDateLimiteResiliation() {
        return $this->dateLimiteResiliation;
    }

    /**
     * Set the date limite resiliation.
     *
     * @param DateTime|null $dateLimiteResiliation The date limite resiliation.
     */
    public function setDateLimiteResiliation(DateTime $dateLimiteResiliation = null) {
        $this->dateLimiteResiliation = $dateLimiteResiliation;
        return $this;
    }
}
