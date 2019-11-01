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
 * No lot cpt recip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotCptRecipTrait {

    /**
     * No lot cpt recip.
     *
     * @var int
     */
    private $noLotCptRecip;

    /**
     * Get the no lot cpt recip.
     *
     * @return int Returns the no lot cpt recip.
     */
    public function getNoLotCptRecip() {
        return $this->noLotCptRecip;
    }

    /**
     * Set the no lot cpt recip.
     *
     * @param int $noLotCptRecip The no lot cpt recip.
     */
    public function setNoLotCptRecip($noLotCptRecip) {
        $this->noLotCptRecip = $noLotCptRecip;
        return $this;
    }
}
