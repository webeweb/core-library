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
 * Tva e4 dr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4DrTrait {

    /**
     * Tva e4 dr.
     *
     * @var string
     */
    private $tvaE4Dr;

    /**
     * Get the tva e4 dr.
     *
     * @return string Returns the tva e4 dr.
     */
    public function getTvaE4Dr() {
        return $this->tvaE4Dr;
    }

    /**
     * Set the tva e4 dr.
     *
     * @param string $tvaE4Dr The tva e4 dr.
     */
    public function setTvaE4Dr($tvaE4Dr) {
        $this->tvaE4Dr = $tvaE4Dr;
        return $this;
    }
}
