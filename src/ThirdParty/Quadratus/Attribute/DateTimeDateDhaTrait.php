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
 * Date dha trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDhaTrait {

    /**
     * Date dha.
     *
     * @var DateTime|null
     */
    private $dateDha;

    /**
     * Get the date dha.
     *
     * @return DateTime|null Returns the date dha.
     */
    public function getDateDha() {
        return $this->dateDha;
    }

    /**
     * Set the date dha.
     *
     * @param DateTime|null $dateDha The date dha.
     */
    public function setDateDha(DateTime $dateDha = null) {
        $this->dateDha = $dateDha;
        return $this;
    }
}
