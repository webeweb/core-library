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
 * Date dernier passage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDernierPassageTrait {

    /**
     * Date dernier passage.
     *
     * @var DateTime|null
     */
    private $dateDernierPassage;

    /**
     * Get the date dernier passage.
     *
     * @return DateTime|null Returns the date dernier passage.
     */
    public function getDateDernierPassage() {
        return $this->dateDernierPassage;
    }

    /**
     * Set the date dernier passage.
     *
     * @param DateTime|null $dateDernierPassage The date dernier passage.
     */
    public function setDateDernierPassage(DateTime $dateDernierPassage = null) {
        $this->dateDernierPassage = $dateDernierPassage;
        return $this;
    }
}
