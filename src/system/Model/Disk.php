<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Model;

use WBW\Library\System\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Disk.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Model
 */
class Disk implements DiskInterface {

    use StringNameTrait;

    /**
     * Available.
     *
     * @var string|null
     */
    protected $available;

    /**
     * File system.
     *
     * @var string|null
     */
    protected $fs;

    /**
     * Mount.
     *
     * @var string|null
     */
    protected $mount;

    /**
     * Percent.
     *
     * @var string|null
     */
    protected $percent;

    /**
     * Used.
     *
     * @var string|null
     */
    protected $used;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailable(): ?string {
        return $this->available;
    }

    /**
     * {@inheritdoc}
     */
    public function getFs(): ?string {
        return $this->fs;
    }

    /**
     * {@inheritdoc}
     */
    public function getMount(): ?string {
        return $this->mount;
    }

    /**
     * {@inheritdoc}
     */
    public function getPercent(): ?string {
        return $this->percent;
    }

    /**
     * {@inheritdoc}
     */
    public function getUsed(): ?string {
        return $this->used;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize() {
        return JsonSerializer::serializeDisk($this);
    }

    /**
     * Set the available.
     *
     * @param string|null $available The available.
     * @return DiskInterface Returns this disk.
     */
    public function setAvailable(?string $available): DiskInterface {
        $this->available = $available;
        return $this;
    }

    /**
     * Set the file system.
     *
     * @param string|null $fs The file system.
     * @return DiskInterface Returns this disk.
     */
    public function setFs(?string $fs): DiskInterface {
        $this->fs = $fs;
        return $this;
    }

    /**
     * Set the mount.
     *
     * @param string|null $mount The mount.
     * @return DiskInterface Returns this disk.
     */
    public function setMount(?string $mount): DiskInterface {
        $this->mount = $mount;
        return $this;
    }

    /**
     * Set the percent.
     *
     * @param string|null $percent The percent.
     * @return DiskInterface Returns this disk.
     */
    public function setPercent(?string $percent): DiskInterface {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Set the used.
     *
     * @param string|null $used The used.
     * @return DiskInterface Returns this disk.
     */
    public function setUsed(?string $used): DiskInterface {
        $this->used = $used;
        return $this;
    }
}
