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
 * Trs est un affrete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsEstUnAffreteTrait {

    /**
     * Trs est un affrete.
     *
     * @var string
     */
    private $trsEstUnAffrete;

    /**
     * Get the trs est un affrete.
     *
     * @return string Returns the trs est un affrete.
     */
    public function getTrsEstUnAffrete() {
        return $this->trsEstUnAffrete;
    }

    /**
     * Set the trs est un affrete.
     *
     * @param string $trsEstUnAffrete The trs est un affrete.
     */
    public function setTrsEstUnAffrete($trsEstUnAffrete) {
        $this->trsEstUnAffrete = $trsEstUnAffrete;
        return $this;
    }
}
