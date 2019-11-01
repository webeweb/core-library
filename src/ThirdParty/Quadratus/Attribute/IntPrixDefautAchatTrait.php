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
 * Prix defaut achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixDefautAchatTrait {

    /**
     * Prix defaut achat.
     *
     * @var int
     */
    private $prixDefautAchat;

    /**
     * Get the prix defaut achat.
     *
     * @return int Returns the prix defaut achat.
     */
    public function getPrixDefautAchat() {
        return $this->prixDefautAchat;
    }

    /**
     * Set the prix defaut achat.
     *
     * @param int $prixDefautAchat The prix defaut achat.
     */
    public function setPrixDefautAchat($prixDefautAchat) {
        $this->prixDefautAchat = $prixDefautAchat;
        return $this;
    }
}
