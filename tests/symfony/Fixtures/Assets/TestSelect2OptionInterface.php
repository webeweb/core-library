<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets;

use WBW\Library\Core\Model\AbstractNode;
use WBW\Library\Symfony\Assets\Select2OptionInterface;
use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Test Select2 option interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets
 */
class TestSelect2OptionInterface extends AbstractNode implements Select2OptionInterface {

    use StringNameTrait;

    /**
     * Constructor.
     *
     * @param string|null $id The id.
     * @param string|null $name The name.
     */
    public function __construct(?string $id, ?string $name) {
        parent::__construct($id);

        $this->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect2OptionId(): ?string {
        return $this->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect2OptionText(): ?string {
        return $this->getName();
    }
}
