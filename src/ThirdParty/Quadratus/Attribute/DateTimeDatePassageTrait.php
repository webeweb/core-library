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
 * Date passage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePassageTrait {

    /**
     * Date passage.
     *
     * @var DateTime|null
     */
    private $datePassage;

    /**
     * Get the date passage.
     *
     * @return DateTime|null Returns the date passage.
     */
    public function getDatePassage() {
        return $this->datePassage;
    }

    /**
     * Set the date passage.
     *
     * @param DateTime|null $datePassage The date passage.
     */
    public function setDatePassage(DateTime $datePassage = null) {
        $this->datePassage = $datePassage;
        return $this;
    }
}
