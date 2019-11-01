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
 * No lot cvae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotCvaeTrait {

    /**
     * No lot cvae.
     *
     * @var int
     */
    private $noLotCvae;

    /**
     * Get the no lot cvae.
     *
     * @return int Returns the no lot cvae.
     */
    public function getNoLotCvae() {
        return $this->noLotCvae;
    }

    /**
     * Set the no lot cvae.
     *
     * @param int $noLotCvae The no lot cvae.
     */
    public function setNoLotCvae($noLotCvae) {
        $this->noLotCvae = $noLotCvae;
        return $this;
    }
}
