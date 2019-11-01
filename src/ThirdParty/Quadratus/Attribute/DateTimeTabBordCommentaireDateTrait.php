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
 * Tab bord commentaire date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTabBordCommentaireDateTrait {

    /**
     * Tab bord commentaire date.
     *
     * @var DateTime|null
     */
    private $tabBordCommentaireDate;

    /**
     * Get the tab bord commentaire date.
     *
     * @return DateTime|null Returns the tab bord commentaire date.
     */
    public function getTabBordCommentaireDate() {
        return $this->tabBordCommentaireDate;
    }

    /**
     * Set the tab bord commentaire date.
     *
     * @param DateTime|null $tabBordCommentaireDate The tab bord commentaire date.
     */
    public function setTabBordCommentaireDate(DateTime $tabBordCommentaireDate = null) {
        $this->tabBordCommentaireDate = $tabBordCommentaireDate;
        return $this;
    }
}
