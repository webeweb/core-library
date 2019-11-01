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
 * Unite rdv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteRdvTrait {

    /**
     * Unite rdv.
     *
     * @var string
     */
    private $uniteRdv;

    /**
     * Get the unite rdv.
     *
     * @return string Returns the unite rdv.
     */
    public function getUniteRdv() {
        return $this->uniteRdv;
    }

    /**
     * Set the unite rdv.
     *
     * @param string $uniteRdv The unite rdv.
     */
    public function setUniteRdv($uniteRdv) {
        $this->uniteRdv = $uniteRdv;
        return $this;
    }
}
