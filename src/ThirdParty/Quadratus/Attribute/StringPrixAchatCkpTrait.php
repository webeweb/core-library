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
 * Prix achat ckp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrixAchatCkpTrait {

    /**
     * Prix achat ckp.
     *
     * @var string
     */
    private $prixAchatCkp;

    /**
     * Get the prix achat ckp.
     *
     * @return string Returns the prix achat ckp.
     */
    public function getPrixAchatCkp() {
        return $this->prixAchatCkp;
    }

    /**
     * Set the prix achat ckp.
     *
     * @param string $prixAchatCkp The prix achat ckp.
     */
    public function setPrixAchatCkp($prixAchatCkp) {
        $this->prixAchatCkp = $prixAchatCkp;
        return $this;
    }
}
