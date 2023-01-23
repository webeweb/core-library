<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Traits\Integers\IntegerCountTrait;

/**
 * Repository report.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryReport implements RepositoryReportInterface {

    use IntegerCountTrait;

    /**
     * Details.
     *
     * @var RepositoryDetailInterface[]
     */
    protected $details;

    /**
     * Entity.
     *
     * @var string|null
     */
    protected $entity;

    /**
     * Table.
     *
     * @var string|null
     */
    protected $table;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDetails([]);
    }

    /**
     * Add a detail.
     *
     * @param RepositoryDetailInterface $detail The detail.
     * @return RepositoryReportInterface Returns this repository report.
     */
    public function addDetail(RepositoryDetailInterface $detail): RepositoryReportInterface {
        $this->details[] = $detail;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDetails(): array {
        return $this->details;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity(): ?string {
        return $this->entity;
    }

    /**
     * {@inheritdoc}
     */
    public function getTable(): ?string {
        return $this->table;
    }

    /**
     * Set the details.
     *
     * @param RepositoryDetailInterface[] $details The details.
     * @return RepositoryReportInterface Returns this repository report.
     */
    protected function setDetails(array $details): RepositoryReportInterface {
        $this->details = $details;
        return $this;
    }

    /**
     * Set the entity.
     *
     * @param string|null $entity The entity.
     * @return RepositoryReport Returns this repository report.
     */
    public function setEntity(?string $entity): RepositoryReport {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Set the table.
     *
     * @param string|null $table The table.
     * @return RepositoryReport Returns this repository report.
     */
    public function setTable(?string $table): RepositoryReport {
        $this->table = $table;
        return $this;
    }
}
