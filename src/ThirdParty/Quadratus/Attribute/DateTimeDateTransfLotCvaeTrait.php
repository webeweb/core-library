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
 * Date transf lot cvae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfLotCvaeTrait {

    /**
     * Date transf lot cvae.
     *
     * @var DateTime|null
     */
    private $dateTransfLotCvae;

    /**
     * Get the date transf lot cvae.
     *
     * @return DateTime|null Returns the date transf lot cvae.
     */
    public function getDateTransfLotCvae() {
        return $this->dateTransfLotCvae;
    }

    /**
     * Set the date transf lot cvae.
     *
     * @param DateTime|null $dateTransfLotCvae The date transf lot cvae.
     */
    public function setDateTransfLotCvae(DateTime $dateTransfLotCvae = null) {
        $this->dateTransfLotCvae = $dateTransfLotCvae;
        return $this;
    }
}
