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
 * No ligne ori trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLigneOriTrait {

    /**
     * No ligne ori.
     *
     * @var int
     */
    private $noLigneOri;

    /**
     * Get the no ligne ori.
     *
     * @return int Returns the no ligne ori.
     */
    public function getNoLigneOri() {
        return $this->noLigneOri;
    }

    /**
     * Set the no ligne ori.
     *
     * @param int $noLigneOri The no ligne ori.
     */
    public function setNoLigneOri($noLigneOri) {
        $this->noLigneOri = $noLigneOri;
        return $this;
    }
}
